<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Form_Validation_Model extends MY_Model {
    
    public function __construct()
    {
       parent::__construct();

        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }
    
}

?>