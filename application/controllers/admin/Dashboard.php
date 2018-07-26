<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {	

		parent::__construct();			

		$this->load->helper('form');				
		$this->load->model('Admin_model','Admin');

		$language = ($this->session->userdata('language')) ? ($this->session->userdata('language')) : config_item('language');	
		$this->lang->load('admin',$language);

	}

	public function index()
	{		

		if($this->session->userdata('loggedAdminUser'))
		{
			$admin 			=	$this->session->userdata('loggedAdminUser');
			$data['admin']	=	$this->Admin->getAdminDetail($admin->id);
			$this->load->view('admin/pages/dashboard',$data);
		}
		else
		{
			redirect('admin/login');
		}

	}

	public function Language($language='')
	{
		$this->session->unset_userdata('language');
		$this->session->set_userdata('language',$language);

		//echo '<pre>';print_r($this->session->userdata('language'));die;

		redirect('admin/dashboard');
	}

}

/* End of file Dashboard 2.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Dashboard 2.php */