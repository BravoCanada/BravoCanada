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
						<h3>FORGOTTON PASSWORD</h3>						
					</div>
					<form action="<?php echo base_url('user/FogottonPassword');?>" method="post">
					  <div class="form-group">
						<label for="email" style="font-weight: 600;font-size: 15px;">Enter Email Address:</label>
						<input type="email" class="form-control" id="email" name="email">
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
                       }                                                  
                   }
                 
               });
            });
        </script>