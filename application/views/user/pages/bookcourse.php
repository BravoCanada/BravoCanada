<?php $this->load->view('common/header'); ?>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/> -->
<!--BODY AREA STARTS HERE -->
<main role="main-wrapper">
   <section role="banner-tab-area">
      <div class="container">
         <?php 
            if($this->session->flashdata("error_message") != ""){ 
              echo $this->session->flashdata("error_message");
              $this->session->set_flashdata("error_message","");
            } 
            ?> 
         <form action="<?php echo base_url('price/saveSummary');?>" method="post" enctype="multipart/form-data">
            <div class="row py-5 mt-4 mb-1">
               <div class="col-md-6">
                  <div id="select_location_div" class="d-none">
                     <div class="row">
                        <div class="form-group col-md-10">
                           <label for="location_en">Location</label>
                           <input type="hidden" name="course_id" id="course_id" value="<?php echo isset($course) ? $course->course_id : '';?>">
                           <input type="hidden" name="location_id" id="location_id" value="<?php echo isset($course) ? $course->location_en : '';?>">
                           <select name="location_en" id="location_en" class="form-control">
                              <option value="">Select</option>
                              <?php foreach($location_en as $rows):?>   
                              <option value="<?php echo $rows->location_id;?>" <?php echo ($rows->location_id == $course->location_en) ? 'selected' : '';?>><?php echo $rows->location_name;?></option>
                              <?php endforeach;?>                                           
                           </select>
                        </div>
                     </div>
                     <div class="row" id="div_course_en">
                        <div class="form-group col-md-10">
                           <label for="course_en">Course</label>
                           <select name="course_en" id="course_en" class="form-control">
                              <?php foreach($courseByLocation as $rows):?>
                              <option value="<?php echo $rows->course_id?>" <?php echo ($rows->course_id == $course->course_id) ? 'selected' : '';?>><?php echo $rows->course_title_en;?></option>
                              <?php endforeach;?>
                           </select>
                        </div>
                     </div>
                     <div class="row" id="div_date_en">
                        <div class="form-group col-md-10">
                           <label for="start_date">Start Date</label>
                           <select name="start_date" id="start_date" class="form-control">
                              <?php foreach($starting_date as $key=>$value):?>
                              <option value="<?php echo $value;?>" <?php echo ($value == $st_date) ? 'selected' : '';?>><?php echo $value;?></option>
                              <?php endforeach;?>                                                                         
                           </select>
                        </div>
                     </div>
                     <div class="row" id="div_duration_en">
                        <div class="form-group col-md-10">
                           <label for="duration">Duration</label>
                           <select name="duration" id="duration" class="form-control">
                              <?php foreach($duration as $key => $value):?>
                              <option value="<?php echo $key;?>" <?php echo ($key == $duration_key) ? 'selected' : '';?>><?php echo $value;?></option>
                              <?php endforeach;?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div id="select_accommodation_div" class="">
                     <div class="row">
                        <div class="form-group col-md-10">
                           <h3>Choose Your Accommodation</h3>
                           <p>To find the best accommodation for you we need to know your gender and the age you will be at the start of your course.</p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-3">
                           <label for="">Age at start of course</label>
                           <input type="text" name="age" id="age" class="form-control">	                        		
                        </div>
                        <div class="form-group col-md-3">
                           <label for="">Duration of Stay</label>
                           <select name="duration_of_stay" id="duration_of_stay" class="form-control">
                              <option value="1">1 weeks</option>
                              <option value="2">2 weeks</option>
                              <option value="3">3 weeks</option>
                              <option value="4">4 weeks</option>
                              <option value="5">5 weeks</option>
                              <option value="6">6 weeks</option>
                              <option value="7">7 weeks</option>
                              <option value="8">8 weeks</option>
                              <option value="9">9 weeks</option>
                              <option value="10">10 weeks</option>
                              <option value="11">11 weeks</option>
                              <option value="12">12 weeks</option>
                              <option value="13">13 weeks</option>
                              <option value="14">14 weeks</option>
                              <option value="15">15 weeks</option>
                              <option value="16">16 weeks</option>
                              <option value="17">17 weeks</option>
                              <option value="18">18 weeks</option>
                              <option value="19">19 weeks</option>
                              <option value="20">20 weeks</option>
                              <option value="21">21 weeks</option>
                              <option value="22">22 weeks</option>
                              <option value="23">23 weeks</option>
                              <option value="24">24 weeks</option>
                              <option value="25">25 weeks</option>
                              <option value="26">26 weeks</option>
                              <option value="27">27 weeks</option>
                              <option value="28">28 weeks</option>
                              <option value="29">29 weeks</option>
                              <option value="30">30 weeks</option>
                              <option value="31">31 weeks</option>
                              <option value="32">32 weeks</option>
                              <option value="33">33 weeks</option>
                              <option value="34">34 weeks</option>
                              <option value="35">35 weeks</option>
                              <option value="36">36 weeks</option>
                              <option value="37">37 weeks</option>
                              <option value="38">38 weeks</option>
                              <option value="39">39 weeks</option>
                              <option value="40">40 weeks</option>
                              <option value="41">41 weeks</option>
                              <option value="42">42 weeks</option>
                              <option value="43">43 weeks</option>
                              <option value="44">44 weeks</option>
                              <option value="45">45 weeks</option>
                              <option value="46">46 weeks</option>
                              <option value="47">47 weeks</option>
                              <option value="48">48 weeks</option>
                              <option value="49">49 weeks</option>
                              <option value="50">50 weeks</option>

                           </select>
                        </div>
                        <div class="form-group col-md-4">
                           <label for="">Accommodation Start Date</label>                       		                        		
                           <input type="date" class="form-control" name="acc_start_date" id="acc_start_date">
                        </div>
                     </div>
                     <div class="row">

                     	<div class="form-group col-md-4">
                     		<button type="button" class="btn btn-primary" id="find_accommodation">Find Accommodation</button>	                        		
                     	</div>                     	

                     </div>
                     <div class="row">
                        <table class="table">
                           <thead class="" style="color: #b80509 ">
                              <tr>
                                 <th scope="col">Room Type</th>
                                 <th scope="col">Options/Extras</th>
                                 <th scope="col">Price</th>
                                 <th scope="col">Select</th>
                              </tr>
                           </thead>
                           <tbody id="accommodation_body">								  										   
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div id="select_airport_section" class="d-none">
                     <div class="row">
                        <div class="form-group col-md-10">
                           <h3>EXTRAS</h3>
                           <br><br>
                           <h5>Airport Transfers</h5>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-10">
                           <label for="airport">Which airport will you arrive at?</label>
                           <select name="airport" id="airport" name="airport" class="form-control">
                              <option value="">I do not require airport transport</option>
                              <option value="Toronto Pearson International Airport">Toronto Pearson International Airport</option>
                           </select>
                        </div>
                     </div>
                     <div id="transfer_div" class="d-none">
                        <div class="row">
                           <div class="form-group col-md-10">
                              <label for="flight_no">Flight No</label>								
                              <input type="text" name="flight_no" id="flight_no" class="form-control">
                           </div>
                        </div>
                        <!-- <div class="row">
                           <div class="form-group col-md-10">
                            <label for="transfer">Arrival, departure transfer or arrival and departure?</label>
                           
                           <select name="transfer" id="transfer" class="form-control">
                           
                           </select>
                           </div>
                           </div> -->
                        <div class="row">
                           <div class="form-group col-md-10">
                              <label for="arrival_date">Arrival Date</label>								
                              <input type="date" name="arrival_date" id="arrival_date" class="form-control">
                           </div>
                        </div>
                     </div>
                     <!-- <div class="row">
                        <div class="form-group col-md-10">
                         <label for="private_lessons">Private Lessons</label>							
                        <select name="private_lessons" id="private_lessons" class="form-control">
                        <option value="">I do not require private lessons</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select>
                        </div>
                        </div> -->
                     <div class="row">
                        <div class="form-group col-md-10">
                           <label for="insurance">Insurance description</label>							
                           <select name="insurance" id="insurance" class="form-control">
                              <option value="">I do not require medical insurance</option>
                              <option value="1">I require medical insurance</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div id="personal_info_section" class="d-none">
                     <div class="row">
                        <div class="form-group col-md-10">
                           <h3>Personal Details</h3>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="title">Title</label>
                           <select name="title" id="title" class="form-control">
                              <option value="mr" <?php echo isset($user) ? (($user->title == 'mr') ? 'selected' : '') : ''?>>Mr.</option>
                              <option value="mrs" <?php echo isset($user) ? (($user->title == 'mrs') ? 'selected' : '') : ''?>>Mrs.</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="fname">First Name</label>
                           <input type="text" name="fname" id="fname" class="form-control" value="<?php echo isset($user) ? $user->fname : '';?>">               
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="lname">Last Name</label>
                           <input type="text" name="lname" id="lname" class="form-control"  value="<?php echo isset($user) ? $user->lname : '';?>">               
                        </div>
                        <div class="form-group col-md-6">
                           <label for="gender">Gender</label>
                           <select name="gender" id="gender" class="form-control">
                              <option value="Male" <?php echo isset($user) ? (($user->gender == 'Male') ? 'selected' : '') : ''?>>Male</option>
                              <option value="Female" <?php echo isset($user) ? (($user->gender == 'Female') ? 'selected' : '') : ''?>>Female</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="dob">Date of birth</label>
                           <input type="date" name="dob" id="dob" class="form-control" value="<?php echo isset($user) ? date('Y-m-d',strtotime($user->dob)) : '';?>">               
                        </div>
                        <div class="form-group col-md-6">
                           <label for="nationality">Nationality</label>
                           <select name="nationality" id="nationality" class="form-control">
                              <option value="">Select</option>
                              <?php foreach($countries as $rows):?>
                                 <option value="<?php echo $rows->id?>" <?php echo isset($user) ? (($user->nationality == $rows->id) ? 'selected' : '') : '';?>><?php echo $rows->name;?></option>
                              <?php endforeach;?>  
                           </select>
                        </div>
                     </div>                     
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="passport_no">Passport No</label>
                           <input type="text" name="passport_no" id="passport_no" class="form-control" >                             
                        </div>
                        <div class="form-group col-md-6">
                           <label for="passport_image">Passport Image</label>
                           <input type="file" name="passport_image" id="passport_image" class="form-control">               
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="visa_type">Visa Type</label>
                           <select name="visa_type" id="visa_type" class="form-control">
                              <option value="">select</option>
                              <option value="student">Student</option>
                              <option value="buisness">Buisness</option>
                              <option value="tourist">Tourist</option>
                           </select>
                        </div>
                         <div class="form-group col-md-6 <?php echo isset($user) ? 'd-none' : '';?>">
                           <label for="password">Password</label>
                           <input type="password" name="password" id="password" class="form-control">               
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                           <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="health_issue_check" id="health_issue_check" value="1">Do you have any health issues/allergies?
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                           <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="smoke_check" id="smoke_check" value="1">Do you smoke?
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                           <h2>Contact Details</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="address_1">Address line 1</label>
                           <input type="text" name="address_1" id="address_1" class="form-control" value="<?php echo isset($user) ? $user->address_1 : '';?>">               
                        </div>
                        <div class="form-group col-md-6">
                           <label for="address_2">Address line 2</label>
                           <input type="text" name="address_2" id="address_2" class="form-control" value="<?php echo isset($user) ? $user->address_2 : '';?>">               
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="city">Town/City</label>
                           <input type="text" name="city" id="city" class="form-control" value="<?php echo isset($user) ? $user->city : '';?>">               
                        </div>
                        <div class="form-group col-md-6">
                           <label for="state">State/Province</label>
                           <input type="text" name="state" id="state" class="form-control" value="<?php echo isset($user) ? $user->state : '';?>">               
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="zip">Post code/Zip code</label>
                           <input type="text" name="zip" id="zip" class="form-control" value="<?php echo isset($user) ? $user->zip : '';?>">               
                        </div>
                        <div class="form-group col-md-6">
                           <label for="country">Country</label>
                           <select name="country" id="country" class="form-control">
                              <option value="">Select</option>
                              <?php foreach($countries as $rows):?>
                                 <option value="<?php echo $rows->id?>" <?php echo isset($user) ? (($user->country == $rows->id) ? 'selected' : '') : '';?>><?php echo $rows->name;?></option>
                              <?php endforeach;?>         
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="email">Email Address</label>
                           <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($user) ? $user->email : '';?>">             
                        </div>
                        <div class="form-group col-md-6">
                           <label for="phone_no">Telephone</label>
                           <input type="text" name="phone_no" id="phone_no" class="form-control" value="<?php echo isset($user) ? $user->phone_no : '';?>">               
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="mobile">Mobile/Cell</label>
                           <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo isset($user) ? $user->mobile : '';?>">               
                        </div>                       
                     </div>
                      <div class="row">
                     <div class="form-group col-md-12">
                        <h2>Payment Method</h2>
                     </div>
                   </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                           <select name="payment_type" id="payment_type" class="form-control" onChange="checkCardDiv()">
                              <option value="">Select Payment</option>
                              <option value="paypal">PayPal</option>
                              <option value="card">Credit Card</option>
                           </select>
                        </div>
                     </div>
					 <script>
						function checkCardDiv(){
							var val=jQuery('#payment_type').val();
							if(val=='card'){
								jQuery('#cardDetail').show();
							}else{
								jQuery('#cardDetail').hide();
							}
						}
					 </script>
					 
                     <div id="cardDetail" style="display:none">
						 <div class="row">
							<div class="form-group col-md-12">
							   <h2>Credit Card Details</h2>
							</div>
						 </div>
						 <div class="row">
							<div class="form-group col-md-12">
							   <label for="card_no">Card No</label>
							   <input type="text" name="card_no" id="card_no" class="form-control">               
							</div>                      
						 </div>
						   <div class="row">
							<div class="form-group col-md-6">
							   <label for="exp_month">Expiry Month</label>
							   <input type="text" name="exp_month" id="exp_month" class="form-control">               
							</div>
							<div class="form-group col-md-6">
							   <label for="exp_year">Expiry Year</label>
							   <input type="text" name="exp_year" id="exp_year" class="form-control">               
							</div>
						 </div>
						  <div class="row">
							<div class="form-group col-md-12">
							   <label for="cvv">CVV</label>
							   <input type="text" name="cvv" id="cvv" class="form-control">               
							</div>                      
						 </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                           <h2>English Level</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-12">
                           <label for="your_lang_level">Your language level</label>  
                           <select class="form-control" name="your_lang_level" id="your_lang_level">
                              <option value="">Select Option</option>
                              <option value="Beginner">Beginner</option>
                              <option value="Elementary">Elementary</option>
                              <option value="Pre-Intermediate">Pre-Intermediate</option>
                              <option value="Intermediate">Intermediate</option>
                              <option value="Upper Intermediate">Upper Intermediate</option>
                              <option value="Pre-Advanced">Pre-Advanced</option>
                              <option value="Advanced">Advanced</option>
                           </select>
                           You can test your English online at: <a href="www.bravocan.ca/englishtest">www.bravocan.ca/englishtest</a> test.             
                        </div>
                     </div>
                     <div class="form-check mt-2">
                        <label class="form-check-label">                      
                           <p>1. I hereby declare that the information provided is true and correct. I also understand that any willful dishonesty may render for refusal of this application or immediate termination of this agreement with no further notice.</p>
                           <p>2. I authorise Bravo Canada to obtain further official records if necessary from any relevant educational institution.</p>
                           <p>3. I acknowledge that i have read and fully understand the terms and conditions of the foregoing student agreement and that i will comply with the same.</p>
                        </label>
                     </div>
                     <div class="form-check mt-2">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="agree" id="agree" value="1"> I Agree the <a target="_blank" href="<?php echo base_url('home/terms');?>" id="btn_tc">Terms & Conditions</a>
                        </label>
                     </div>                     
                  </div>
               </div>
               <div class="col-md-2"></div>
               <div class="col-md-4">
                  <strong>SUMMARY</strong>
                  <div class="" id="summary_div_en">
                     <div class="mt-4" style="border-bottom: 1px solid #000;">
                        <span class="location_name"><?php echo isset($courseByLocation) ? $courseByLocation[0]->location_name : '';?></span><br>
                        <span class="course_name"><?php echo isset($course) ? $course->course_title_en : '';?></span><br>
                        <span class="current_date"><?php echo isset($st_date) ? $st_date : '';?></span>
                     </div>
                     <input type="hidden" name="hidden_course_price" id="hidden_course_price" value="<?php echo isset($course_price) ? $course_price : '0.00'?>">
                     <input type="hidden" name="hidden_reg_fee" id="hidden_reg_fee" value="160">
                     <input type="hidden" name="hidden_acc_price" id="hidden_acc_price">
                     <input type="hidden" name="hidden_acc_type" id="hidden_acc_type">
                     <input type="hidden" name="hidden_private_lessons_price" id="hidden_private_lessons_price">
                     <input type="hidden" name="hidden_student_insurance" id="hidden_student_insurance">
                     <input type="hidden" name="hidden_airport_price" id="hidden_airport_price">
                     <input type="hidden" name="hidden_acc_placement_fee" id="hidden_acc_placement_fee">
                     <input type="hidden" name="hidden_total_price" id="hidden_total_price">
                     <input type="hidden" name="hidden_user_id" value="<?php echo ($user_id) ? $user_id : ''; ?>">
                     <div class="pt-4" style="border-bottom: 1px solid #000">
                        <?php if(isset($discount_price)):?>
                           DISCOUNTED PRICE (<?php echo $discount.'%';?>) <span class="pull-right">$<span class="course_price"><?php echo isset($discount_price) ? $discount_price : '';?></span></span>
                          <?php else:?>

                        COURSE <span class="pull-right">$<span class="course_price"><?php echo isset($course_price) ? number_format($course_price,2) : '';?></span></span><br>
                      <?php endif;?>
                        
                        <div class="div_acc_price d-none">ACCOMMODATION<span class="pull-right">$<span class="acc_price"></span></span></div>
                     </div>
                     <div class="pt-4" style="border-bottom: 1px solid #000">
                        EXTRAS<br>
                        <div class="div_airport_charges d-none">
                           <span class="airport_name"></span>
                           <p class="pull-right">$ <span class="airport_chages"></span></p>
                        </div>
                        <br>                       
                        <br>
                        <div class="div_insurance d-none">
                           Medical Insurance
                           <p class="pull-right">$ <span class="insurance_chages"></span></p>
                        </div>
                        <br>
                        REGISTRATION FEE<span class="pull-right">$<span class="reg_fee"><?php echo ($course->course_reg_fee) ? $course->course_reg_fee : 0.00;?></span></span>						
                        <div class="div_acc_reg_fee d-none">
                           ACCOMMODATION<br>
                           PLACEMENT FEE<span class="pull-right">$<span class="acc_reg_fee">0.00</span></span>
                        </div>
                     </div>
                     <div class="pt-4">								
                        <strong>TOTAL PRICE</strong><span class="pull-right">$<span id="total_price"><?php echo isset($discount_price) ? number_format(($discount_price+$course->course_reg_fee),2) : number_format(($course_price+$course->course_reg_fee),2) ;?></span></span>								
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mb-3">
               <div class="col-md-12">
                  <button type="button" class="btn btn-primary d-none" id="btn_course_page">CONTINUE</button>
                  <button type="button" class="btn btn-primary" id="btn_acc_page">CONTINUE</button>
                  <button type="button" class="btn btn-primary d-none" id="btn_airport_page">Book Now</button>
                  <button type="submit" class="btn btn-primary d-none" id= "btn_submit" name="submit">Submit</button>
                  <a href="<?php echo base_url('course');?>" class="btn btn-danger">CANCEL</a>
               </div>
            </div>
         </form>
      </div>
   </section>
</main>
<!--BODY AREA ENDS HERE // -->
<!--FOOTER AREA STARTS HERE-->
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
              },

               passport_no: {
   
                  required: true
              },

              passport_image: {

              	  required: true
              },

              visa_type: {

              	  required: true
              },

              your_lang_level: {

              	  required: true
              },

               payment_type: {

                 required: true
              }

              //  card_no: {

              //    required: true
              // },

              // exp_month: {

              //    required: true
              // },

              // exp_year: {

              //    required: true
              // },

              // cvv: {

              //    required: true
              // }               
                            
          }
        
      });
   });
</script>