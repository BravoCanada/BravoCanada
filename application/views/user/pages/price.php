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
			<form action="<?php echo base_url('price/saveSummary');?>" method="post">	
				<div class="row py-5 mt-4 mb-1">
					<div class="col-md-6">				
						<div id="select_location_div" class="">
							<div class="row">
	                            <div class="form-group col-md-10">
	                             <label for="location_en">Location</label>
	                             <input type="hidden" name="course_id" id="course_id">
	                             <input type="hidden" name="location_id" id="location_id">
	                             <select name="location_en" id="location_en" class="form-control"> 
	                                <option value="">Select</option>
	                                <?php foreach($location_en as $rows):?>   

	                                    <option value="<?php echo $rows->location_id;?>"><?php echo $rows->location_name;?></option>                                        
	                                     
	                                <?php endforeach;?>                                           
	                             </select>
	                           </div>  
	                        </div>            

		                    <div class="row d-none" id="div_course_en">
	                            <div class="form-group col-md-10">
		                             <label for="course_en">Course</label>
		                             <select name="course_en" id="course_en" class="form-control"> 
		                                <option value="">Select</option>
		                                                                         
		                             </select>
	                           	</div>  
	                        </div> 

	                        <div class="row d-none" id="div_date_en">                        	
	                            <div class="form-group col-md-10">
		                            <label for="start_date">Start Date</label>
		                                <select name="start_date" id="start_date" class="form-control"> 
	                                		<option value="">Select</option>                                                                         
	                            	    </select>
	                            </div>  
	                        </div>  

	                        <div class="row d-none" id="div_duration_en">                        	
	                            <div class="form-group col-md-10">
		                             <label for="duration">Duration</label>
		                             <select name="duration" id="duration" class="form-control"> 
	                                	<option value="">Select</option>
	                                                                         
	                             	</select>
	                           </div>  
	                        </div>  
						</div>

						<div id="select_accommodation_div" class="d-none">
							<div class="row">
	                            <div class="form-group col-md-10">

		                             <h3>Choose Your Accommodation</h3>
		                             <p>To find the best accommodation for you we need to know your gender and the age you will be at the start of your course.</p>
	                             
	                           </div>  
	                        </div>

	                        <div class="row">
	                        	<div class="form-group col-md-10">
	                        		<label for="">Gender</label>
	                        		<input type="radio" name="gender" value="M" checked="">Male
	                        		<input type="radio" name="gender" value="F" >Female
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
		                             </select>                        		
	                        	</div>

	                        	<div class="form-group col-md-4">
	                        		<label for=""></label><br><br>	                        		                        		
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

		                             <h3>EXTRAS</h3><br><br>
		                           
		                             <h5>Airport Transfers</h5>
	                             
	                           </div>  
	                        </div>
							<div class="row">
	                            <div class="form-group col-md-10">
	                             <label for="airport">Which airport will you arrive at?</label>
							
									<select name="airport" id="airport" name="airport" class="form-control">
										<option value="">I do not require airport transport</option>
										<option value="London Gatwick Airport">London Gatwick Airport</option>
										<option value="London Heathrow Airport">London Heathrow Airport</option>
										<option value="London Luton Airport">London Luton Airport</option>
										<option value="London Stansted Airport">London Stansted Airport</option>
										<option value="London Southend Airport">London Southend Airport</option>
										<option value="London St. Pancras International Rail">London St. Pancras International Rail</option>
										<option value="Ashford International Rail">Ashford International Rail</option>
									</select>
								</div>
							</div>

							<div class="row d-none" id="transfer_div">
	                            <div class="form-group col-md-10">
	                             <label for="transfer">Arrival, departure transfer or arrival and departure?</label>
							
									<select name="transfer" id="transfer" class="form-control">
										<!-- <option>Select Option</option>
										<option value="1">Arrival</option>
										<option value="2">Departure</option> -->
										<!-- <option value="3">Arrival And Departure</option> -->
									</select>
								</div>
							</div>

							<div class="row">
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
							</div>

							<div class="row">
	                            <div class="form-group col-md-10">
	                             <label for="insurance">Insurance description</label>							
									<select name="insurance" id="insurance" class="form-control">
										<option value="">I do not require student insurance</option>
										<option value="1">I require student insurance</option>
									</select>
								</div>
							</div>

						</div>

						<div id="personal_info_section" class="d-none">
							
								<div class="row">
		                            <div class="form-group col-md-10">
			                             <h3>Your Details</h3>                     
		                             
		                           </div>  
		                        </div>

		                        <div class="row">
		                            <div class="form-group col-md-6">
									   <label for="fname">First Name</label>
			                           <input type="text" name="fname" id="fname" class="form-control">               
		                           </div>  
		                           <div class="form-group col-md-6">
									   <label for="lname">Last Name</label>
			                           <input type="text" name="lname" id="lname" class="form-control">               
		                           </div>
		                        </div>

		                         <div class="row">
		                            <div class="form-group col-md-6">
									   <label for="gender">Gender</label>
			                           <select name="gender" id="gender" class="form-control">                    	
											<option value="Male">Male</option>
											<option value="Female">Female</option>
			                           </select>               
		                           </div>  
		                           <div class="form-group col-md-6">
									   <label for="dob">Date of birth</label>
			                           <input type="text" name="dob" id="dob" class="form-control" placeholder="DD/MM/YYYY">               
		                           </div>
		                        </div>

		                         <div class="row">
		                            <div class="form-group col-md-6">
									   <label for="email">Email Address</label>
			                           <input type="email" name="email" id="email" class="form-control">             
		                           </div>  
		                           <div class="form-group col-md-6">
									   <label for="phone">Phone</label>
			                           <input type="text" name="phone" id="phone" class="form-control">               
		                           </div>
		                         </div>

		                         <div class="row">
		                            <div class="form-group col-md-6">
									   <label for="nationality">Nationality</label>
			                           <select name="nationality" id="nationality" class="form-control">                    	
											<option value="">Select</option>	
											<?php foreach($countries as $rows):?>
												<option value="<?php echo $rows->id;?>"><?php echo $rows->name;?></option>
											<?php endforeach;?>							
			                           </select>               
		                           </div>  
		                           <div class="form-group col-md-6">
									   <label for="country_of_birth">Country of Birth</label>
			                           <select name="country_of_birth" id="country_of_birth" class="form-control">                    	
											<option value="">Select</option>	
											<?php foreach($countries as $rows):?>
												<option value="<?php echo $rows->id;?>"><?php echo $rows->name;?></option>
											<?php endforeach;?>									
			                           </select>                
		                           </div>
		                        </div>

		                        <div class="row">
		                            <div class="form-group col-md-12">
									   <label for="country_citizenship">Country of Citizenship</label>
			                           <select name="country_citizenship" id="country_citizenship" class="form-control">                    	
											<option value="">Select</option>
											<?php foreach($countries as $rows):?>
												<option value="<?php echo $rows->id;?>"><?php echo $rows->name;?></option>
											<?php endforeach;?>										
			                           </select>               
		                           </div> 
		                          
		                        </div>

		                        <div class="row">
		                            <div class="form-group col-md-12">
									  <h2>Home Address</h2>              
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
												<option value="<?php echo $rows->id;?>"><?php echo $rows->name;?></option>
											<?php endforeach;?>										
			                           </select>              
		                           </div>
		                        </div>

		                         <div class="row">
		                            <div class="form-group col-md-12">
									   <h2>Course details</h2>               
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
									   	<option value="Proficiency">Proficiency</option></select>              
		                           </div>  
		                           
		                        </div>

		                        <div class="row">
		                            <div class="form-group col-md-12">
									  <label for="special_requests">Do you have any special requests (medical conditions, dietary requirements, disability access, etc.)</label>    
									  <textarea name="special_requests" id="special_requests" cols="2" rows="3" class="form-control"></textarea>            
		                           </div>  
		                           
		                        </div>

		                        <div class="row">
		                            <div class="form-group col-md-12">
									  <label for="">We’ll do all we can to accommodate your requests, but please note that there may be times when we cannot guarantee special requests at the time of booking. To talk about your request in detail, please contact us.</label>    
		                            </div>		                           
		                        </div>

		                        <div class="row">
		                            <div class="form-group col-md-12">
									  <label for="accept_check">									  	
									  	<input type="checkbox" style="float: left; width: 20px; margin-top: 5px;" name="accept_check" id="accept_check" class="form-control" value="1">I have read and accept the Terms and Conditions and Privacy Policy.
									  </label>								              
		                           </div>  
		                           
		                        </div>

		                         <div class="row">
		                            <div class="form-group col-md-12">
									  <label for="special_offer_check">									  	
									  	<input type="checkbox" style="float: left; width: 20px; margin-top: 5px;" name="special_offer_check" id="special_offer_check" class="form-control" value="1">I would like to receive EC’s newsletter and special offer emails. By signing up you are agreeing to our Terms and Conditions. Please see our Privacy Policy for further details.
									  </label>    
									              
		                           </div>  
		                           
		                        </div>

								<div class="row">
		                            <div class="form-group col-md-12">
									  <label for="privacy_policy_check">									  	
									  	<input type="checkbox" style="float: left; width: 20px; margin-top: 5px;" name="privacy_policy_check" id="privacy_policy_check" class="form-control" value="1">I would like to be contacted by language travel agents that EC partners with. By signing up you are agreeing to our Terms and Conditions. Please see our Privacy Policy for further details.
									  </label>    
									              
		                           </div>  
		                           
		                        </div>                 
							
						</div>
					</div>	
					<div class="col-md-2"></div>

					<div class="col-md-4">
						<strong>SUMMARY</strong>
						<div class="d-none" id="summary_div_en">

							<div class="mt-4" style="border-bottom: 1px solid #000;">
								<span class="location_name"></span><br>
								<span class="course_name"></span><br>
								<span class="current_date"></span>
							</div>						
							
							<input type="hidden" name="hidden_course_price" id="hidden_course_price">
							<input type="hidden" name="hidden_reg_fee" id="hidden_reg_fee" value="160">
							<input type="hidden" name="hidden_acc_price" id="hidden_acc_price">
							<input type="hidden" name="hidden_acc_type" id="hidden_acc_type">
							<input type="hidden" name="hidden_private_lessons_price" id="hidden_private_lessons_price">
							<input type="hidden" name="hidden_student_insurance" id="hidden_student_insurance">
							<input type="hidden" name="hidden_airport_price" id="hidden_airport_price">
							<input type="hidden" name="hidden_acc_placement_fee" id="hidden_acc_placement_fee">
							<input type="hidden" name="hidden_total_price" id="hidden_total_price">

							<div class="pt-4" style="border-bottom: 1px solid #000">
								COURSE<span class="pull-right">$<span class="course_price"></span></span><br>
								<div class="div_acc_price d-none">ACCOMMODATION<span class="pull-right">$<span class="acc_price"></span></span></div>								
							</div>	

							<div class="pt-4" style="border-bottom: 1px solid #000">
								EXTRAS<br>
								<div class="div_airport_charges d-none">									
									<span class="airport_name"></span><p class="pull-right">$ <span class="airport_chages">50.00</span></p>
								</div><br>
								<div class="div_private_lessons d-none">
									One-to-One Lessons<p class="pull-right">$ <span class="private_lessons_chages">150.00</span></p>
								</div><br>
								<div class="div_insurance d-none">
									Student Insurance<p class="pull-right">$ <span class="insurance_chages">120.00</span></p>
								</div><br>
								REGISTRATION FEE<span class="pull-right">$<span class="reg_fee">160.00</span></span>						

								<div class="div_acc_reg_fee d-none">
									ACCOMMODATION<br>
									PLACEMENT FEE<span class="pull-right">$<span class="acc_reg_fee">100.00</span></span>
								</div>								
							</div>

							<div class="pt-4">								
							 	<strong>TOTAL PRICE</strong><span class="pull-right">$<span id="total_price"></span></span>								
							</div>					
							
						</div>
						
					</div>				
				</div>
				<div class="row mb-3">
					<div class="col-md-12">
						<button type="button" class="btn btn-primary" id="btn_course_page">CONTINUE</button>
						<button type="button" class="btn btn-primary d-none" id="btn_acc_page">Next</button>
						<button type="button" class="btn btn-primary d-none" id="btn_airport_page">Book Now</button>
						<button type="submit" class="btn btn-primary d-none" id= "btn_submit" name="submit">Submit</button>
						<button type="button" class="btn btn-danger">CANCEL</button>
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
      $('form').validate({
          rules: {
              fname: {
                  required: true                          
              },
              lname: {
                  required: true                          
              },

              dob: {
                  required: true                          
              },

              email: {
                  required: true,
                  email: true                          
              }, 

              phone: {
                  required: true,
                  number: true                         
              },  

               nationality: {
                  required: true                                          
              }, 

               country_of_birth: {
                  required: true                                          
              }, 

              country_citizenship: {
                  required: true                                          
              }, 

               address_1: {
                  required: true                                          
              },

              state: {
                  required: true                                          
              }, 

              city: {
                  required: true                                          
              },

               zip: {
                  required: true                                          
              }, 

              country: {
                  required: true                                          
              },


              your_lang_level: {
                  required: true                                          
              },

              accept_check: {

              		required: true
              }             
                            
          }
        
      });
   });
</script>

