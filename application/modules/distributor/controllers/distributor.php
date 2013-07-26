<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Distributor extends Admin_Controller {

    function index() {
        redirect('distributor/dashboard');
    }

    function dashboard(){
        $this->layout->buffer('main_content', 'distributor/index');
        $this->layout->render('layout_distributor_dashboard');
    } 


 }

?>