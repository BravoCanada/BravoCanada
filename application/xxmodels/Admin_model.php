<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function dologin($uname,$pass)
	{
			
        $this->db->select('*');
        $this->db->from('lp_users');
        $this->db->where('email',$uname);
        $this->db->where('password',$pass);
        $this->db->where('active_status',1);
        $this->db->where('user_type',1);
		//$this->db->last_query();
        $query = $this->db->get();
		return $query->row(); 
	}	


	public function getAdminDetail($adminId=0)
	{
		$this->db->select('*');
		$this->db->from('lp_users');
		$this->db->where('id',$adminId);

		$query = $this->db->get();
		return $query->row();
	}

	public function getAllUsers()
	{
		$this->db->select('*');
		$this->db->from('lp_users');
		$this->db->where('active_status',1);
		$this->db->order_by('id','DESC');		

		$query = $this->db->get();
		return $query->result();
	}

	public function getUserById($userId=0)
	{
		$this->db->select('*');
		$this->db->from('lp_users');
		$this->db->where('id',$userId);

		$query = $this->db->get();
		return $query->row();
	}

	public function updateUser($userId=0, $data=array())
	{
		$this->db->set($data);
		$this->db->where('id',$userId);
		return $this->db->update('lp_users');
	}

	public function deleteUser($userId=0)
	{
		$this->db->set('active_status',0);
		$this->db->where('id',$userId);

		return $this->db->update('lp_users');
	}

	public function insertUser($data=array())
	{
		$this->db->insert('lp_users',$data);
		return $this->db->insert_id();
	}

}

/* End of file Admin_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Admin_model.php */