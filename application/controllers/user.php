<?php

Class User extends CI_Controller 
{
	public function __construct() {
	parent::__construct();

	// Load form helper library
	$this->load->helper('form');

	// Load form validation library
	$this->load->library('form_validation');

	// Load session library
	$this->load->library('session');
}

// Show login page
public function index() 
{
	$this->load->view('login');
}
public function forgot() 
{
	$this->load->view('forgot');
}



public function loginChk() 
{
	$this->load->model('login_model');
	$password=base64_encode(strrev(md5($_POST['password'])));
	$res=$this->login_model->login($_POST['email'],$password);
	if($res=='success')
	{
		$this->session->set_userdata('log_user',$_POST['email']);
		echo $res;
	}
	else
	{
		echo $res;
	}
		

}

// Logout from admin page
public function logout() 
{
	// Removing session data
	$sess_array = array(
	'username' => ''
	);
	$this->session->unset_userdata('logged_in', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	$this->load->view('login_form', $data);
}

}?>