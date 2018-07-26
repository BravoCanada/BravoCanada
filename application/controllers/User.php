<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('User_model','User');
		$this->load->model('Price_model','Price');	
		$this->load->library('form_validation');	
		$language = ($this->session->userdata('language')) ? ($this->session->userdata('language')) : config_item('language');	
		$this->lang->load('user',$language);
		
	}

	public function index()
	{
		redirect('/');
	}

	public function Login()
	{
		if(!$this->session->userdata('isLoggedUser'))
		{
			if($this->input->post())
			{
				
				$user 	=	array
								(
									'email' 	=>	$this->input->post('email'),
									'password'	=>	md5($this->input->post('password'))
								);

				$user_exist 	=	$this->User->userAuth($user);

				if($user_exist)
				{
					$data 	=	array
									(

										'user_id'	 	=>	$user_exist->id,
										'fname'	  		=>	$user_exist->fname,
										'lname'	  		=>	$user_exist->lname,
										'email'   		=>	$user_exist->email,
										'phone_no'		=>	$user_exist->phone_no,
										'user_type'		=>	$user_exist->user_type
									);
					
					$this->session->set_userdata('isLoggedUser',$data);

					if($this->input->post('remember_me'))
					{
						setcookie('email', $this->input->post('email'), time() + (86400 * 30), '/');
						setcookie('password',$this->input->post('password'), time() + (86400 * 30), '/');
						setcookie('remember_me',$this->input->post('remember_me'),time() + (86400 * 30), '/');

					}

					else
					{
						unset($_COOKIE['email']);
					    unset($_COOKIE['password']);
					    unset($_COOKIE['remember_me']);
					    setcookie('email', null, -1, '/');
					    setcookie('password', null, -1, '/');
					    setcookie('remember_me', null, -1, '/');
					}
					redirect('/');
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Invalid Username or Password !</p>");
					redirect('user/Login');
				}
			
			}

			else
			{
				$this->load->view('user/pages/login');
			}
		}

		else
		{
			redirect('/');
		}	
		
	}

	public function Register()
	{
		if(!$this->session->userdata('isLoggedUser'))
		{
		
			if($this->input->post())
			{
				//echo '<pre>';print_r($this->input->post());die;			

				if($this->form_validation->run('signup_validation') == FALSE)
				{
					//$this->session->set_flashdata('error_message',array('error_message'=>validation_errors(),'class'=>'alert alert-danger'));
					$this->session->set_flashdata("error_message",validation_errors());
					$this->load->view('user/pages/register');
				}

				else
				{
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$charactersLength = strlen($characters);

					$token = '';

				    for ($i = 0; $i < 7; $i++) 
				    {
				        $token .= $characters[rand(0, $charactersLength - 1)];
				    }

				    $user = array(
				    					'title'				 =>	$this->input->post('title'),
										'fname'			 	 => $this->input->post('fname'), 
										'lname'				 => $this->input->post('lname'),
										'gender'			 => $this->input->post('gender'),
										'dob'			 	 => $this->input->post('dob'),
										'nationality'		 => $this->input->post('nationality'),
										'address_1'			 => $this->input->post('address_1'),
										'address_2'			 => $this->input->post('address_2'),
										'city'			 	 => $this->input->post('city'),
										'state'			 	 => $this->input->post('state'),
										'zip'			 	 => $this->input->post('zip'),
										'country'		 	 => $this->input->post('country'),						
										'email'			 	 => $this->input->post('email'),									
										'phone_no'			 =>	$this->input->post('phone_no'),
										'mobile'			 =>	$this->input->post('mobile'),																			
										'password' 			 => md5($this->input->post('password')),
										'email_varification' =>	md5($token),							

									);	

					$insert_id 	=	$this->User->insertion($user);	

					if($insert_id)
					{
						$this->load->library('email');

						$content  = '<h3>Hi '.ucfirst($this->input->post('fname')).'</h3>';
						$content .= '</br>';
						$content .= '<p>You have successfully registered! Please Visit below link to verify Email</p>';				
						$content .=	"<a href='".base_url()."user/emailVarification/".$insert_id."/".$token."'>".base_url()."user/emailVarification/ewrwerwer435gregfdgfdgg@!!34fdffsdfsd</a>";
						$this->email->from('info@bravocanada.com', 'Bravo Canada');
						$this->email->to($this->input->post('email'));					
						$this->email->set_mailtype('html');
						$this->email->set_newline('\r\n');
						$this->email->subject('Email Verification');
						$this->email->message($content);			
						$this->email->send();

						$this->session->set_flashdata("error_message","<p class='alert alert-success'>Please check your email for verification !</p>");
						redirect('user/register');
					}

					else
					{
						$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Agian !</p>");
						redirect('user/register');
					}
				}
				
			}

			else
			{
				$data['countries']		=	$this->Price->getCountries();
				$this->load->view('user/pages/register',$data);
			}

		}

		else
		{
			redirect('/');
		}
		
		
	}

	public function emailVarification($user_id=0, $token='')
	{
		if(!$this->session->userdata('isLoggedUser'))
		{
			$email_varification = $this->User->emailVarification($user_id,md5($token));

			if($email_varification)
			{			
				$this->session->set_flashdata("error_message","<p class='alert alert-success'>Verification done successfully Please Login to continue !</p>");
				redirect('user/Login');
			}

			else
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Invalid User Please provide valid credentials !</p>");
				redirect('user/Login');
			}
		}

		else
		{
			redirect('/');
		}
		
	}


	public function logOut()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function FogottonPassword()
	{
		if(!$this->session->userdata('isLoggedUser'))
		{
			if($this->input->post())
			{
				$email_exist 	=	$this->User->FogottonPassword($this->input->post('email'));

				if($email_exist)
				{
					$this->load->library('email');

					$content  = '<h3>Hi '.ucfirst($email_exist->fname).'</h3>';
					$content .= '</br>';
					$content .= '<p>Fogotton Password! Please Visit below link to reset your password.</p>';				
					$content .=	"<a href='".base_url()."user/resetPassword/".$email_exist->id."'>".base_url()."user/resetPassword/ewrwerwer435gregfdgfdgg@!!34fdffsdfsd</a>";
					$this->email->from('info@bravocanada.com', 'Bravo Canada');
					$this->email->to($this->input->post('email'));					
					$this->email->set_mailtype('html');
					$this->email->set_newline('\r\n');
					$this->email->subject('Fogotton Password');
					$this->email->message($content);			
					$this->email->send();

					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Please check your email for reset password !</p>");
					redirect('user/FogottonPassword');
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>This email address is not registered !</p>");
					redirect('user/FogottonPassword');
				}
			}

			else
			{
				$this->load->view('user/pages/forgot');
			}
		}

		else
		{
			redirect('/');
		}
	}

	public function resetPassword($user_id=0)
	{
		if(!$this->session->userdata('isLoggedUser'))
		{
			if($this->input->post())
			{
				$result = $this->User->resetPassword($this->input->post('user_id'), md5($this->input->post('password')));

				if($result)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Password changed successfully !</p>");
					redirect('user/resetPassword');
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>User does not exist !</p>");
					redirect('user/resetPassword');
				}
			}

			else
			{
				$data['user_id']	=	$user_id;
				$this->load->view('user/pages/resetpassword',$data);
			}
		}

		else
		{
			redirect('/');
		}
	}

}

/* End of file User.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/User.php */