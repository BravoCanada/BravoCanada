<style>

	section[role="single-blog-area"] h5 {
		font-weight: 700;
		text-align: justify;
		line-height: 29px;
		font-size: 22px;
	    color: #b80509;
	}
	
	section[role="single-blog-area"] p{
		text-align:justify;
	}
	
	section[role="single-blog-area"] span{
	   font-weight: 500;
	}

</style>


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

	   <section role="single-blog-area" class="mt-4">
			<div class="container" style="max-width: 1000px;">
				<div class="row">
					<div class="col-md-12">
						
						<div class="blog-head mt-5 mb-2 text-left">
							<h5 class="mb-3"><?php echo $singleblog->blog_title;?></h5>
							
							<span><?php echo date('d F Y',strtotime($singleblog->created_at));?> / By Brovo Canada</span>
						</div>
						
						<!-- <img src="http://oscuz.com/bravocanada/uploads/blog-1.jpg" class="img-fluid" alt=""/> -->
						<img src="<?php echo base_url('uploads/'.$singleblog->blog_image);?>" class="img-fluid" alt="">
						
						<div class="blog-content my-4 text-left">
						
							<p><?php echo $singleblog->blog_content;?></p>
																	
						</div>
						
					</div>
				</div>
			</div>
	   </section>

	</main>

	<!--BODY AREA ENDS HERE // -->

<?php $this->load->view('footer'); ?>
