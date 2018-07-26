<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public function userDetails($userId=0)
	{
		$this->db->select('*');
		$this->db->from('lp_users');
		$this->db->where('id',$userId);

		$query = $this->db->get();
		return $query->row();
	}

	public function updateUser($userId = 0, $data=array())
	{
		$this->db->set($data);
		$this->db->where('id',$userId);

		return $this->db->update('lp_users');
	}

	

}

/* End of file Usermodel.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Usermodel.php */