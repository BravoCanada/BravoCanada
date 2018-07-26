<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model','Admin');
	}

	public function index()
	{
		$data['location']	=	$this->Admin->getAllLocations();
		$this->load->view('admin/pages/homepagestates',$data);
	}

	public function updateHomeLocation()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
		
			if($this->input->post())
			{
				$location 			=	$this->input->post('location');

				if(count($location) > 0)
				{
					$updateFeatured =	$this->Admin->updateLocationFeatured();

					for($i=0;$i<count($location); $i++)
					{
						$update 	=	$this->Admin->updateHomeLocation($location[$i]);
					}
				}

				$this->session->set_flashdata("error_message","<p class='alert alert-success'>Updated successfully !</p>");
				redirect('admin/setting');
			}

			else
			{
				redirect('admin/setting');
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

}

/* End of file Setting.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Setting.php */