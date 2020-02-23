<?php
/**
 * 
 */
class Committee_model extends CI_Model
{
	
	public function displayCommittee()
	{
	  return $this->db->get('committee')->result();
	}
	       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('committee');  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('committee', $data);  
      }  
      function fetch_single_committee($cid)  
      {  
           $this->db->where("committee_id", $cid);  
           $query=$this->db->get('committee');  
           return $query->result();  
      }  
      function update_crud($cid, $data)  
      {  
           $this->db->where("committee_id", $cid);  
           $this->db->update('committee', $data);  
      }  
      function delete_single_meeting($mid)  
      {  
           $this->db->where("mid", $mid);  
           $this->db->delete('meetings');  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
 }  