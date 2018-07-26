<style>

	.info-content h6{
		    font-size: 20px;
			font-weight: 700;
			color: #000;
	}
	
	.info-content p{
	    color: #9a9393;
		line-height: 18px;
	}

</style>

<?php $this->load->view('header'); ?>
	<!--BODY AREA STARTS HERE -->

	<main role="body-area">
		<!-- <section role="top-destination">
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
					<!-- <div class="col-md-3 img-grid-1 py-5">
						<h2><a href="#">Calgary</a></h2>
						<div class="btm-border">
						</div>
					</div>
					<div class="col-md-3 img-grid-2 py-5">
						<h2><a href="#">Montreal</a></h2>
						<div class="btm-border">
						</div>
					</div>
					<div class="col-md-3 img-grid-3 py-5">
						<h2><a href="#">Cambridge</a></h2>
						<div class="btm-border">
						</div>
					</div> -->
				</div>
				<!-- <div class="row py-5">
					<div class="col-md-3 img-grid-4 py-5">
						<h2><a href="#">quebec</a></h2>
						<div class="btm-border">
						</div>
					</div>
					<div class="col-md-3 img-grid-5 py-5">
						<h2><a href="#">Vancouver</a></h2>
						<div class="btm-border">
						</div>
					</div>
					<div class="col-md-3 img-grid-6 py-5">
						<h2><a href="#">winnipeg</a></h2>
						<div class="btm-border">
						</div>
					</div>
					<div class="col-md-3 img-grid-7 py-5">
						<h2><a href="#">Victoria</a></h2>
						<div class="btm-border">
						</div>
					</div>
				</div> -->
			</div>
		</section> 

		<section role="courses-area" class="pt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>CHOOSE FROM<span style="color:#b80509;"> OVER 300</span> CLASSES</h1>
						<p class="py-4">Whether you take a language course for a summer, or spend a<br> year studying abroad, we have the right program for you.</p>
					</div>
				</div>
			    <div class="row courses-content mt-4">
			    	<?php if(isset($country_en)):?>
			    		<?php foreach($groupCourseEn as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('home/showLocations/'.base64_encode($rows->course_title_en));?>"><h5><?php echo $rows->course_title_en;?></h5></a>
									 <div class="border-course">
									 </div>
									 <p class="text-left pb-3 pt-4"><?php echo $rows->course_description_en;?></p>
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_sp)):?>
			    		<?php foreach($groupCourseSp as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->course_image_sp);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('home/showLocations/'.$rows->course_title_sp);?>"><h5><?php echo $rows->course_title_sp;?></h5></a>
									 <div class="border-course">
									 </div>
									 <p class="text-left pb-3 pt-4"><?php echo $rows->course_description_sp;?></p>
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_tk)):?>
			    		<?php foreach($groupCourseTk as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->course_image_tk);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('home/showLocations/'.$rows->course_title_tk);?>"><h5><?php echo $rows->course_title_tk;?></h5></a>
									 <div class="border-course">
									 </div>
									 <p class="text-left pb-3 pt-4"><?php echo $rows->course_description_tk;?></p>
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_pr)):?>
			    		<?php foreach($groupCoursePr as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->course_image_pr);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('home/showLocations/'.$rows->course_title_pr);?>"><h5><?php echo $rows->course_title_pr;?></h5></a>
									 <div class="border-course">
									 </div>
									 <p class="text-left pb-3 pt-4"><?php echo $rows->course_description_pr;?></p>
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>
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
		
	<!--	<section role="mid-back">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
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
		
		<section role="btm-destinations">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
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
		</section>	-->
		
		<!--AREA ADDED HERE-->
		<section role="information-area" class="pt-5 mt-5">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 text-center">
						<img src="http://oscuz.com/bravocanada/uploads/best-school.png" class="img-fluid" style="max-width: 60%;" alt=""/>
						<div class="info-content text-center">
							<h6 class="mt-2">Best Schools in Canada</h6>
							<p class="mt-2">We only work with the most traditional and best schools across Canada.</p>
						</div>
					</div>
					
					<div class="col-md-3 text-center">
						<img src="http://oscuz.com/bravocanada/uploads/shop-online.png" class="img-fluid" style="max-width: 60%;" alt=""/>
						<div class="info-content text-center">
							<h6 class="mt-2">Shop Online</h6>
							<p class="mt-2">You can buy from the comfort of your home. Our Platform is secure and your information is protected</p>
						</div>
					</div>
					
					<div class="col-md-3 text-center">
						<img src="http://oscuz.com/bravocanada/uploads/best-price.png" class="img-fluid" style="max-width: 60%;" alt=""/>
						<div class="info-content text-center">
							<h6 class="mt-2">Best Prices</h6>
							<p class="mt-2"> We offer better prices than a local agency.</p>
						</div>
					</div>
					
					<div class="col-md-3 text-center">
						<img src="http://oscuz.com/bravocanada/uploads/location.png" class="img-fluid" style="max-width: 60%;" alt=""/>
						<div class="info-content text-center">
							<h6 class="mt-2">More support at local time</h6>
							<p class="mt-2">We are in Canada, which means no time zones hassle trying to connect with your agency for help or support.</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		
		<section role="testimonial-area" style="background-color:#dadee100;">

		<div class="cd-testimonials-wrapper cd-container">
			<ul class="cd-testimonials">
				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<div class="cd-author">
						<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
						<ul class="cd-author-info">
							<li>MyName</li>
							<li>CEO, AmberCreative</li>
						</ul>
					</div>
				</li>

				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
					<div class="cd-author">
						<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
						<ul class="cd-author-info">
							<li>MyName</li>
							<li>Designer, CodyHouse</li>
						</ul>
					</div>
				</li>

				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
					<div class="cd-author">
						<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
						<ul class="cd-author-info">
							<li>MyName</li>
							<li>CEO, CompanyName</li>
						</ul>
					</div>
				</li>
				
			</ul> <!-- cd-testimonials -->

			<a href="#0" class="cd-see-all">See all</a>
		</div> <!-- cd-testimonials-wrapper -->

		<div class="cd-testimonials-all">
			<div class="cd-testimonials-all-wrapper">
				<ul>
					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>

					<li class="cd-testimonials-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
						
						<div class="cd-author">
							<img src="<?php echo base_url();?>assets/user/img/login-img.jpg" alt="Author image">
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div> <!-- cd-author -->
					</li>
				</ul>
			</div>	<!-- cd-testimonials-all-wrapper -->

			<a href="#0" class="close-btn">Close</a>
			</section>
		
		
			
	</main>

	<!--BODY AREA ENDS HERE // -->

<?php $this->load->view('footer'); ?>

