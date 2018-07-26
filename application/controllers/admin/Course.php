<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct() 
	{

		parent::__construct();			

		$this->load->helper('form');
		$this->load->model('Course_model','Course');

		$this->language = ($this->session->userdata('language')) ? ($this->session->userdata('language')) : config_item('language');	
		$this->lang->load('admin',$this->language);		
	}

	public function index()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$data['course']		=	$this->Course->getAll();				
 			$this->load->view('admin/pages/course',$data);
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function addCourse()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$course_image_en 			=	'';			
				$price_en 					=	$this->input->post('price_en');
				$weeks_en 					=	'';
				$hours_en 					=	$this->input->post('hours_en');
				$location_en 				=	$this->input->post('location_en');				

				if(count(array_filter($price_en)) > 0)
				{					
					$price_en_g 	=	$this->input->post('price_en');
					$price_en_la 	=	$this->input->post('price_en_la');
					$price_en_tr	=	$this->input->post('price_en_tr');

					//echo '<pre>';print_r($price_en_la);die;

					for($i=0;$i<count($price_en_g);$i++)
					{
						$price 		=	$price_en_g[$i];											   

						if($price_en_la[$i] != '')
						{
							$price 	.=	','.$price_en_la[$i].'-'.'LA';
						}

						if($price_en_tr[$i] != '')
						{
							$price 	.=	','.$price_en_tr[$i].'-'.'TR';
						}

						$price_en11[]  =	$price;					

					}	
				}

				
				if(count($this->input->post('weeks_en')) > 0)
				{
					$weeks_en 	=	serialize($this->input->post('weeks_en'));
				}				

				if($_FILES['course_image_en']['name'])
				{
					$course_image_en =  $this->do_upload('course_image_en');					
				}

				for($i=0;$i<count($location_en);$i++)
				{

					$data 	=	array
								(
									'country_en' 				=> 	$this->input->post('country_en'),
									'country_sp'				=>	$this->input->post('country_en'),
									'country_tk'				=>	$this->input->post('country_en'),
									'country_pr'				=>	$this->input->post('country_en'),
									'location_en' 				=> 	$location_en[$i],
									'location_sp'				=>	$location_en[$i],
									'location_tk'				=>	$location_en[$i],
									'location_pr'				=>	$location_en[$i],
									'institute_en' 				=> 	$this->input->post('institute_en'),
									'institute_sp'				=>	$this->input->post('institute_en'),
									'institute_tk'				=>	$this->input->post('institute_en'),
									'institute_pr'				=>	$this->input->post('institute_en'),
									'course_title_en' 			=> 	$this->input->post('course_title_en'),
									'course_title_sp'			=>	$this->input->post('course_title_en'),
									'course_title_tk'			=>	$this->input->post('course_title_en'),
									'course_title_pr'			=>	$this->input->post('course_title_en'),
									'course_description_en' 	=> 	$this->input->post('course_description_en'),
									'course_description_sp'		=>	$this->input->post('course_description_en'),
									'course_description_tk'		=>	$this->input->post('course_description_en'),
									'course_description_pr'		=>	$this->input->post('course_description_en'),
									'course_image_en'			=>	$course_image_en,
									'course_image_sp'			=>	$course_image_en,
									'course_image_tk'			=>	$course_image_en,
									'course_image_pr'			=>	$course_image_en,
									'course_time_en '			=>	$this->input->post('course_time_en'),
									'course_time_sp'			=>	$this->input->post('course_time_en'),
									'course_time_tk'			=>	$this->input->post('course_time_en'),
									'course_time_pr'			=>	$this->input->post('course_time_en'),
									'starting_date_en'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_en'))),
									'starting_date_sp'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_en'))),
									'starting_date_tk'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_en'))),
									'starting_date_pr'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_en'))),
									'total_lesson_en'			=>	$this->input->post('total_lesson_en'),
									'total_lesson_sp'			=>	$this->input->post('total_lesson_en'),
									'total_lesson_tk'			=>	$this->input->post('total_lesson_en'),
									'total_lesson_pr'			=>	$this->input->post('total_lesson_en'),
									'currency_en'				=>	$this->input->post('currency_en'),
									'currency_sp'				=>	$this->input->post('currency_en'),
									'currency_tk'				=>	$this->input->post('currency_en'),
									'currency_pr'				=>	$this->input->post('currency_en'),
									'price_en'					=>	serialize($price_en11),
									'price_sp'					=>	serialize($price_en11),
									'price_tk'					=>	serialize($price_en11),
									'price_pr'					=>	serialize($price_en11),
									'weeks_en'					=>	$weeks_en,
									'weeks_sp'					=>	$weeks_en,
									'weeks_tk'					=>	$weeks_en,
									'weeks_pr'					=>	$weeks_en,
									'hours_en'					=>	serialize($hours_en),
									'hours_sp'					=>	serialize($hours_en),
									'hours_tk'					=>	serialize($hours_en),
									'hours_pr'					=>	serialize($hours_en),
									'course_intensity_en'		=>	$this->input->post('course_intensity_en'),
									'course_intensity_sp'		=>	$this->input->post('course_intensity_en'),
									'course_intensity_tk'		=>	$this->input->post('course_intensity_en'),
									'course_intensity_pr'		=>	$this->input->post('course_intensity_en'),
									'course_tag'				=>	$this->input->post('course_tag'),
									'course_discount'			=>	$this->input->post('course_discount_en'),
									'course_reg_fee'			=>	$this->input->post('course_reg_fee_en')

								);
					
					$insert_id = $this->Course->insertion($data);	

				}	
				

				if($insert_id)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Data saved successfully !</p>");
					redirect('admin/course/addCourse');
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/course/addCourse');
				}			

			}

			else
			{
				$data['country']		=	$this->Course->getAllCountry();
				$data['institute']		=	$this->Course->getAllInstitute();
				$data['course_tag']		=	$this->Course->getAllTag();				

				$this->load->view('admin/pages/addcourse',$data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function editCourse($course_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				//echo '<pre>';print_r($this->input->post());die;
				$course_image_en 			=	$this->input->post('hidden_course_image_en');
				$course_image_sp 			=	$this->input->post('hidden_course_image_sp');
				$course_image_tk 			=	$this->input->post('hidden_course_image_tk');
				$course_image_pr 			=	$this->input->post('hidden_course_image_pr');	
				//$location_id 				=	$this->input->post('location_en');			

				$price_en 					=	$this->input->post('price_en');
				$price_sp 					=	$this->input->post('price_sp');
				$price_tk					=	$this->input->post('price_tk');
				$price_pr 					=	$this->input->post('price_pr');

				$weeks_en 					=	'';
				$weeks_sp 					=	'';
				$weeks_tk 					=	'';
				$weeks_pr 					=	'';

				$hours_en 					=	'';
				$hours_sp 					=	'';
				$hours_tk 					=	'';
				$hours_pr 					=	'';

				if(count(array_filter($price_en)) > 0)
				{					
					$price_en_g 	=	$this->input->post('price_en');
					$price_en_la 	=	$this->input->post('price_en_la');
					$price_en_tr	=	$this->input->post('price_en_tr');					

					for($i=0;$i<count($price_en_g);$i++)
					{
						$price 		=	$price_en_g[$i];											   

						if($price_en_la[$i] != '')
						{
							$price 	.=	','.$price_en_la[$i].'-'.'LA';
						}

						if($price_en_tr[$i] != '')
						{
							$price 	.=	','.$price_en_tr[$i].'-'.'TR';
						}

						$price_en11[]  =	$price;					

					}	
				}

				if(count($this->input->post('hours_en')) > 0)
				{
					$hours_en 	=	serialize($this->input->post('hours_en'));
				}

				if(count($this->input->post('hours_sp')) > 0)
				{
					$hours_sp 	=	serialize($this->input->post('hours_sp'));
				}

				if(count($this->input->post('hours_tk')) > 0)
				{
					$hours_tk 	=	serialize($this->input->post('hours_tk'));
				}

				if(count($this->input->post('hours_pr')) > 0)
				{
					$hours_pr 	=	serialize($this->input->post('hours_pr'));
				}

				if(count($this->input->post('weeks_en')) > 0)
				{
					$weeks_en 	=	serialize($this->input->post('weeks_en'));
				}

				if(count($this->input->post('weeks_sp')) > 0)
				{
					$weeks_sp 	=	serialize($this->input->post('weeks_sp'));
				}

				if(count($this->input->post('weeks_tk')) > 0)
				{
					$weeks_tk 	=	serialize($this->input->post('weeks_tk'));
				}

				if(count($this->input->post('weeks_pr')) > 0)
				{
					$weeks_pr 	=	serialize($this->input->post('weeks_pr'));
				}

				if($_FILES['course_image_en']['name'])
				{
					$course_image_en =  $this->do_upload('course_image_en');					
				}

				if($_FILES['course_image_sp']['name'])
				{
					$course_image_sp =  $this->do_upload('course_image_sp');					
				}

				if($_FILES['course_image_tk']['name'])
				{
					$course_image_tk =  $this->do_upload('course_image_tk');					
				}

				if($_FILES['course_image_pr']['name'])
				{
					$course_image_pr =  $this->do_upload('course_image_pr');					
				}

				$data 	=	array
								(
									'country_en' 				=> 	$this->input->post('country_en'),
									'country_sp'				=>	$this->input->post('country_sp'),
									'country_tk'				=>	$this->input->post('country_tk'),
									'country_pr'				=>	$this->input->post('country_pr'),
									'location_en' 				=>  $this->input->post('location_en'),
									'location_sp'				=>	$this->input->post('location_en'),
									'location_tk'				=>	$this->input->post('location_en'),
									'location_pr'				=>	$this->input->post('location_en'),
									'institute_en' 				=> 	$this->input->post('institute_en'),
									'institute_sp'				=>	$this->input->post('institute_sp'),
									'institute_tk'				=>	$this->input->post('institute_tk'),
									'institute_pr'				=>	$this->input->post('institute_pr'),
									'course_title_en' 			=> 	$this->input->post('course_title_en'),
									'course_title_sp'			=>	$this->input->post('course_title_sp'),
									'course_title_tk'			=>	$this->input->post('course_title_tk'),
									'course_title_pr'			=>	$this->input->post('course_title_pr'),
									'course_description_en' 	=> 	$this->input->post('course_description_en'),
									'course_description_sp'		=>	$this->input->post('course_description_sp'),
									'course_description_tk'		=>	$this->input->post('course_description_tk'),
									'course_description_pr'		=>	$this->input->post('course_description_pr'),
									'course_image_en'			=>	$course_image_en,
									'course_image_sp'			=>	$course_image_sp,
									'course_image_tk'			=>	$course_image_tk,
									'course_image_pr'			=>	$course_image_pr,
									'course_time_en '			=>	$this->input->post('course_time_en'),
									'course_time_sp'			=>	$this->input->post('course_time_sp'),
									'course_time_tk'			=>	$this->input->post('course_time_tk'),
									'course_time_pr'			=>	$this->input->post('course_time_pr'),
									'starting_date_en '			=>	date('Y-m-d',strtotime($this->input->post('starting_date_en'))),
									'starting_date_sp'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_sp'))),
									'starting_date_tk'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_tk'))),
									'starting_date_pr'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_pr'))),
									'total_lesson_en'			=>	$this->input->post('total_lesson_en'),
									'total_lesson_sp'			=>	$this->input->post('total_lesson_sp'),
									'total_lesson_tk'			=>	$this->input->post('total_lesson_tk'),
									'total_lesson_pr'			=>	$this->input->post('total_lesson_pr'),
									'currency_en'				=>	$this->input->post('currency_en'),
									'currency_sp'				=>	$this->input->post('currency_sp'),
									'currency_tk'				=>	$this->input->post('currency_tk'),
									'currency_pr'				=>	$this->input->post('currency_pr'),
									'price_en'					=>	serialize($price_en11),
									'price_sp'					=>	serialize($price_en11),
									'price_tk'					=>	serialize($price_en11),
									'price_pr'					=>	serialize($price_en11),
									'weeks_en'					=>	$weeks_en,
									'weeks_sp'					=>	$weeks_sp,
									'weeks_tk'					=>	$weeks_tk,
									'weeks_pr'					=>	$weeks_pr,
									'hours_en'					=>	$hours_en,
									'hours_sp'					=>	$hours_sp,
									'hours_tk'					=>	$hours_tk,
									'hours_pr'					=>	$hours_pr,
									'course_intensity_en'		=>	$this->input->post('course_intensity_en'),
									'course_intensity_sp'		=>	$this->input->post('course_intensity_sp'),
									'course_intensity_tk'		=>	$this->input->post('course_intensity_tk'),
									'course_intensity_pr'		=>	$this->input->post('course_intensity_pr'),
									'course_tag'				=>	$this->input->post('course_tag'),
									'course_discount'			=>	$this->input->post('course_discount_en'),
									'course_reg_fee'			=>	$this->input->post('course_reg_fee_en')

								);
					
				$result = $this->Course->updation($this->input->post('course_id'), $data);							

				if($result)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Updated successfully !</p>");
					redirect('admin/course/editCourse/'.$this->input->post('course_id'));
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/course/editCourse/'.$this->input->post('course_id'));
				}			
			}

			else
			{
				$data['course'] 		=	$this->Course->getCourseById($course_id);				
				$data['country']		=	$this->Course->getAllCountry();
				$data['course_tag']		=	$this->Course->getAllTag();
				$data['institute']		=	$this->Course->getAllInstitute();
				$data['location']		=	$this->Course->getLocationById($data['course']->country_en);				
				// $data['price_en']    = 	($data['course']->price_en) ? unserialize($data['course']->price_en) : '';
				// $data['price_sp']    = 	($data['course']->price_sp) ? unserialize($data['course']->price_sp) : '';
				// $data['price_tk']    = 	($data['course']->price_tk) ? unserialize($data['course']->price_tk) : '';
				// $data['price_pr']    = 	($data['course']->price_pr) ? unserialize($data['course']->price_pr) : '';
				$data['weeks_en']       = 	($data['course']->weeks_en) ? unserialize($data['course']->weeks_en) : '';
				$data['weeks_sp']       = 	($data['course']->weeks_sp) ? unserialize($data['course']->weeks_sp) : '';
				$data['weeks_tk']       = 	($data['course']->weeks_tk) ? unserialize($data['course']->weeks_tk) : '';
				$data['weeks_pr']       = 	($data['course']->weeks_pr) ? unserialize($data['course']->weeks_pr) : '';
				$data['hours_en']       = 	($data['course']->hours_en) ? unserialize($data['course']->hours_en) : '';
				$data['hours_sp']       = 	($data['course']->hours_sp) ? unserialize($data['course']->hours_sp) : '';
				$data['hours_tk']       = 	($data['course']->hours_tk) ? unserialize($data['course']->hours_tk) : '';
				$data['hours_pr']       = 	($data['course']->hours_pr) ? unserialize($data['course']->hours_pr) : '';
				$data['price_en'] 		=	unserialize($data['course']->price_en);

				//echo '<pre>';print_r($data['price_en']);die;
				$price_en_la 			=	array();
				$price_en_tr 			=	array();
				$price_g 				=	array();

				for($i=0;$i<count($data['price_en']);$i++)
				{						
					$price_la 	=	explode(',', $data['price_en'][$i]);
					$price_g[] 	=	$price_la[0];

					if(count($price_la) > 1)
					{
						$price_la_1 	= 	explode('-',$price_la[1]);
						$price_en_la[] 	=	$price_la_1[0];						
					}

					if(count($price_la) > 2)
					{
						$price_tr_1 	=	explode('-',$price_la[2]);
						$price_en_tr[]	=	$price_tr_1[0];
					}
				}

				$data['price_en_la']	=	$price_en_la;
				$data['price_en_tr']	=	$price_en_tr;
				$data['price_g']		=	$price_g;

				//echo '<pre>';print_r(count($data['price_en_la']));die;				
				$this->load->view('admin/pages/editcourse', $data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}


	public function editCourse11($course_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				//echo '<pre>';print_r($this->input->post());die;
				$course_image_en 			=	$this->input->post('hidden_course_image_en');
				$course_image_sp 			=	$this->input->post('hidden_course_image_sp');
				$course_image_tk 			=	$this->input->post('hidden_course_image_tk');
				$course_image_pr 			=	$this->input->post('hidden_course_image_pr');	
				$location_id 				=	$this->input->post('location_en');			

				$price_en 					=	$this->input->post('price_en');
				$price_sp 					=	$this->input->post('price_sp');
				$price_tk					=	$this->input->post('price_tk');
				$price_pr 					=	$this->input->post('price_pr');

				$weeks_en 					=	'';
				$weeks_sp 					=	'';
				$weeks_tk 					=	'';
				$weeks_pr 					=	'';

				$hours_en 					=	'';
				$hours_sp 					=	'';
				$hours_tk 					=	'';
				$hours_pr 					=	'';

				if(count(array_filter($price_en)) > 0)
				{					
					$price_en_g 	=	$this->input->post('price_en');
					$price_en_la 	=	$this->input->post('price_en_la');
					$price_en_tr	=	$this->input->post('price_en_tr');					

					for($i=0;$i<count($price_en_g);$i++)
					{
						$price 		=	$price_en_g[$i];											   

						if($price_en_la[$i] != '')
						{
							$price 	.=	','.$price_en_la[$i].'-'.'LA';
						}

						if($price_en_tr[$i] != '')
						{
							$price 	.=	','.$price_en_tr[$i].'-'.'TR';
						}

						$price_en11[]  =	$price;					

					}	
				}

				if(count($this->input->post('hours_en')) > 0)
				{
					$hours_en 	=	serialize($this->input->post('hours_en'));
				}

				if(count($this->input->post('hours_sp')) > 0)
				{
					$hours_sp 	=	serialize($this->input->post('hours_sp'));
				}

				if(count($this->input->post('hours_tk')) > 0)
				{
					$hours_tk 	=	serialize($this->input->post('hours_tk'));
				}

				if(count($this->input->post('hours_pr')) > 0)
				{
					$hours_pr 	=	serialize($this->input->post('hours_pr'));
				}

				if(count($this->input->post('weeks_en')) > 0)
				{
					$weeks_en 	=	serialize($this->input->post('weeks_en'));
				}

				if(count($this->input->post('weeks_sp')) > 0)
				{
					$weeks_sp 	=	serialize($this->input->post('weeks_sp'));
				}

				if(count($this->input->post('weeks_tk')) > 0)
				{
					$weeks_tk 	=	serialize($this->input->post('weeks_tk'));
				}

				if(count($this->input->post('weeks_pr')) > 0)
				{
					$weeks_pr 	=	serialize($this->input->post('weeks_pr'));
				}

				if($_FILES['course_image_en']['name'])
				{
					$course_image_en =  $this->do_upload('course_image_en');					
				}

				if($_FILES['course_image_sp']['name'])
				{
					$course_image_sp =  $this->do_upload('course_image_sp');					
				}

				if($_FILES['course_image_tk']['name'])
				{
					$course_image_tk =  $this->do_upload('course_image_tk');					
				}

				if($_FILES['course_image_pr']['name'])
				{
					$course_image_pr =  $this->do_upload('course_image_pr');					
				}

				$deleteCourse 	=	$this->Course->DeleteCourse($this->input->post('course_id'));

				for($i=0;$i<count($location_id);$i++)
				{
					$data 	=	array
								(
									'country_en' 				=> 	$this->input->post('country_en'),
									'country_sp'				=>	$this->input->post('country_sp'),
									'country_tk'				=>	$this->input->post('country_tk'),
									'country_pr'				=>	$this->input->post('country_pr'),
									'location_en' 				=>  $location_id[$i],
									'location_sp'				=>	$location_id[$i],
									'location_tk'				=>	$location_id[$i],
									'location_pr'				=>	$location_id[$i],
									'institute_en' 				=> 	$this->input->post('institute_en'),
									'institute_sp'				=>	$this->input->post('institute_sp'),
									'institute_tk'				=>	$this->input->post('institute_tk'),
									'institute_pr'				=>	$this->input->post('institute_pr'),
									'course_title_en' 			=> 	$this->input->post('course_title_en'),
									'course_title_sp'			=>	$this->input->post('course_title_sp'),
									'course_title_tk'			=>	$this->input->post('course_title_tk'),
									'course_title_pr'			=>	$this->input->post('course_title_pr'),
									'course_description_en' 	=> 	$this->input->post('course_description_en'),
									'course_description_sp'		=>	$this->input->post('course_description_sp'),
									'course_description_tk'		=>	$this->input->post('course_description_tk'),
									'course_description_pr'		=>	$this->input->post('course_description_pr'),
									'course_image_en'			=>	$course_image_en,
									'course_image_sp'			=>	$course_image_sp,
									'course_image_tk'			=>	$course_image_tk,
									'course_image_pr'			=>	$course_image_pr,
									'course_time_en '			=>	$this->input->post('course_time_en'),
									'course_time_sp'			=>	$this->input->post('course_time_sp'),
									'course_time_tk'			=>	$this->input->post('course_time_tk'),
									'course_time_pr'			=>	$this->input->post('course_time_pr'),
									'starting_date_en '			=>	date('Y-m-d',strtotime($this->input->post('starting_date_en'))),
									'starting_date_sp'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_sp'))),
									'starting_date_tk'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_tk'))),
									'starting_date_pr'			=>	date('Y-m-d',strtotime($this->input->post('starting_date_pr'))),
									'total_lesson_en'			=>	$this->input->post('total_lesson_en'),
									'total_lesson_sp'			=>	$this->input->post('total_lesson_sp'),
									'total_lesson_tk'			=>	$this->input->post('total_lesson_tk'),
									'total_lesson_pr'			=>	$this->input->post('total_lesson_pr'),
									'currency_en'				=>	$this->input->post('currency_en'),
									'currency_sp'				=>	$this->input->post('currency_sp'),
									'currency_tk'				=>	$this->input->post('currency_tk'),
									'currency_pr'				=>	$this->input->post('currency_pr'),
									'price_en'					=>	serialize($price_en11),
									'price_sp'					=>	serialize($price_en11),
									'price_tk'					=>	serialize($price_en11),
									'price_pr'					=>	serialize($price_en11),
									'weeks_en'					=>	$weeks_en,
									'weeks_sp'					=>	$weeks_sp,
									'weeks_tk'					=>	$weeks_tk,
									'weeks_pr'					=>	$weeks_pr,
									'hours_en'					=>	$hours_en,
									'hours_sp'					=>	$hours_sp,
									'hours_tk'					=>	$hours_tk,
									'hours_pr'					=>	$hours_pr,
									'course_intensity_en'		=>	$this->input->post('course_intensity_en'),
									'course_intensity_sp'		=>	$this->input->post('course_intensity_sp'),
									'course_intensity_tk'		=>	$this->input->post('course_intensity_tk'),
									'course_intensity_pr'		=>	$this->input->post('course_intensity_pr'),
									'course_tag'				=>	$this->input->post('course_tag'),
									'course_discount'			=>	$this->input->post('course_discount_en'),
									'course_reg_fee'			=>	$this->input->post('course_reg_fee_en')

								);	

					$insert_id = $this->Course->insertion($data);			

				}			

				if($insert_id)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-success'>Updated successfully !</p>");
					redirect('admin/course/editCourse/'.$this->input->post('course_id'));
				}

				else
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
					redirect('admin/course/editCourse/'.$this->input->post('course_id'));
				}			
			}

			else
			{
				$data['course'] 		=	$this->Course->getCourseById($course_id);				
				$data['country']		=	$this->Course->getAllCountry();
				$data['course_tag']		=	$this->Course->getAllTag();
				$data['institute']		=	$this->Course->getAllInstitute();
				$data['location']		=	$this->Course->getLocationById($data['course']->country_en);				
				// $data['price_en']    = 	($data['course']->price_en) ? unserialize($data['course']->price_en) : '';
				// $data['price_sp']    = 	($data['course']->price_sp) ? unserialize($data['course']->price_sp) : '';
				// $data['price_tk']    = 	($data['course']->price_tk) ? unserialize($data['course']->price_tk) : '';
				// $data['price_pr']    = 	($data['course']->price_pr) ? unserialize($data['course']->price_pr) : '';
				$data['weeks_en']       = 	($data['course']->weeks_en) ? unserialize($data['course']->weeks_en) : '';
				$data['weeks_sp']       = 	($data['course']->weeks_sp) ? unserialize($data['course']->weeks_sp) : '';
				$data['weeks_tk']       = 	($data['course']->weeks_tk) ? unserialize($data['course']->weeks_tk) : '';
				$data['weeks_pr']       = 	($data['course']->weeks_pr) ? unserialize($data['course']->weeks_pr) : '';
				$data['hours_en']       = 	($data['course']->hours_en) ? unserialize($data['course']->hours_en) : '';
				$data['hours_sp']       = 	($data['course']->hours_sp) ? unserialize($data['course']->hours_sp) : '';
				$data['hours_tk']       = 	($data['course']->hours_tk) ? unserialize($data['course']->hours_tk) : '';
				$data['hours_pr']       = 	($data['course']->hours_pr) ? unserialize($data['course']->hours_pr) : '';
				$data['price_en'] 		=	unserialize($data['course']->price_en);

				//echo '<pre>';print_r($data['price_en']);die;
				$price_en_la 			=	array();
				$price_en_tr 			=	array();
				$price_g 				=	array();

				for($i=0;$i<count($data['price_en']);$i++)
				{						
					$price_la 	=	explode(',', $data['price_en'][$i]);
					$price_g[] 	=	$price_la[0];

					if(count($price_la) > 1)
					{
						$price_la_1 	= 	explode('-',$price_la[1]);
						$price_en_la[] 	=	$price_la_1[0];						
					}

					if(count($price_la) > 2)
					{
						$price_tr_1 	=	explode('-',$price_la[2]);
						$price_en_tr[]	=	$price_tr_1[0];
					}
				}

				$data['price_en_la']	=	$price_en_la;
				$data['price_en_tr']	=	$price_en_tr;
				$data['price_g']		=	$price_g;

				//echo '<pre>';print_r(count($data['price_en_la']));die;				
				$this->load->view('admin/pages/editcourse', $data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function deleteCourse($course_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$result = $this->Course->deleteCourse($course_id);

			if($result)
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Deleted successfully !</p>");
		    	redirect('admin/course');
			}

			else
			{
				$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Server Error Please Try Again !</p>");
		    	redirect('admin/course');
			}
		}

		else
		{
			redirect('admin/login');
		}
		
	}

	public function getLocation($country_id=0)
	{
		$location 		= 	$this->Course->getLocation($country_id);
		$output 		=	'';

		foreach ($location as $rows) 
		{
			$output    .= 	'<option value="'.$rows->location_id.'">'.$rows->location_name.'</option>';
		}

		echo json_encode($output);die;
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

/* End of file Course.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Course.php */