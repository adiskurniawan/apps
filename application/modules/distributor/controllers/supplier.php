<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends Admin_Controller {


    function index(){
        $this->layout->buffer('main_content', 'distributor/supplier');
        $this->layout->render('layout_distributor');
    } 


 }

?>