<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sale extends Admin_Controller {


    function index(){
        $this->layout->buffer('main_content', 'distributor/sale');
        $this->layout->render('layout_distributor');
    } 


 }

?>