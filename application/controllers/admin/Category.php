<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() {	

		parent::__construct();			

		$this->load->helper('form');
		$this->load->model('Category_model','Category');

		$this->language = ($this->session->userdata('language')) ? ($this->session->userdata('language')) : config_item('language');	
		$this->lang->load('admin',$this->language);		

	}

	public function index()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$data['category']	=	$this->Category->getAll($this->language);			
			$this->load->view('admin/pages/category',$data);
		}

		else
		{
			redirect('admin/login');
		}
	}


	public function addCategory()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{				
				$cat_image_en 				=	'';
				$cat_image_sp 				=	'';
				$cat_image_tk 				=	'';
				$cat_image_pr 				=	'';
				$parent_cat_id_en 			=	'';
				$parent_cat_id_sp 			=	'';
				$parent_cat_id_tk 			=	'';
				$parent_cat_id_pr 			=	'';

				if($_FILES['cat_image_en']['name'])
				{
					$cat_image_en =  $this->do_upload();
					
				}

				if($_FILES['cat_image_sp']['name'])
				{
					$cat_image_sp =  $this->do_upload();
					
				}

				if($_FILES['cat_image_tk']['name'])
				{
					$cat_image_tk =  $this->do_upload();
					
				}

				if($_FILES['cat_image_pr']['name'])
				{
					$cat_image_pr =  $this->do_upload();
					
				}

				if($this->input->post('parent_cat_id_en'))
				{
					$parent_cat_id_en = $this->input->post('parent_cat_id_en');
				}

				if($this->input->post('parent_cat_id_sp'))
				{
					$parent_cat_id_sp = $this->input->post('parent_cat_id_sp');
				}

				if($this->input->post('parent_cat_id_tk'))
				{
					$parent_cat_id_tk = $this->input->post('parent_cat_id_tk');
				}

				if($this->input->post('parent_cat_id_pr'))
				{
					$parent_cat_id_pr = $this->input->post('parent_cat_id_pr');
				}


				$data 		=	array
								(

									'cat_name_en' 			=>	$this->input->post('cat_name_en'),
									'cat_name_sp' 			=>	$this->input->post('cat_name_sp'),
									'cat_name_tk' 			=>	$this->input->post('cat_name_tk'),
									'cat_name_pr' 			=>	$this->input->post('cat_name_pr'),
									'cat_description_en'	=>	$this->input->post('cat_description_en'),
									'cat_description_sp'	=>	$this->input->post('cat_description_sp'),
									'cat_description_tk'	=>	$this->input->post('cat_description_tk'),
									'cat_description_pr'	=>	$this->input->post('cat_description_pr'),
									'parent_cat_id_en'		=>	$parent_cat_id_en,
									'parent_cat_id_sp'		=>	$parent_cat_id_sp,
									'parent_cat_id_tk'		=>	$parent_cat_id_tk,
									'parent_cat_id_pr'		=>	$parent_cat_id_pr,
									'cat_image_en'			=> 	$cat_image_en,
									'cat_image_sp'			=> 	$cat_image_sp,
									'cat_image_tk'			=> 	$cat_image_tk,
									'cat_image_pr'			=> 	$cat_image_pr,
									'meta_keywords_en'		=>	$this->input->post('meta_keywords_en'),
									'meta_keywords_sp'		=>	$this->input->post('meta_keywords_sp'),
									'meta_keywords_tk'		=>	$this->input->post('meta_keywords_tk'),
									'meta_keywords_pr'		=>	$this->input->post('meta_keywords_pr'),
									'meta_description_en'	=>	$this->input->post('meta_description_en'),
									'meta_description_sp'	=>	$this->input->post('meta_description_sp'),
									'meta_description_tk'	=>	$this->input->post('meta_description_tk'),
									'meta_description_pr'	=>	$this->input->post('meta_description_pr'),															
								);

				$insert_id 	=	$this->Category->insertion($data);

				if($insert_id)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Category saved successfully !</p>");
					redirect('admin/category/addCategory');
				}

			}

			else
			{
				$data['category'] = $this->Category->getAll();
				$this->load->view('admin/pages/addcategory',$data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function do_upload()
    {  

    	if($this->session->userdata('loggedAdminUser'))
		{

			$this->load->library('upload');

	        $files          					   =   $_FILES;       

	        $fileName                              =  time().rand(0,999).$files['cat_image']['name'];          
	        
	        $_FILES['cat_image']['name']       	   =   strtolower($fileName);
	        $_FILES['cat_image']['type']           =   $files['cat_image']['type'];
	        $_FILES['cat_image']['tmp_name']       =   $files['cat_image']['tmp_name'];
	        $_FILES['cat_image']['error']          =   $files['cat_image']['error'];
	        $_FILES['cat_image']['size']           =   $files['cat_image']['size'];    

	        $this->upload->initialize($this->set_upload_options());

	        if($this->upload->do_upload('cat_image'))
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

    public function editCategory($cat_id=0)
    {

    	if($this->session->userdata('loggedAdminUser'))
		{

			if($this->input->post())
			{
				$parent_cat_id = 0;

				if($this->input->post('parent_cat_id'))
				{
					$parent_cat_id = $this->input->post('parent_cat_id');
				}

				if($_FILES['cat_image']['name'])
		    	{

		    			$cat_image  =  $this->do_upload();
		    			$data 		=	array
										(

											'cat_name' 			=>	$this->input->post('cat_name'),
											'cat_description'	=>	$this->input->post('cat_description'),
											'parent_cat_id'		=>	$parent_cat_id,
											'cat_image'			=> 	$cat_image,
											'meta_keywords'		=>	$this->input->post('meta_keywords'),
											'meta_description'	=>	$this->input->post('meta_description'),
											'cat_language'		=>	$this->language	
										);
		    	}

		    	else
		    	{
		    		$data 		=	array
										(

											'cat_name' 			=>	$this->input->post('cat_name'),
											'cat_description'	=>	$this->input->post('cat_description'),
											'parent_cat_id'		=>	$parent_cat_id,									
											'meta_keywords'		=>	$this->input->post('meta_keywords'),
											'meta_description'	=>	$this->input->post('meta_description'),
											'cat_language'		=>	$this->language	
										);
		    	}

		    	$result 	=	$this->Category->updation($this->input->post('cat_id'),$data);

		    	

		    	if($result)
		    	{
		    		$this->session->set_flashdata("error_message","<p class='alert alert-success'>Updated successfully !</p>");
		    		redirect('admin/category');
		    	}

		    	else
		    	{
		    		$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please try again !</p>");
		    		redirect('admin/category');
		    	}

			}

			else
			{
				$data['categoryById'] = $this->Category->getCategoryById($cat_id);
				$data['category'] = $this->Category->getAll();

				$this->load->view('admin/pages/editcategory',$data);
			}
			
		}

		else
		{
			redirect('admin/login');
		}	

    	
    }

    public function deleteCategory($cat_id=0)
    {
    	if($this->session->userdata('loggedAdminUser'))
		{
			$result 		=	$this->Category->deletion($cat_id);

			if($result)
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Deleted successfully !</p>");
		    	redirect('admin/category');
			}

			else
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'Server Error Please Try Again !</p>");
		    	redirect('admin/category');
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