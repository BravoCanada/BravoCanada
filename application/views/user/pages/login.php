<?php $this->load->view('common/header'); ?>
<!--BODY AREA STARTS HERE -->

<main role="main-wrapper">
	<section role="banner-tab-area">
		<div class="container">
			<div class="row py-5 mt-4 mb-5">
				<div class="col-md-6">
					<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" class="img-fluid">
				</div>
				<div class="col-md-6">
					<?php 
				         if($this->session->flashdata("error_message") != ""){ 
				           echo $this->session->flashdata("error_message");
				           $this->session->set_flashdata("error_message","");
				         } 
				         ?> 
					<div class="login-area text-center py-5">
						<h3>LOGIN</h3>
						<p>TO YOUR ACCOUNT</p>
					</div>
					<form action="<?php echo base_url('user/Login');?>" method="post">
					  <div class="form-group">
						<label for="email" style="font-weight: 600;font-size: 15px;">Email address:</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php echo (isset($_COOKIE['email'])) ? $_COOKIE['email'] : '';?>">
					  </div>
					  <div class="form-group">
						<label for="pwd" style="font-weight: 600;font-size: 15px;">Password:</label>
						<input type="password" class="form-control" id="password" name="password" value="<?php echo (isset($_COOKIE['password'])) ? $_COOKIE['password'] : '';?>">
						<a href="<?php echo base_url('user/FogottonPassword');?>" class="pull-right" style="font-size: 15px;">Forgot Password</a>
					  </div>
					  <div class="form-group form-check">
						<label class="form-check-label">
						  <input class="form-check-input" type="checkbox" value="1" name="remember_me" <?php echo (isset($_COOKIE['remember_me'])) ? 'checked' : '';?>> Remember me
						</label>
					  </div>
					  <button type="submit" class="btn btn-danger">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

<!--BODY AREA ENDS HERE // -->

<!--FOOTER AREA STARTS HERE-->

<?php $this->load->view('footer'); ?>

<script type="text/javascript">
    $(document).ready(function() {
       $('form').validate({
           rules: {                     

                email: {
                   required: true,
                   email: true
                   
               },
             
               password: {

               		required: true
               },                                     
           }
         
       });
    });
</script>