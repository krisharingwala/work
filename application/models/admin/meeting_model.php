<?php
/**
 * 
 */
class Meeting_model extends CI_Model
{
	
	public function displayMeetings()
	{
	  return $this->db->get('meetings')->result();
	}
	       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('meetings');  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('meetings', $data);  
      }  
      function fetch_single_meeting($mid)  
      {  
           $this->db->where("mid", $mid);  
           $query=$this->db->get('meetings');  
           return $query->result();  
      }  
      function update_crud($mid, $data)  
      {  
           $this->db->where("mid", $mid);  
           $this->db->update('meetings', $data);  
      }  
      function delete_single_meeting($mid)  
      {  
           $this->db->where("mid", $mid);  
           $this->db->delete('meetings');  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
 }  