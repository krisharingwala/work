<?php

Class Committee extends CI_Controller 
{
	public function __construct() 
	{
	parent::__construct();

	$this->load->model('login_model');
	$this->load->model('admin/committee_model');
	
	}

public function index() 
{
	
	$this->load->view('committee_view');
	
}
public function displayCommittee()
 {
 	$draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
	$committee=$this->committee_model->displayCommittee();
 	$data = [];
      foreach($committee as $r) {
           $data[] = array(
                $r->u_id,
                $r->committee_role_id,
                $r->start_date,
                $r->end_date,
                $r->status,
                '<button type="button" name="update" id="'.$r->committee_id.'" class="btn btn-warning btn-xs update">Update</button>&nbsp;&nbsp;<button type="button" name="delete" id="'.$r->committee_id.'" class="btn btn-danger btn-xs delete">Delete</button>'
           );
      }

      $result = array(
               "draw" => $draw,
                 "recordsTotal" => sizeof($committee),
                 "recordsFiltered" => sizeof($committee),
                 "data" => $data
            );
      echo json_encode($result);
 }


function committee_action(){  
if($this->input->post("op")  == "Add")  
{  
     $insert_data = array(  
          'u_id'          =>     $this->input->post('uid'),  
          'committee_role_id'      =>     $this->input->post("crid"),  
          'start_date'      		   =>       date('Y-m-y',strtotime($this->input->post("startdate"))) ,  
          'end_date'      		   =>    date('Y-m-y',strtotime($this->input->post("enddate"))) ,    

     );  
     $this->load->model('committee_model');  
     $this->committee_model->insert_crud($insert_data);  
     echo 'Data Inserted';  
}  
if($this->input->post("op") == "Edit")  
{  
     
      $updated_data = array(  
        'u_id'          =>     $this->input->post('uid'),  
        'committee_role_id'      =>     $this->input->post("crid"),  
        'start_date'      		   =>       date('Y-m-y',strtotime($this->input->post("startdate"))) ,  
        'end_date'      		   =>    date('Y-m-y',strtotime($this->input->post("enddate")))   
);  
      $this->load->model('committee_model');  
      $this->committee_model->update_crud($this->input->post("cid"), $updated_data);  
      echo 'Data Updated'; 
        
 }  
 }  
      
function fetch_single_committee()  
{  
     $output = array();  
     $this->load->model("committee_model");  
     $data = $this->committee_model->fetch_single_committee($_POST["cid"]);  
     foreach($data as $row)  
     {  
          $output['u_id'] = $row->u_id;  
          $output['committee_role_id'] = $row->committee_role_id;
          $output['start_date'] = $row->start_date;  
          $output['end_date'] = $row->end_date;  

          
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