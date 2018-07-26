<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('User_model','User');
		$this->load->model('Blog_model','Blog');
		$this->load->model('Course_model','Course');		

		$language = ($this->session->userdata('language')) ? ($this->session->userdata('language')) : config_item('language');	
		$this->lang->load('user',$language);		
		$this->session->set_userdata('language',$language);
	}

	public function index()
	{		
		if($this->session->userdata('language') == 'SP')
		{
			$data['country_sp']		=	$this->User->getCountries();
			$data['location_sp']	=	$this->User->getLocation();
			$data['groupCourseSp']	=	$this->User->getCourseGroupByEn();			
		}

		else if($this->session->userdata('language') == 'TK')
		{
			$data['country_tk']		=	$this->User->getCountries();
			$data['location_tk']	=	$this->User->getLocation();
			$data['groupCourseTk']	=	$this->User->getCourseGroupByEn();			
		}

		else if($this->session->userdata('language') == 'PR')
		{
			$data['country_pr']		=	$this->User->getCountries();
			$data['location_pr']	=	$this->User->getLocation();
			$data['groupCoursePr']	=	$this->User->getCourseGroupByEn();			
		}	

		else
		{
			$data['country_en']		=	$this->User->getCountries();
		 	$data['location_en']	=	$this->User->getLocation();
		 	$data['groupCourseEn']	=	$this->User->getCourseGroupByEn();
		}

		$data['course_tag']			=	$this->Course->getAllTag();
		$data['testimonials']		=	$this->Blog->getAllTestimonials();	

		//echo '<pre>';print_r($data);die;
		
		$this->load->view('home',$data);
	}

	public function setLanguage($language='')
	{
		$this->session->unset_userdata('language');

		if($language == 'EN')
		{
			$this->session->set_userdata('language','english');
		}

		else
		{
			$this->session->set_userdata('language',$language);
		}		

		echo json_encode($language);die;
	}

	public function showLocation($country_id=0)
	{		
		if($country_id)
		{
			if($this->session->userdata('language') == 'english')
			{
				$data['location_en']	=	$this->User->getLocations($country_id);
			}

			if($this->session->userdata('language') == 'SP')
			{
				$data['location_sp']	=	$this->User->getLocations($country_id);
			}

			if($this->session->userdata('language') == 'TK')
			{
				$data['location_tk']	=	$this->User->getLocations($country_id);
			}

			if($this->session->userdata('language') == 'PR')
			{
				$data['location_pr']	=	$this->User->getLocations($country_id);
			}			

			$this->load->view('user/pages/showlocation', $data);

		}	
			
		else
		{
			redirect('/');
		}			
		
	}

	public function showLocations($course_name='')
	{	

		if($course_name)
		{
			if($this->session->userdata('language') == 'english')
			{
				$data['location_en']	=	$this->User->getLocationsByCourseEn($course_name);
			}

			if($this->session->userdata('language') == 'SP')
			{
				$data['location_sp']	=	$this->User->getLocationsByCourseSp($course_name);
			}

			if($this->session->userdata('language') == 'TK')
			{
				$data['location_tk']	=	$this->User->getLocationsByCourseTk($course_name);
			}

			if($this->session->userdata('language') == 'PR')
			{
				$data['location_pr']	=	$this->User->getLocationsByCoursePr($course_name);
			}

			//echo '<pre>';print_r($data);die;

			$this->load->view('user/pages/showlocations', $data);

		}	
			
		else
		{
			redirect('/');
		}			
		
	}

	public function showCourse($location_id=0)
	{
		
		if($location_id)
		{
			if($this->session->userdata('language') == 'english')
			{
				$data['course_en']	=	$this->User->getCourses($location_id);
			}

			if($this->session->userdata('language') == 'SP')
			{
				$data['course_sp']	=	$this->User->getCourses($location_id);
			}

			if($this->session->userdata('language') == 'TK')
			{
				$data['course_tk']	=	$this->User->getCourses($location_id);
			}

			if($this->session->userdata('language') == 'PR')
			{
				$data['course_pr']	=	$this->User->getCourses($location_id);
			}

			$this->load->view('user/pages/showcourse', $data);
		}

		else
		{
			redirect('/');
		}		

		
	}

	public function topDestination()
	{
		if($this->session->userdata('language') == 'english')
		{
			$data['country_en']	=	$this->User->getCountries();
		}

		if($this->session->userdata('language') == 'SP')
		{
			$data['country_sp']	=	$this->User->getCountries();
		}

		if($this->session->userdata('language') == 'TK')
		{
			$data['country_tk']	=	$this->User->getCountries();
		}

		if($this->session->userdata('language') == 'PR')
		{
			$data['country_pr']	=	$this->User->getCountries();
		}

		$this->load->view('user/pages/topdestinations',$data);
	}

	public function blog()
	{
		$data['blog']	=	$this->Blog->getBlogs();
		$this->load->view('user/pages/blog',$data);
	}

	public function testimonials()
	{
		if($this->session->userdata('language') == 'english')
		{
			$data['testimonials_en']	=	$this->Blog->getAllTestimonials();
		}

		if($this->session->userdata('language') == 'SP')
		{
			$data['testimonials_sp']	=	$this->Blog->getAllTestimonials();
		}

		if($this->session->userdata('language') == 'TK')
		{
			$data['testimonials_tk']	=	$this->Blog->getAllTestimonials();
		}

		if($this->session->userdata('language') == 'PR')
		{
			$data['testimonials_pr']	=	$this->Blog->getAllTestimonials();
		}

		$this->load->view('user/pages/testimonials',$data);
	}

	public function contact()
	{
		$this->load->view('user/pages/contact');
	}
	public function terms()
	{
		$this->load->view('user/pages/terms');
	}
	public function privacy()
	{
		$this->load->view('user/pages/privacy');
	}
	public function help()
	{
		$this->load->view('user/pages/help');
	}

	public function singleBlog($blog_id=0)
	{
		$data['singleblog']		=	$this->Blog->getSingleBlog($blog_id);

		$this->load->view('user/pages/singleblog',$data);
	}
	public function faq()
	{
		$this->load->view('user/pages/faq');
	}

	public function test()
	{
		// $data = '{
		// 		    "firstName": "John",
		// 		    "lastName": "Smith",
		// 		    "companyName": "Fusebill",
		// 		    "primaryEmail": "test@example.com"
		// 		}';

		
		$data = '{
					"customerID":370146,
					"productID":44207,
					"name":"Site Demo User",
					"quantity":1
				}';

		// $data = "{customerId:370146,source:'Manual',paymentMethod:'CreditCard',reference:'this is a test payment',amount:10,paymentMethodId:{paymentMethodId}}";

		$options  =  array (
					        'Authorization: Basic MDpHTDA0eVFkM3JCSlo4Mm5WV2FwNDk1YmNUU2MzZWV2NmQxR0xsYkdXZkZ2WE1EUHJVdUVWZ2hKU1hqWWdRM0Jh',
					        'Content-Type: application/json'    				       
		  					);	

		//echo '<pre>';print_r($options);die;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://stg-secure.fusebill.com/v1/Purchases'); 
		curl_setopt($ch, CURLOPT_URL, 'https://stg-secure.fusebill.com/v1/Purchases/90847'); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $options);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		//curl_setopt($ch, CURLOPT_HTTPHEADER,array("Expect:  "));
		$output = curl_exec($ch); 
		echo '<pre>';print_r(json_decode($output));die;
	}
	public function test2()
	{
		
		/* Create  customer (its working )*/
		 /*
		 $data = '{
				    "firstName": "neha",
				    "lastName": "kanojiya",
				    "companyName": "avistech",
				    "primaryEmail": "neha@gmail.com"
				}';
		$options  =  array (
					        'Authorization: Basic MDo3bG5IM2p5UnJRSmZ1NmFORDJiRlVLOTRHRk12TzhOSFo0VzRhcWdxeG9udTRXaFhQZGE3cWQwdHBHNFhNRWxy',
					        'Content-Type: application/json'    				       
		  					);	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://stg-secure.fusebill.com/v1/customers'); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $options);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$output = curl_exec($ch); 
		
		echo "Create  customer";
		echo '<pre>'; print_r(json_decode($output)); echo '</pre>';
		
		 
		/* Activate customer  (its working ) */ 
		
		//Here customerId obtained from above request
		/*
		$data = '{
					  "customerId": 374974,  
					  "activateAllSubscriptions": true,
					  "activateAllDraftPurchases": true,
					  "temporarilyDisableAutoPost": false
					}';
		$options  =  array (
					        'Authorization: Basic MDo3bG5IM2p5UnJRSmZ1NmFORDJiRlVLOTRHRk12TzhOSFo0VzRhcWdxeG9udTRXaFhQZGE3cWQwdHBHNFhNRWxy',
					        'Content-Type: application/json'    				       
		  					);	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://stg-secure.fusebill.com/v1/customerActivation?Preview=true&showzerodollarcharges=true&view=sideeffects'); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $options);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$output = curl_exec($ch); 
		
		echo "Activate  customer";
		echo '<pre>';print_r(json_decode($output)); die;
		
		
		
		/* Create Credit Card Payment Method ( its not working ) I tried this with postman too*/
		/*
		$data = "{customerID: 374974
					PublicApiKey: e5e0672b-3b1e-4abf-a633-4ca8f55886fb
					successURI:google.ca
					failURI:google.com
					cardNumber:4242424242424242
					firstName:John
					lastName:Smith
					expirationMonth:10
					expirationYear:20
					CVV:123}";
		$options  =  array (
					        'Authorization: Basic MDo3bG5IM2p5UnJRSmZ1NmFORDJiRlVLOTRHRk12TzhOSFo0VzRhcWdxeG9udTRXaFhQZGE3cWQwdHBHNFhNRWxy',
					        'Content-Type: application/json'    				       
		  					);	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://stg-payments.subscriptionplatform.com/payments/create'); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $options);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$output = curl_exec($ch); 
		
		echo "Create Credit Card Payment Method";
		echo '<pre>';print_r(json_decode($output)); echo "</pre>";
		
		
		/* cearte payment (its working)*/
		
		/* Here paymentMethodId I obtained from admin by inspecting user's payment method page*/
		
		$data = "{customerId:374974,source:'Manual',paymentMethod:'CreditCard',reference:'this is a test payment',amount:10,paymentMethodId:149447}";

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
		
		echo " create payment with paymentmethod id.";
		echo '<pre>';print_r(json_decode($output));
		
	}

	public function test3()
	{

		$url 	=	'https://graph.facebook.com/v3.0/me?fields=posts%7Bmessage%2Cfull_picture%2Ccreated_time%7D&access_token=EAAYzLaXTKQUBAC3VLUt6tTqx80Na70ZBVpcT3O2pMXw7MS5zGOkGUtvZBY5qSZANZB2qZBh6rYH94yvaG5LsxFZC7J5MvVbYaTEdDZBGxvgup6xwfuabxcpdguPT4lzo1KQnZCAqnSroJyLhGKIebb0oKn0yhBmLtoZAVYnMrCDYfElpWTBfiZAz3tVH5jBiMTh3DnjZB34tqU6zQZDZD';
		$headers =   array('Content-Type: application/json');

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);  
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);		
		$output = curl_exec($ch); 
		$result 	=	json_decode($output);

		echo '<pre>';print_r($result);die;
 
	}

	public function test4()
	{
		$url 	 =	'https://api.teamgram.com/bravocanada/CreateContact';
		$data = '{
				    "Name": "John",
				    "LastName": "Michel",
				    "Description"	: "dsfsdfsdfsdfsdf"
				   
				 }';

		$headers = array(
						    'Content-Type:application/json',
						    'Authorization: Basic '. base64_encode("avistcengg@gmail.com:Sony@123")
						);		

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);  
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);	
		//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);	
		$output = curl_exec($ch); 
		$result 	=	json_decode($output);

		echo '<pre>';print_r($result);die;
	}

	public function payment()
	{
		$this->load->view('user/pages/paymentpage');
	}

	public function testYourEng()
	{
		if($this->input->post()){
			// echo "<pre>"; print_r($_POST); die;
			$this->db->insert('test_user_info',$_POST);
			$this->session->set_flashdata('message', '<div class="alert alert-success">You can now give the Test.</div>');
		}
		$this->load->view('user/pages/testyourenglish');
	}

	public function getMondays()
	{
		$select_date 	=	$this->input->post('select_date');
		$str = $select_date;
		$output = '';		

		  for($i2=1; $i2<30; $i2++)
		  {		   
		      $ddd = $str.$i2;		   
		      $date = date('M D d', $time = strtotime($ddd) );		      

		    if(strpos($date, 'Mon'))
		    {		      
		    	$mondays[] 	=	$date;
		    }
		  }

		 if(count($mondays)>0)
		 {
		 	foreach($mondays as $key=>$value)
		 	{
		 		$output.=	'<option value='.$key.'>'.$value.'</option>';
		 	}
		 }

		 echo json_encode($output);die;
		
	}

}

/* End of file Home.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Home.php */