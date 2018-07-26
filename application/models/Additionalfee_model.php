<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additionalfee_model extends CI_Model {

	public function insertion($data=array())
	{
		$this->db->insert('additional_fees',$data);
		return $this->db->insert_id();
	}

	public function getAll()
	{
		$this->db->select('additional_fees.*,country.country_name,institute.inst_name_en');
		$this->db->from('additional_fees');
		$this->db->join('country','country.country_id = additional_fees.country_en');
		$this->db->join('institute','institute.inst_id = additional_fees.institute_en');
		$this->db->where('additional_fees.status',1);
		$this->db->order_by('additional_fees.id','DESC');

		$query = $this->db->get();
		return $query->result();
	}	

	public function getAdditionalFeeById($id=0)
	{
		$this->db->select('*');
		$this->db->from('additional_fees');
		$this->db->where('id',$id);

		$query = $this->db->get();
		return $query->row();
	}

	public function updation($id = 0, $data = array())
	{
		$this->db->set($data);
		$this->db->where('id',$id);

		return $this->db->update('additional_fees');
	}

	public function deletion($id=0)
	{
		$this->db->set('status',0);
		$this->db->where('id',$id);

		return $this->db->update('additional_fees');
	}

	public function getAdditionalByCountryEn($country_id=0,$inst_id=0)
	{
		$this->db->select('*');
		$this->db->from('additional_fees');
		$this->db->where('country_en',$country_id);
		$this->db->where('institute_en',$inst_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAdditionalByCountrySp($country_id=0,$inst_id=0)
	{
		$this->db->select('*');
		$this->db->from('additional_fees');
		$this->db->where('country_sp',$country_id);
		$this->db->where('institute_sp',$inst_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAdditionalByCountryTk($country_id=0,$inst_id=0)
	{
		$this->db->select('*');
		$this->db->from('additional_fees');
		$this->db->where('country_tk',$country_id);
		$this->db->where('institute_tk',$inst_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAdditionalByCountryPr($country_id=0,$inst_id=0)
	{
		$this->db->select('*');
		$this->db->from('additional_fees');
		$this->db->where('country_pr',$country_id);
		$this->db->where('institute_pr',$inst_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAccommodationByEn($location_id = 0, $inst_id = 0, $country_id = 0)
	{
		$this->db->select('*');
		$this->db->from('accommodation');
		$this->db->where('location_en',$location_id);
		$this->db->where('institute_en',$inst_id);
		$this->db->where('country_en',$country_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAccommodationBySp($location_id = 0, $inst_id = 0, $country_id = 0)
	{
		$this->db->select('*');
		$this->db->from('accommodation');
		$this->db->where('location_sp',$location_id);
		$this->db->where('institute_sp',$inst_id);
		$this->db->where('country_sp',$country_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAccommodationByTk($location_id = 0, $inst_id = 0, $country_id = 0)
	{
		$this->db->select('*');
		$this->db->from('accommodation');
		$this->db->where('location_tk',$location_id);
		$this->db->where('institute_tk',$inst_id);
		$this->db->where('country_tk',$country_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAccommodationByPr($location_id = 0, $inst_id = 0, $country_id = 0)
	{
		$this->db->select('*');
		$this->db->from('accommodation');
		$this->db->where('location_pr',$location_id);
		$this->db->where('institute_pr',$inst_id);
		$this->db->where('country_pr',$country_id);

		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Additionalfee_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Additionalfee_model.php */