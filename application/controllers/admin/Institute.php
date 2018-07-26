<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute extends CI_Controller {

	public function __construct() {	

		parent::__construct();			

		$this->load->helper('form');
		$this->load->model('Category_model','Category');	

	}

	public function index()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$data['institute']	=	$this->Category->getAll();			
			$this->load->view('admin/pages/institute',$data);
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function addInstitute()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{			

				$inst_logo_en 				=	'';
				$inst_logo_sp 				=	'';
				$inst_logo_tk 				=	'';
				$inst_logo_pr 				=	'';	
				$inst_course_image_en		=	'';			

				if($_FILES['inst_logo_en']['name'])
				{
					$inst_logo_en =  $this->do_upload('inst_logo_en');					
				}

				/*if($_FILES['inst_logo_sp']['name'])
				{
					$inst_logo_sp =  $this->do_upload('inst_logo_sp');					
				}

				if($_FILES['inst_logo_tk']['name'])
				{
					$inst_logo_tk =  $this->do_upload('inst_logo_tk');					
				}

				if($_FILES['inst_logo_pr']['name'])
				{
					$inst_logo_pr =  $this->do_upload('inst_logo_pr');					
				}*/

				if($_FILES['inst_course_image_en']['name'])	
				{
					$inst_course_image_en	=	$this->do_upload('inst_course_image_en');
				}			

				$data 		=	array
								(

									'inst_name_en' 			=>	$this->input->post('inst_name_en'),
									'inst_name_sp' 			=>	$this->input->post('inst_name_en'),
									'inst_name_tk' 			=>	$this->input->post('inst_name_en'),
									'inst_name_pr' 			=>	$this->input->post('inst_name_en'),
									'inst_description_en'	=>	$this->input->post('inst_description_en'),
									'inst_description_sp'	=>	$this->input->post('inst_description_en'),
									'inst_description_tk'	=>	$this->input->post('inst_description_en'),
									'inst_description_pr'	=>	$this->input->post('inst_description_en'),									
									'inst_logo_en'			=> 	$inst_logo_en,
									'inst_logo_sp'			=> 	$inst_logo_en,
									'inst_logo_tk'			=> 	$inst_logo_en,
									'inst_logo_pr'			=> 	$inst_logo_en,	
									'inst_course_image_en'	=>	$inst_course_image_en,
									'inst_course_image_sp'	=>	$inst_course_image_en,
									'inst_course_image_tk'	=>	$inst_course_image_en,
									'inst_course_image_pr'	=>	$inst_course_image_en,
									'inst_overview_en'		=>	$this->input->post('inst_overview_en'),
									'inst_overview_sp'		=>	$this->input->post('inst_overview_en'),
									'inst_overview_tk'		=>	$this->input->post('inst_overview_en'),
									'inst_overview_pr'		=>	$this->input->post('inst_overview_en'),
									'inst_acc_en'			=>	$this->input->post('inst_acc_en'),	
									'inst_acc_sp'			=>	$this->input->post('inst_acc_en'),	
									'inst_acc_tk'			=>	$this->input->post('inst_acc_en'),
									'inst_acc_pr'			=>	$this->input->post('inst_acc_en'),	
									'inst_local_info_en'	=>	$this->input->post('inst_local_info_en'),
									'inst_local_info_sp'	=>	$this->input->post('inst_local_info_en'),
									'inst_local_info_tk'	=>	$this->input->post('inst_local_info_en'),
									'inst_local_info_pr'	=>	$this->input->post('inst_local_info_en'),
									'inst_facility'			=>	serialize($this->input->post('inst_facility'))																	
								);

				//echo '<pre>';print_r($data);die;

				$insert_id 	=	$this->Category->insertion($data);

				if($insert_id)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Data saved successfully !</p>");
					redirect('admin/institute/addInstitute');
				}

			}

			else
			{
				// $data['institute'] = $this->Category->getAll();
				$this->load->view('admin/pages/addinstitute');
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function editInstitute($inst_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{

			if($this->input->post())
			{
				$inst_logo_en 				=	$this->input->post('hidden_inst_logo_en');
				$inst_logo_sp 				=	$this->input->post('hidden_inst_logo_sp');
				$inst_logo_tk 				=	$this->input->post('hidden_inst_logo_tk');
				$inst_logo_pr 				=	$this->input->post('hidden_inst_logo_pr');
				$inst_course_image_en		=	$this->input->post('hidden_inst_course_image_en');

				if($_FILES['inst_course_image_en']['name'])	
				{
					$inst_course_image_en	=	$this->do_upload('inst_course_image_en');
				}

				if($_FILES['inst_logo_en']['name'])
				{
					$inst_logo_en =  $this->do_upload('inst_logo_en');					
				}

				if($_FILES['inst_logo_sp']['name'])
				{
					$inst_logo_sp =  $this->do_upload('inst_logo_sp');					
				}

				if($_FILES['inst_logo_tk']['name'])
				{
					$inst_logo_tk =  $this->do_upload('inst_logo_tk');					
				}

				if($_FILES['inst_logo_pr']['name'])
				{
					$inst_logo_pr =  $this->do_upload('inst_logo_pr');					
				}

				$data 		=	array
								(

									'inst_name_en' 			=>	$this->input->post('inst_name_en'),
									'inst_name_sp' 			=>	$this->input->post('inst_name_sp'),
									'inst_name_tk' 			=>	$this->input->post('inst_name_tk'),
									'inst_name_pr' 			=>	$this->input->post('inst_name_pr'),
									'inst_description_en'	=>	$this->input->post('inst_description_en'),
									'inst_description_sp'	=>	$this->input->post('inst_description_sp'),
									'inst_description_tk'	=>	$this->input->post('inst_description_tk'),
									'inst_description_pr'	=>	$this->input->post('inst_description_pr'),									
									'inst_logo_en'			=> 	$inst_logo_en,
									'inst_logo_sp'			=> 	$inst_logo_sp,
									'inst_logo_tk'			=> 	$inst_logo_tk,
									'inst_logo_pr'			=> 	$inst_logo_pr,
									'inst_course_image_en'	=>	$inst_course_image_en,
									'inst_course_image_sp'	=>	$inst_course_image_en,
									'inst_course_image_tk'	=>	$inst_course_image_en,
									'inst_course_image_pr'	=>	$inst_course_image_en,
									'inst_overview_en'		=>	$this->input->post('inst_overview_en'),
									'inst_overview_sp'		=>	$this->input->post('inst_overview_sp'),
									'inst_overview_tk'		=>	$this->input->post('inst_overview_tk'),
									'inst_overview_pr'		=>	$this->input->post('inst_overview_pr'),
									'inst_acc_en'			=>	$this->input->post('inst_acc_en'),	
									'inst_acc_sp'			=>	$this->input->post('inst_acc_sp'),	
									'inst_acc_tk'			=>	$this->input->post('inst_acc_tk'),
									'inst_acc_pr'			=>	$this->input->post('inst_acc_pr'),	
									'inst_local_info_en'	=>	$this->input->post('inst_local_info_en'),
									'inst_local_info_sp'	=>	$this->input->post('inst_local_info_sp'),
									'inst_local_info_tk'	=>	$this->input->post('inst_local_info_tk'),
									'inst_local_info_pr'	=>	$this->input->post('inst_local_info_pr'),
									'inst_facility'			=>	serialize($this->input->post('inst_facility'))																									
								);

				//echo '<pre>';print_r($data);die;

				$result 	=	$this->Category->updation($this->input->post('inst_id'),$data);	


				if($result)
		    	{
		    		$this->session->set_flashdata("error_message","<p class='alert alert-success'>Updated successfully !</p>");
		    		redirect('admin/institute/editInstitute/'.$this->input->post('inst_id'));
		    	}

		    	else
		    	{
		    		$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please try again !</p>");
		    		redirect('admin/institute');
		    	}		
			}

			else
			{
				$data['instituteById']  =	 $this->Category->getCategoryById($inst_id);
				$data['inst_facility']	=	 unserialize($data['instituteById']->inst_facility);			

				$this->load->view('admin/pages/editinstitute',$data);
			}
			
		}

		else
		{
			redirect('admin/login');
		}	
	}

	public function deleteInstitute($inst_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$result 		=	$this->Category->deletion($inst_id);

			if($result)
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Deleted successfully !</p>");
		    	redirect('admin/institute');
			}

			else
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'Server Error Please Try Again !</p>");
		    	redirect('admin/institute');
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function do_upload($tag_name='')
    {  

    	if($this->session->userdata('loggedAdminUser'))
		{

			$this->load->library('upload');

	        $files          					   =   $_FILES;       

	        $fileName                              =  time().rand(0,999).$files[$tag_name]['name'];          
	        
	        $_FILES[$tag_name]['name']       	   =   strtolower($fileName);
	        $_FILES[$tag_name]['type']             =   $files[$tag_name]['type'];
	        $_FILES[$tag_name]['tmp_name']         =   $files[$tag_name]['tmp_name'];
	        $_FILES[$tag_name]['error']            =   $files[$tag_name]['error'];
	        $_FILES[$tag_name]['size']             =   $files[$tag_name]['size'];    

	        $this->upload->initialize($this->set_upload_options());

	        if($this->upload->do_upload($tag_name))
	        {
	           	$image_name 		=	str_replace(' ','_',strtolower($fileName));
	           	return $image_name;
	        }      
		} 

		else
		{
			redirect('admin/login');
		}  
    
         
    } 

    private function set_upload_options()
    {   
        //upload an image options
        $config = array();        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'png|PNG|jpg|JPG|gif|GIF';
        $config['max_size']             = 20000;
        $config['max_width']            = 20000;
        $config['max_height']           = 20000;

        return $config;
    } 


}

/* End of file Institute.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-3/Institute.php */