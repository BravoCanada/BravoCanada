<?php $this->load->view('front/common/header'); ?>
<div class="">
   <div class="m-login__head">
      <?php 
         if($this->session->flashdata("error_message") != ""){	
         	echo $this->session->flashdata("error_message");
         	$this->session->set_flashdata("error_message","");
         } 
         ?>	
      <h3 class="m-login__title">
        Reset Password 
      </h3>     
   </div>
   <form class="m-login__form m-form" action="<?php echo base_url('forgotpassword/resetPassword/'.$this->uri->segment(3));?>" method="post" >
      <div class="form-group m-form__group">
         <input class="form-control m-input" type="password" id="password" placeholder="New Password" name="password" required="">
      </div>
       <div class="form-group m-form__group">
         <input class="form-control m-input" type="password" id="cpassword" placeholder="Confirm Password" name="cpassword" required="">
         <span style="color:red; display: none;" id="cerror"><p>Password does not match !</p></span>
      </div>
      <div class="m-login__form-action">
         <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" onclick="checkPassword()">
         Reset
         </button>
         &nbsp;&nbsp;
         <a href="<?php echo base_url();?>login" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel</a>
      </div>
   </form>
</div>

<?php $this->load->view('front/common/footer'); ?>

<script>
   
  function checkPassword() 
  {
      
      var password  = $('#password').val();
      var cpassword = $('#cpassword').val();

      if(password == cpassword)
      {
         return true;          
      }

      else
      {
         $('#cpassword').val('');
         $('#cerror').show();
      }

  } 
</script>