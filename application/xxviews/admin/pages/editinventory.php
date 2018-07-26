<?php $this->load->view('admin/common/header'); ?>

<?php $this->load->view('admin/common/sidebar'); ?>

    <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Edit Inventory      
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="#">Forms</a></li>
	        <li class="active">General Elements</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <!-- left column -->
	        <div class="col-md-12">	        	
	          <?php 
					if($this->session->flashdata("error_message") != ""){	
						echo $this->session->flashdata("error_message");
						$this->session->set_flashdata("error_message","");
					} 
					?>	
	          <div class="box box-primary">	           
	           
	            <form role="form" action="<?php echo base_url('admin/inventory/editInventory');?>" method="post">
	              <div class="box-body">
	              	<div class="row">	              	
		                <div class="form-group col-md-6">
		                  <label for="product_name">Product Name</label>
		                  <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product Name" value="<?php echo isset($inventory) ? $inventory->product_name : '';?>" required="">	
		                  <input type="hidden" class="form-control" name="inventory_id" id="inventory_id" value="<?php echo isset($inventory) ? $inventory->inventory_id : '';?>" required="">		                  	                  
			            </div>
					</div>
					<div class="row">
		                <div class="form-group col-md-6">
		                  <label for="model">Model</label>
		                  <input type="text" class="form-control" name="model" id="model" placeholder="Model" value="<?php echo isset($inventory) ? $inventory->model : '';?>" required="">
		                </div>
		            </div>
		            <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="engine_no">Engine No</label>
		                  <input type="text" class="form-control" name="engine_no" id="engine_no" placeholder="Engine No" value="<?php echo isset($inventory) ? $inventory->engine_no : '';?>" required="">
		                </div>
		            </div>
		             <div class="row">
		                 <div class="form-group col-md-6">
		                  <label for="color">Color</label>
		                  <input type="text" class="form-control" name="color" id="color" placeholder="Color" value="<?php echo isset($inventory) ? $inventory->color : '';?>">
		                </div>
		             </div>		             

		             <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="mfg_year">Mfg Year</label>
		                  <input class="form-control" type="text" name="mfg_year" id="mfg_year" placeholder="Mfg Year" value="<?php echo isset($inventory) ? $inventory->mfg_year : '';?>" required="">
		                </div>	
		             </div>
					
					<div class="row">
		                <div class="form-group col-md-6">
		                  <label for="amount">Amount</label>
		                  <input class="form-control" type="text" name="amount" id="amount" placeholder="Amount" value="<?php echo isset($inventory) ? $inventory->amount : '';?>" required="">
		                </div>	
		            </div>
		            <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="seat_capacity">Seat Capacity</label>
		                  <input class="form-control" type="text" name="seat_capacity" id="seat_capacity" placeholder="Seat Capacity" value="<?php echo isset($inventory) ? $inventory->seat_capacity : '';?>" required="">
		                </div>	
		            </div>

		            <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="quantity">Quantity</label>
		                  <input class="form-control" type="text" name="quantity" id="quantity" placeholder="Quantity" value="<?php echo isset($inventory) ? $inventory->quantity : '';?>" required="">
		                </div>	
		            </div>
		                    		                     
	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Save Changes</button>
	                <a href="<?php echo base_url('admin/inventory');?>" class="btn btn-danger">Cancel</a>
	              </div>
	            </form>
	          </div>	         
	       </div>
	      </div>
	    </section>
	    <!-- /.content -->
	</div>

<?php $this->load->view('admin/common/footer'); ?>