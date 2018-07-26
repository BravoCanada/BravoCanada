<?php $this->load->view('admin/common/header'); ?>

<?php $this->load->view('admin/common/sidebar'); ?>

    <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Add User	      
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
	           
	            <form role="form" action="<?php echo base_url('admin/setting/updateHomeLocation');?>" method="post">
	              	<div class="box-body">
	              		<div class="col-md-12">	         
				             <div class="row">
				                 <div class="form-group col-md-6">
					                  <label for="location1">Select Location</label>
					                  <select name="location[]" id="location1" class="form-control" required="">	

					                  	<option value="">select</option>

						                  	<?php foreach($location as $rows):?>

						                  		<option value="<?php echo $rows->location_id?>"><?php echo $rows->location_name;?></option>

						                  	<?php endforeach;?>	                  	
					                  	
					                  </select>
				                </div>
				             </div>  

				              <div class="row">
				                 <div class="form-group col-md-6">
					                  <label for="location2">Select Location</label>
					                  <select name="location[]" id="location2" class="form-control" required="">	

					                  	<option value="">select</option>	

					                  		<?php foreach($location as $rows):?>

						                  		<option value="<?php echo $rows->location_id?>"><?php echo $rows->location_name;?></option>

						                  	<?php endforeach;?>                  	
					                  	
					                  </select>
				                </div>
				             </div>  

				             <div class="row">
				                 <div class="form-group col-md-6">
					                  <label for="location3">Select Location</label>
					                  <select name="location[]" id="location3" class="form-control" required="">	

					                  	<option value="">select</option>	

					                  		<?php foreach($location as $rows):?>

						                  		<option value="<?php echo $rows->location_id?>"><?php echo $rows->location_name;?></option>

						                  	<?php endforeach;?>                  	
					                  	
					                  </select>
				                </div>
				             </div> 

				             <div class="row">
				                 <div class="form-group col-md-6">
					                  <label for="location4">Select Location</label>
					                  <select name="location[]" id="location4" class="form-control" required="">	

					                  	<option value="">select</option>	

					                  		<?php foreach($location as $rows):?>

						                  		<option value="<?php echo $rows->location_id?>"><?php echo $rows->location_name;?></option>

						                  	<?php endforeach;?>                  	
					                  	
					                  </select>
				                </div>
				             </div>                     
	              		</div>
	              	</div>

	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Update</button>
	                <a href="<?php echo base_url('admin/setting');?>" class="btn btn-danger">Cancel</a>
	              </div>
	            </form>
	          </div>	         
	       </div>
	      </div>
	    </section>
	    <!-- /.content -->
	</div>

<?php $this->load->view('admin/common/footer'); ?>