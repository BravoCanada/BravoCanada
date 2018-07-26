<?php $this->load->view('common/header'); ?>
<style>
	
	/*TABBING AREA CSS STARTS HERE*/

section[role="tabbing-area"] .nav-tabs {
    border-bottom: 1px solid #ddd0;
}

section[role="tabbing-area"] .nav-tabs {
    border-bottom: 1px solid #ddd0;
}

section[role="tabbing-area"] .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
    color: #fff;
    background-color: #b80509;
    border-color: #ddd0 #ddd0 #fff0;
}

 section[role="tabbing-area"] .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
    border-color: #e9ecef00 #e9ecef03 #ddd0;
}

section[role="tabbing-area"] .nav-tabs .nav-link {
    /* border: 1px solid #e60c0c; */
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    border: 2px solid #000;
    border-radius: 8px 63px 0px 0px;
    /* padding: 19px 40px; */
    padding-left: 68px;
    padding-right: 105px;
    padding-top: 20px;
    padding-bottom: 18px;
    background-color: #000;
    color: #fff;
}

section[role="tabbing-area"] #home{
    background-color: #b80509;
    color: #fff;
}

section[role="tabbing-area"] #home h5{
  font-weight: bold;  
}

section[role="tabbing-area"] #home p{
    font-size: 18px;
}

section[role="tabbing-area"] #home h6{
    font-weight: bold;  
}

section[role="tabbing-area"] #menu2{
    background-color: #b80509;
    color: #fff;
}

section[role="tabbing-area"] #menu2 h6{
    font-weight: bold;  
}

section[role="tabbing-area"] #menu2 p{
   font-size:17px;  
}

section[role="tabbing-area"] #menu3{
    background-color: #b80509;
    color: #fff;
}

section[role="tabbing-area"] #menu3 h6{
    font-weight: bold;  
}

section[role="tabbing-area"] #menu3 p{
   font-size:18px;  
}

section[role="tabbing-area"] #menu1{
    background-color: #b80509;
    color: #fff;
}

section[role="tabbing-area"] #menu1 h6{
    font-weight: bold;  
}

section[role="tabbing-area"] #menu1 p{
   font-size:18px;  
}

/*TABBING AREA CSS ENDS HERE*/
</style>

<!--BODY AREA STARTS HERE -->
	<main role="contact-body">
		<section role="contact-slider" class="contact-bg">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>Learn English in<br><span style="color: #b80509;">
	    				<?php 
							if(isset($course_en))
							{
								echo $course_en[0]->location_name;
							}

							if(isset($course_sp))
							{
								echo $course_sp[0]->location_name;
							}

							if(isset($course_tk))
							{
								echo $course_tk[0]->location_name;
							}

							if(isset($course_pr))
							{
								echo $course_pr[0]->location_name;
							}									
						?>			
	    			</span></h1>
	    			</div>
	    		</div>
	    	</div>	
	    </section>
		<section class="about-city py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row about-top">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-10">
										<h5><?php echo $course_en[0]->inst_name_en; ?></h5>
										<p class="py-4"><?php echo $course_en[0]->location_name; ?> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> 182 Reviews</p>
									</div>
									<div class="col-md-2">
										<img style="max-height: 100px;" src="<?php echo base_url();?>uploads/<?php echo $course_en[0]->inst_logo_en; ?>" class="img-fluid" alt=""/>
									</div>
								</div>
								<p class="mt-4" style="font-size: 17px;"><?php echo $course_en[0]->inst_description_en; ?></p>
								<input type="hidden" name="hidden_inst_id" value="<?php echo $course_en[0]->inst_id;?>" id="hidden_inst_id">
							</div>
						</div>
						
						<div class="row text-center icons">
							
					       <div class="col-md-2 <?php echo ($inst_facility) ? ((in_array('FREE WIFI',$inst_facility)) ? '' : 'd-none' ) : 'd-none';?>">
						        <img src="<?php echo base_url();?>assets/user/img/wifi.png" class="img-fluid icon-img" alt=""/ style="max-width: 60%;">
						        <p class="pt-2">FREE WIFI</p> 
					       </div>
					       <div class="col-md-2 <?php echo ($inst_facility) ? ((in_array('INTERACTIVE WHITEBOARD',$inst_facility)) ? '' : 'd-none' ) : 'd-none';?>">
						        <img src="<?php echo base_url();?>assets/user/img/WHITEBOARD.png" class="img-fluid icon-img" alt=""/ style="max-width: 60%;">
						        <p class="pt-2">INTERACTIVE WHITEBOARD</p> 
					       </div>
					       <div class="col-md-2 <?php echo ($inst_facility) ? ((in_array('LIBRARY FACILITIES',$inst_facility)) ? '' : 'd-none' ) : 'd-none';?>">
						        <img src="<?php echo base_url();?>assets/user/img/books.png" class="img-fluid icon-img" alt=""/ style="max-width: 60%;">
						        <p class="pt-2">LIBRARY FACILITIES</p> 
					       </div>
					       <div class="col-md-2 <?php echo ($inst_facility) ? ((in_array('STUDENT LOUNGE',$inst_facility)) ? '' : 'd-none' ) : 'd-none';?>">
						        <img src="<?php echo base_url();?>assets/user/img/lounge.png" class="img-fluid icon-img" alt=""/ style="max-width: 60%;">
						        <p class="pt-2">STUDENT LOUNGE</p>  
					       </div>
					       <div class="col-md-2 <?php echo ($inst_facility) ? ((in_array('SELF-STUDY AREA',$inst_facility)) ? '' : 'd-none' ) : 'd-none';?>">
						        <img src="<?php echo base_url();?>assets/user/img/study-area.png" class="img-fluid icon-img" alt=""/ style="max-width: 60%;">
						        <p class="pt-2">SELF-STUDY AREA</p> 
					       </div>
						  
					    </div>
						
						<div class="row py-4 address">
							<div class="row">
								<div class="col-md-12">
									<h6>Address</h6>
									<p><?php echo $course_en[0]->address; ?></p>
								</div>
							</div>						
                           </div>
					
							</div>
							
							<div class="col-md-4">
						    	<div class="row">
						    		<div class="col-md-12">
						    		<div class="box-area">
									<div class="box-panel">
									<form class="form" action="<?php echo base_url('course/bookCourse');?>" method="post">
										<p>Choose from</p>
										<input type="hidden" name="hidden_location_id" value="<?php echo isset($course_en) ? $course_en[0]->location_en : ''?>">
										<h1 class="pb-3"><div class="d-none" id="div_course_price">$<span id="course_price"></span></div></h1>
										<input type="hidden" id="hidden_course_price" name="hidden_course_price" value="">

																				
									    <select class="form-control form-control-lg mt-3 mb-2" name="select_course_name" id="select_course_name">
									    	<?php if(isset($session_course)):?>

									    		<?php foreach($session_course as $rows):?>
									    			<option value="<?php echo $rows->course_id?>"><?php echo $rows->course_title_en;?></option>
									    		<?php endforeach;?>

									    	<?php else:?>

												  <?php if(isset($course_en)):?>

												  	<?php foreach($course_en as $rows):?>

												  		<option value="<?php echo $rows->course_id;?>" <?php echo isset($session_course) ? (($session_course_detail->course_select == $rows->course_id) ? 'selected' : '') : ''?>><?php echo $rows->course_title_en;?></option>

												  	<?php endforeach;?>

												  <?php endif;?>

												  <?php if(isset($course_sp)):?>

												  	<?php foreach($course_sp as $rows):?>

												  		<option value="<?php echo $rows->course_id;?>" <?php echo isset($session_course) ? (($session_course_detail->course_select == $rows->course_id) ? 'selected' : '') : ''?>><?php echo $rows->course_title_en;?></option>

												  	<?php endforeach;?>

												  <?php endif;?>

												  <?php if(isset($course_tk)):?>

												  	<?php foreach($course_tk as $rows):?>

												  		<option value="<?php echo $rows->course_id;?>" <?php echo isset($session_course) ? (($session_course_detail->course_select == $rows->course_id) ? 'selected' : '') : ''?>><?php echo $rows->course_title_en;?></option>

												  	<?php endforeach;?>

												  <?php endif;?>

												   <?php if(isset($course_pr)):?>

												  	<?php foreach($course_pr as $rows):?>

												  		<option value="<?php echo $rows->course_id;?>" <?php echo isset($session_course) ? (($session_course_detail->course_select == $rows->course_id) ? 'selected' : '') : ''?>><?php echo $rows->course_title_en;?></option>

												  	<?php endforeach;?>

												  <?php endif;?>
											<?php endif;?>
										</select>
										 <select class="form-control form-control-lg mt-3 mb-2" name="select_other_country" id="select_other_country">
										 	<option value="">Select Your Country</option>
										 	<?php foreach($countries as $rows):?>
										 		<option value="<?php echo $rows->sortname;?>"><?php echo $rows->name;?></option>
										 	<?php endforeach;?>
										 </select>
										<div class="row">
											<div class="col-md-6" style="padding:5px !important;">
												<label for="">Starting Date</label>
												<select class="start-date" data-val="true" data-val-date="The field StartDate must be a date." default-value="" name="starting_date" id="starting_date">
													<?php if(isset($starting_date)):?>

														<?php foreach($starting_date as $key=>$value):?>

															<option value="<?php echo $value;?>"><?php echo $value;?></option>

														<?php endforeach;?>

													<?php endif;?>
												</select>
											</div>
											<div class="col-md-3" style="padding:5px 0px !important;">
												<label for="">Weeks</label>
												<select class="duration-weeks" data-val="true" data-val-number="The field Duration must be a number." dataunittype="week" dataunittypes="weeks" default-value="2" id="course_week" name="course_week">
													<?php if(isset($course_en)):?>													

														<?php foreach($weeks_en as $key=>$value):?>

															<option value="<?php echo $value;?>"><?php echo $value;?></option>

														<?php endforeach;?>													

													<?php endif;?>

													<?php if(isset($course_sp)):?>														

														<?php foreach(unserialize($course_sp[0]->weeks_sp) as $key=>$value):?>

															<option value="<?php echo $key;?>" <?php echo isset($session_course) ? (($session_course_detail->course_duration == $key) ? 'selected' : '') : ''?>><?php echo $value;?></option>

														<?php endforeach;?>
														
													<?php endif;?>

													<?php if(isset($course_tk)):?>														

														<?php foreach(unserialize($course_tk[0]->weeks_tk) as $key=>$value):?>

															<option value="<?php echo $key;?>" <?php echo isset($session_course) ? (($session_course_detail->course_duration == $key) ? 'selected' : '') : ''?>><?php echo $value;?></option>

														<?php endforeach;?>
													
													<?php endif;?>

													<?php if(isset($course_pr)):?>														

														<?php foreach(unserialize($course_pr[0]->weeks_pr) as $key=>$value):?>

															<option value="<?php echo $key;?>" <?php echo isset($session_course) ? (($session_course_detail->course_duration == $key) ? 'selected' : '') : ''?>><?php echo $value;?></option>

														<?php endforeach;?>
													<?php endif;?>

													
												</select>
											</div>	

																				
												<div class="col-md-3 <?php echo isset($hours_en) ? '' : 'd-none';?>" style="padding:5px !important;">
													<label for="">Hours</label>
													<select class="duration-weeks" name="hours_en" id="hours_en">
														<?php if(isset($course_en)):?>

															<?php if(isset($hours_en)):?>

																<?php foreach($hours_en as $key=>$value):?>

																	<option value="<?php echo $key;?>"><?php echo $value;?></option>

																<?php endforeach;?>														

															<?php endif;?>

														<?php endif;?>
													</select>
												</div>	
												


											</div>
																			
											
											<!-- <a href="javascript:void(0);" class="btn btn-primary book-now-button mt-2" id="btn_bookNow">Book Now</a> -->
											<button type="submit" class="btn btn-primary book-now-button mt-2">Book Now</button>
											<button type="button" class="btn btn-light book-now-button mt-2">Contact Us</button>
											
										</form>
										
									</div>
								</div>
						    		</div>
						    	</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<section role="tabbing-area" class="pt-4 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs" role="tablist">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#home">OVERVIEW</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu1">COURSES</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu2">ACCOMODATION</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu3" style="padding-right:128px;">LOCAL INFO</a>
						    </li>
						 </ul>

						 <div class="tab-content">
						    <div id="home" class="container tab-pane active p-4"><br>						   
						     	<?php 

						     		if(isset($course_en))
						     		{	     			

						     			if($institute)
						     			{
						     				echo $institute->inst_overview_en;
						     			}
						     		}					     		

						     	?>
						    </div>

						    <div id="menu1" class="container tab-pane fade p-4"><br>
						     	<!-- <img src="<?php echo base_url('uploads/'.$institute->inst_course_image_en);?>" class="img-fluid py-2" alt="" style="width: 100%"/> -->

						     	<img src="<?php echo ($institute) ? base_url('uploads/'.$institute->course_image) : '';?>" class="img-fluid py-2" alt="" style="width: 100%"/>
						    </div>

						    <div id="menu2" class="container tab-pane fade p-4"><br>

					    	<?php 

					     		if(isset($course_en))
					     		{   			

					     			if($institute)
					     			{
					     				echo $institute->inst_acc_en;
					     			}
					     		}					     		

					     	?>
						    
  						    </div>
  						    <div id="menu3" class="container tab-pane fade p-4"><br>						   

						       <?php 

						     		if(isset($course_en))
						     		{
						     			if($institute)
						     			{
						     				echo $institute->location_iframe;
						     			}
						     		}					     		

					     		?>					

						    </div>
						  </div>
						</div>

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
              select_other_country: {
                  required: true                          
              },   
                            
          }
        
      });
   });
</script>