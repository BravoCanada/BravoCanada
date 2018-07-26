<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookingcourses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Bookingcourses_model','Booking');
		
	}

	public function index()
	{
		$data['booking_details']	=	$this->Booking->getBookings();

		//echo '<pre>';print_r($data);die;
		$this->load->view('admin/pages/bookingcourses',$data);
	}

}

/* End of file Bookingcourses.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Bookingcourses.php */