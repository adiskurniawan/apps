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

class Mdl_Tax_Rates extends Response_Model {

	public $table = 'tax_rates';
	public $primary_key = 'tax_rates.tax_rate_id';
    
    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS *', FALSE);
    }
	
	public function default_order_by()
	{
		$this->db->order_by('tax_rates.tax_rate_percent');
	}

	public function validation_rules()
	{
		return array(
			'tax_rate_name' => array(
				'field' => 'tax_rate_name',
				'label' => lang('tax_rate_name'),
				'rules' => 'required'
			),
			'tax_rate_percent' => array(
				'field' => 'tax_rate_percent',
				'label' => lang('tax_rate_percent'),
				'rules' => 'required'
			)
		);
	}

}

?>