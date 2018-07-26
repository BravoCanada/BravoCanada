<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {


	public function getBlogs()
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('status',1);

		$query 		=	$this->db->get();
		return $query->result();
	}

	public function getAllTestimonials()
	{
		$this->db->select('*');
		$this->db->from('testimonials');
		$this->db->where('status',1);

		$query	=	$this->db->get();
		return $query->result();
	}

	public function getSingleBlog($blog_id=0)
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('id',$blog_id);

		$query 	=	$this->db->get();
		return $query->row();
	}
	

}

/* End of file Blog_model.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-3/Blog_model.php */