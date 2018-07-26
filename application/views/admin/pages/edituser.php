<?php $this->load->view('admin/common/header'); ?>

<?php $this->load->view('admin/common/sidebar'); ?>

    <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Edit User	      
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
	           
	            <form role="form" action="<?php echo base_url('admin/user/editUser');?>" method="post">
	              <div class="box-body">
	              	<div class="row">	              	
		                <div class="form-group col-md-6">
		                  <label for="fname">First Name</label>
		                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="" value="<?php echo isset($user) ? $user->fname : ''?>">
		                  <input type="hidden" class="form-control" name="user_id" value="<?php echo isset($user) ? $user->id : '';?>">
			            </div>
					</div>
					<div class="row">
		                <div class="form-group col-md-6">
		                  <label for="lname">Last Name</label>
		                  <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="<?php echo isset($user) ? $user->lname : ''?>">
		                </div>
		            </div>
		            <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="email">Email</label>
		                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="" value="<?php echo isset($user) ? $user->email : ''?>">
		                </div>
		            </div>		            
		             <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="phone_no">Phone No</label>
		                  <input type="tel" class="form-control" name="phone_no" id="phone_no" placeholder="Phone No" pattern="^\d{10}$" required="" value="<?php echo isset($user) ? $user->phone_no : ''?>">
		                </div>
		             </div>
		             <div class="row">
		                <div class="form-group col-md-6">
		                  <label for="address">Address</label>
		                  <textarea name="address" id="address" cols="10" rows="5" required="" class="form-control"><?php echo isset($user) ? $user->address : ''?></textarea>
		                </div>	
		             </div>

		             <div class="row">
		                 <div class="form-group col-md-6">
		                  <label for="user_role">User Role</label>
		                  <select name="user_role" id="user_role" class="form-control">
		                  	
		                  	<option value="">User Role</option>
		                  	<option value="Admin" <?php echo isset($user) ? (($user->user_role =='Admin') ? 'selected' : '') : ''?>>Admin</option>
		                  	<option value="Student" <?php echo isset($user) ? (($user->user_role =='Student') ? 'selected' : '') : ''?>>Student</option>             	

		                  </select>
		                </div>  
		             </div>             
	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Save Changes</button>
	                <a href="<?php echo base_url('admin/user');?>" class="btn btn-danger">Cancel</a>
	              </div>
	            </form>
	          </div>	         
	       </div>
	      </div>
	    </section>
	    <!-- /.content -->
	</div>

<?php $this->load->view('admin/common/footer'); ?>