<?php $this->load->view('front/common/header'); ?>
		
	<div class="">
		<div class="m-login__head">
			<h3 class="m-login__title">
				Sign Up
			</h3>
			<div class="m-login__desc">
				Enter your details to create your account:
			</div>
		</div>
		<form class="m-login__form m-form" action="<?php echo base_url(); ?>index.php/register" method="post" enctype="multipart/form-data">
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="text" placeholder="First Name" name="fname" required>
			</div>
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="text" placeholder="Last Name" name="lname">
			</div>
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="email" placeholder="Email" name="email" required="" id="email">
				<span style="color:red; display: none; padding-left: 10px;" id="cerror"><p>Email already exists !</p></span>
			</div>
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="tel" placeholder="Phone No" name="phone_no" pattern="^\d{10}$" required="">				
			</div>
			<div class="form-group m-form__group">
				<textarea class="form-control m-input" name="address" cols="10" rows="5" placeholder="Address" required=""></textarea>
			</div>
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="text" placeholder="Company Website" name="com_website">
			</div>
			<div class="form-group m-form__group">
				<select name="user_role" required="" class="form-control m-input">					
					<option value="">User Role</option>
					<option value="seller">Seller</option>
					<option value="buyer">Buyer</option>
					<option value="transporter">Trasporter</option>
					<option value="appraiser">Appraiser</option>
				</select>
			</div>
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="password" placeholder="Password" name="password" required="">
			</div>
			<div class="row form-group m-form__group m-login__form-sub">
				<div class="col m--align-left">
					<label class="m-checkbox m-checkbox--focus">
						<input type="checkbox" name="agree" required="">
						I Agree the
						<a href="#" class="m-link m-link--focus">
							terms and conditions
						</a>
						.
						<span></span>
					</label>
					<span class="m-form__help"></span>
				</div>
			</div>
			<div class="m-login__form-action">
				<button type="submit" id="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
					Sign Up
				</button>
				<a href="<?php echo base_url('/');?>" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">
					Cancel
				</a>
			</div>
		</form>
	</div>		
	
<?php $this->load->view('front/common/footer'); ?>

<script>
	
	$(document).on('focusout','#email',function(){

		var email = $('#email').val();

		if(email)
		{
			$.ajax({

				url : '<?php echo base_url('register/checkUniqueEmail/')?>',
				type : 'POST',
				dataType : 'json',
				data : {email: email},

				success : function(data)
				{
					if(data)
					{
						$('#cerror').show();
						$('#email').val('');
					}

					else
					{
						$('#cerror').hide();
					}
				}

			});
		}

		else
		{
			$('#cerror').hide();
		}
	});

</script>