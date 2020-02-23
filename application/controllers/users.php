<?php

Class Users extends CI_Controller 
{
	public function __construct() 
	{
	parent::__construct();

	$this->load->model('login_model');
	$this->load->model('admin/user_model');
	
	}

public function index() 
{
	
	$this->load->view('manage_users');
	
}
public function displayUsers()
 {
 	$draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
	$users=$this->user_model->displayUsers();
 	$data = [];
      foreach($users as $r) {
           $data[] = array(
                $r->uid,
                $r->username,
                $r->mobilenum,
                $r->email,
                $r->u_type,
                '<button type="button" name="update" id="'.$r->uid.'" class="btn btn-warning btn-xs update">Update</button>&nbsp;&nbsp;<button type="button" name="delete" id="'.$r->uid.'" class="btn btn-danger btn-xs delete">Delete</button>'
           );
      }

      $result = array(
               "draw" => $draw,
                 "recordsTotal" => sizeof($users),
                 "recordsFiltered" => sizeof($users),
                 "data" => $data
            );
      echo json_encode($result);
 }
 function user_action(){  
  if($this->input->post("op")  == "Add")  
  {  
       $insert_data = array(  
          'username'          =>     $this->input->post("username"),  
           'fname'          =>     $this->input->post("fname"),
           'mname'      =>     $this->input->post("mname"),            
            'lname'      =>     $this->input->post("lname"), 
            'email'          =>     $this->input->post("email"),  
            'password' =>     $this->input->post("password"),  
           'mobilenum'          =>     $this->input->post("mobilenum"),
           'flate_no'      =>     $this->input->post("flate_no"),            
            'u_type'      =>     $this->input->post("u_type")
             
       );  
       $this->load->model('user_model');  
       $this->user_model->insert_crud($insert_data);  
       echo 'Data Inserted';  
  }  
  if($this->input->post("op") == "Edit")  
  {  
       
        $updated_data = array(  
          //  'username'          =>     $this->input->post("username"),  
            'fname'          =>     $this->input->post("fname"),
            'mname'      =>     $this->input->post("mname"),            
             'lname'      =>     $this->input->post("lname"), 
             'email'          =>     $this->input->post("email"),  
             'password' =>     $this->input->post("password"),  
            'mobilenum'          =>     $this->input->post("mobilenum"),
            'flate_no'      =>     $this->input->post("flate_no"),            
             //'u_type'      =>     $this->input->post("u_type")
           );  
        $this->load->model('user_model');  
        $this->user_model->update_crud($this->input->post("uid"), $updated_data);  
        echo 'Data Updated';   
   }  
   }  
   function fetch_single_user()  
   {  
        $output = array();  
        $this->load->model("user_model");  
        $data = $this->user_model->fetch_single_user($_POST["uid"]);  
        foreach($data as $row)  
        {  
              $output['username'] = $row->username;  
             $output['fname'] = $row->fname;
             $output['mname'] = $row->mname;  
             $output['lname'] = $row->lname; 
             $output['email'] = $row->email;  
             $output['password'] = $row->password;
             $output['mobilenum'] = $row->mobilenum;  
             $output['flate_no'] = $row->flate_no;
             $output['u_type'] = $row->u_type; 
   
             
        }  
              echo json_encode($output);  
    }  
   function delete_single_user()  
   {  
        $this->load->model("user_model");  
        $this->user_model->delete_single_user($_POST["uid"]);  
        echo 'Data Deleted';  
   }  
   
   
}?>