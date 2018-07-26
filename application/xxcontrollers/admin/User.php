<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {	

		parent::__construct();			

		$this->load->helper('form');				
		$this->load->model('Admin_model','Admin');

	}

	public function index()
	{
		
		if($this->session->userdata('loggedAdminUser'))
		{
			$data['users']	=	$this->Admin->getAllUsers();			
			$this->load->view('admin/pages/user',$data);
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function editUser($userId=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{			
				$data 	=	array
								(

									'fname'			=>	$this->input->post('fname'),
									'lname'			=>	$this->input->post('lname'),
									'email'			=>	$this->input->post('email'),
									'com_website'	=>	$this->input->post('com_website'),
									'phone_no'		=>	$this->input->post('phone_no'),
									'address'		=>	$this->input->post('address'),
									'user_role'		=>	$this->input->post('user_role')
								);

				$result = $this->Admin->updateUser($this->input->post('user_id'),$data);

				$this->session->set_flashdata("error_message","<p class='alert alert-success'>User saved successfully !</p>");
				redirect('admin/user/editUser/'.$this->input->post('user_id'));

				
			}

			else
			{
				$data['user'] 	=	$this->Admin->getUserById($userId);

				$this->load->view('admin/pages/edituser',$data);
			}
		}
	
		else
		{
			redirect('admin/login');
		}
		
	}

	public function deleteUser($userId=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$result = $this->Admin->deleteUser($userId);

			$this->session->set_flashdata("error_message","<p class='alert alert-success'>Deleted successfully !</p>");
			redirect('admin/user');
		}

		else
		{
			redierct('admin/login');
		}
	}


	public function addUser()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$data 	=	array
								(

									'fname'			=>	$this->input->post('fname'),
									'lname'			=>	$this->input->post('lname'),
									'email'			=>	$this->input->post('email'),
									'com_website'	=>	$this->input->post('com_website'),
									'phone_no'		=>	$this->input->post('phone_no'),
									'address'		=>	$this->input->post('address'),
									'user_role'		=>	$this->input->post('user_role'),
									'password'		=>	md5($this->input->post('password')),
									'active_status' =>  1
								);

				$result =  $this->Admin->insertUser($data);

				$this->session->set_flashdata("error_message","<p class='alert alert-success'>User saved successfully !</p>");
				redirect('admin/user/addUser');

			}

			else
			{
				$this->load->view('admin/pages/adduser');
			}
		}

		else
		{
			redirect('admin/login');
		}
		
	}

}

/* End of file user.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/user.php */