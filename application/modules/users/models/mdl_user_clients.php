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

class Mdl_User_Clients extends MY_Model {
    
    public $table = 'user_clients';
    public $primary_key = 'user_clients.user_client_id';
    
    public function default_select()
    {
        $this->db->select('user_clients.*, users.user_name, clients.client_name');
    }
    
    public function default_join()
    {
        $this->db->join('users', 'users.user_id = user_clients.user_id');
        $this->db->join('clients', 'clients.client_id = user_clients.client_id');
    }
    
    public function default_order_by()
    {
        $this->db->order_by('clients.client_name');
    }
    
    public function assigned_to($user_id)
    {
        $this->filter_where('user_clients.user_id', $user_id);
        return $this;
    }
    
}

?>