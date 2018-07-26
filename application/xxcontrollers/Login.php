<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Login extends CI_Controller {	

	public function __construct() {	

		parent::__construct();			

		$this->load->helper('form');	

		$this->load->library('form_validation');

		$this->load->model("frontmodel");

	}

	public function index(){
		

		if($this->session->userdata('loggedUser'))
		{
			redirect('dashboard');
		}
		else
		{

			if($this->input->post())
			{

				$pass  = md5($this->input->post('password'));

				$uname  = $this->input->post('email');

				$userexist = $this->frontmodel->dologin($uname,$pass);

				if($userexist)
				{

					$where = array("email" => $this->input->post('email'),"password" => $pass);

					$user = $this->frontmodel->getuser("lp_users",$where);

					$this->session->set_userdata('loggedUser',$user);

					redirect('dashboard');

				}
				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Error: Invalid Username/Password.</p>");

					redirect('login');
				}

			}
			else
			{
				$this->load->view('front/login');
			}

		} 

	}

	public function logout()
	{

		$this->session->unset_userdata('loggedUser');

		redirect("login");

	}

	
	public function emailVarification()
	{
		//echo $this->uri->segment(4);die;

		if($this->uri->segment(4))
		{
			$auth_token = $this->frontmodel->auth_token($this->uri->segment(3),$this->uri->segment(4));

			if($auth_token)
			{
				$active_user = $this->frontmodel->active_user($this->uri->segment(3));

				$this->session->set_flashdata("error_message","<p class='alert alert-success'>Email Verification done successfully ! Please Login To Continue.</p>");
				redirect('login');
				
			}

			else
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Error: Invalid User.</p>");
				redirect('login');				
			}
		}

		else
		{
			$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Error: Invalid User.</p>");
			redirect('login');
		}

		 
	}

}

?>