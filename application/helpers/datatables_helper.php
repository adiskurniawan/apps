<?php 
/*	function that generate the action buttons edit, delete
 This is just showing the idea you can use it in different view or whatever fits your needs */

	function get_actions($id, $controller_name) {
	    return '<a><img align="center" style="cursor: pointer;" id="'.$id.'" class="linkdelete" title="Delete record" width="13" height="13" border="0" src="'.base_url().'images/delete1.png"/></a>';
	}

	function get_client_options($client_id, $controller_name) {
	    $create_quote		= "javascript:showmodal_quote('$client_id')";
	    $create_invoice 	= "javascript:showmodal_invoice('$client_id')";
	   	$delete_record 		= "javascript:delconfirm('$client_id')";

	    $html  ='<div class="btn-group">';
		$html .='<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-pencil"></i></a>';
		$html .='<ul class="dropdown-menu pull-right">';
		$html .='<li><a style="font-size:11.5px;" href="'.$create_quote.'"><i class="icon-file"></i>&nbsp;&nbsp;'.lang('create_quote').'</a></li>';	
		$html .='<li><a style="font-size:11.5px;" href="'.$create_invoice.'"><i class="icon-file"></i>&nbsp;&nbsp;'.lang('create_invoice').'</a></li>';	
		$html .='<li><a style="font-size:11.5px;" href="'.$delete_record.'"><i class="icon-trash"></i>&nbsp;&nbsp;'.lang('delete').'</a></li>';	
		$html .='</ul>';
		$html .='</div>';	
	    return $html;
	}
	
	function align_right($number) {
	    $html ='<div align="right">'.$number.'</div>';
	    return $html;
	}

	function to_currency($number) {
		$CI =& get_instance();
		$currency_symbol = $CI->config->item('currency_symbol') ? $CI->config->item('currency_symbol') : '$';
			if($number >= 0) {
				return $currency_symbol.number_format($number, 2, '.', '');
		    } else {
		    	return '-'.$currency_symbol.number_format(abs($number), 2, '.', '');
		    }
	}

	function to_currency_no_money($number) {
		return number_format($number, 2, '.', '');
	}

	function to_tax_percents($id) {
		$CI =& get_instance();
		$item_tax_info = $CI->pos_item_tax_m->get_info($id);
		$tax_percents = '';
		foreach($item_tax_info as $tax_info) {
			$tax_percents .= number_format($tax_info['percent'], 2). '%, ';
		}
		$tax_percents = substr($tax_percents, 0, -2);
		return $tax_percents;
	}

	function get_balance($id) {
		$CI =& get_instance();
		$balance = $CI->inv_client_m->get_balance($id);
		$balance = to_currency($balance);
		return $balance;
	}