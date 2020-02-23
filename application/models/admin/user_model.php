<?php
/**
 * 
 */
class User_model extends CI_Model
{
	
	public function displayUsers()
	{
	  return $this->db->get('users')->result();
	}
	       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('users');  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('users',$data);  
      }  
      function fetch_single_user($uid)  
      {  
           $this->db->where("uid", $uid);  
           $query=$this->db->get('users');  
           return $query->result();  
      } 
      function update_crud($uid, $data)  
      {  
           $this->db->where("uid", $uid);  
           $this->db->update('users', $data);  
      }  
      function delete_single_user($uid)  
      {  
           $this->db->where("uid", $uid);  
           $this->db->delete('users');  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
 }  
 //username concate
 //active
 //block