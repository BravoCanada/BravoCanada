<style>

	.top-dis {
    background-color: #dc3545;
    color: #fff;
    font-weight: 700;
    z-index: 999;
    position: relative;
    top: 23px;
    left: -17px;
    border: 4px solid #fff;
	padding: 14px 10px;
    border-radius: 34px;
}

.img-banner {
    position: relative;
    left: -31px;
    top: 208px;
}

.price {
    font-weight: 600;
    font-size: 25px;
    color: #fff;
    position: relative;
    left: -150px;
    top: 222px;
}

.card-body{
	    margin-top: -53px;
}

</style>


<?php $this->load->view('common/header'); ?>

<!--BODY AREA STARTS HERE -->

<main role="main-wrapper">
	<section role="contact-slider" class="contact-bg">
	    	<div class="container" style="max-width: 1366px;">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>Learn English in<br><span style="color: #b80509;">Boston</span></h1>
	    			</div>
	    		</div>
	    	</div>	
	    </section>	
	
	<!-- <section>
		<div class="row pt-5">

			<?php if(isset($course_en)):?>
				<?php foreach($course_en as $rows):?>
					<div class="col-md-4">
						<span class="top-dis"><?php echo $rows->course_discount;?>%</span>
						<div class="card text-center">
							<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
							<div class="card-body">
								<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_en;?></h4></a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			<?php endif;?>	

			<?php if(isset($course_sp)):?>
				<?php foreach($course_sp as $rows):?>
					<div class="col-md-4">
						<span class="top-dis"><?php echo $rows->course_discount;?>%</span>
						<div class="card text-center">
							<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
							<div class="card-body">
								<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_sp;?></h4></a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			<?php endif;?>

			<?php if(isset($course_tk)):?>
				<?php foreach($course_tk as $rows):?>
					<div class="col-md-4">
						<span class="top-dis"><?php echo $rows->course_discount;?>%</span>
						<div class="card text-center">
							<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
							<div class="card-body">
								<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_tk;?></h4></a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			<?php endif;?>

			<?php if(isset($course_pr)):?>
				<?php foreach($course_pr as $rows):?>
					<div class="col-md-4">
						<span class="top-dis"><?php echo $rows->course_discount;?>%</span>
						<div class="card text-center">
							<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
							<div class="card-body">
								<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_pr;?></h4></a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			<?php endif;?>							
				
		</div>			
	</section> -->
	
	<section role="">
		<div class="container">
			<div class="row mt-5">
				<?php if(isset($course_en)):?>
					<?php foreach($course_en as $rows):?>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<img src="http://oscuz.com/bravocanada/uploads/bravo-offer-bg.png" class="img-fluid img-banner" alt=""/><span class="price"><?php echo $rows->course_discount;?>%</span>
									<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
								</div>
								<div class="card-footer text-center">
									<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_en;?></h4>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				<?php endif;?>	

				<?php if(isset($course_sp)):?>
					<?php foreach($course_sp as $rows):?>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<img src="http://oscuz.com/bravocanada/uploads/bravo-offer-bg.png" class="img-fluid img-banner" alt=""/><span class="price"><?php echo $rows->course_discount;?>%</span>
									<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
								</div>
								<div class="card-footer text-center">
									<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_sp;?></h4>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				<?php endif;?>	

				<?php if(isset($course_tk)):?>
					<?php foreach($course_tk as $rows):?>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<img src="http://oscuz.com/bravocanada/uploads/bravo-offer-bg.png" class="img-fluid img-banner" alt=""/><span class="price"><?php echo $rows->course_discount;?>%</span>
									<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
								</div>
								<div class="card-footer text-center">
									<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_tk;?></h4>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				<?php endif;?>	

				<?php if(isset($course_pr)):?>
					<?php foreach($course_pr as $rows):?>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<img src="http://oscuz.com/bravocanada/uploads/bravo-offer-bg.png" class="img-fluid img-banner" alt=""/><span class="price"><?php echo $rows->course_discount;?>%</span>
									<img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
								</div>
								<div class="card-footer text-center">
									<a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h4><?php echo $rows->course_title_pr;?></h4>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				<?php endif;?>							
			</div>		
		</div>
		
	</section>
	
	
</main>

<!--BODY AREA ENDS HERE // -->

<!--FOOTER AREA STARTS HERE-->

<?php $this->load->view('footer'); ?>
