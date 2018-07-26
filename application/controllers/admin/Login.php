<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login extends CI_Controller {	

	public function __construct() {	

		parent::__construct();			

		$this->load->helper('form');	

		$this->load->library('form_validation');
		
		$this->load->model('Admin_model','Admin');

	}

	public function index(){
		
		// echo "<pre>"; print_r($this->session->userdata());
		if($this->session->userdata('loggedAdminUser'))
		{
			redirect('admin/dashboard');
		}
		else
		{
			

			if($this->input->post())
			{				

				$pass  = md5($this->input->post('password'));

				$uname  = $this->input->post('email');

				$userexist = $this->Admin->dologin($uname,$pass);

				if($userexist)
				{

				//echo '<pre>';print_r($userexist);die;				

					//$where = array("email" => $this->input->post('email'),"password" => $pass);

					//$user = $this->frontmodel->getuser("lp_users",$where);

					$this->session->set_userdata('loggedAdminUser',$userexist);

					redirect('admin/dashboard');

				}
				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Error: Invalid Username/Password.</p>");

					redirect('admin/login');
				}

			}
			else
			{
				$this->load->view('admin/pages/login');
			}

		} 

	}

	public function logout()
	{

		$this->session->unset_userdata('loggedAdminUser');
		$this->session->sess_destroy();
		redirect("admin/login");

	}


}

?>