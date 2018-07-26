<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookingcourses_model extends CI_Model {

	public function getBookings()
	{
		$this->db->select('summary.*,course.course_title_en, location.location_name, lp_users.fname,lp_users.lname,lp_users.email,lp_users.phone_no');
		$this->db->from('summary');	
		$this->db->join('lp_users','lp_users.id = summary.user_id');	
		$this->db->join('course','course.course_id = summary.course_id');
		$this->db->join('location','location.location_id = course.location_en');
		$this->db->where('summary.status',1);
		$this->db->order_by('summary.created_at','DESC');

		$query 	=	$this->db->get();
		return $query->result();
	}

}

/* End of file Bookingcourses_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Bookingcourses_model.php */