<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accommodation_model extends CI_Model {

	public function insertion($data = array())
	{
		$this->db->insert('accommodation',$data);
		return $this->db->insert_id();
	}

	public function getAll()
	{
		$this->db->select('accommodation.*,country.country_name,location.location_name,institute.inst_name_en');
		$this->db->from('accommodation');
		$this->db->join('country','country.country_id=accommodation.country_en');
		$this->db->join('location','location.location_id=accommodation.location_en');
		$this->db->join('institute','institute.inst_id=accommodation.institute_en');
		$this->db->where('accommodation.status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAccommodationById($acc_id=0)
	{
		$this->db->select('*');
		$this->db->from('accommodation');
		$this->db->where('acc_id',$acc_id);

		$query  =  $this->db->get();
		return $query->row();
	}

	public function updation($acc_id = 0, $data = array())
	{
		$this->db->set($data);
		$this->db->where('acc_id',$acc_id);

		return $this->db->update('accommodation');
	}	

	public function deletion($acc_id = 0)
	{
		$this->db->set('status',0);
		$this->db->where('acc_id',$acc_id);

		return $this->db->update('accommodation');
	}

}

/* End of file Accommodation_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-3/Accommodation_model.php */