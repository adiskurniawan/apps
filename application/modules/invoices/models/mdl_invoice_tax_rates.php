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

class Mdl_Invoice_Tax_Rates extends Response_Model {

    public $table       = 'invoice_tax_rates';
    public $primary_key = 'invoice_tax_rates.invoice_tax_rate_id';

    public function default_select()
    {
        $this->db->select('tax_rates.tax_rate_name AS invoice_tax_rate_name');
        $this->db->select('tax_rates.tax_rate_percent AS invoice_tax_rate_percent');
        $this->db->select('invoice_tax_rates.*');
    }

    public function default_join()
    {
        $this->db->join('tax_rates', 'tax_rates.tax_rate_id = invoice_tax_rates.tax_rate_id');
    }

    public function save($invoice_id, $id = NULL, $db_array = NULL)
    {
        parent::save($id, $db_array);

        $this->load->model('invoices/mdl_invoice_amounts');
        $this->mdl_invoice_amounts->calculate($invoice_id);
    }

    public function validation_rules()
    {
        return array(
            'invoice_id'       => array(
                'field' => 'invoice_id',
                'label' => lang('invoice'),
                'rules' => 'required'
            ),
            'tax_rate_id'      => array(
                'field' => 'tax_rate_id',
                'label' => lang('tax_rate'),
                'rules' => 'required'
            ),
            'include_item_tax' => array(
                'field' => 'include_item_tax',
                'label' => lang('tax_rate_placement'),
                'rules' => 'required'
            )
        );
    }

}

?>
