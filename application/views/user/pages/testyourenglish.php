<?php $this->load->view('common/header'); ?>


	<main role="body-area">
		<section role="contact-slider" class="contact-bg" style="background-image: url('../img/testyourenglish.jpg');">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>TEST YOUR ENGLISH</h1>
	    			</div>
	    		</div>	    		
	    	</div>	
	    </section>	

	    <section role="contact-slider" class="">
	    	<div class="container">
				
							
				<?php if($this->session->userdata('isLoggedUser') || $this->session->flashdata('message')){ ?>
					<div class="row mt-5">
						<?php //echo $this->session->flashdata('message'); ?>
						<div class="col-md-12 mt-5">
							<iframe src="http://oscuz.com/savsoftquiz/index.php/quiz/quiz_detail/4/English+Grammar+Objective+Question+and+Answer" style="width: 100%; min-height: 900px;border: 0px;"></iframe>
						</div>
					</div>
				<?php }else{ ?>
					<div class="row mt-5">
						<div class="col-md-2">
						</div>
						<div class="col-md-8 form-area">

							<form action="<?php echo base_url('home/testYourEng/'); ?>" method="POST">
								<input name="fname" class="form-control" id="" placeholder="Full Name*" required="" type="text">
								<br>
								<input name="phone" class="form-control" id="" placeholder="Phone number (starting with country code)*" required="" type="text">
								<br>
								<input name="whatsapp" class="form-control" id="" placeholder="Whatsapp" type="text">
								<br>
								<input name="uemail" class="form-control" id="" placeholder="Email*" required="" type="email">
								<br>
								<input name="whentravel" class="form-control" id="" placeholder="When are you looking to travel?*" required="" type="text">
								<br>
								<input name="whichcitylike" class="form-control" id="" placeholder="Which city would you like to study in Canada?*" required="" type="text">
								<br>
								<input name="howmanyweek" class="form-control" id="" placeholder="How many weeks do you intend to study?*" required="" type="text">
								<br>
								<input name="nationality" class="form-control" id="" placeholder="What Nationality are you?*" required="" type="text">
								<br>
								<!--
								<textarea rows="7" name="whylearn" cols="50" class="form-control" placeholder="Help us understand your needs. Tell us why are you looking to learn English." required=""></textarea> -->
								<div class="btn-area mt-4 mb-5 text-center">
									<button class="btn btn-danger" type="submit">Start Test</button>
								</div>
							  </form>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				<?php } ?>
	    	</div>	
	    </section>	
		
		
	</main>

<?php $this->load->view('footer'); ?>