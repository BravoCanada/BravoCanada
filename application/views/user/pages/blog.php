<?php $this->load->view('common/header'); ?>
	<!--BODY AREA STARTS HERE -->

	<main role="body-area">
		<section role="contact-slider" class="contact-bg">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>BLOG</h1>
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
				
				<div class="row mt-5">
					<?php foreach($blog as $rows):?>						
							<div class="col-md-4 pb-5">
								<a href="<?php echo base_url('home/singleBlog/'.$rows->id);?>"><img src="<?php echo base_url('uploads/'.$rows->blog_image);?>" class="img-fluid" alt=""/></a>
								<div class="card">
								  <div class="card-body">
									<a href="<?php echo base_url('home/singleBlog/'.$rows->id);?>"><h5><?php echo $rows->blog_title;?></h5></a>
									 <div class="border-course">
									 </div>
									 <p class="text-left pb-3 pt-4"><?php echo $rows->blog_content;?></p>
								  </div>
								</div>
							</div>						
					<?php endforeach;?>					
				</div>				
			</div>	
		
		</section>	  

	</main>

	<!--BODY AREA ENDS HERE // -->

<?php $this->load->view('footer'); ?>
