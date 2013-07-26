<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends Admin_Controller {


    function index(){
        $this->layout->buffer('main_content', 'distributor/report');
        $this->layout->render('layout_distributor_report');
    } 


 }

?>