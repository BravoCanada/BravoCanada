<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additionalfee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Course_model','Course');
		$this->load->model('Additionalfee_model','Additionalfee');
	}

	public function index()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$data['additionalfee']		=	$this->Additionalfee->getAll();		
 			$this->load->view('admin/pages/additionalfee',$data);
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function addAdditionalFees()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$fee_name_en[] 	=	'';
				/*$fee_name_sp	=	'';
				$fee_name_tk 	=	'';
				$fee_name_pr 	=	'';*/

				$price_en[] 	=	'';
			/*	$price_sp 		=	'';
				$price_tk 		=	'';
				$price_pr 		=	'';*/

				if(count(array_filter($this->input->post('fee_name_en'))) > 0)
				{
					$fee_name_en  = $this->input->post('fee_name_en');					
				}

				//echo '<pre>';print_r(count(array_filter($fee_name_en)));die;

				/*if(count(array_filter($this->input->post('fee_name_sp'))) > 0)
				{
					$fee_name_sp  = serialize($this->input->post('fee_name_sp'));
				}

				if(count(array_filter($this->input->post('fee_name_tk'))) > 0)
				{
					$fee_name_tk  = serialize($this->input->post('fee_name_tk'));
				}

				if(count(array_filter($this->input->post('fee_name_pr'))) > 0)
				{
					$fee_name_pr  = serialize($this->input->post('fee_name_pr'));
				}*/

				if(count(array_filter($this->input->post('price_en'))) > 0)
				{
					$price_en  = $this->input->post('price_en');
				}

				/*if(count(array_filter($this->input->post('price_sp'))) > 0)
				{
					$price_sp  = serialize($this->input->post('price_sp'));
				}

				if(count(array_filter($this->input->post('price_tk'))) > 0)
				{
					$price_tk  = serialize($this->input->post('price_tk'));
				}

				if(count(array_filter($this->input->post('price_pr'))) > 0)
				{
					$price_pr  = serialize($this->input->post('price_pr'));
				}*/


				for($i = 0 ; $i< count($fee_name_en) ; $i++)
				{

					$data 	=	array
									(
										'country_en' 	=>	$this->input->post('country_en'),
										'country_sp'	=>	$this->input->post('country_en'),
										'country_tk'	=>	$this->input->post('country_en'),
										'country_pr'	=>	$this->input->post('country_en'),
										'institute_en'	=>	$this->input->post('institute_en'),
										'institute_sp'	=>	$this->input->post('institute_en'),
										'institute_tk'	=>	$this->input->post('institute_en'),
										'institute_pr'	=>	$this->input->post('institute_en'),
										'fee_name_en'	=>	$fee_name_en[$i],
										'fee_name_sp'	=>	$fee_name_en[$i],
										'fee_name_tk'	=>	$fee_name_en[$i],
										'fee_name_pr'	=>	$fee_name_en[$i],
										'price_en'		=>	$price_en[$i],
										'price_sp' 		=>	$price_en[$i],
										'price_tk'		=>	$price_en[$i],
										'price_pr'		=>	$price_en[$i]
									);

					$insert_id =  $this->Additionalfee->insertion($data);

				}

				if($insert_id)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Data saved successfully !</p>");
					redirect('admin/Additionalfee/addAdditionalFees');
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/Additionalfee/addAdditionalFees');
				}
			}

			else
			{
				$data['country']		=	$this->Course->getAllCountry();
				$data['institute']		=	$this->Course->getAllInstitute();

				$this->load->view('admin/pages/addadditionalfee', $data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function editAdditionalFees($id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$data = array
							(
								'country_en'	=>	$this->input->post('country_en'),
								'country_sp'	=>	$this->input->post('country_sp'),
								'country_tk'	=>	$this->input->post('country_tk'),
								'country_pr'	=>	$this->input->post('country_pr'),
								'institute_en'	=>	$this->input->post('institute_en'),
								'institute_sp'	=>	$this->input->post('institute_sp'),
								'institute_tk'	=>	$this->input->post('institute_tk'),
								'institute_pr'	=>	$this->input->post('institute_pr'),
								'fee_name_en'	=>	$this->input->post('fee_name_en'),
								'fee_name_sp'	=>	$this->input->post('fee_name_sp'),
								'fee_name_tk'	=>	$this->input->post('fee_name_tk'),
								'fee_name_pr'	=>	$this->input->post('fee_name_pr'),
								'price_en'		=>	$this->input->post('price_en'),
								'price_sp'		=>	$this->input->post('price_sp'),
								'price_tk'		=>	$this->input->post('price_tk'),
								'price_pr'		=>	$this->input->post('price_pr')
							);

				$result 	=	$this->Additionalfee->updation($this->input->post('additional_fee_id'),$data);

				if($result)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Updated successfully !</p>");
					redirect('admin/Additionalfee/editAdditionalFees/'.$this->input->post('additional_fee_id'));
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Sever Error Please Try Again !</p>");
					redirect('admin/Additionalfee/editAdditionalFees/'.$this->input->post('additional_fee_id'));
				}
			}

			else
			{
				$data['country']		=	$this->Course->getAllCountry();
				$data['institute']		=	$this->Course->getAllInstitute();
				$data['additionalfee'] 	=	$this->Additionalfee->getAdditionalFeeById($id);			

				$this->load->view('admin/pages/editadditionalfee', $data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function deleteAdditionalFees($id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$result = $this->Additionalfee->deletion($id);

			if($result)
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Deleted successfully !</p>");
				redirect('admin/Additionalfee');
			}

			else
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Sever Error Please Try Again !</p>");
				redirect('admin/Additionalfee');
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

}

/* End of file Additionalfee.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Additionalfee.php */