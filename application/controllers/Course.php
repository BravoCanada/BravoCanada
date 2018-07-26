<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Course_model','Course');
		$this->load->model('User_model','User');
		$this->load->model('Additionalfee_model','Additionalfee');

		$language = ($this->session->userdata('language')) ? ($this->session->userdata('language')) : config_item('language');	
		$this->lang->load('user',$language);		
	}

	public function index()
	{

		if($this->session->userdata('language') == 'SP')
		{
			$data['course_sp'] = $this->Course->getAllCourseByDiscount();
		}

		else if($this->session->userdata('language') == 'TK')
		{
			$data['course_tk'] = $this->Course->getAllCourseByDiscount();
		}

		else if($this->session->userdata('language') == 'PR')
		{
			$data['course_pr'] = $this->Course->getAllCourseByDiscount();
		}

		else
		{
			$data['course_en'] = $this->Course->getAllCourseByDiscount();
		}		

		$this->load->view('user/pages/course',$data);
	
	}

	public function viewCourse($course_id=0)
	{
		if($course_id)
		{

			$course 						=	$this->Course->getCourseById($course_id);	
			$inst_id 						=	$course->institute_en;		
			$price1 						=	unserialize($course->price_en);
			$price 							=	explode(',', $price1[0]);							
			$data['price']					=	$price[0];
			$data['course']					=	$course;
			$data['institute']				=	$this->Course->getInstituteById($course->institute_en);	

			$data['inst_facility']			=	unserialize($data['institute']->inst_facility);	
		
			if($this->session->userdata('language') == 'english')
			{
				$data['course_en'] 			= 	$this->Course->getCourseByLocationEn($course->location_en,$course->institute_en);
				$data['additional_fees_en']	=	$this->Additionalfee->getAdditionalByCountryEn($course->country_en,$course->institute_en);
				$data['accommodation_en']	=	$this->Additionalfee->getAccommodationByEn($course->location_en,$course->institute_en,$course->country_en);

				if($inst_id == 3)
				{
					
					$week1 			=	unserialize($course->weeks_en);
					$hrs 			=	unserialize($course->hours_en);
					$weeks_en 		=	array_unique($week1);

					foreach ($week1 as $key => $value) 
					{
						if($value == $weeks_en[0])
						{
							$week_key[] 	=	$key;
						}
					}

					for($j=0;$j<count($week_key);$j++)
					{
						$hours_en[]	=	$hrs[$j];
					}					
					$data['weeks_en']	=	$weeks_en;
					$data['hours_en']	=	$hours_en;
				}
				
			}

			if($this->session->userdata('language') == 'SP')
			{
				$data['course_sp'] 			= 	$this->Course->getCourseByLocationSp($course->location_en,$course->institute_en);
				$data['additional_fees_sp']	=	$this->Additionalfee->getAdditionalByCountrySp($course->country_en,$course->institute_en);
				$data['accommodation_sp']	=	$this->Additionalfee->getAccommodationBySp($course->location_en,$course->institute_en,$course->country_en);

				/*if($inst_id == 3)
				{					
					$week1 			=	unserialize($course->weeks_sp);
					$hrs 			=	unserialize($course->hours_sp);
					$weeks_sp 		=	array_unique($week1);

					foreach ($week1 as $key => $value) 
					{
						if($value == $weeks_sp[0])
						{
							$week_key[] 	=	$key;
						}
					}

					for($j=0;$j<count($week_key);$j++)
					{
						$hours_sp[]	=	$hrs[$j];
					}				

					
					$data['weeks_sp']	=	$weeks_sp;
					$data['hours_sp']	=	$hours_sp;
				}*/
				
			}		

			if($this->session->userdata('language') == 'TK')
			{
				$data['course_tk'] 			= 	$this->Course->getCourseByLocationTk($course->location_en,$course->institute_en);
				$data['additional_fees_tk']	=	$this->Additionalfee->getAdditionalByCountryTk($course->country_en,$course->institute_en);
				$data['accommodation_tk']	=	$this->Additionalfee->getAccommodationByTk($course->location_en,$course->institute_en,$course->country_en);

				/*if($inst_id == 3)
				{
					
					$week1 			=	unserialize($course->weeks_tk);
					$hrs 			=	unserialize($course->hours_tk);
					$weeks_tk 		=	array_unique($week1);

					foreach ($week1 as $key => $value) 
					{
						if($value == $weeks_tk[0])
						{
							$week_key[] 	=	$key;
						}
					}

					for($j=0;$j<count($week_key);$j++)
					{
						$hours_tk[]	=	$hrs[$j];
					}					
					$data['weeks_tk']	=	$weeks_tk;
					$data['hours_tk']	=	$hours_tk;
				}*/
				
			}

			if($this->session->userdata('language') == 'PR')
			{
				$data['course_pr'] 			= 	$this->Course->getCourseByLocationPr($course->location_en,$course->institute_en);
				$data['additional_fees_pr']	=	$this->Additionalfee->getAdditionalByCountryPr($course->country_en,$course->institute_en);
				$data['accommodation_pr']	=	$this->Additionalfee->getAccommodationByPr($course->location_en,$course->institute_en,$course->country_en);

				// if($inst_id == 3)
				// {
				// 	//for($i=0;$i<count($data['course_en']);$i++)
				// 	//{
				// 		$week1 			=	unserialize($course->weeks_pr);
				// 		$hrs 			=	unserialize($course->hours_pr);
				// 		$weeks_pr 		=	array_unique($week1);

				// 		foreach ($week1 as $key => $value) 
				// 		{
				// 			if($value == $weeks_pr[0])
				// 			{
				// 				$week_key[] 	=	$key;
				// 			}
				// 		}

				// 		for($j=0;$j<count($week_key);$j++)
				// 		{
				// 			$hours_pr[]	=	$hrs[$j];
				// 		}
				// 	//}

					
				// 	$data['weeks_pr']	=	$weeks_pr;
				// 	$data['hours_pr']	=	$hours_pr;
				// }
				
			}

			$starting_d 					=	new DateTime();	
			$starting_date 					=	strtotime($starting_d->format('Y-m-d'));

			for($i=0;$i<=7;$i++)
			{
				$starting_date				=	strtotime("+7 day", $starting_date);
				$s_date[]					=	date('d-m-Y',$starting_date);
			}			
			
			$data['starting_date']			=	$s_date;
			$this->load->view('user/pages/viewcourse',$data);
		}

		else
		{
			redirect('/');
		}
		
		
	}

	public function showInstitute()
	{
		if($this->input->post())
		{

			if($this->session->userdata('language') == 'english')
			{
				
				$data['courseDetail']	=	(object)$this->input->post();			
				
				$data['location']		=	$this->Course->getAllLocation();
				$data['institute']		=	$this->Course->getAllInstituteByLocation($this->input->post('location_select'),$this->input->post('course_select'));
				$data['course_tag']		=	$this->input->post('course_select');						
			}

			if($this->session->userdata('language') == 'SP')
			{
				$data['courseDetail']	=	(object)$this->input->post();				
				$data['location']		=	$this->Course->getAllLocation();
				$data['institute']		=	$this->Course->getAllInstituteByLocation($this->input->post('location_select'),$this->input->post('course_select'));
				$data['course_tag']		=	$this->input->post('course_select');
			}

			if($this->session->userdata('language') == 'TK')
			{
				$data['courseDetail']	=	(object)$this->input->post();				
				$data['location']		=	$this->Course->getAllLocation();
				$data['institute']		=	$this->Course->getAllInstituteByLocation($this->input->post('location_select'),$this->input->post('course_select'));
				$data['course_tag']		=	$this->input->post('course_select');
			}

			if($this->session->userdata('language') == 'PR')
			{
				$data['courseDetail']	=	(object)$this->input->post();				
				$data['location']		=	$this->Course->getAllLocation();
				$data['institute']		=	$this->Course->getAllInstituteByLocation($this->input->post('location_select'),$this->input->post('course_select'));
				$data['course_tag']		=	$this->input->post('course_select');
			}

			
			$this->load->view('user/pages/showinstitute',$data);
		}

		else
		{
			redirect('/');
		}
		
	}

	public function showInstitutes($location_id=0)
	{
		
		if($this->session->userdata('language') == 'SP')
		{
			$data['location']			=	$this->Course->getAllLocation();
			$data['institute_en']		=	$this->Course->getAllInstituteByLocation($location_id);
		}

		else if($this->session->userdata('language') == 'TK')
		{
			$data['location']			=	$this->Course->getAllLocation();
			$data['institute_en']		=	$this->Course->getAllInstituteByLocation($location_id);
		}

		else if($this->session->userdata('language') == 'PR')
		{
			$data['location']			=	$this->Course->getAllLocation();
			$data['institute_en']		=	$this->Course->getAllInstituteByLocation($location_id);
		}

		else
		{
				$data['location']			=	$this->Course->getAllLocation();
			 	$data['institute_en']		=	$this->Course->getAllInstituteByLocation($location_id);
		}

		$data['location_id']			=	$location_id;

		$this->load->view('user/pages/showinstitutes', $data);

	}

	public function viewInstitutes($location_id = 0, $inst_id =0)
	{
		if($location_id)
		{
			$course 					=	$this->Course->getCourseByLocationEn($location_id,$inst_id);
			$data['course_en']			=	$course;
			$data['countries']			=	$this->Course->getCountries();
			$data['institute']			=	$this->Course->getInstituteById($inst_id);
			$data['inst_facility']		=	unserialize($data['institute']->inst_facility);	
			$data['hours_en']			=	array_unique(unserialize($course[0]->hours_en));

			if($inst_id == 3)
			{
				$data['weeks_en']		=	array_unique(unserialize($course[0]->weeks_en));
			}

			$starting_d 					=	new DateTime();	
			$starting_date 					=	strtotime($starting_d->format('Y-m-d'));

			for($i=0;$i<=7;$i++)
			{
				$starting_date				=	strtotime("+7 day", $starting_date);
				$s_date[]					=	date('d-m-Y',$starting_date);
			}			
			
			$data['starting_date']			=	$s_date;
			$this->session->unset_userdata('session_course_detail');

			$this->load->view('user/pages/viewinstitute', $data);
			
		}

		else
		{
			redirect('/');
		}
	}

	public function viewInstitute($location_id=0,$inst_id=0,$tag_id=0)
	{
		if($this->session->userdata('language') == 'SP')
		{
			$course 					=	$this->Course->getCourseByLocationEn($location_id,$inst_id);
			$data['course_sp']			=	$course;			
			
		}

		else if($this->session->userdata('language') == 'TK')
		{
			$course 					=	$this->Course->getCourseByLocationEn($location_id,$inst_id);
			$data['course_tk']			=	$course;
			
		}

		else if($this->session->userdata('language') == 'PR')
		{
			$course 					=	$this->Course->getCourseByLocationEn($location_id,$inst_id);
			$data['course_pr']			=	$course;		
			
		}

		else
		{
			$course 					=	$this->Course->getCourseByLocationEn($location_id,$inst_id,$tag_id);
			$data['course_en']			=	$course;			
		}

		$data['countries']				=	$this->Course->getCountries();			
		$data['institute']				=	$this->Course->getCourseImageByInstitute($location_id,$inst_id);
		$data['inst_facility']			=	isset($data['institute']) ? unserialize($data['institute']->inst_facility) : '';	
		$data['hours_en']				=	array_unique(unserialize($course[0]->hours_en));
		$data['weeks_en']				=	array_unique(unserialize($course[0]->weeks_en));

		$starting_d 					=	new DateTime();	
		$starting_date 					=	strtotime($starting_d->format('Y-m-d'));

		for($i=0;$i<=7;$i++)
		{
			$starting_date				=	strtotime("+7 day", $starting_date);
			$s_date[]					=	date('d-m-Y',$starting_date);
		}			
		
		$data['starting_date']			=	$s_date;		
		$this->load->view('user/pages/viewinstitute', $data);
	}

	public function getDurationHrs($course_id=0,$course_week=0,$hour_key=0,$country_code)
	{
		
		$course 		=	$this->Course->getCourseById($course_id);
		$group_code 	=	$this->Course->getCountryByCode($country_code);
		$weeks 			=	unserialize($course->weeks_en);
		$price_en 		=	unserialize($course->price_en);
		$hrs 			=	unserialize($course->hours_en);
		$output			=	'';
		
		foreach ($weeks as $key => $value) 
		{
			if($value == $course_week)
			{
				$week_key[] 	=	$key;
			}
		}

		foreach ($week_key as $key => $value) 
		{
			$output 	.=	'<option value='.$value.'>'.$hrs[$value].'</option>';			
		}

		$price1 		=	explode(',', $price_en[$week_key[0]]);

		if(count($price1)>1)
		{
			if($group_code->group_code > 0)
			{
				
				if($group_code->group_code == 1)
				{
					$price2 	=	explode('-', $price1[1]);					
					$price 		=	$price2[0];
				}

				else
				{
					$price2 	=	explode('-', $price1[2]);
					$price 		=	$price2[0];
				}
			}

			else
			{
				$price 		=	$price1[0];
			}
		}

		else
		{
			$price 		=	$price1[0];
		}		
		
		echo json_encode(array('duration'=>$output, 'price'=>$price));die;		

	}

	public function getCourseById($course_id=0, $course_week=0,$country_code='',$inst_id=0)
	{
		
		$course 		=	$this->Course->getCourseById($course_id);
		$price 	 		=	unserialize($course->price_en);		
		$price1 		=	explode(',',$price[$course_week]);	
		$sum 			=	0;
		$default_price	=	0;

		
		if(count($price1) > 1)
		{
			for($i=0;$i<count($price);$i++)
			{				

				if($i<=$course_week)
				{
					$price2 	=	explode(',', $price[$i]);

					for($j=1;$j<count($price2);$j++)
					{
						$price3 	=	explode('-', $price2[$j]);

						if($price3[1] == $country_code)
						{
							$sum 	=	$sum + $price3[0];
						}

						else
						{
							$default_price 	=	$default_price + $price2[0];
						}
					}

				}
				
			}

		}

		else
		{
			for($i=0;$i<count($price);$i++)
			{
				$price2 	=	explode(',',$price[$i]);

				if($i<=$course_week)
				{
					$sum 	=	$sum + $price2[0];
				}
			}
		}

		if($sum>0)
		{
			echo json_encode($sum);die;
		}	

		else
		{
			echo json_encode($default_price);die;
		}		
		
	}

	public function getPriceByHours($course_id=0,$hour_key=0,$week=0,$country_code='')
	{
		$course 		=	$this->Course->getCourseById($course_id);
		$group_code 	=	$this->Course->getCountryByCode($country_code);
		$weeks 			=	unserialize($course->weeks_en);
		$price_en 	 	=	unserialize($course->price_en);	
		$hours 			=	unserialize($course->hours_en);

		$price1 		=	explode(',', $price_en[$hour_key]);

		if(count($price1)>1)
		{
			if($group_code->group_code > 0)
			{
				
				if($group_code->group_code == 1)
				{
					$price2 	=	explode('-', $price1[1]);					
					$price 		=	$price2[0];
				}

				else
				{
					$price2 	=	explode('-', $price1[2]);
					$price 		=	$price2[0];
				}
			}

			else
			{
				$price 		=	$price1[0];
			}
		}

		else
		{
			$price 		=	$price1[0];
		}		

		echo json_encode($price);die;

	}

	public function getDuration($course_id=0)
	{
		$course 	=	$this->Course->getCourseById($course_id);
		$price1 	=	unserialize($course->price_en);	
		$duration 	=	unserialize($course->weeks_en);			
		$price  	=	explode(',',$price1[0]);	
		$output 	=	'';

		foreach ($duration as $key => $value) 
		{
			$output .=	'<option value='.$key.'>'.$value.'</option>';
		}

		foreach ($hours_en as $key => $value) 
		{
			
		}

		echo json_encode(array('price'=>$price[0],'duration'=>$output));die;

	}

	public function bookCourse()
	{
		
		$user_id 					=	'';

		if($this->input->post())
		{

			if($this->session->userdata('isLoggedUser'))
			{
				$user 					=	$this->session->userdata('isLoggedUser');
				$user_id 				=	$user['user_id'];
				$data['user']			=	$this->User->getUser($user_id);
			}

			$data['user_id']			=	$user_id;
			$data['course'] 			=	$this->Course->getCourseById($this->input->post('select_course_name'));
			$data['countries']			=	$this->User->getAllCountries();	
			$data['location_en']		=	$this->Course->getAllLocation();	
			$data['courseByLocation']	=	$this->Course->getCourseByLocation($this->input->post('hidden_location_id'));
			$data['duration'] 			=	unserialize($data['course']->weeks_en);
			$data['duration_key']		=	$this->input->post('course_week');
			$data['course_price']		=	$this->input->post('hidden_course_price');

			$starting_d 				=	new DateTime();	
			$starting_date 				=	strtotime($starting_d->format('Y-m-d'));

			for($i=0;$i<=7;$i++)
			{
				$starting_date			=	strtotime("+7 day", $starting_date);
				$s_date[]				=	date('d-m-Y',$starting_date);
			}

			$data['starting_date']		=	$s_date;
			$data['st_date']			=	$this->input->post('starting_date');	

		}	

		else
		{
			redirect('/');
		}	

		$this->load->view('user/pages/bookcourse', $data);		
	}

	public function bookCourses()
	{
		
		$user_id 					=	'';

		if($this->session->userdata('isLoggedUser'))
		{
			$user 					=	$this->session->userdata('isLoggedUser');
			$user_id 				=	$user['user_id'];
			$data['user']			=	$this->User->getUser($user_id);
		}

		$data['user_id']			=	$user_id;
		$data['course'] 			=	$this->Course->getCourseById($this->input->post('select_course_name'));
		$data['countries']			=	$this->User->getAllCountries();	
		$data['location_en']		=	$this->Course->getAllLocation();	
		$data['courseByLocation']	=	$this->Course->getCourseByLocation($this->input->post('hidden_location_id'));
		$data['duration'] 			=	unserialize($data['course']->weeks_en);
		$data['duration_key']		=	$this->input->post('course_week');
		$price_en					=	unserialize($data['course']->price_en);
		$discount 					=	$data['course']->course_discount;
		$course_price 				=	$this->input->post('hidden_course_price');

		if($discount!='')
		{
			
			$discount_price 		=	$course_price - (($discount*$course_price)/100);
			$data['discount_price']	=	$discount_price;
			$data['discount']		=	$discount;

		}		
		
		$data['course_price']		=	$this->input->post('hidden_course_price');


		$starting_d 				=	new DateTime();	
		$starting_date 				=	strtotime($starting_d->format('Y-m-d'));

		for($i=0;$i<=7;$i++)
		{
			$starting_date			=	strtotime("+7 day", $starting_date);
			$s_date[]				=	date('d-m-Y',$starting_date);
		}

		$data['starting_date']		=	$s_date;
		$data['st_date']			=	$this->input->post('starting_date');		

		$this->load->view('user/pages/bookcourse', $data);
		
	}
	
	public function getInstitute($location_id=0,$tag_id=0)
	{
		$institute				=	$this->Course->getAllInstituteByLocation($location_id,$tag_id);
		$output 				=	'';

		if(count($institute)>0)
		{
			foreach($institute as $rows)
			{
				$output 	 .=	'<div class="row holder-area">
									<div class="col-md-4">
		                                <div class="retreats_area_holder_img object-fit" style="margin-left: -15px;">
											<img src='.base_url('uploads/'.$rows->inst_logo_en).' class="img-fluid" alt="" />
										</div>
									</div>
									<div class="col-md-8">
										<div class="retreats-mid px-2 pt-4">
											<h4>'.$rows->inst_name_en.'</h4>
											<p>'.$rows->inst_description_en.'</p>	
												<div class="row pt-2">
											<div class="col-md-6 icons-area text-left">
												<ul>
												   <li><a href=""><i class="fa fa-map-marker" style="margin-left: -14px;"></i></a></li>
												   <li><a href=""><i class="fa fa-hotel"></i></a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<div class="discover-btn text-right pr-3">
													<a href='.base_url('course/viewInstitute/'.$location_id.'/'.$rows->inst_id).' class="btn btn-danger">Discover Now &nbsp;&nbsp;<i class="fa fa-angle-right custom" ></i></a>
												</div>
											</div>
										</div>
									</div>										
							    </div></div>';
			}			
		}

		echo json_encode($output);die;
	}

	public function getCourseByLocationId($location_id=0)
	{
		$course 				=	$this->Course->getCourseByLocationId($location_id);

		$course_name 			=	'';
		$course_duration		=	'';

		if(count($course)>0)
		{
			$duration1  		=	$this->Course->getCourseDuration($course[0]->course_id);
			$duration   		=	unserialize($duration1->weeks_en);

			foreach ($course as $rows) 
			{
				$course_name 	.=	'<option value='.$rows->course_id.'>'.$rows->course_title_en.'</option>';
			}


			foreach ($duration as $key=>$value)
			{
				$course_duration .=	'<option value='.$key.'>'.$value.'</option>';
			}

			echo json_encode(array('course'=>$course_name, 'duration'=>$course_duration));die;
		}
		
	}

	public function getCourseTag($location_id=0)
	{
		$course 				=	$this->Course->getCourseTagByLocation($location_id);		

		$course_name 			=	'';
		$course_duration		=	'';

		if(count($course)>0)
		{
			$duration1  		=	$this->Course->getCourseDuration($course[0]->course_id);

			$duration 			=	array_unique(unserialize($duration1->weeks_en));					

			foreach ($course as $rows) 
			{
				$course_name 	.=	'<option value='.$rows->tag_id.'>'.$rows->tag_name.'</option>';
			}


			foreach ($duration as $key=>$value)
			{
				$course_duration .=	'<option value='.$value.'>'.$value.'</option>';
			}

			echo json_encode(array('course'=>$course_name, 'duration'=>$course_duration));die;
		}
	}

	public function showTagLocation($tag_id=0)
	{
		if($tag_id)
		{
			
			if($this->session->userdata('language') == 'SP')
			{
				$data['course_sp']	=	$this->Course->getLocationsByTag($tag_id);
			}

			else if($this->session->userdata('language') == 'TK')
			{
				$data['course_tk']	=	$this->Course->getLocationsByTag($tag_id);
			}

			else if($this->session->userdata('language') == 'PR')
			{
				$data['course_pr']	=	$this->Course->getLocationsByTag($tag_id);
			}

			else
			{
				$data['course_en']	=	$this->Course->getLocationsByTag($tag_id);
			 	$data['hours_en']	=	array_unique(unserialize($data['course_en'][0]->hours_en));
			 	$data['tag_id']		=	$tag_id;
			}

			$this->load->view('user/pages/showtaglocation', $data);
		}

		else
		{
			redirect('/');
		}
	}

	public function showLocation($country_id=0)
	{		
		if($country_id)
		{
			
			if($this->session->userdata('language') == 'SP')
			{
				$data['location_sp']	=	$this->User->getLocations($country_id);
			}

			else if($this->session->userdata('language') == 'TK')
			{
				$data['location_tk']	=	$this->User->getLocations($country_id);
			}

			else if($this->session->userdata('language') == 'PR')
			{
				$data['location_pr']	=	$this->User->getLocations($country_id);
			}	

			else
			{
				$data['location_en']	=	$this->User->getLocations($country_id);
			}		

			$this->load->view('user/pages/showlocation', $data);

		}	
			
		else
		{
			redirect('/');
		}			
		
	}

	public function getPriceByCountry($course_id=0,$country_code='',$inst_id=0)
	{
		$course 		=	$this->Course->getCourseById($course_id);
		$group_code 	=	$this->Course->getCountryByCode($country_code);
		$price_en 		=	unserialize($course->price_en);
		$weeks_en 		=	array_unique(unserialize($course->weeks_en));
		$hours_en 		=	array_unique(unserialize($course->hours_en));
		$weeks			=	'';
		$hours 			=	'';

		//echo json_encode($group_code->group_code);die;

		foreach ($weeks_en as $key => $value) 
		{
			$weeks 		.=	'<option value='.$value.'>'.$value.'</option>';
		}

		foreach ($hours_en as $key => $value) 
		{
			$hours 		.=	'<option value='.$key.'>'.$value.'</option>';
		}

		$price1 		=	explode(',', $price_en[0]);

		if(count($price1)>1)
		{
			if($group_code->group_code > 0)
			{
				
				if($group_code->group_code == 1)
				{
					$price2 	=	explode('-', $price1[1]);					
					$price 		=	$price2[0];
				}

				else
				{
					$price2 	=	explode('-', $price1[2]);
					$price 		=	$price2[0];
				}
			}

			else
			{
				$price 		=	$price1[0];
			}
		}

		else
		{
			$price 		=	$price1[0];
		}		
		echo json_encode(array('price'=>$price,'weeks'=>$weeks,'hours'=>$hours));die;	
	 }

}

/* End of file Course.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Course.php */