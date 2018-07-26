<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accommodation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Course_model','Course');
		$this->load->model('Accommodation_model','Accommodation');
	}

	public function index()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$data['accommodation'] 	=	$this->Accommodation->getAll();
			$this->load->view('admin/pages/accommodation', $data);
		}

		else
		{
			redirect('admin/login');
		}
		
	}

	public function addAccommodation()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$acc_title_en[] 	=	'';
				$single_en[] 		=	'';
				$double_en[] 		=	'';
				$single_status_en[] = 	'';
				$double_status_en[] = 	'';

				if(count(array_filter($this->input->post('acc_title_en'))) > 0)
				{
					$acc_title_en   = 	$this->input->post('acc_title_en');
				}

				if(count(array_filter($this->input->post('single_en'))) > 0)
				{
					$single_en   = 	$this->input->post('single_en');
				}

				if(count(array_filter($this->input->post('double_en'))) > 0)
				{
					$double_en   = 	$this->input->post('double_en');
				}

				if(count(array_filter($this->input->post('single_status_en'))) > 0)
				{
					$single_status_en   = 	$this->input->post('single_status_en');
				}

				if(count(array_filter($this->input->post('double_status_en'))) > 0)
				{
					$double_status_en   = 	$this->input->post('double_status_en');
				}

				for($i=0; $i<count($acc_title_en) ; $i++)
				{
					$data 	=	array
									(
										'country_en' 		=>	$this->input->post('country_en'),
										'country_sp'		=>	$this->input->post('country_en'),
										'country_tk'		=>	$this->input->post('country_en'),
										'country_pr'		=>	$this->input->post('country_en'),
										'location_en'		=>	$this->input->post('location_en'),	
										'location_sp'		=>	$this->input->post('location_en'),
										'location_tk'		=>	$this->input->post('location_en'),
										'location_pr'		=>	$this->input->post('location_en'),
										'institute_en'		=>	$this->input->post('institute_en'),
										'institute_sp'		=>	$this->input->post('institute_en'),
										'institute_tk'		=>	$this->input->post('institute_en'),
										'institute_pr'		=>	$this->input->post('institute_en'),
										'acc_title_en'		=>	$acc_title_en[$i],
										'acc_title_sp'		=>	$acc_title_en[$i],
										'acc_title_tk'		=>	$acc_title_en[$i],
										'acc_title_pr'		=>	$acc_title_en[$i],
										'single_en'			=>	isset($single_en[$i]) ? $single_en[$i] : '',
										'single_sp'			=>	isset($single_en[$i]) ? $single_en[$i] : '',
										'single_tk'			=>	isset($single_en[$i]) ? $single_en[$i] : '',
										'single_pr'			=>	isset($single_en[$i]) ? $single_en[$i] : '',
										'double_en'			=>	isset($double_en[$i]) ? $double_en[$i] : '',
										'double_sp'			=>	isset($double_en[$i]) ? $double_en[$i] : '',
										'double_tk'			=>	isset($double_en[$i]) ? $double_en[$i] : '',
										'double_pr'			=>	isset($double_en[$i]) ? $double_en[$i] : '',
										'single_status_en'	=>	isset($single_status_en[$i]) ? $single_status_en[$i] : '',
										'single_status_sp'	=>	isset($single_status_en[$i]) ? $single_status_en[$i] : '',
										'single_status_tk'	=>	isset($single_status_en[$i]) ? $single_status_en[$i] : '',
										'single_status_pr'	=>	isset($single_status_en[$i]) ? $single_status_en[$i] : '',
										'double_status_en'	=>	isset($double_status_en[$i]) ? $double_status_en[$i] : '',
										'double_status_sp'	=>	isset($double_status_en[$i]) ? $double_status_en[$i] : '',
										'double_status_tk'	=>	isset($double_status_en[$i]) ? $double_status_en[$i] : '',
										'double_status_pr'	=>	isset($double_status_en[$i]) ? $double_status_en[$i] : '',
										'supp_fee_en'		=>	$this->input->post('supp_fee_en'),
										'supp_fee_en'		=>	$this->input->post('supp_fee_en'),
										'supp_fee_en'		=>	$this->input->post('supp_fee_en'),
										'supp_fee_en'		=>	$this->input->post('supp_fee_en'),
										'supp_fee_sp'		=>	$this->input->post('supp_fee_en'),
										'supp_fee_tk'		=>	$this->input->post('supp_fee_en'),
										'supp_fee_pr'		=>	$this->input->post('supp_fee_en')
									);
					

					$insert_id 	=	$this->Accommodation->insertion($data);
				}

				if($insert_id)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Data saved successfully !</p>");
					redirect('admin/Accommodation/addAccommodation');
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/Accommodation/addAccommodation');
				}
			}

			else
			{
				$data['country']		=	$this->Course->getAllCountry();
				$data['institute']		=	$this->Course->getAllInstitute();

				$this->load->view('admin/pages/addaccommodation',$data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function editAccommodation($acc_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$data 	=	array
									(
										'country_en' 		=>	$this->input->post('country_en'),
										'country_sp'		=>	$this->input->post('country_sp'),
										'country_tk'		=>	$this->input->post('country_tk'),
										'country_pr'		=>	$this->input->post('country_pr'),
										'location_en'		=>	$this->input->post('location_en'),	
										'location_sp'		=>	$this->input->post('location_sp'),
										'location_tk'		=>	$this->input->post('location_tk'),
										'location_pr'		=>	$this->input->post('location_pr'),
										'institute_en'		=>	$this->input->post('institute_en'),
										'institute_sp'		=>	$this->input->post('institute_sp'),
										'institute_tk'		=>	$this->input->post('institute_tk'),
										'institute_pr'		=>	$this->input->post('institute_pr'),
										'acc_title_en'		=>	$this->input->post('acc_title_en'),
										'acc_title_sp'		=>	$this->input->post('acc_title_sp'),
										'acc_title_tk'		=>	$this->input->post('acc_title_tk'),
										'acc_title_pr'		=>	$this->input->post('acc_title_pr'),
										'single_en'			=>	$this->input->post('single_en'),
										'single_sp'			=>	$this->input->post('single_sp'),
										'single_tk'			=>	$this->input->post('single_tk'),
										'single_pr'			=>	$this->input->post('single_pr'),
										'double_en'			=>	$this->input->post('double_en'),
										'double_sp'			=>	$this->input->post('double_sp'),
										'double_tk'			=>	$this->input->post('double_tk'),
										'double_pr'			=>	$this->input->post('double_pr'),
										'supp_fee_en'		=>	$this->input->post('supp_fee_en'),
										'supp_fee_sp'		=>	$this->input->post('supp_fee_sp'),
										'supp_fee_tk'		=>	$this->input->post('supp_fee_tk'),
										'supp_fee_pr'		=>	$this->input->post('supp_fee_pr'),
										'single_status_en'	=>	$this->input->post('single_status_en'),
										'single_status_sp'	=>	$this->input->post('single_status_sp'),
										'single_status_tk'	=>	$this->input->post('single_status_tk'),
										'single_status_pr'	=>	$this->input->post('single_status_pr'),
										'double_status_en'	=>	$this->input->post('double_status_en'),
										'double_status_sp'	=>	$this->input->post('double_status_sp'),
										'double_status_tk'	=>	$this->input->post('double_status_tk'),
										'double_status_pr'	=>	$this->input->post('double_status_pr')
									);

				$result 	=	$this->Accommodation->updation($this->input->post('acc_id'),$data);

				if($result)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Updated successfully !</p>");
					redirect('admin/Accommodation/editAccommodation/'.$this->input->post('acc_id'));
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/Accommodation/editAccommodation/'.$this->input->post('acc_id'));
				}
			}

			else
			{
				$data['accommodation']  = 	$this->Accommodation->getAccommodationById($acc_id);
				$data['country']		=	$this->Course->getAllCountry();
				$data['institute']		=	$this->Course->getAllInstitute();
				$data['location']		=	$this->Course->getLocationById($data['accommodation']->country_en);

				$this->load->view('admin/pages/editaccommodation', $data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function deleteAccommodation($acc_id = 0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$result = $this->Accommodation->deletion($acc_id);

			if($result)
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Deleted successfully !</p>");
				redirect('admin/Accommodation');
			}

			else
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
				redirect('admin/Accommodation');
			}
		}

		else
		{
			redirect('admin/login');
		}

	}

}

/* End of file Accommodation.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-3/Accommodation.php */