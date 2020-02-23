<?php
/**
 * 
 */
class Notice_model extends CI_Model
{
	
	public function displayNotice()
	{
	  return $this->db->get('notice')->result();
	}
	       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('notice');  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('notice', $data);  
      }  
      function fetch_single_notice($nid)  
      {  
           $this->db->where("notice_id", $nid);  
           $query=$this->db->get('notice');  
           return $query->result();  
      }  
      function update_crud($nid, $data)  
      {  
           $this->db->where("notice_id", $nid);  
           $this->db->update('notice', $data);  
      }  
      function delete_single_notice($nid)  
      {  
           $this->db->where("notice_id", $nid);  
           $this->db->delete('notice');  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
 }  