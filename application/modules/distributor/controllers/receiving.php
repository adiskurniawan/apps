<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Receiving extends Admin_Controller {


    function index(){
        $this->layout->buffer('main_content', 'distributor/receiving');
        $this->layout->render('layout_distributor');
    } 


 }

?>