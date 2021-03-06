<?php

Class Meetings extends CI_Controller 
{
	public function __construct() 
	{
	parent::__construct();

	$this->load->model('login_model');
	$this->load->model('admin/meeting_model');
	
	}

public function index() 
{
	
	$this->load->view('manage_meetings');
	
}
public function displayMeetings()
 {
 	$draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
	$meetings=$this->meeting_model->displayMeetings();
 	$data = [];
      foreach($meetings as $r) {
           $data[] = array(
                $r->mid,
                $r->subject,
                $r->description,
                $r->date,
                $r->status,
                '<button type="button" name="update" id="'.$r->mid.'" class="btn btn-warning btn-xs update">Update</button>&nbsp;&nbsp;<button type="button" name="delete" id="'.$r->mid.'" class="btn btn-danger btn-xs delete">Delete</button>'
           );
      }

      $result = array(
               "draw" => $draw,
                 "recordsTotal" => sizeof($meetings),
                 "recordsFiltered" => sizeof($meetings),
                 "data" => $data
            );
      echo json_encode($result);
 }


function meeting_action(){  
if($this->input->post("op")  == "Add")  
{  
     $insert_data = array(  
          'subject'          =>     $this->input->post('subject'),  
          'description'      =>     $this->input->post("description"),  
          'date'      		   =>       date('Y-m-y',strtotime($this->input->post("date"))) ,  
          'time'      		   =>     $this->input->post("time")  

     );  
     $this->load->model('meeting_model');  
     $this->meeting_model->insert_crud($insert_data);  
     echo 'Data Inserted';  
}  
if($this->input->post("op") == "Edit")  
{  
     
      $updated_data = array(  
          'subject'          =>     $this->input->post('subject'),  
          'description'      =>     $this->input->post("description"),  
          'date'      		   =>     date('Y-m-d',strtotime($this->input->post("date"))),  
          'time'      		   =>     $this->input->post("time") 
      );  
      $this->load->model('meeting_model');  
      $this->meeting_model->update_crud($this->input->post("mid"), $updated_data);  
      echo 'Data Updated'; 
        
 }  
 }  
      
function fetch_single_meeting()  
{  
     $output = array();  
     $this->load->model("meeting_model");  
     $data = $this->meeting_model->fetch_single_meeting($_POST["mid"]);  
     foreach($data as $row)  
     {  
          $output['subject'] = $row->subject;  
          $output['description'] = $row->description;
          $output['date'] = $row->date;  
          $output['time'] = $row->time;  

          
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