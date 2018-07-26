<?php



if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Forgotpassword extends CI_Controller {	

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

				$email = $this->input->post('email');
				$findemail = $this->frontmodel->forgotpassword($email);
				//echo '<pre>';print_r($findemail);die;
				if ($findemail) 
				{
					//$this->frontmodel->sendpassword($findemail);

					$this->load->library('email');

					$content  = '<h3>Hi '.$findemail->fname.'</h3>';
					$content .= '</br>';
					$content .= '<p>Please Visit below link to reset your Password</p>';
					$content .=	"<a href='".base_url()."forgotpassword/resetPassword/".$findemail->id."'>".base_url()."forgotpassword/resetPassword/".$findemail->id."</a>";

					$this->email->from('info@carauction.com', 'Carauction');
					$this->email->to($this->input->post('email'));					
					$this->email->set_mailtype('html');
					$this->email->set_newline('\r\n');
					$this->email->subject('Forgot Password');
					$this->email->message($content);			
					$this->email->send();

					redirect('login');

				} 

				else
				{
					echo "<script>alert(' $email not found, please enter correct email id')</script>";
					redirect(base_url() . 'forgotpassword/index', 'refresh');
				}

			}

			else
			{

				$this->load->view('front/forgotpassword');

			}

		} 

	}

	public function resetPassword($user_id = 0)
	{

		if($this->input->post())
		{
			$result = $this->frontmodel->resetPassword($user_id,md5($this->input->post('password')));

			if($result)
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-success'>Password reset successfully !.</p>");
				redirect('login');
			}
		}		

		$this->load->view('front/resetpassword');
	}

}

?>