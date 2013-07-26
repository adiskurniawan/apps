<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends Admin_Controller {

	function __construct()
    {
        parent::__construct();
    }
    
    function index() {
        redirect('demo_ace/dashboard');
    }

    
}

?>