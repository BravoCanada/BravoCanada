<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {


	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('institute');
		$this->db->where('status',1);		
		$this->db->order_by('inst_id','desc');

		$query = $this->db->get();
		return $query->result();
	}

	public function insertion($data=array())
	{
		$this->db->insert('institute',$data);
		return $this->db->insert_id();
	}

	public function updation($inst_id=0,$data=array())
	{
		$this->db->set($data);
		$this->db->where('inst_id',$inst_id);
		return $this->db->update('institute');
	}

	public function getCategoryById($inst_id=0)
	{
		$this->db->select('*');
		$this->db->from('institute');
		$this->db->where('inst_id',$inst_id);

		$query = $this->db->get();
		return $query->row();
	}

	public function deletion($inst_id=0)
	{
		$this->db->set('status',0);
		$this->db->where('inst_id',$inst_id);

		return $this->db->update('institute');
	}	

}

/* End of file Category_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Category_model.php */