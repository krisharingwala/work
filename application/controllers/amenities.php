<?php

Class Amenities extends CI_Controller 
{
	public function __construct() 
	{
	parent::__construct();

	$this->load->model('login_model');
	$this->load->model('admin/amenities_model');
	
	}

public function index() 
{
	
//	$this->load->view('amenities_view');
	
}
public function displayAmenities()
 {
 	$draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
	$amenities=$this->amenities_model->displayAmenities();
 	$data = [];
      foreach($amenities as $r) {
           $data[] = array(
                $r->amenities_id,
                $r->amenities_name,
                $r->description,
                $r->charges,
                $r->status,
                '<button type="button" name="update" id="'.$r->amenities_id.'" class="btn btn-warning btn-xs update">Update</button>&nbsp;&nbsp;<button type="button" name="delete" id="'.$r->amenities_id.'" class="btn btn-danger btn-xs delete">Delete</button>'
           );
      }

      $result = array(
               "draw" => $draw,
                 "recordsTotal" => sizeof($amenities),
                 "recordsFiltered" => sizeof($amenities),
                 "data" => $data
            );
      echo json_encode($result);
 }


function amenities_action(){  
if($this->input->post("op")  == "Add")  
{  
     $insert_data = array(  
          'amenities_name'          =>     $this->input->post('amenities_name'),  
          'description'      =>     $this->input->post("description"),  
          'charges'      		   =>     $this->input->post("charges")  

     );  
     $this->load->model('amenities_model');  
     $this->amenities_model->insert_crud($insert_data);  
     echo 'Data Inserted';  
}  
if($this->input->post("op") == "Edit")  
{  
     
      $updated_data = array(  
          'amenities_name'          =>     $this->input->post("amenities_name"),  
          'description'      =>     $this->input->post("description"),  
          'charges'      		   =>     $this->input->post("charges") 
      );  
      $this->load->model('amenities_model');  
      $this->amenities_model->update_crud($this->input->post("amenities_id"), $updated_data);  
      echo $this->input->post("amenities_name");    
 }  
 }  
      
function fetch_single_amenities()  
{  
     $output = array();  
     $this->load->model("amenities_model");  
     $data = $this->amenities_model->fetch_single_amenities($_POST["aid"]);  
     foreach($data as $row)  
     {  
          $output['amenities_name'] = $row->amenities_name;  
          $output['description'] = $row->description;
          $output['charges'] = $row->charges;  
          
     }  
           echo json_encode($output);  
 }  
function delete_single_amenities()  
{  
     $this->load->model("amenities_model");  
     $this->amenities_model->delete_single_amenities($_POST["mid"]);  
     echo 'Data Deleted';  
}  


}?>