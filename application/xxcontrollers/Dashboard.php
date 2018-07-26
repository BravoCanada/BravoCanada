<?php ?><?php



if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dashboard extends CI_Controller {	

	public function __construct() {	

		parent::__construct();		

		$this->load->helper('form');	

		$this->load->library('form_validation');

		$this->load->model("frontmodel");
		$this->load->model('Usermodel');

	}

	public function index()
	{

		if($this->session->userdata('loggedUser'))
		{
			$data['user'] = $this->session->userdata('loggedUser');
			$this->load->view('front/dashboard',$data);
		}

		else
		{
			redirect('login');

		}		

	}

	public function userForm()
	{
		if($this->session->userdata('loggedUser'))
		{
			$login_user 			= $this->session->userdata('loggedUser');

			$data['user'] 			= $this->Usermodel->userDetails($login_user->id);			

			$this->load->view('front/userform',$data);
		}

		else
		{
			redirect('login');

		}
	}

	public function updateUser()
	{
		//echo '<pre>';print_r($this->session->userdata('id'));die;
		if($this->session->userdata('loggedUser'))
		{
			$login_user 			= $this->session->userdata('loggedUser');

			$data = array(
								'fname'			 	 => $this->input->post('fname'), 
								'lname'				 => $this->input->post('lname'),
								'com_website' 		 => $this->input->post('com_website'),
								'email'			 	 => $this->input->post('email'),							
								'phone_no'			 =>	$this->input->post('phone_no'),
								'address'			 => $this->input->post('address'),
								'user_role'			 =>	$this->input->post('user_role')

							);

			$result				 	= $this->Usermodel->updateUser($login_user->id,$data);	

			if($result)	
			{
				
				$user 		=	$this->frontmodel->getuserByID($login_user->id);				
				$this->session->set_userdata('loggedUser',$user);
				$this->session->set_flashdata("error_message","<p class='alert alert-success'>Data saved successfully !</p>");
				redirect('dashboard/userForm');
			}			

		}

		else
		{
			redirect('login');

		}
	}	

}

?>