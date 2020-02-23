<?php

Class Notice extends CI_Controller 
{
	public function __construct() 
	{
	parent::__construct();

	$this->load->model('login_model');
	$this->load->model('admin/notice_model');
	
	}

public function index() 
{
	
	$this->load->view('notice_view');
	
}
public function displayNotice()
 {
 	$draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
	$notice=$this->notice_model->displayNotice();
 	$data = [];
      foreach($notice as $r) {
           $data[] = array(
                $r->notice_id,
                $r->subject,
                $r->detail,
                $r->committee_id,
                $r->status,
                '<button type="button" name="update" id="'.$r->notice_id.'" class="btn btn-warning btn-xs update">Update</button>&nbsp;&nbsp;<button type="button" name="delete" id="'.$r->notice_id.'" class="btn btn-danger btn-xs delete">Delete</button>'
           );
      }

      $result = array(
               "draw" => $draw,
                 "recordsTotal" => sizeof($notice),
                 "recordsFiltered" => sizeof($notice),
                 "data" => $data
            );
      echo json_encode($result);
 }


function notice_action(){  
if($this->input->post("op")  == "Add")  
{  
     $insert_data = array(  
          'subject'          =>     $this->input->post('subject'),  
          'detail'      =>     $this->input->post("detail"),  
          'committee_id'      		   =>      $this->input->post("committee_id") 
     );  
     $this->load->model('notice_model');  
     $this->notice_model->insert_crud($insert_data);  
     echo 'Data Inserted';  
}  
if($this->input->post("op") == "Edit")  
{  
     
      $updated_data = array(  
          'subject'          =>     $this->input->post('subject'),  
          'detail'      =>     $this->input->post("detail"),  
          'committee_id'      		   =>     $this->input->post("committee_id") 
      );  
      $this->load->model('notice_model');  
      $this->notice_model->update_crud($this->input->post("nid"), $updated_data);  
      echo 'Data Updated'; 
        
 }  
 }  
      
function fetch_single_notice()  
{  
     $output = array();  
     $this->load->model("notice_model");  
     $data = $this->notice_model->fetch_single_notice($_POST["nid"]);  
     foreach($data as $row)  
     {  
          $output['subject'] = $row->subject;  
          $output['detail'] = $row->detail;
          $output['committee_id'] = $row->committee_id;  
          
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