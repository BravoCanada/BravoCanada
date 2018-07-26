<?php $this->load->view('front/common/dashboard/header'); ?>
<!-- BEGIN: Left Aside -->
<?php $this->load->view('front/common/dashboard/sidebar'); ?>
<!-- END: Left Aside -->

	<div class="m-grid__item m-grid__item--fluid m-wrapper">		
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			
			<?php 
					if($this->session->flashdata("error_message") != ""){	
						echo $this->session->flashdata("error_message");
						$this->session->set_flashdata("error_message","");
					} 
					?>	
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title ">
						User Form
					</h3>
				</div>
				<!-- <div>
					<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
						<span class="m-subheader__daterange-label">
							<span class="m-subheader__daterange-title"></span>
							<span class="m-subheader__daterange-date m--font-brand"></span>
						</span>
						<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
							<i class="la la-angle-down"></i>
						</a>
					</span>
				</div> -->
			</div>
		</div>	

		<div class="m-subheader ">
			
				<form class="m-login__form m-form" action="<?php echo base_url('dashboard/updateUser'); ?>" method="post" enctype="multipart/form-data">
					<div class="form-group m-form__group">
						<input class="form-control m-input col-md-6" type="text" placeholder="First Name" name="fname" value="<?php echo isset($user) ? $user->fname : '' ;?>" required>
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input col-md-6" type="text" placeholder="Last Name" name="lname" value="<?php echo isset($user) ? $user->lname : '' ;?>">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input col-md-6" type="email" placeholder="Email" name="email" required="" id="email" value="<?php echo isset($user) ? $user->email : '' ;?>">
						<span style="color:red; display: none; padding-left: 10px;" id="cerror"><p>Email already exists !</p></span>
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input col-md-6" type="tel" placeholder="Phone No" name="phone_no" pattern="^\d{10}$" required="" value="<?php echo isset($user) ? $user->phone_no : '' ;?>"> 				
					</div>
					<div class="form-group m-form__group">
						<textarea class="form-control m-input col-md-6" name="address" cols="10" rows="5" placeholder="Address" required=""><?php echo isset($user) ? $user->address : '' ;?></textarea>
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input col-md-6" type="text" placeholder="Company Website" name="com_website" value="<?php echo isset($user) ? $user->com_website : '' ;?>">
					</div>
					<div class="form-group m-form__group">
						<select name="user_role" required="" class="form-control m-input col-md-6">					
							<option value="">User Role</option>
							<option value="seller" <?php echo isset($user) ? (($user->user_role == 'seller') ? 'selected' : '') : '' ;?>>Seller</option>
							<option value="buyer" <?php echo isset($user) ? (($user->user_role == 'buyer') ? 'selected' : '') : '' ;?>>Buyer</option>
							<option value="transporter" <?php echo isset($user) ? (($user->user_role == 'transporter') ? 'selected' : '') : '' ;?>>Trasporter</option>
							<option value="appraiser" <?php echo isset($user) ? (($user->user_role == 'appraiser') ? 'selected' : '') : '' ;?>>Appraiser</option>
						</select>
					</div>										
					<div class="m-login__form-action">
						<button type="submit" id="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
							Save Changes
						</button>
						<a href="<?php echo base_url();?>" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">
							Cancel
						</a>
					</div>
				</form>
		</div>
      	
	</div>
<?php $this->load->view('front/common/dashboard/footer'); ?>