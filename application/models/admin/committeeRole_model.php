<?php
/**
 * 
 */
class CommitteeRole_model extends CI_Model
{
	
	public function displayCommitteeRole()
	{
	  return $this->db->get('committee_role')->result();
	}
	       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('committee_role');  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('committee_role', $data);  
      }  
      function fetch_single_committeeRole($crid)  
      {  
           $this->db->where("committee_role_id", $crid);  
           $query=$this->db->get('committee_role');  
           return $query->result();  
      }  
      function update_crud($crid, $data)  
      {  
           $this->db->where("committee_role_id", $crid);  
           $this->db->update('committee_role', $data);  
      }  
      function delete_single_committeeRole($crid)  
      {  
           $this->db->where("crid", $crid);  
           $this->db->delete('committee_role');  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
 }  