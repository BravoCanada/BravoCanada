<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sell extends CI_Controller {

	public function __construct() {	

		parent::__construct();		

	}

	public function index()
	{
		
	}

	public function addVehicles()
	{
		if($this->session->userdata('loggedUser'))
		{
			
			$this->load->view('front/addvehicles');

		}

		else
		{
			redirect('login');

		}
		
	}

}

/* End of file Sell.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-3/Sell.php */