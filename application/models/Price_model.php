<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_model extends CI_Model {

	public function getAllLocationEn()
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAllLocationSp()
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAllLocationTk()
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAllLocationPr()
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseById($location_id = 0)
	{
		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('location_en',$location_id);
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseDetail($course_id=0)
	{
		$this->db->select('course.*,location.location_name');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->where('course_id',$course_id);

		$query = $this->db->get();
		return $query->row();
	}

	public function getAccommodation($location_id=0)
	{
		$this->db->select('*');
		$this->db->from('accommodation');
		$this->db->where('location_en',$location_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCountries()
	{
		$this->db->select('*');
		$this->db->from('countries');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function insert_user_info($data=array())
	{
		$this->db->insert('user_personal_info',$data);
		return $this->db->insert_id();
	}

	public function insert_summary($data=array())
	{
		$this->db->insert('summary',$data);
		return $this->db->insert_id();
	}

	public function emailExists($email='')
	{
		$this->db->select('*');
		$this->db->from('lp_users');
		$this->db->where('email',$email);
		$this->db->where('active_status',1);

		$query	=	$this->db->get();
		return $query->row();
	}	

}

/* End of file Price_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Price_model.php */