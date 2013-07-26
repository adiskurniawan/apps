<?php

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index(){
		$this->load->view("login_loader", array('main_content'=>"login"));
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
	function submit(){
		if ( ! $this->validate_login()){
			//ajax data array
			$data	=	array(
				'is_valid'	=>	0
			);
			echo json_encode($data);
		}else{
			//view data array
			$data	=	array(
						'username'		=>	$_POST['username']
						);
			$content	=	$this->load->view("login_success", $data, TRUE);
			//ajax data array
			$data		=	array(
				'is_valid'	=>	1,
				'content'	=>	$content
			);
			echo json_encode($data);
		}
	}
	
	function validate_login(){
		$this->load->model('mdl_login');
		$result	= $this->mdl_login->validate_login();
		if($result === FALSE){
			return FALSE;
		} else {
			$result['is_logged_in']	=	TRUE;
			$result['user_type']	=	1;
			$this->session->set_userdata($result);

			/* $session_data = array(
			    'user_type' => $user->user_type,
			    'user_id'   => $user->user_id,
			    'user_name' => $user->user_name
			);

			$this->session->set_userdata($session_data);
			*/
			return TRUE;
		}
	}
}
?>