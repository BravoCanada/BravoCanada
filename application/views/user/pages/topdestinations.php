<?php $this->load->view('common/header'); ?>
	<!--BODY AREA STARTS HERE -->

	<main role="body-area">
		<section role="contact-slider" class="contact-bg">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>TOP DESTINATIONS</span></h1>
	    			</div>
	    		</div>
	    	</div>	
	    </section>	

	    <section role="top-destination">
			<div class="container py-4">
				<div class="col-md-12 text-center">
					<h1>TOP <span style="color:#b80509;">DESTINATION</span> OF STUDY</h1>
				</div>
				<div class="row py-5">
					<?php if(isset($country_en)):?>
						<?php foreach($country_en as $rows):?>
							<div class="col-md-3 top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->country_image);?>') ; background-repeat: no-repeat; max-width: 23%; margin-right: 12px;">
								<h2><a href="<?php echo base_url('home/showLocation/'.$rows->country_id);?>"><?php echo $rows->country_name;?></a></h2>
								<div class="btm-border">
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_sp)):?>
						<?php foreach($country_sp as $rows):?>
							<div class="col-md-3 top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->country_image);?>') ; background-repeat: no-repeat; max-width: 23%; margin-right: 12px;">
								<h2><a href="<?php echo base_url('home/showLocation/'.$rows->country_id);?>"><?php echo $rows->country_name_sp;?></a></h2>
								<div class="btm-border">
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_tk)):?>
						<?php foreach($country_tk as $rows):?>
							<div class="col-md-3 top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->country_image);?>') ; background-repeat: no-repeat; max-width: 23%; margin-right: 12px;">
								<h2><a href="<?php echo base_url('home/showLocation/'.$rows->country_id);?>"><?php echo $rows->country_name_tk;?></a></h2>
								<div class="btm-border">
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_pr)):?>
						<?php foreach($country_pr as $rows):?>
							<div class="col-md-3 top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->country_image);?>') ; background-repeat: no-repeat; max-width: 23%; margin-right: 12px;">
								<h2><a href="<?php echo base_url('home/showLocation/'.$rows->country_id);?>"><?php echo $rows->country_name_pr;?></a></h2>
								<div class="btm-border">
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>					
				</div>				
			</div>
		</section>

		<section role="courses-area" class="pt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>FIND THE ENGLISH <span style="color:#b80509;">COURSE THAT</span> SUITS YOU BEST</h1>
						<p class="py-4">Whether you're preparing to take your exams, or you're eager to improve your conversational skills, we'he<br> got the course for you. Gain confidence, become more fluent and succeed at building up your English<br> language skills with either a general or ann intensive colurse. See all English courses.</p>
					</div>
				</div>
			    <div class="row courses-content mt-4">
					<div class="col-md-4">
						<img src="<?php echo base_url();?>assets/user/img/course-1.jpg" class="img-fluid" alt=""/>
						<div class="card">
						  <div class="card-body">
							 <h5>GENERAL ENGLISH</h5>
							 <div class="border-course">
							 </div>
							 <p class="text-left pb-3 pt-4">General and intensive English courses at EC focus on the core skills of speaking, listening, reading and writing to improve confidence and increase fluency.</p>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="<?php echo base_url();?>assets/user/img/course-2.jpg" class="img-fluid" alt=""/>
						<div class="card">
						  <div class="card-body">
							 <h5>GENERAL ENGLISH</h5>
							 <div class="border-course">
							 </div>
							 <p class="text-left pb-3 pt-4">General and intensive English courses at EC focus on the core skills of speaking, listening, reading and writing to improve confidence and increase fluency.</p>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="<?php echo base_url();?>assets/user/img/course-3.jpg" class="img-fluid" alt=""/>
						<div class="card">
						  <div class="card-body">
							 <h5>GENERAL ENGLISH</h5>
							 <div class="border-course">
							 </div>
							 <p class="text-left pb-3 pt-4">General and intensive English courses at EC focus on the core skills of speaking, listening, reading and writing to improve confidence and increase fluency.</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section role="mid-back">
			<div class="container">
				<div class="row">
					<div class="col-md-6 py-5">
						<img src="<?php echo base_url();?>assets/user/img/travel-img.png" class="img-fluid" alt=""/ style="margin-bottom: 78px;">
					</div>
					<div class="col-md-6 text-left guide-side">
						<h1>GUIDE TO CANADA</h1>
						<h6>Everything you need to know</h6>
						<p class="mt-3">All information about documentation, luggage, clothes, costs, schools, courses and accomodation.</p>
					</div>
				</div>
			</div>
		</section>
		
		<section role="btm-destinations" class="pt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mb-2">
						<h1>DESTINATIONS YOU WILL <span style="color:#b80509;">LOVE</span></h1>
					</div>
				</div>
				<div class="row">
					<div class="row btm-students mt-5">
					<div class="col-md-4">
						<img src="<?php echo base_url();?>assets/user/img/student-1.jpg" class="img-fluid" alt=""/>
						<div class="card">
						  <div class="card-body">
							 <h5>EC DUBLIN</h5>
							 <div class="border-course">
							 </div>
							 <p class="text-left pb-3 pt-4">General and intensive English courses at EC focus on the core skills of speaking, listening, reading and writing to improve confidence and increase fluency.</p>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="<?php echo base_url();?>assets/user/img/student-2.jpg" class="img-fluid" alt=""/>
						<div class="card">
						  <div class="card-body">
							 <h5>EC BOSTON</h5>
							 <div class="border-course">
							 </div>
							 <p class="text-left pb-3 pt-4">General and intensive English courses at EC focus on the core skills of speaking, listening, reading and writing to improve confidence and increase fluency.</p>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="<?php echo base_url();?>assets/user/img/student-3.jpg" class="img-fluid" alt=""/>
						<div class="card">
						  <div class="card-body">
							 <h5>EC BRIGHTON</h5>
							 <div class="border-course">
							 </div>
							 <p class="text-left pb-3 pt-4">General and intensive English courses at EC focus on the core skills of speaking, listening, reading and writing to improve confidence and increase fluency.</p>
						  </div>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</section>


	</main>

	<!--BODY AREA ENDS HERE // -->

<?php $this->load->view('footer'); ?>
