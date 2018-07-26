<?php $this->load->view('common/header'); ?>

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
								echo $course->location_name;
							}

							if(isset($course_sp))
							{
								echo $course->location_name_sp;
							}

							if(isset($course_tk))
							{
								echo $course->location_name_tk;
							}

							if(isset($course_pr))
							{
								echo $course->location_name_pr;
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
								<h5><?php echo $course->course_title_en; ?> (<?php echo $course->inst_name_en; ?>)</h5>
								<p class="py-4"><?php echo $course->location_name; ?> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> 182 Reviews</p>
								<p class="mt-4" style="font-size: 17px;"><?php echo $course->course_description_en; ?></p>
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
									<p><?php echo $course->address; ?></p>
								</div>
							</div>							
                        </div>
					</div>
							
					<div class="col-md-4">
				    	<div class="row">
				    		<div class="col-md-12">
				    		<div class="box-area">
							<div class="box-panel">
							<form class="form" action="<?php echo base_url('course/bookCourses');?>" method="post">
								<p>Courses from</p>
								<input type="hidden" name="hidden_location_id" value="<?php echo isset($course_en) ? $course_en[0]->location_en : ''?>">
								<h1 class="pb-3">$<span id="course_price"><?php echo $price;?></span></h1>
								<input type="hidden" id="hidden_course_price" name="hidden_course_price" value="<?php echo $price;?>">
								<input type="hidden" name="hidden_inst_id" value="<?php echo $course->institute_en;?>" id="hidden_inst_id">
							    <select class="form-control form-control-lg mt-3 mb-2" name="select_course_name" id="select_course_name">
								  <?php if(isset($course_en)):?>

								  	<?php foreach($course_en as $rows):?>

								  		<option value="<?php echo $rows->course_id;?>" <?php echo ($course->course_id == $rows->course_id) ? 'selected' : '';?>><?php echo $rows->course_title_en;?></option>

								  	<?php endforeach;?>

								  <?php endif;?>

								  <?php if(isset($course_sp)):?>

								  	<?php foreach($course_sp as $rows):?>

								  		<option value="<?php echo $rows->course_id;?>" <?php echo ($course->course_id == $rows->course_id) ? 'selected' : '';?>><?php echo $rows->course_title_sp;?></option>

								  	<?php endforeach;?>

								  <?php endif;?>

								  <?php if(isset($course_tk)):?>

								  	<?php foreach($course_tk as $rows):?>

								  		<option value="<?php echo $rows->course_id;?>" <?php echo ($course->course_id == $rows->course_id) ? 'selected' : '';?>><?php echo $rows->course_title_tk;?></option>

								  	<?php endforeach;?>

								  <?php endif;?>

								   <?php if(isset($course_pr)):?>

								  	<?php foreach($course_pr as $rows):?>

								  		<option value="<?php echo $rows->course_id;?>" <?php echo ($course->course_id == $rows->course_id) ? 'selected' : '';?>><?php echo $rows->course_title_pr;?></option>

								  	<?php endforeach;?>

								  <?php endif;?>
								</select>
								<div class="row">
									<div class="col-md-6" style="padding-right:5px !important;">
										<select class="start-date" data-val="true" data-val-date="The field StartDate must be a date." default-value="" name="starting_date" id="starting_date">
											<?php if(isset($starting_date)):?>

												<?php foreach($starting_date as $key=>$value):?>

													<option value="<?php echo $value;?>"><?php echo $value;?></option>

												<?php endforeach;?>

											<?php endif;?>
										</select>
									</div>
									<select class="form-control form-control-lg mt-3 mb-2 d-none" name="select_other_country" id="select_other_country">
										<option value="ZZ"></option>
									</select>
									<div class="col-md-6" style="padding-left:5px !important;">
										<select class="duration-weeks" data-val="true" data-val-number="The field Duration must be a number." dataunittype="week" dataunittypes="weeks" default-value="2" id="course_week" name="course_week">
											<?php if(isset($course_en)):?>

												<?php foreach(unserialize($course->weeks_en) as $key=>$value):?>

													<option value="<?php echo $key;?>"><?php echo $value;?></option>

												<?php endforeach;?>

											<?php endif;?>

											<?php if(isset($course_sp)):?>

												<?php foreach(unserialize($course->weeks_sp) as $key=>$value):?>

													<option value="<?php echo $key;?>"><?php echo $value;?></option>

												<?php endforeach;?>

											<?php endif;?>

											<?php if(isset($course_tk)):?>

												<?php foreach(unserialize($course->weeks_tk) as $key=>$value):?>

													<option value="<?php echo $key;?>"><?php echo $value;?></option>

												<?php endforeach;?>

											<?php endif;?>

											<?php if(isset($course_pr)):?>

												<?php foreach(unserialize($course->weeks_pr) as $key=>$value):?>

													<option value="<?php echo $key;?>"><?php echo $value;?></option>

												<?php endforeach;?>

											<?php endif;?>
										</select>
									</div>
									</div>

									<div class="row <?php echo isset($hours_en) ? '' : 'd-none';?>">									
										<div class="col-md-6" style="padding-left:18px !important;">
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
									<!-- <a href="javascript:void(0);" class="btn btn-primary book-now-button mt-2" id="btn_bookNow1">Book Now</a> -->
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
	
    </main>
<!--BODY AREA ENDS HERE // -->

<!--FOOTER AREA STARTS HERE-->

<?php $this->load->view('footer'); ?>