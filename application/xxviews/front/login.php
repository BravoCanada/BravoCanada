<?php $this->load->view('front/common/header'); ?>

	<div class="m-login__signin">
		<div class="m-login__head">
			<h3 class="m-login__title">
				Login Page
			</h3>

			<?php 
					if($this->session->flashdata("error_message") != ""){	
						echo $this->session->flashdata("error_message");
						$this->session->set_flashdata("error_message","");
					} 
					?>	
		</div>
		<form class="m-login__form m-form" action="<?php echo base_url(); ?>index.php/login" method="post">
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="email" placeholder="Email" name="email" required="">
			</div>
			<div class="form-group m-form__group">
				<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required="">
			</div>
			<div class="row m-login__form-sub">
				<div class="col m--align-left">
					<label class="m-checkbox m-checkbox--focus">
						<input type="checkbox" name="remember">
						Remember me
						<span></span>
					</label>
				</div>
				<div class="col m--align-right">
					<a href="<?php echo base_url(); ?>index.php/forgotpassword" id="" class="m-link">
						Forget Password ?
					</a>
				</div>
			</div>
			<div class="m-login__form-action">
				<button type="submit" id="" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
					Sign In
				</button>
			</div>
		</form>
	</div>								
							
<?php $this->load->view('front/common/footer'); ?>