<?php
/**
 * 
 */
class AmenitiesBook_model extends CI_Model
{
	
	public function displayBookAmenities()
	{
	  return $this->db->get('amenities_book')->result();
	}
	       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('amenities_book');  
           return $this->db->count_all_results();  
      }  
     /* function insert_crud($data)  
      {  
           $this->db->insert('meetings', $data);  
      }  
      function fetch_single_meeting($mid)  
      {  
           $this->db->where("mid", $mid);  
           $query=$this->db->get('amenities_book');  
           return $query->result();  
      }  
     /* function update_crud($mid, $data)  
      {  
           $this->db->where("mid", $mid);  
           $this->db->update('meetings', $data);  
      }  
      function delete_single_meeting($mid)  
      {  
           $this->db->where("mid", $mid);  
           $this->db->delete('meetings');  
           //DELETE FROM users WHERE id = '$user_id'  
      }  */
 }  