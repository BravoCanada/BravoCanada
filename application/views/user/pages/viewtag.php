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
								echo $course_en[0]->location_name;
							}

							if(isset($course_sp))
							{
								echo $course_sp[0]->location_name_sp;
							}

							if(isset($course_tk))
							{
								echo $course_tk[0]->location_name_tk;
							}

							if(isset($course_pr))
							{
								echo $course_pr[0]->location_name_pr;
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
								<?php $this->db->select('inst_name_en');
										$this->db->from('institute');
										$this->db->where('inst_id',$course_en[0]->institute_en );
										$query 	=	$this->db->get();
										$res = $query->result(); ?>
								<h5><?php echo $course_en[0]->course_title_en; ?> (<?php echo $res[0]->inst_name_en; ?>)</h5>
								<p class="py-4"><?php echo $course_en[0]->location_name; ?> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> 182 Reviews</p>
								<p class="mt-4" style="font-size: 17px;"><?php echo $course_en[0]->course_description_en; ?></p>
							</div>
						</div>

						<div class="row text-center icons">
							<div class="col-md-2 mr-2">
								<img src="<?php echo base_url();?>assets/user/img/wifi.png" class="img-fluid" alt=""/ style="max-width: 60%;">
							</div>
							<div class="col-md-2 mr-2">
								<img src="<?php echo base_url();?>assets/user/img/WHITEBOARD.png" class="img-fluid" alt=""/ style="max-width: 60%;">
							</div>
							<div class="col-md-2 mr-2">
								<img src="<?php echo base_url();?>assets/user/img/books.png" class="img-fluid" alt=""/ style="max-width: 60%;">
							</div>
							<div class="col-md-2 mr-2">
								<img src="<?php echo base_url();?>assets/user/img/lounge.png" class="img-fluid" alt=""/ style="max-width: 60%;">
							</div>
							<div class="col-md-2 mr-2">
								<img src="<?php echo base_url();?>assets/user/img/study-area.png" class="img-fluid" alt=""/ style="max-width: 60%;">
							</div>
						</div>

						<div class="row icon-text">	
							<div class="col-md-2 mr-2">		
								<p>FREE WIFI</p>
							</div>	
							<div class="col-md-2 mr-2">	
								<p>INTERACTIVE WHITEBOARD</p>	
							</div>
							<div class="col-md-2 mr-2">
								<p>LIBRARY FACILITIES</p>		
							</div>
							<div class="col-md-2 mr-2">
								<p>STUDENT LOUNGE</p>		
							</div>
							<div class="col-md-2 mr-2">	
								<p>SELF-STUDY AREA</p>	
							</div>		
						</div>
						<!--
						<div class="row py-4 about-border">
							<div class="col-md-6 ">
								<div class="intro-1 text-center" style="float:left">
									<img src="<?php echo base_url();?>assets/user/img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="" style="margin-left: 40px;">
								</div>
								<div class="intro-2 text-center" style="float:right">
									<h4 class="mt-2">James Francis</h4>
									<p>Centre Director </p>
									<a href="#">Welcome video</a>
								</div>
							</div>
							<div class="col-md-6 text-left contact-no">
									<div class="contact-no">
										<h4 class="mt-2">Contact</h4>
										<p>School: +1 (0) 617 247 3033<br>
											Bookings: +356 23 790555</p>
										<a href="#">Contact Us</a>
									</div>
							</div>
						</div>
						-->
						<div class="row py-4 address">
							<div class="row">
								<div class="col-md-12">
									<h6>Address</h6>
									<p><?php echo $course_en[0]->address; ?></p>
								</div>
							</div>
							
							<div class="row mt-2 pb-4 map-border">
								<div class="col-md-12">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d377643.1448643036!2d-71.25046756407667!3d42.31400891969002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3652d0d3d311b%3A0x787cbf240162e8a0!2sBoston%2C+MA%2C+USA!5e0!3m2!1sen!2sin!4v1530098600705" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
                           </div>
						   
						   <div class="row py-4">
								<div class="col-md-12 contact-slider-btm">
								<section class="main-col column">
								  <div class="carousel-wrap">
									<div class="carousel-con">
									  <div class="carousel">
										<div class="carousel-slide"> <img class="carousel-img" src="<?php echo base_url();?>assets/user/images/slide1.jpg" alt="Downtown Baltimore" />
										  <div class="carousel-caption"> 
											<!-- build all slides in html. No js -->
											<h2 class="carousel-cap-header">Downtown Baltimore</h2>
											<p class="carousel-cap-desc">Check out the USS Torsk at Baltimore's histroic Maritime Museum</P>
										  </div>
										</div>
										<div class="carousel-slide"> <img class="carousel-img" src="<?php echo base_url();?>assets/user/images/slide2.jpg" alt="The Venetian" />
										  <div class="carousel-caption">
											<h2 class="carousel-cap-header">Exploring the Venetian</h2>
											<p class="carousel-cap-desc">Enjoy the best gondola ride on this side of the Atlantic Ocean.</P>
										  </div>
										</div>
										<div class="carousel-slide"> <img class="carousel-img" src="<?php echo base_url();?>assets/user/images/slide3.jpg" alt="London After Dark" />
										  <div class="carousel-caption">
											<h2 class="carousel-cap-header">London After Dark</h2>
											<p class="carousel-cap-desc">Enjoy the pubs along the river Thames &amp; get spectacular view from the London Eye.</P>
										  </div>
										</div>
										<div class="carousel-slide"> <img class="carousel-img" src="<?php echo base_url();?>assets/user/images/slide4.jpg" alt="Mt. Rushmore" />
										  <div class="carousel-caption">
											<h2 class="carousel-cap-header">Mount Rushmore</h2>
											<p class="carousel-cap-desc">Marvel at the majestic beauty of the Black Hills and come face to face with American history.</P>
										  </div>
										</div>
									  </div>
									</div>
									<div class="carousel-thumbs cf"></div>
								  </div>
								</section>
								</div>
							</div>
						   
						   <!-- <div class="row py-4">
						   							     <h2 style="font-weight: bold;">Reviews</h2>
						   							</div>
						   
						   <div class="row">
						   							   <div class="col-md-3">
						   								 <img src="<?php echo base_url();?>assets/user/img/review-1.jpg" class="img-fluid rounded-circle" alt=""/>
						   							   </div>
						   							   <div class="col-md-9">
						   								 <div class="row">
						   									<div class="col-md-6 heading text-left">
						   										<h5>Mohammed Alsdrri</h5>
						   									</div>
						   									<div class="col-md-6 text-right font-awesome-icons">
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   									</div>
						   								 </div>
						   								 
						   								 <div class="row">
						   									<div class="col-md-12 review-text">
						   										<p>One of the best English school in Boston. They taught me a lot of things to improve my life not only the language skills. Also there are a lot of teachers which are clever,they can give you info by the easier way. Also the activity is really interesting. And I won't forget the people who working there. They help me as much as possible. I really recommend to go there. You will have the greatest experience. </p>
						   									</div>
						   								 </div>
						   							   </div>
						   </div>
						   
						    <div class="row mt-4">
						   							   <div class="col-md-3">
						   								 <img src="<?php echo base_url();?>assets/user/img/review-1.jpg" class="img-fluid rounded-circle" alt=""/>
						   							   </div>
						   							   <div class="col-md-9">
						   								 <div class="row">
						   									<div class="col-md-6 heading text-left">
						   										<h5>Mohammed Alsdrri</h5>
						   									</div>
						   									<div class="col-md-6 text-right font-awesome-icons">
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   									</div>
						   								 </div>
						   								 
						   								 <div class="row">
						   									<div class="col-md-12 review-text">
						   										<p>One of the best English school in Boston. They taught me a lot of things to improve my life not only the language skills. Also there are a lot of teachers which are clever,they can give you info by the easier way. Also the activity is really interesting. And I won't forget the people who working there. They help me as much as possible. I really recommend to go there. You will have the greatest experience. </p>
						   									</div>
						   								 </div>
						   							   </div>
						   </div>
						   
						   <div class="row mt-4">
						   							   <div class="col-md-3">
						   								 <img src="<?php echo base_url();?>assets/user/img/review-1.jpg" class="img-fluid rounded-circle" alt=""/>
						   							   </div>
						   							   <div class="col-md-9">
						   								 <div class="row">
						   									<div class="col-md-6 heading text-left">
						   										<h5>Mohammed Alsdrri</h5>
						   									</div>
						   									<div class="col-md-6 text-right font-awesome-icons">
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   									</div>
						   								 </div>
						   								 
						   								 <div class="row">
						   									<div class="col-md-12 review-text">
						   										<p>One of the best English school in Boston. They taught me a lot of things to improve my life not only the language skills. Also there are a lot of teachers which are clever,they can give you info by the easier way. Also the activity is really interesting. And I won't forget the people who working there. They help me as much as possible. I really recommend to go there. You will have the greatest experience. </p>
						   									</div>
						   								 </div>
						   							   </div>
						   </div>
						   
						   <div class="row mt-4">
						   							   <div class="col-md-3">
						   								 <img src="<?php echo base_url();?>assets/user/img/review-1.jpg" class="img-fluid rounded-circle" alt=""/>
						   							   </div>
						   							   <div class="col-md-9">
						   								 <div class="row">
						   									<div class="col-md-6 heading text-left">
						   										<h5>Mohammed Alsdrri</h5>
						   									</div>
						   									<div class="col-md-6 text-right font-awesome-icons">
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   										<i class="fa fa-star" aria-hidden="true"></i>
						   									</div>
						   								 </div>
						   								 
						   								 <div class="row">
						   									<div class="col-md-12 review-text">
						   										<p>One of the best English school in Boston. They taught me a lot of things to improve my life not only the language skills. Also there are a lot of teachers which are clever,they can give you info by the easier way. Also the activity is really interesting. And I won't forget the people who working there. They help me as much as possible. I really recommend to go there. You will have the greatest experience. </p>
						   									</div>
						   								 </div>
						   							   </div>
						   </div> -->
							</div>
							
							<div class="col-md-4">
						    	<div class="row">
						    		<div class="col-md-12">
						    		<div class="box-area">
									<div class="box-panel">
									<form class="form">
										<p>Courses from</p>
										<input type="hidden" name="hidden_location_id" value="<?php echo isset($course_en) ? $course_en[0]->location_en : ''?>">
										<h1 class="pb-3">$<span id="course_price">

						    				<?php 

												if(isset($course_en))
												{
													$price_en 	=	unserialize($course_en[0]->price_en);
													echo $price_en[0];
												}

												if(isset($course_sp))
												{
													$price_sp 	=	unserialize($course_sp[0]->price_sp);
													echo $price_sp[0];
												}

												if(isset($course_tk))
												{
													$price_tk 	=	unserialize($course_tk[0]->price_tk);
													echo $price_tk[0];
												}

												if(isset($course_pr))
												{
													$price_pr 	=	unserialize($course_pr[0]->price_pr);
													echo $price_pr[0];	
												}			

											?>			

										</span></h1>
									    <select class="form-control form-control-lg mt-3 mb-2" name="select_course_name" id="select_course_name">
										  <?php if(isset($course_en)):?>

										  	<?php foreach($course_en as $rows):?>

										  		<option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_en;?></option>

										  	<?php endforeach;?>

										  <?php endif;?>

										  <?php if(isset($course_sp)):?>

										  	<?php foreach($course_sp as $rows):?>

										  		<option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_sp;?></option>

										  	<?php endforeach;?>

										  <?php endif;?>

										  <?php if(isset($course_tk)):?>

										  	<?php foreach($course_tk as $rows):?>

										  		<option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_tk;?></option>

										  	<?php endforeach;?>

										  <?php endif;?>

										   <?php if(isset($course_pr)):?>

										  	<?php foreach($course_pr as $rows):?>

										  		<option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_pr;?></option>

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
											<div class="col-md-6" style="padding-left:5px !important;">
												<select class="duration-weeks" data-val="true" data-val-number="The field Duration must be a number." dataunittype="week" dataunittypes="weeks" default-value="2" id="course_week" name="course_week">
													<?php if(isset($course_en)):?>

														<?php foreach(unserialize($course_en[0]->weeks_en) as $key=>$value):?>

															<option value="<?php echo $key;?>"><?php echo $value;?></option>

														<?php endforeach;?>

													<?php endif;?>

													<?php if(isset($course_sp)):?>

														<?php foreach(unserialize($course_sp[0]->weeks_sp) as $key=>$value):?>

															<option value="<?php echo $key;?>"><?php echo $value;?></option>

														<?php endforeach;?>

													<?php endif;?>

													<?php if(isset($course_tk)):?>

														<?php foreach(unserialize($course_tk[0]->weeks_tk) as $key=>$value):?>

															<option value="<?php echo $key;?>"><?php echo $value;?></option>

														<?php endforeach;?>

													<?php endif;?>

													<?php if(isset($course_pr)):?>

														<?php foreach(unserialize($course_pr[0]->weeks_pr) as $key=>$value):?>

															<option value="<?php echo $key;?>"><?php echo $value;?></option>

														<?php endforeach;?>

													<?php endif;?>
												</select>
											</div>
											</div>
											<a href="javascript:void(0);" class="btn btn-primary book-now-button mt-2" id="btn_bookNow">Book Now</a>
											<button type="button" class="btn btn-light book-now-button mt-2">Contact Us</button>
											
										</form>
										
									</div>
								</div>
						    		</div>
						    	</div>
								<!--
						    	<div class="row">
						    		<div class="col-md-12">
						    			<div class="promo-block" style="background-image: url('<?php echo base_url();?>assets/user/img/hom-icon.png')">
										    <h5>Boston Homestay</h5>
										    <p>Live with local people and experience life in a Boston home. Homestay is a cost-effective option and a great way to practise your English.</p>
										    <p class="promo-cta"><a href="#">Learn more</a></p>
										</div>
						    		</div>
						    	</div>
								-->
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