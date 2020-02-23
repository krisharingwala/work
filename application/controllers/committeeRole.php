<?php

Class CommitteeRole extends CI_Controller 
{
	public function __construct() 
	{
	parent::__construct();

	$this->load->model('login_model');
	$this->load->model('admin/CommitteeRole_model');
	
	}

public function index() 
{
	
	$this->load->view('CommitteeRole_view');
	
}
public function displayCommitteeRole()
 {
 	$draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
	$CommitteeRole=$this->CommitteeRole_model->displayCommitteeRole();
 	$data = [];
      foreach($CommitteeRole as $r) {
           $data[] = array(
                $r->committee_role_id,
                $r->committee_role,
                '<button type="button" name="update" id="'.$r->committee_role_id.'" class="btn btn-warning btn-xs update">Update</button>&nbsp;&nbsp;<button type="button" name="delete" id="'.$r->committee_role_id.'" class="btn btn-danger btn-xs delete">Delete</button>'
           );
      }

      $result = array(
               "draw" => $draw,
                 "recordsTotal" => sizeof($CommitteeRole),
                 "recordsFiltered" => sizeof($CommitteeRole),
                 "data" => $data
            );
      echo json_encode($result);
 }


function committeeRole_action(){  
if($this->input->post("op")  == "Add")  
{  
     $insert_data = array(  
          'committee_role'          =>     $this->input->post('committee_role') 
          
     );  
     $this->load->model('committeeRole_model');  
     $this->committeeRole_model->insert_crud($insert_data);  
     echo 'Data Inserted';  
}  
if($this->input->post("op") == "Edit")  
{  
     
      $updated_data = array(  
          'committee_role'          =>     $this->input->post('committee_role'),  
           );  
      $this->load->model('committeeRole_model');  
      $this->committeeRole_model->update_crud($this->input->post("crid"), $updated_data);  
      echo 'Data Updated'; 
        
 }  
 }  
      
function fetch_single_committeeRole()  
{  
     $output = array();  
     $this->load->model("committeeRole_model");  
     $data = $this->committeeRole_model->fetch_single_committeeRole($_POST["crid"]);  
     foreach($data as $row)  
     {  
          $output['committee_role'] = $row->committee_role;  
          
          
     }  
           echo json_encode($output);  
 }  
function delete_single_meeting()  
{  
     $this->load->model("meeting_model");  
     $this->meeting_model->delete_single_meeting($_POST["mid"]);  
     echo 'Data Deleted';  
}  


}?>