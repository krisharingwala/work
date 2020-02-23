<?php
/**
 * 
 */
class Amenities_model extends CI_Model
{
	
	public function displayAmenities()
	{
	 $this->db->where("status", 1);  
        $query=$this->db->get('amenities');  
        return $query->result();    
	}
	       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('amenities');  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('amenities', $data);  
      }  
      function fetch_single_amenities($aid)  
      {  
           $this->db->where("amenities_id", $aid);  
           $query=$this->db->get('amenities');  
           return $query->result();  
      }  
      function update_crud($aid, $data)  
      {  
           $this->db->where("amenities_id", $aid);  
           $this->db->update('amenities', $data);  
      }  
    /*  function delete_single_meeting($aid)  
      {  
           $this->db->where("amenities_id", $aid);  
           $this->db->delete('amenities');  
           //DELETE FROM users WHERE id = '$user_id'  
      } */ 
 }  