<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function insertion($data=array())
	{
		$this->db->insert('lp_users',$data);

		return $this->db->insert_id();
	}

	public function emailVarification($user_id=0, $token='')
	{
		$this->db->set('active_status',1);
		$this->db->where('id',$user_id);
		$this->db->where('email_varification',$token);

		return $this->db->update('lp_users');
	}

	public function userAuth($data=array())
	{
		$this->db->select('*');
		$this->db->from('lp_users');
		$this->db->where('active_status',1);
		$this->db->where($data);

		$query = $this->db->get();

		return $query->row();
	}

	public function FogottonPassword($email='')
	{
		$this->db->select('*');
		$this->db->from('lp_users');
		$this->db->where('active_status',1);
		$this->db->where('email',$email);

		$query = $this->db->get();
		return $query->row();
	}

	public function resetPassword($user_id = 0, $password = '')
	{
		$this->db->set('password',$password);
		$this->db->where('id',$user_id);
		$this->db->where('active_status',1);

		return $this->db->update('lp_users');
	}	

	public function getCountries()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getLocations($country_id=0)
	{
		$this->db->select('location.*,country.country_name,country.country_name_sp,country.country_name_tk,country.country_name_pr');
		$this->db->from('location');
		$this->db->join('country','country.country_id = location.country_id');
		$this->db->where('location.country_id',$country_id);
		$this->db->where('location.status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getLocationsByCourseEn($course_name='')
	{
		$this->db->select('course.*,location.location_name,location.location_id,location.location_image');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->where('course.course_title_en',base64_decode($course_name));
		$this->db->where('course.status',1);

		$query	=	$this->db->get();
		return $query->result();


	}

	public function getLocationsByCourseSp($course_name='')
	{
		$this->db->select('course.*,location.location_name_sp,location.location_id,location.location_image');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_sp');
		$this->db->where('course.course_title_sp',base64_decode($course_name));
		$this->db->where('course.status',1);

		$query	=	$this->db->get();
		return $query->result();


	}

	public function getLocationsByCourseTk($course_name='')
	{
		$this->db->select('course.*,location.location_name_tk,location.location_id,location.location_image');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_tk');
		$this->db->where('course.course_title_tk',base64_decode($course_name));
		$this->db->where('course.status',1);

		$query	=	$this->db->get();
		return $query->result();


	}

	public function getLocationsByCoursePr($course_name='')
	{
		$this->db->select('course.*,location.location_name_pr,location.location_id,location.location_image');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_pr');
		$this->db->where('course.course_title_pr',base64_decode($course_name));
		$this->db->where('course.status',1);

		$query	=	$this->db->get();
		return $query->result();


	}



	public function getCourses($location_id=0)
	{
		$this->db->select('course.*,location.location_name,location.location_name_sp,location.location_name_tk,location.location_name_pr');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->where('course.location_en',$location_id);		

		$query = $this->db->get();
		return $query->result();
	}

	public function getUser($user_id=0)
	{
		$this->db->select('*');
		$this->db->from('lp_users');		
		$this->db->where('id',$user_id);

		$query = $this->db->get();
		return $query->row();
	}

	public function getAllCountries()
	{
		$this->db->select('*');
		$this->db->from('countries');

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseGroupByEn()
	{
		$this->db->select('course_title_en,course_description_en,course_image_en');
		$this->db->from('course');
		$this->db->where('status',1);
		$this->db->group_by('course_title_en');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCourseGroupBySp()
	{
		$this->db->select('course_title_sp,course_description_sp,course_image_sp');
		$this->db->from('course');
		$this->db->where('status',1);
		$this->db->group_by('course_title_sp');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCourseGroupByTk()
	{
		$this->db->select('course_title_tk,course_description_tk,course_image_tk');
		$this->db->from('course');
		$this->db->where('status',1);
		$this->db->group_by('course_title_tk');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCourseGroupByPr()
	{
		$this->db->select('course_title_pr,course_description_pr,course_image_pr');
		$this->db->from('course');
		$this->db->where('status',1);
		$this->db->group_by('course_title_pr');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getLocation()
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('status',1);
		//$this->db->where_in('location_id',array(1,2,3,5));
		$this->db->where('featured_location',1);

		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file User_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/User_model.php */