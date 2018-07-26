<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {	
	public function __construct() {	
		parent::__construct();	 
		$this->load->library(array('session'));	
		$this->load->helper(array('url'));	
		$this->load->helper('form');	
		$this->load->library('form_validation');
		$this->load->model("frontmodel");
	}
	public function index(){
		if($this->session->userdata('loggedUser')){
			redirect('dashboard');
		}else{
			if($this->input->post()){
				//echo '<pre>';print_r($this->input->post());die;
				$data['title'] = "Add User";

				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    			$charactersLength = strlen($characters);

    			$token = '';

			    for ($i = 0; $i < 7; $i++) 
			    {
			        $token .= $characters[rand(0, $charactersLength - 1)];
			    }			   

				$user = array(
								'fname'			 	 => $_POST['fname'], 
								'lname'				 => $_POST['lname'],
								'com_website' 		 => $_POST['com_website'],
								'email'			 	 => $_POST['email'],
								'password' 			 => md5($_POST['password']),
								'email_varification' =>	md5($token),
								'phone_no'			 =>	$this->input->post('phone_no'),
								'address'			 => $this->input->post('address'),
								'user_role'			 =>	$this->input->post('user_role')

							);

				$insert_id = $this->frontmodel->adduser($user);

				if($insert_id)
				{
					$this->load->library('email');

					$content  = '<h3>Hi '.$this->input->post('fname').'</h3>';
					$content .= '</br>';
					$content .= '<p>You have successfully registered! Please Visit below link to verify Email</p>';
					//$content .= "<a href='".base_url()."repair/chat/".$insert_id."'>".base_url()."repair/chat/".$insert_id."</a>";
					$content .=	"<a href='".base_url()."login/emailVarification/".$insert_id."/".md5($token)."'>".base_url()."login/emailVarification/".$insert_id."/".md5($token)."</a>";
					$this->email->from('info@carauction.com', 'Carauction');
					$this->email->to($this->input->post('email'));					
					$this->email->set_mailtype('html');
					$this->email->set_newline('\r\n');
					$this->email->subject('Email Verification');
					$this->email->message($content);			
					$this->email->send();
				}

				$this->session->set_flashdata("error_message","<p class='alert alert-success'>Please check your email for verification !</p>");

				redirect('login',$data);
		
			}else{
				$this->load->view('front/register');
			}
		} 
	}

	public function checkUniqueEmail()
	{
		$result = $this->frontmodel->checkUniqueEmail($this->input->post('email'));

		if($result)
		{
			echo json_encode(1);die;
		}

		else
		{
			echo json_encode(0);die;
		}
	}
	
}
?>