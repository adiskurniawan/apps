<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


class Customer extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_m');
    }

    public function index()
    {
      
      	$clients = $this->customer_m->result();
       	$this->layout->set(
            array(
                'records'            => $clients
            )
        );

        $this->layout->buffer('main_content', 'distributor/customer');
        $this->layout->render('layout_distributor');
    }

    public function status($status = 'active', $page = 0)
    {
        if (is_numeric(array_search($status, array('active', 'inactive'))))
        {
            $function = 'is_' . $status;
            $this->customer_m->$function();
        }

        $this->customer_m->with_total_balance()->paginate(site_url('clients/status/' . $status), $page);
        $clients = $this->customer_m->result();

        $this->layout->set(
            array(
                'records'            => $clients,
                'filter_display'     => TRUE,
                'filter_placeholder' => lang('filter_clients'),
                'filter_method'      => 'filter_clients'
            )
        );

        $this->layout->buffer('content', 'clients/index');
        $this->layout->render();
    }

    public function form($id = NULL)
    {
        if ($this->input->post('btn_cancel'))
        {
            redirect('clients');
        }

        if ($this->customer_m->run_validation())
        {
            $id = $this->customer_m->save($id);

            $this->load->model('custom_fields/mdl_client_custom');

            $this->mdl_client_custom->save_custom($id, $this->input->post('custom'));

            redirect('clients/view/' . $id);
        }

        if ($id and !$this->input->post('btn_submit'))
        {
            if (!$this->customer_m->prep_form($id))
            {
                show_404();
            }

            $this->load->model('custom_fields/mdl_client_custom');

            $client_custom = $this->mdl_client_custom->where('client_id', $id)->get();

            if ($client_custom->num_rows())
            {
                $client_custom = $client_custom->row();

                unset($client_custom->client_id, $client_custom->client_custom_id);

                foreach ($client_custom as $key => $val)
                {
                    $this->customer_m->set_form_value('custom[' . $key . ']', $val);
                }
            }
        }
        elseif ($this->input->post('btn_submit'))
        {
            if ($this->input->post('custom'))
            {
                foreach ($this->input->post('custom') as $key => $val)
                {
                    $this->customer_m->set_form_value('custom[' . $key . ']', $val);
                }
            }
        }

        $this->load->model('custom_fields/mdl_custom_fields');

        $this->layout->set('custom_fields', $this->mdl_custom_fields->by_table('client_custom')->get()->result());
        $this->layout->buffer('content', 'clients/form');
        $this->layout->render();
    }

    public function view($client_id)
    {
        $this->load->model('clients/mdl_client_notes');
        $this->load->model('invoices/mdl_invoices');
        $this->load->model('quotes/mdl_quotes');
        $this->load->model('custom_fields/mdl_custom_fields');

        $client = $this->customer_m->with_total()->with_total_balance()->with_total_paid()->where('clients.client_id', $client_id)->get()->row();

        if (!$client)
        {
            show_404();
        }

        $this->layout->set(
            array(
                'client'        => $client,
                'client_notes'  => $this->mdl_client_notes->where('client_id', $client_id)->get()->result(),
                'invoices'      => $this->mdl_invoices->by_client($client_id)->limit(10)->get()->result(),
                'quotes'        => $this->mdl_quotes->is_open()->by_client($client_id)->limit(10)->get()->result(),
                'custom_fields' => $this->mdl_custom_fields->by_table('client_custom')->get()->result()
            )
        );

        $this->layout->buffer(
            array(
                array('invoice_table', 'invoices/partial_invoice_table'),
                array('quote_table', 'quotes/partial_quote_table'),
                array('partial_notes', 'clients/partial_notes'),
                array('content', 'clients/view')
            )
        );

        $this->layout->render();
    }

    public function delete($client_id)
    {
        $this->customer_m->delete($client_id);
        redirect('clients');
    }

}

?>