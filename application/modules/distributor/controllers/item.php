<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Item extends Admin_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('item_m');
    }

    function index()
    {
        
        $items	=	$this->item_m->result();
		$this->layout->set(
            array(
                'items'  => $items
            )
        );
        $this->layout->buffer('main_content', 'distributor/item');
        $this->layout->render('layout_distributor');
    } 


 }

?>