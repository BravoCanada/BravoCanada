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
               Forgotten Password ?
            </h3>
            <div class="m-login__desc">
               Enter your email to reset your password:
            </div>
         </div>
         <form class="m-login__form m-form" action="<?php echo base_url();?>index.php/forgotpassword" method="post">
            <div class="form-group m-form__group">
               <input class="form-control m-input" type="email" placeholder="Email" name="email" id="m_email" required="">
            </div>
            <div class="m-login__form-action">
               <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                  Request
               </button>
               <a href="<?php echo base_url();?>login" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                  Cancel
               </a>
            </div>
         </form>
      </div>

<?php $this->load->view('front/common/footer'); ?>