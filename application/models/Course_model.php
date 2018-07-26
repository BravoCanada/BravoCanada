<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

	public function insertion($data=array())
	{
		$this->db->insert('course',$data);
		return $this->db->insert_id();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('status',1);	
		$this->db->order_by('course_id','DESC');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getAllCourseByLocationEn()
	{
		$this->db->select('course.*,country.country_name,location.location_name,institute.inst_name_en');
		$this->db->from('course');
		$this->db->join('country','country.country_id = course.country_en');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->join('institute','institute.inst_id = course.institute_en');
		$this->db->where('course.status',1);	
		$this->db->order_by('course.course_id','DESC');
		$this->db->group_by(array('course.location_en','course.institute_en'));

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getAllCourseByLocationSp()
	{
		$this->db->select('course.*,country.country_name_sp,location.location_name_sp,institute.inst_name_sp');
		$this->db->from('course');
		$this->db->join('country','country.country_id = course.country_sp');
		$this->db->join('location','location.location_id = course.location_sp');
		$this->db->join('institute','institute.inst_id = course.institute_sp');
		$this->db->where('course.status',1);	
		$this->db->order_by('course.course_id','DESC');
		$this->db->group_by(array('course.location_sp','course.institute_sp'));

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getAllCourseByLocationTk()
	{
		$this->db->select('course.*,country.country_name_tk,location.location_name_tk,institute.inst_name_tk');
		$this->db->from('course');
		$this->db->join('country','country.country_id = course.country_tk');
		$this->db->join('location','location.location_id = course.location_tk');
		$this->db->join('institute','institute.inst_id = course.institute_tk');
		$this->db->where('course.status',1);	
		$this->db->order_by('course.course_id','DESC');
		$this->db->group_by(array('course.location_tk','course.institute_tk'));

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getAllCourseByLocationPr()
	{
		$this->db->select('course.*,country.country_name_pr,location.location_name_pr,institute.inst_name_pr');
		$this->db->from('course');
		$this->db->join('country','country.country_id = course.country_pr');
		$this->db->join('location','location.location_id = course.location_pr');
		$this->db->join('institute','institute.inst_id = course.institute_pr');
		$this->db->where('course.status',1);	
		$this->db->order_by('course.course_id','DESC');
		$this->db->group_by(array('course.location_tk','course.institute_pr'));

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCourseByLocationEn($location_id=0, $inst_id=0,$tag_id=0)
	{
		$this->db->select('course.*,location.location_name,institute.inst_name_en,institute.inst_logo_en,institute.inst_description_en,institute.inst_id');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->join('institute','institute.inst_id = course.institute_en');
		$this->db->where('course.location_en',$location_id);
		$this->db->where('course.institute_en',$inst_id);
		$this->db->where('course.status',1);

		if($tag_id)
		{
			$this->db->where('course.course_tag',$tag_id);
		}	

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseByLocationSp($location_id=0, $inst_id=0)
	{
		$this->db->select('course.*,location.location_name_sp,institute.inst_name_sp');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_sp');
		$this->db->join('institute','institute.inst_id = course.institute_sp');
		$this->db->where('course.location_sp',$location_id);
		$this->db->where('course.institute_sp',$inst_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseByLocationTk($location_id=0, $inst_id=0)
	{
		$this->db->select('course.*,location.location_name_tk,institute.inst_name_tk');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_tk');
		$this->db->join('institute','institute.inst_id = course.institute_tk');
		$this->db->where('course.location_tk',$location_id);
		$this->db->where('course.institute_tk',$inst_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseByLocationPr($location_id=0, $inst_id=0)
	{
		$this->db->select('course.*,location.location_name_pr,institute.inst_name_pr');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_pr');
		$this->db->join('institute','institute.inst_id = course.institute_pr');
		$this->db->where('course.location_pr',$location_id);
		$this->db->where('course.institute_pr',$inst_id);

		$query = $this->db->get();
		return $query->result();
	}
	
	public function getCourseById($course_id=0)
	{
		$this->db->select('course.*,location.*,institute.*');
		$this->db->from('course');	
		$this->db->join('location','location.location_id = course.location_en');	
		$this->db->join('institute','institute.inst_id = course.institute_en');
		$this->db->where('course.course_id',$course_id);

		$query = $this->db->get();
		return $query->row();

	}

	public function updation($course_id=0, $data=array())
	{
		$this->db->set($data);
		$this->db->where('course_id',$course_id);

		return $this->db->update('course');
	}	

	public function deleteCourse($course_id=0)
	{
		$this->db->set('status',0);
		$this->db->where('course_id',$course_id);

		return $this->db->update('course');
	}

	public function getAllCountry()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAllInstitute()
	{
		$this->db->select('*');
		$this->db->from('institute');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getLocation($country_id=0)
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('country_id',$country_id);
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getLocationById($country_id=0)
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('country_id',$country_id);

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getAllLocation()
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseByLocation($location_id=0)
	{
		$this->db->select('course.*,location.location_name');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->where('course.location_en',$location_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAllTag()
	{
		$this->db->select('*');
		$this->db->from('course_tag');
		$this->db->where('status',1);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseByLocationId($location_id=0)
	{
		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('location_en',$location_id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseTagByLocation($location_id=0)
	{
		$this->db->select('course.*,course_tag.*,location.*');
		$this->db->from('course');
		$this->db->join('course_tag','course_tag.tag_id = course.course_tag');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->where('course.location_en',$location_id);
		$this->db->group_by('course.course_tag');

		$query = $this->db->get();
		return $query->result();
	}

	public function getCourseDuration($course_id=0)
	{
		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('course_id',$course_id);

		$query 	=	$this->db->get();
		return $query->row();
	}

	public function getAllInstituteByLocation($location_id=0,$tag_id=0)
	{
		$this->db->select('course.*,institute.*');
		$this->db->from('course');
		$this->db->join('institute','institute.inst_id = course.institute_en');
		$this->db->where('course.location_en',$location_id);
		$this->db->where('course.status',1);
		if($tag_id)
		{
			$this->db->where('course.course_tag',$tag_id);
		}
		
		$this->db->group_by('course.institute_en');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCourseTag($course_id=0)
	{
		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('course_id',$course_id);

		$query = $this->db->get();
		return $query->row();
	}

	public function getLocationsByTag($tag_id=0)
	{
		$this->db->select('course.*,location.*,course_tag.*');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->join('course_tag','course_tag.tag_id = course.course_tag');
		$this->db->where('course.course_tag',$tag_id);
		$this->db->group_by('location.location_name');

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCourse($tag_id=0,$location_id=0,$inst_id=0)
	{
		$this->db->select('course.*,location.*,institute.*');
		$this->db->from('course');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->join('institute','institute.inst_id = course.institute_en');
		$this->db->where('course.course_tag',$tag_id);
		$this->db->where('course.location_en',$location_id);
		$this->db->where('course.institute_en',$inst_id);

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCountries()
	{
		$this->db->select('*');
		$this->db->from('countries');		

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getInstituteById($inst_id=0)
	{
		$this->db->select('*');
		$this->db->from('institute');
		$this->db->where('inst_id',$inst_id);

		$query 	=	$this->db->get();
		return $query->row();
	}

	public function getAllCourseByDiscount()
	{
		$this->db->select('*');
		$this->db->from('course');
		$this->db->where('status',1);
		$this->db->where('course_discount is NOT NULL');
		$this->db->where('course_discount >',0);

		$query 	=	$this->db->get();
		return $query->result();
	}

	public function getCountryByCode($country_code='')
	{
		$this->db->select('*');
		$this->db->from('countries');
		$this->db->where('sortname',$country_code);

		$query 	=	$this->db->get();
		return 	$query->row();
	}

	public function getCourseImageByInstitute($location_id=0, $inst_id=0)
	{
		$this->db->select('course_image.*,institute.*,location.*');
		$this->db->from('course_image');
		$this->db->join('institute','institute.inst_id = course_image.inst_id');
		$this->db->join('location','location.location_id = course_image.location_id');
		$this->db->where('course_image.location_id',$location_id);
		$this->db->where('course_image.inst_id',$inst_id);
		$this->db->where('course_image.status',1);

		$query 	=	$this->db->get();
		return $query->row();
	}


}

/* End of file Course_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Course_model.php */