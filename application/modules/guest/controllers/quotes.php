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

class Quotes extends Guest_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('quotes/mdl_quotes');
    }

    public function index()
    {
        // Display open quotes by default
        redirect('guest/quotes/status/open');
    }

    public function status($status = 'open', $page = 0)
    {
        // Determine which group of quotes to load
        switch ($status)
        {
            case 'expired':
                $this->mdl_quotes->is_expired()->where_in('quotes.client_id', $this->user_clients);
                break;
            case 'invoiced':
                $this->mdl_quotes->is_invoiced()->where_in('quotes.client_id', $this->user_clients);
                $this->layout->set('show_invoice_column', TRUE);
                break;
            case 'open':
                $this->mdl_quotes->is_open()->where_in('quotes.client_id', $this->user_clients);
                break;
            default:
                $this->mdl_quotes->where_in('quotes.client_id', $this->user_clients);
                break;
        }

        $this->mdl_quotes->paginate(site_url('guest/quotes/status/' . $status), $page);
        $quotes = $this->mdl_quotes->result();

        $this->layout->set('quotes', $quotes);
        $this->layout->set('status', $status);
        $this->layout->buffer('content', 'guest/quotes_index');
        $this->layout->render('layout_guest');
    }

    public function view($quote_id)
    {
        $this->load->model('quotes/mdl_quote_items');
        $this->load->model('quotes/mdl_quote_tax_rates');

        $quote = $this->mdl_quotes->where('quotes.quote_id', $quote_id)->where_in('quotes.client_id', $this->user_clients)->get()->row();

        if (!$quote)
        {
            show_404();
        }

        $this->layout->set(
            array(
                'quote'           => $quote,
                'items'           => $this->mdl_quote_items->where('quote_id', $quote_id)->get()->result(),
                'quote_tax_rates' => $this->mdl_quote_tax_rates->where('quote_id', $quote_id)->get()->result(),
                'quote_id'        => $quote_id
            )
        );

        $this->layout->buffer('content', 'guest/quotes_view');
        $this->layout->render('layout_guest');
    }

    public function generate_pdf($quote_id, $stream = TRUE, $quote_template = NULL)
    {
        $this->load->model('quotes/mdl_quote_items');
        $this->load->model('quotes/mdl_quote_tax_rates');

        $quote = $this->mdl_quotes->get_by_id($quote_id);

        if (!$quote_template)
        {
            $quote_template = $this->mdl_settings->setting('default_quote_template');
        }

        $data = array(
            'quote'           => $this->mdl_quotes->where('quotes.quote_id', $quote_id)->where_in('quotes.client_id', $this->user_clients)->get()->row(),
            'quote_tax_rates' => $this->mdl_quote_tax_rates->where('quote_id', $quote_id)->get()->result(),
            'items'           => $this->mdl_quote_items->where('quote_id', $quote_id)->get()->result(),
            'output_type'     => 'pdf'
        );

        $html = $this->load->view('quote_templates/' . $quote_template, $data, TRUE);

        $this->load->helper('mpdf');

        return pdf_create($html, lang('quote') . '_' . $quote->quote_number, $stream);
    }

}

?>