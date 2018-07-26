<?php $this->load->view('common/header'); ?>
<!--BODY AREA STARTS HERE -->
<main role="main-wrapper">
   <section role="banner-tab-area">
      <div class="container">
         <div class="row py-5 mt-4 mb-5">
            <div class="col-md-6">
               <img src="<?php echo base_url();?>assets/user/img/register-img.png" class="img-fluid">
            </div>
            <div class="col-md-6 register-area">
               <?php 
                  if($this->session->flashdata("error_message") != ""){ 
                    echo $this->session->flashdata("error_message");
                    $this->session->set_flashdata("error_message","");
                  } 
                  ?> 
               <div class="register-head pt-5 pb-4 text-center">
                  <h6>ENTER YOUR DETAILS TO CREATE YOUR ACCOUNT</h6>
               </div>
               <form action="<?php echo base_url('user/Register');?>" method="post">               
                  <div class="row">
                     <div class="form-group col-md-10">
                        <h3>Personal Details</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <select name="title" id="title" class="form-control">
                           <option value="mr">Mr.</option>
                           <option value="mrs">Mrs.</option>
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control">               
                     </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control">               
                     </div>
                     <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                     </div>
                  </div>
                   <div class="row">
                      <div class="form-group col-md-6">
                          <label for="dob">Date of birth</label>
                          <input type="date" name="dob" id="dob" class="form-control">               
                      </div>
                      <div class="form-group col-md-6">
                          <label for="nationality">Nationality</label>
                          <select name="nationality" id="nationality" class="form-control">                    
                               <option value="">Select</option> 
                               <?php foreach($countries as $rows):?>

                                  <option value="<?php echo $rows->id?>"><?php echo $rows->name;?></option>
                               <?php endforeach;?>  
                          </select>               
                      </div>  
                  </div>
                  <div class="row">
                     <div class="form-group col-md-10">
                        <h3>Contact Details</h3>
                     </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="address_1">Address line 1</label>
                        <input type="text" name="address_1" id="address_1" class="form-control">               
                    </div>  
                    <div class="form-group col-md-6">
                        <label for="address_2">Address line 2</label>
                        <input type="text" name="address_2" id="address_2" class="form-control">               
                    </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="city">Town/City</label>
                          <input type="text" name="city" id="city" class="form-control">               
                      </div>  
                      <div class="form-group col-md-6">
                          <label for="state">State/Province</label>
                          <input type="text" name="state" id="state" class="form-control">               
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="zip">Post code/Zip code</label>
                          <input type="text" name="zip" id="zip" class="form-control">               
                      </div>  
                      <div class="form-group col-md-6">
                          <label for="country">Country</label>
                          <select name="country" id="country" class="form-control">                      
                              <option value="">Select</option> 
                               <?php foreach($countries as $rows):?>

                                  <option value="<?php echo $rows->id?>"><?php echo $rows->name;?></option>
                               <?php endforeach;?>         
                          </select>              
                      </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="email">Email Address</label>
                          <input type="email" name="email" id="email" class="form-control">             
                      </div>  
                      <div class="form-group col-md-6">
                          <label for="phone_no">Telephone</label>
                          <input type="text" name="phone_no" id="phone_no" class="form-control">               
                      </div>
                  </div>
                   <div class="row">                       
                      <div class="form-group col-md-6">
                          <label for="mobile">Mobile/Cell</label>
                          <input type="text" name="mobile" id="mobile" class="form-control">               
                      </div>
                      <div class="form-group col-md-6">
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password" class="form-control">               
                      </div>
                  </div>               

                   <div class="form-check mt-2">
                     <label class="form-check-label" style="padding-left: 0px !important;">
                    <!--  <input class="form-check-input" type="checkbox" name="declaration" id="declaration" value="1">ENROLLMENT AGREEMENT - DECLARATION & SIGNATURE -->
                      <p>DECLARATION - (<span id="student_name"></span>)</p>                     
                      <p>1. I hereby declare that the information provided is true and correct. I also understand that any willful dishonesty may render for refusal of this application or immediate termination of this agreement with no further notice.</p>
                      <p>2. I authorise Bravo Canada to obtain further official records if necessary from any relevant educational institution.</p>
                      <p>3. I acknowledge that i have read and fully understand the terms and conditions of the foregoing student agreement and that i will comply with the same.</p>

                     </label>
                  </div>

                  <div class="form-check mt-2">
                     <label class="form-check-label">
                     <input class="form-check-input" type="checkbox" name="agree" id="agree" value="1"> I Agree the <a href="javascript:void(0);" id="btn_tc">Terms & Conditions</a>
                     </label>
                  </div>
                  <div class="btn-area text-left mt-4">
                     <button type="submit" class="btn btn-primary">SIGN UP</button>               
                     <button type="reset" class="btn btn-danger">RESET</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
</main>
<!--BODY AREA ENDS HERE // -->
<?php $this->load->view('footer'); ?>



<script type="text/javascript">
   $(document).ready(function() {   
     // $('#start_date').datepicker();
     // $('#end_date').datepicker();
    
      $('form').validate({
          rules: {
              fname: {
                  required: true                          
              },
   
               email: {
                  required: true,
                  email: true
                  
              },
   
              phone_no: {
   
                  required: true,
                  number: true
              },

               mobile: {
   
                  required: true,
                  number: true
              },
   
              nationality: {
   
                  required: true
   
              },

              address_1: {
   
                  required: true
   
              },

             city: {
   
                  required: true
   
              }, 

               country: {
   
                  required: true
   
              },  
 

               zip: {
   
                  required: true
   
              },  

              state: {
   
                  required: true
   
              },  
   
   
              dob: {
   
                  required: true
              },
   
              password: {
   
                  required: true
              },
   
              agree: {
   
                  required: true
              },

                declaration: {
   
                  required: true
              }     
                            
          }
        
      });
   });
</script>