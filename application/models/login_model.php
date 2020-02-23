<?php
/**
 * 
 */
class Login_model extends CI_Model
{
	public function login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$this->db->where('u_type','a');
		$data=$this->db->get('users')->num_rows();
		if($data>0)
		{
			return "success";
		}
		else
		{
			return "error";
		}
	}
	public function loginUser()
	{
		$email=$this->session->userdata('log_user');
		$this->db->where('email',$email);
		return $this->db->get('users')->result_array();
	}
}