<?php $this->load->view('header'); ?>
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
	.carousel-item .card h4{color:#000;font-weight:bold;}
</style>
	<main role="body-area">		
		
		<!--AREA ADDED HERE-->
		<section role="information-area" class="pt-5 mt-5" style="margin-bottom: 40px;">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 text-center">
						<img src="http://oscuz.com/bravocanada/uploads/best-school.png" class="img-fluid" style="max-width: 60%;" alt=""/>
						<div class="info-content text-center">
							<h6 class="mt-2">Best Schools</h6>
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
							<h6 class="mt-2">Local Support</h6>
							<p class="mt-2">We are in Canada, which means no time zones hassle trying to connect with your agency for help or support.</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		<section role="courses-area" class="pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>CHOOSE FROM<span style="color:#b80509;"> OVER 300</span> CLASSES</h1>
						<p class="py-4">Whether you take a language course for a summer, or spend a<br> year studying abroad, we have the right program for you.</p>
					</div>
				</div>
				
				
				<!--CAROUSEL ADDED HERE-->
				
				<div class="row">
					<div id="demo" class="carousel slide" data-ride="carousel">

					  <!-- The slideshow -->
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <div class="row">
							<?php if(isset($country_en)): $i=0; ?>
								<?php foreach($course_tag as $rows): $i++;?>
									<div class="col-md-4">
										<div class="card">
											<img src="<?php echo base_url('uploads/'.$rows->tag_image);?>" class="img-fluid" alt=""/>
											<div class="card-body text-center">
												<a href="<?php echo base_url('course/showTagLocation/'.$rows->tag_id);?>"><h4><b><?php echo $rows->tag_name;?></b></h4></a>
											</div>
										</div>
									</div>
								<?php if($i==6) break; ?>
								<?php if($i%3==0): ?>	
								</div>
							</div>	
							<div class="carousel-item">
								<div class="row">
								<?php endif;?>
								<?php endforeach;?>
							<?php endif;?>
						  </div>
						</div>	
					  </div>

					  <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="fa fa-angle-left" style="font-size: 50px;color: #b80509;margin-right: 268px;"></span> 
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="fa fa-angle-right" style="font-size: 50px;color: #b80509;margin-left: 268px;"></span>
					  </a>

					</div>
				</div>
				
				<!--CAROUSEL ENDED HERE-->			
				
			    <div class="row courses-content mt-4 d-none">
			    	<?php if(isset($country_en)):?>
			    		<?php foreach($course_tag as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->tag_image);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('course/showTagLocation/'.$rows->tag_id);?>"><h5><?php echo $rows->tag_name;?></h5></a>									
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_sp)):?>
			    		<?php foreach($course_tag as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->tag_image);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('course/showTagLocation/'.$rows->tag_id);?>"><h5><?php echo $rows->tag_name;?></h5></a>									
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_tk)):?>
			    		<?php foreach($course_tag as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->tag_image);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('course/showTagLocation/'.$rows->tag_id);?>"><h5><?php echo $rows->tag_name;?></h5></a>									
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>

					<?php if(isset($country_pr)):?>
			    		<?php foreach($course_tag as $rows):?>
							<div class="col-md-4 mb-3">
								<img src="<?php echo base_url('uploads/'.$rows->tag_image);?>" class="img-fluid" alt=""/>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('course/showTagLocation/'.$rows->tag_id);?>"><h5><?php echo $rows->tag_name;?></h5></a>									
								  </div>
								</div>
							</div>
						<?php endforeach;?>
					<?php endif;?>					
				</div>
			</div>
		</section>	
	
		<section role="testimonial-area" style="background-color:#dadee100;">

			<div class="cd-testimonials-wrapper cd-container">
				<ul class="cd-testimonials">
					<?php if(isset($country_en)):?>
						<?php foreach($testimonials as $rows):?>
							<li>
								<p><?php echo $rows->description_en;?></p>
								<div class="cd-author">
									<img src="<?php echo base_url('uploads/'.$rows->author_image);?>" alt="Author image">
									<ul class="cd-author-info">										
										<li><?php echo $rows->title_en;?></li>
									</ul>
								</div>
							</li>	
						<?php endforeach;?>
					<?php endif;?>			

					<?php if(isset($country_sp)):?>						
						<?php foreach($testimonials as $rows):?>
							<li>
								<p><?php echo $rows->description_en;?></p>
								<div class="cd-author">
									<img src="<?php echo base_url('uploads/'.$rows->author_image);?>" alt="Author image">
									<ul class="cd-author-info">										
										<li><?php echo $rows->title_en;?></li>
									</ul>
								</div>
							</li>	
						<?php endforeach;?>
					<?php endif;?>	

					<?php if(isset($country_tk)):?>
						<?php foreach($testimonials as $rows):?>
							<li>
								<p><?php echo $rows->description_en;?></p>
								<div class="cd-author">
									<img src="<?php echo base_url('uploads/'.$rows->author_image);?>" alt="Author image">
									<ul class="cd-author-info">										
										<li><?php echo $rows->title_en;?></li>
									</ul>
								</div>
							</li>	
						<?php endforeach;?>
					<?php endif;?>	

					<?php if(isset($country_pr)):?>
						<?php foreach($testimonials as $rows):?>
							<li>
								<p><?php echo $rows->description_en;?></p>
								<div class="cd-author">
									<img src="<?php echo base_url('uploads/'.$rows->author_image);?>" alt="Author image">
									<ul class="cd-author-info">										
										<li><?php echo $rows->title_en;?></li>
									</ul>
								</div>
							</li>	
						<?php endforeach;?>
					<?php endif;?>				
					
				</ul> <!-- cd-testimonials -->

				<a href="<?php echo base_url('home/testimonials');?>" class="cd-see-all">See all</a>
			</div> <!-- cd-testimonials-wrapper -->
			
		</section>		
			
	</main>

	<!--BODY AREA ENDS HERE // -->

<?php $this->load->view('footer'); ?>

