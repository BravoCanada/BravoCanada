<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		
	}

	public function addBlog()
	{
		$this->load->view('admin/pages/addblog');
	}

}

/* End of file Blog.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Blog.php */