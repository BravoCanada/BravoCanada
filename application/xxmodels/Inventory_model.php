<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {

	public function insertInventory($data=array())
	{
		$this->db->insert('inventory',$data);
		return $this->db->insert_id();
	}

	public function getAllInventory()
	{
		$this->db->select('*');
		$this->db->from('inventory');
		$this->db->where('status',1);
		$this->db->order_by('inventory_id','DESC');

		$query = $this->db->get();
		return $query->result();
	}

	public function getInventoryById($inventory_id=0)
	{
		$this->db->select('*');
		$this->db->from('inventory');
		$this->db->where('inventory_id',$inventory_id);

		$query = $this->db->get();
		return $query->row();
	}

	public function updateInventory($inventory_id=0, $data=array())
	{
		$this->db->set($data);
		$this->db->where('inventory_id', $inventory_id);
		return $this->db->update('inventory');
	}

	public function deleteInventory($inventory_id=0)
	{
		$this->db->set('status',0);
		$this->db->where('inventory_id',$inventory_id);
		return $this->db->update('inventory');
	}

}

/* End of file Inventory_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Inventory_model.php */