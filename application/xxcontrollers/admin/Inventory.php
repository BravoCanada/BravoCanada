<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct() {	

		parent::__construct();		

		$this->load->helper('form');
		$this->load->model('Inventory_model','Inventory');	

	}

	public function index()
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$data['inventory']	=	$this->Inventory->getAllInventory();
			$this->load->view('admin/pages/inventorylist', $data);
		}

		else
		{
			redirect('admin/login');
		}

	}

	public function addInventory()
	{

		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$data 		=	array
								(

									'product_name'	=>	$this->input->post('product_name'),
									'model'			=>	$this->input->post('model'),
									'engine_no'		=>	$this->input->post('engine_no'),
									'color'			=>	$this->input->post('color'),
									'mfg_year'		=>	$this->input->post('mfg_year'),
									'amount'		=>	$this->input->post('amount'),
									'seat_capacity'	=>	$this->input->post('seat_capacity'),
									'quantity'		=>	$this->input->post('quantity')
									
								);

				$result 	=	$this->Inventory->insertInventory($data);

				$this->session->set_flashdata('error_message', '<p class="alert alert-success"> Inventory saved successfully !</p>');

				redirect('admin/inventory/addInventory');
			}

			else
			{
				$this->load->view('admin/pages/addinventory');
			}
		
		}

		else
		{
			redirect('admin/login');
		}
	
	}

	public function editInventory($inventory_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			if($this->input->post())
			{
				$data 		=	array
								(

									'product_name'	=>	$this->input->post('product_name'),
									'model'			=>	$this->input->post('model'),
									'engine_no'		=>	$this->input->post('engine_no'),
									'color'			=>	$this->input->post('color'),
									'mfg_year'		=>	$this->input->post('mfg_year'),
									'amount'		=>	$this->input->post('amount'),
									'seat_capacity'	=>	$this->input->post('seat_capacity'),
									'quantity'		=>	$this->input->post('quantity')
									
								);

				$result		=	$this->Inventory->updateInventory($this->input->post('inventory_id'), $data);

				$this->session->set_flashdata('error_message', '<p class="alert alert-success"> Updated successfully !</p>');
				redirect('admin/inventory/editInventory/'.$this->input->post('inventory_id'));
			}

			else
			{
				$data['inventory']	=	$this->Inventory->getInventoryById($inventory_id);
				$this->load->view('admin/pages/editinventory', $data);
			}
		}

		else
		{
			redirect('admin/login');
		}
	}

	public function deleteUser($inventory_id=0)
	{
		if($this->session->userdata('loggedAdminUser'))
		{
			$result 	=	$this->Inventory->deleteInventory($inventory_id);

			$this->session->set_flashdata('error_message', '<p class="alert alert-success"> Deleted successfully !</p>');
			redirect('admin/inventory');
		}

		else
		{
			redirect('admin/login');
		}
	}

}

/* End of file Inventory.php */
/* Location: .//C/Users/avis/AppData/Local/Temp/fz3temp-2/Inventory.php */