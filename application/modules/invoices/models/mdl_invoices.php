<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * FusionInvoice
 * 
 * A free and open source web based invoicing system
 *
 * @package		FusionInvoice
 * @author		Jesse Terry
 * @copyright	Copyright (c) 2012 - 2013, Jesse Terry
 * @license		http://www.fusioninvoice.com/support/page/license-agreement
 * @link		http://www.fusioninvoice.com
 * 
 */

class Mdl_Invoices extends Response_Model {

    public $table               = 'invoices';
    public $primary_key         = 'invoices.invoice_id';
    public $date_modified_field = 'invoice_date_modified';

    public function default_select()
    {
        $this->db->select("
            SQL_CALC_FOUND_ROWS invoice_custom.*,
            client_custom.*,
            user_custom.*,
            users.user_name, 
			users.user_company,
			users.user_address_1,
			users.user_address_2,
			users.user_city,
			users.user_state,
			users.user_zip,
			users.user_country,
			users.user_phone,
			users.user_fax,
			users.user_mobile,
			users.user_email,
			users.user_web,
			clients.*,
			invoice_amounts.invoice_amount_id,
			IFNULL(invoice_amounts.invoice_item_subtotal, '0.00') AS invoice_item_subtotal,
			IFNULL(invoice_amounts.invoice_item_tax_total, '0.00') AS invoice_item_tax_total,
			IFNULL(invoice_amounts.invoice_tax_total, '0.00') AS invoice_tax_total,
			IFNULL(invoice_amounts.invoice_total, '0.00') AS invoice_total,
			IFNULL(invoice_amounts.invoice_paid, '0.00') AS invoice_paid,
			IFNULL(invoice_amounts.invoice_balance, '0.00') AS invoice_balance,
			DATEDIFF(NOW(), invoice_date_due) AS days_overdue,
			(CASE 
			WHEN ((invoice_balance > 0 OR invoice_balance IS NULL OR invoice_total = 0) AND invoice_date_due < now()) THEN 'Overdue'
			WHEN ((invoice_balance > 0 OR invoice_balance IS NULL OR invoice_total = 0) AND invoice_date_due >= now()) THEN 'Open'
			WHEN (invoice_balance = 0 and invoice_total > 0) THEN 'Closed'
			ELSE 'Unknown' END) AS invoice_status,
            (CASE (SELECT COUNT(*) FROM invoices_recurring WHERE invoices_recurring.invoice_id = invoices.invoice_id and invoices_recurring.recur_next_date <> '0000-00-00') WHEN 0 THEN 0 ELSE 1 END) AS invoice_is_recurring,
			invoices.*", FALSE);
    }

    public function default_order_by()
    {
        $this->db->order_by('invoices.invoice_date_created DESC');
    }

    public function default_join()
    {
        $this->db->join('clients', 'clients.client_id = invoices.client_id');
        $this->db->join('users', 'users.user_id = invoices.user_id');
        $this->db->join('invoice_amounts', 'invoice_amounts.invoice_id = invoices.invoice_id', 'left');
        $this->db->join('client_custom', 'client_custom.client_id = clients.client_id', 'left');
        $this->db->join('user_custom', 'user_custom.user_id = users.user_id', 'left');
        $this->db->join('invoice_custom', 'invoice_custom.invoice_id = invoices.invoice_id', 'left');
    }

    public function validation_rules()
    {
        return array(
            'client_name'          => array(
                'field' => 'client_name',
                'label' => lang('client'),
                'rules' => 'required'
            ),
            'invoice_date_created' => array(
                'field' => 'invoice_date_created',
                'label' => lang('invoice_date'),
                'rules' => 'required'
            ),
            'invoice_group_id'     => array(
                'field' => 'invoice_group_id',
                'label' => lang('invoice_group'),
                'rules' => 'required'
            ),
            'user_id'              => array(
                'field' => 'user_id',
                'label' => lang('user'),
                'rule'  => 'required'
            )
        );
    }

    public function validation_rules_save_invoice()
    {
        return array(
            'invoice_number'       => array(
                'field' => 'invoice_number',
                'label' => lang('invoice_number'),
                'rules' => 'required|is_unique[invoices.invoice_number' . (($this->id) ? '.invoice_id.' . $this->id : '') . ']'
            ),
            'invoice_date_created' => array(
                'field' => 'invoice_date_created',
                'label' => lang('date'),
                'rules' => 'required'
            ),
            'invoice_date_due'     => array(
                'field' => 'invoice_date_due',
                'label' => lang('due_date'),
                'rules' => 'required'
            )
        );
    }

    public function create($db_array = NULL)
    {
        $invoice_id = parent::save(NULL, $db_array);

        // Create an invoice amount record
        $db_array = array(
            'invoice_id' => $invoice_id
        );

        $this->db->insert('invoice_amounts', $db_array);

        // Create the default invoice tax record if applicable
        if ($this->mdl_settings->setting('default_invoice_tax_rate'))
        {
            $db_array = array(
                'invoice_id'              => $invoice_id,
                'tax_rate_id'             => $this->mdl_settings->setting('default_invoice_tax_rate'),
                'include_item_tax'        => $this->mdl_settings->setting('default_include_item_tax'),
                'invoice_tax_rate_amount' => 0
            );

            $this->db->insert('invoice_tax_rates', $db_array);
        }

        return $invoice_id;
    }

    public function get_url_key()
    {
        $this->load->helper('string');
        return random_string('unique');
    }

    /**
     * Copies invoice items, tax rates, etc from source to target
     * @param int $source_id
     * @param int $target_id
     */
    public function copy_invoice($source_id, $target_id)
    {
        $this->load->model('invoices/mdl_items');
        
        $invoice_items = $this->mdl_items->where('invoice_id', $source_id)->get()->result();

        foreach ($invoice_items as $invoice_item)
        {
            $db_array = array(
                'invoice_id'       => $target_id,
                'item_tax_rate_id' => $invoice_item->item_tax_rate_id,
                'item_name'        => $invoice_item->item_name,
                'item_description' => $invoice_item->item_description,
                'item_quantity'    => $invoice_item->item_quantity,
                'item_price'       => $invoice_item->item_price,
                'item_order'       => $invoice_item->item_order
            );

            $this->mdl_items->save($target_id, NULL, $db_array);
        }

        $invoice_tax_rates = $this->mdl_invoice_tax_rates->where('invoice_id', $source_id)->get()->result();

        foreach ($invoice_tax_rates as $invoice_tax_rate)
        {
            $db_array = array(
                'invoice_id'              => $target_id,
                'tax_rate_id'             => $invoice_tax_rate->tax_rate_id,
                'include_item_tax'        => $invoice_tax_rate->include_item_tax,
                'invoice_tax_rate_amount' => $invoice_tax_rate->invoice_tax_rate_amount
            );

            $this->mdl_invoice_tax_rates->save($target_id, NULL, $db_array);
        }
    }

    public function db_array()
    {
        $db_array = parent::db_array();

        // Get the client id for the submitted invoice
        $this->load->model('clients/mdl_clients');
        $db_array['client_id'] = $this->mdl_clients->client_lookup($db_array['client_name']);
        unset($db_array['client_name']);

        $db_array['invoice_date_created'] = date_to_mysql($db_array['invoice_date_created']);
        $db_array['invoice_date_due']     = $this->get_date_due($db_array['invoice_date_created']);
        $db_array['invoice_number']       = $this->get_invoice_number($db_array['invoice_group_id']);
        $db_array['invoice_terms']        = $this->mdl_settings->setting('default_invoice_terms');

        // Generate the unique url key
        $db_array['invoice_url_key'] = $this->get_url_key();

        return $db_array;
    }

    public function get_invoice_number($invoice_group_id)
    {
        $this->load->model('invoice_groups/mdl_invoice_groups');
        return $this->mdl_invoice_groups->generate_invoice_number($invoice_group_id);
    }

    public function get_date_due($invoice_date_created)
    {
        $invoice_date_due = new DateTime($invoice_date_created);
        $invoice_date_due->add(new DateInterval('P' . $this->mdl_settings->setting('invoices_due_after') . 'D'));
        return $invoice_date_due->format('Y-m-d');
    }

    public function delete($invoice_id)
    {
        parent::delete($invoice_id);

        $this->load->helper('orphan');
        delete_orphans();
    }

    public function is_open()
    {
        // Optional function to retrieve invoices with balance
        $this->filter_having('invoice_status', 'Open');
        return $this;
    }

    public function is_closed()
    {
        // Optional function to retrieve invoices without balance
        $this->filter_having('invoice_status', 'Closed');
        return $this;
    }

    public function is_overdue()
    {
        // Optional function to retrieve overdue invoices
        $this->filter_having('invoice_status', 'Overdue');
        return $this;
    }

    public function by_client($client_id)
    {
        $this->filter_where('invoices.client_id', $client_id);
        return $this;
    }

}

?>