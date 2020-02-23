<?php

Class Admin extends CI_Controller 
{
	public function __construct() {
	parent::__construct();

	$this->load->model('login_model');
	
	}

// Show login page
public function index() 
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('admin',$data);
	
}
public function flates()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('manage_flates',$data);
}

public function meetings()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('manage_meetings',$data);
	
}

public function users()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('manage_users',$data);
	
}
public function amenities()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('amenities_view',$data);
	
}
public function amenitiesBook()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('amenitiesBook_view',$data);
	
}
public function notice()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('notice_view',$data);
	
}
public function committeeRole()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('committeeRole_view',$data);
	
}
public function committee()
{
	$data['logininfo']=$this->login_model->loginUser();
	$this->session->set_userdata('login_user',$data['logininfo']['0']['fname']);
	$this->load->view('committee_view',$data);
	
}
}?>