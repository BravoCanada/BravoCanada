<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Price_model','Price');
		$this->load->model('User_model','User');
		$this->load->model('Course_model','Course');

		$language = ($this->session->userdata('language')) ? ($this->session->userdata('language')) : config_item('language');	
		$this->lang->load('user',$language);
		
	}

	public function index()
	{
		if($this->session->userdata('isLoggedUser'))
		{		
			$data['location_en']	=	$this->Price->getAllLocationEn();	
			$data['countries']		=	$this->Price->getCountries();	
			$this->load->view('user/pages/price',$data);
		}

		else
		{
			redirect('user/Login');
		}
	}

	public function saveSummary()
	{			

		if($this->input->post())
		{	//echo '<pre>';print_r($this->input->post());die;
			
			$user_id 					=	$this->input->post('hidden_user_id');
			
			$crs=$this->Course->getCourseById($this->input->post('course_en'));
			
			if(!$this->session->userdata('isLoggedUser'))
			{
				$email_exists 			=	$this->Price->emailExists($this->input->post('email'));

				if($email_exists)
				{
					$this->session->set_flashdata("error_message","<p class='alert alert-danger'>Your email address already exists! Please login to continue.</p>");
					redirect('user/Login');
				}

				else
				{
					if($this->input->post('payment_type') == 'card')
					{

					
						/* $data = '{
									"customerID":370146,
									"productID":44207,
									"name":"Site Demo User",
									"quantity":1
								}';
						$options  =  array (
									        'Authorization: Basic MDpHTDA0eVFkM3JCSlo4Mm5WV2FwNDk1YmNUU2MzZWV2NmQxR0xsYkdXZkZ2WE1EUHJVdUVWZ2hKU1hqWWdRM0Jh',
									        'Content-Type: application/json'    				       
						  					);	
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, 'https://stg-secure.fusebill.com/v1/Purchases'); 
						curl_setopt($ch, CURLOPT_URL, 'https://stg-secure.fusebill.com/v1/Purchases/90847'); 
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						curl_setopt($ch, CURLOPT_HTTPHEADER, $options);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						//curl_setopt($ch, CURLOPT_HTTPHEADER,array("Expect:  "));
						$output = curl_exec($ch); 
						$result = json_decode($output);
						//echo '<pre>';print_r(json_decode($output));die;

						if(isset($result->ErrorId))
						{
							$this->session->unset_userdata('session_course_detail');
							$this->session->set_flashdata("error_message","<p class='alert alert-success'>Saved successfully !</p>");
							redirect('price/failed');						
						}
						*/
						
						
						
						$data = "{customerId:374974,source:'Manual',paymentMethod:'CreditCard',reference:'this is a test payment ".$crs->course_title_en."',amount:".$this->input->post('hidden_total_price').",paymentMethodId:149447}";

						$options  =  array (
											'Authorization: Basic MDo3bG5IM2p5UnJRSmZ1NmFORDJiRlVLOTRHRk12TzhOSFo0VzRhcWdxeG9udTRXaFhQZGE3cWQwdHBHNFhNRWxy',
											'Content-Type: application/json'    				       
											);	
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, 'https://stg-secure.fusebill.com/v1/payments');  
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
						curl_setopt($ch, CURLOPT_HTTPHEADER, $options);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						$output = curl_exec($ch); 
						/* echo "<pre>"; print_r($_POST); print_r($output); die; */
						if(isset($output->paymentActivityId))
						{
							$this->session->unset_userdata('session_course_detail');
							$this->session->set_flashdata("error_message","<p class='alert alert-success'>Saved successfully !</p>");
							redirect('price/failed');						
						}	

					}


					$characters 		= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$charactersLength 	= strlen($characters);
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
										'dob'				 => $this->input->post('dob'),	
										'nationality'		 => $this->input->post('nationality'),														
										'email'			 	 => $this->input->post('email'),
										'phone_no'			 =>	$this->input->post('phone_no'),
										'mobile'			 => $this->input->post('mobile'),
										'address_1'			 => $this->input->post('address_1'),
										'address_2'			 => $this->input->post('address_2'),
										'city'				 => $this->input->post('city'),	
										'state'				 => $this->input->post('state'),
										'zip'				 => $this->input->post('zip'),
										'country'			 => $this->input->post('country'),								
										'password' 			 => md5($this->input->post('password')),
										'email_varification' =>	md5($token),
										'active_status'		 =>	1,																

									);	

					$user_id 	=	$this->User->insertion($user);			
				}
			}

			/*$accept_check			=	0;
			$special_offer_check	=	0;
			$privacy_policy_check	=	0;*/
			$passport_image 		=	'';
			$health_issue_check		=	0;
			$smoke_check 			=	0;

			if($_FILES['passport_image']['name'])
			{
				$passport_image 	=	$this->do_upload('passport_image');
			}

			if($this->input->post('health_issue_check'))
			{
				$health_issue_check =	1;
			}

			if($this->input->post('smoke_check'))
			{
				$smoke_check 		=	1;
			}

			
			$summary 	=	array
								(										
									'user_id'				=>	$user_id,
									'location_id'			=>	$this->input->post('location_en'),
									'course_id'				=>	$this->input->post('course_en'),
									'course_duration'		=>	$this->input->post('duration'),
									'course_start_date'		=>	date('Y-m-d',strtotime($this->input->post('start_date'))),
									'user_age'				=>	$this->input->post('age'),
									'duration_of_stay'		=>	$this->input->post('duration_of_stay'),
									'acc_start_date'		=>	$this->input->post('acc_start_date'),
									'acc_type'				=>	$this->input->post('hidden_acc_type'),
									'acc_price'				=>	$this->input->post('hidden_acc_price'),
									'acc_placement_fee'		=>	$this->input->post('hidden_acc_placement_fee'),
									'airport_name'			=>	$this->input->post('airport'),
									'flight_no'				=>	$this->input->post('flight_no'),
									'arrival_date'			=>	$this->input->post('arrival_date'),										
									'airport_price'			=>	$this->input->post('hidden_airport_price'),										
									'medical_insurance'		=>	$this->input->post('hidden_student_insurance'),
									'registration_fee'		=>	$this->input->post('hidden_reg_fee'),
									'total_price'			=>	$this->input->post('hidden_total_price'),
									'passport_no'			=>	$this->input->post('passport_no'),
									'passport_image'		=>	$passport_image,
									'visa_type'				=>	$this->input->post('visa_type'),
									'english_level'			=>	$this->input->post('your_lang_level'),
									'health_issue_check'	=>	$health_issue_check,
									'smoke_check'			=>	$smoke_check

								);

				$insert_summary_id 	=	$this->Price->insert_summary($summary);

				/*if($insert_summary_id)
				{
					
					$url 	 =	'https://api.teamgram.com/bravocanada/Leads/Edit';
					$data 	= '{
							    "Name"						: "'.$this->input->post('fname').'",
							    "LastName"					: "'.$this->input->post('lname').'",
							    "CustomFieldDatas"			: {

							    								 "CustomFieldName" : "city",
							    								 "value"		   : "'.$this->input->post('city').'"

							  								  }					  
							   
							   
							 }';

					

					$headers = array(
									    'Content-Type:application/json',
									    'Authorization: Basic '. base64_encode("avistcengg@gmail.com:sony@123") // <---
									);		

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL,$url);  
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);	
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data);	
					$output = curl_exec($ch); 
					$result 	=	json_decode($output);

					echo '<pre>';print_r($result);die;
				}*/


				$this->session->unset_userdata('session_course_detail');
				$this->session->set_flashdata("error_message","<p class='alert alert-success'>Saved successfully !</p>");

				if($insert_summary_id)
				{

					if($this->input->post('payment_type') == 'paypal')
					{
						//echo $insert_summary_id;die;
						redirect('http://oscuz.com/bravocanada/paypal.php?cprice='.$this->input->post('hidden_total_price').'&cname=Payment for '.$crs->course_title_en);
						//header('Location: http://oscuz.com/bravocanada/paypal.php?cprice='.$this->input->post('hidden_total_price'));
					}
				}

				
				redirect('price/thanks');				
			//}


		}
		
		
	}

	public function thanks()
	{
		$this->load->view('user/pages/thanks');
	}

	public function failed()
	{
		$this->load->view('user/pages/failed');
	}

	public function getCourseById($loaction_id=0)
	{
		
		$course_en 	=	$this->Price->getCourseById($loaction_id);
		$output 	=	'<option value="">Select</option>';

		if(count($course_en) > 0)
		{
			foreach ($course_en as $rows) 
			{
				$output .=	'<option value = '.$rows->course_id.'>'.$rows->course_title_en.'</option>';
			}			
		}

		echo json_encode($output);die;
		
	}

	public function getCourseDetail($course_id=0)
	{
		
		$course_en 			=	$this->Price->getCourseDetail($course_id);
		$output 			=	'<option value="">Select</option>';
		$weeks 				=	'<option value="">Select</option>';
		$starting_d 		=	new DateTime();	
		$starting_date 		=	strtotime($starting_d->format('Y-m-d'));
		$weeks_en 			=	unserialize($course_en->weeks_en);			

		for($i=0;$i<=7;$i++)
		{
			$starting_date	=	strtotime("+7 day", $starting_date);
			$output 	   .=   '<option value='.date('d-m-Y',$starting_date).'>'.date('d-m-Y',$starting_date).'</option>';
		}

		foreach ($weeks_en as $key => $value) 
		{
			$weeks 			.=	'<option value='.$key.'>'.$value.'</option>';
		}

		echo json_encode(array('course_id'=>$course_en->course_id,'starting_date'=>$output,'weeks'=>$weeks,'location_id'=>$course_en->location_en));die;
	
	}

	public function getPrice($course_id=0, $duration=0)
	{
		
		$course_en 			 =	$this->Price->getCourseDetail($course_id);
		$price               = 	'';
		$price_en 			 =	unserialize($course_en->price_en);
		$weeks_en 			 =	unserialize($course_en->weeks_en);
		$current_date 		 =	new DateTime();
		$sum 			     =   0;

		foreach ($price_en as $key => $value) 
		{
			if($key<=$duration)
			{
				$sum = $sum+$value;
			}
		}

		//echo json_encode($weeks_en[$duration]);die;

		echo json_encode(array('course_price'=>$sum, 'course_week'=>$weeks_en[$duration], 'course_name'=>$course_en->course_title_en, 'location_name'=>$course_en->location_name, 'current_date'=>$current_date->format('d-m-Y')));die;
		
	}

	public function getAccommodation($location_id =0)
	{
	
		$accommodation 		 =	$this->Price->getAccommodation($location_id);
		$output 			 =	'';

		foreach ($accommodation as $rows) 
		{
			if($rows->single_en)
			{
				$output		.=	'<tr><td>Single room</td><td>'.$rows->acc_title_en.'</td><td>'.$rows->single_en.'</td><td><a href="javascript:void(0)" data-accid='.$rows->acc_id.' data-accprice='.$rows->single_en.' data-roomtype=Single class="btn btn-primary btn-sm acc_select">Select</a></td></tr>';
			}

			if($rows->double_en)
			{
				$output		.=	'<tr><td>Double room</td><td>'.$rows->acc_title_en.'</td><td>'.$rows->double_en.'</td><td><a href="javascript:void(0)" data-accid='.$rows->acc_id.' data-accprice='.$rows->double_en.' data-roomtype=Double class="btn btn-primary btn-sm acc_select">Select</a></td></tr>';
			}
			
		}

		echo json_encode($output);die;
	
	}

	public function getAllCountries()
	{
		$countries 			=	$this->Price->getCountries();
		$output 			=	'<option value="">Select</option>';

		foreach($countries as $rows)
		{
			$output 	  .= 	'<option value='.$rows->id.'>'.$rows->name.'</option>';
		}

		echo json_encode($output);die;
	}

	public function do_upload($tag_name='')
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

    private function set_upload_options()
    {   
        //upload an image options
        $config = array();        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'png|PNG|jpg|JPG|gif|GIF|pdf|PDF|jpeg|JPEG';
        $config['max_size']             = 20000;
        $config['max_width']            = 20000;
        $config['max_height']           = 20000;

        return $config;
    } 

}

/* End of file Price.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Price.php */