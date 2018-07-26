<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courseimage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model','Category');
		$this->load->model('Course_model','Course');
		$this->load->model('Admin_model','Admin');		
	}

	public function index()
	{
		$data['course_image'] 	=	$this->Admin->getAllCourseImage();

		$this->load->view('admin/pages/courseimage', $data);
	}

	public function addCourseImage()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$course_image 	=	'';
				if($_FILES['course_image']['name'])
				{
					$course_image =  $this->do_upload('course_image');					
				}

				$data 	=	array
								(

									'inst_id' 			=>	$this->input->post('institute_en'),
									'location_id'		=>	$this->input->post('location_en'),
									'course_image'		=>	$course_image,
									'location_iframe'	=>	$this->input->post('location_iframe')
								);

				$insert_id =	$this->Admin->insert_courseimage($data);

				if($insert_id)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Data saved successfully !</p>");
					redirect('admin/courseimage/addCourseImage');
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/courseimage/addCourseImage');
				}	
			}

			else
			{
				$data['institute']	=	$this->Category->getAll();
				$data['location']	=	$this->Course->getAllLocation();
				$this->load->view('admin/pages/addcourseimage',$data);
			}
			
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function editCourseImage($id=0)
	{		
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				if($_FILES['course_image']['name'])
				{
					$course_image  =  $this->do_upload('course_image');					
				}

				else
				{
					$course_image 	=	$this->input->post('hidden_course_image');
				}

				$data 	=	array
								(

									'inst_id' 			=>	$this->input->post('institute_en'),
									'location_id'		=>	$this->input->post('location_en'),
									'course_image'		=>	$course_image,
									'location_iframe'	=>	$this->input->post('location_iframe')
								);

				$result 	=	$this->Admin->updateCourseImage($this->input->post('hidden_course_id'),$data);

				if($result)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Data Updated successfully !</p>");
					redirect('admin/courseimage/editCourseImage/'.$this->input->post('hidden_course_id'));
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/courseimage/editCourseImage/'.$this->input->post('hidden_course_id'));
				}
			}

			else
			{
				$data['course_image'] 	=	$this->Admin->getCourseImageById($id);				
				$data['institute']		=	$this->Category->getAll();
				$data['location']		=	$this->Course->getAllLocation();
			}
		}

		else
		{
			redirect('admin/login');
		}	

		$this->load->view('admin/pages/editcourseimage', $data);
	}

	public function deleteCourseImage($id=0)
	{
		$result 	=	$this->Admin->deleteCourseImage($id);

		if($result)
		{
			$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Deleted successfully !</p>");
			redirect('admin/courseimage');
		}

		else
		{
			$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
			redirect('admin/courseimage');
		}
	}

	public function do_upload($tag_name='')
    {  

    	if($this->session->userdata('loggedAdminUser'))
		{

			$this->load->library('upload');

	        $files          					   =   $_FILES;       

	        $fileName                              =  time().rand(0,999).$files[$tag_name]['name'];      
	        $_FILES[$tag_name]['name']        	   =   strtolower($fileName);
	        $_FILES[$tag_name]['type']        	   =   $files[$tag_name]['type'];
	        $_FILES[$tag_name]['tmp_name']   	   =   $files[$tag_name]['tmp_name'];
	        $_FILES[$tag_name]['error']      	   =   $files[$tag_name]['error'];
	        $_FILES[$tag_name]['size']        	   =   $files[$tag_name]['size'];    

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

/* End of file Courseimage.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Courseimage.php */