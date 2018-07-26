<?php $this->load->view('common/header'); ?>


	<main role="body-area">
		<section role="contact-slider" class="contact-bg">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>CONTACT US</h1>
	    			</div>
	    		</div>
	    	</div>	
	    </section>
		
		<section role="contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<form>
								  <div class="form-row mt-5">
									<div class="col">
									  <input type="text" class="form-control" placeholder="First name">
									</div>
									<div class="col">
									  <input type="text" class="form-control" placeholder="Last name">
									</div>
								  </div>
								  
								  <div class="form-row">
									<div class="col">
									  <input type="text" class="form-control" placeholder="info@bravocan.ca">
									</div>
								  </div>
								  
								  <div class="form-row">
									<div class="col">
									  <input type="text" class="form-control" placeholder="Subject">
									</div>
								  </div>
								  
								  <div class="form-row">
									<textarea name="your-message" cols="40" rows="10" class="form-control" placeholder="Type Message Here"></textarea>
									
									<input type="submit" class="btn btn-danger" value="Send Message">
								  </div>
								  
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-box mt-5">
							<h3 class="mb-4">Talk To Us</h3>
							
							<div class="contact-row"><i class="fa fa-phone-square" aria-hidden="true"></i>Call us at 
								<a href="#">+1-416-883-9557</a>
							</div>
							
							<div class="contact-row"><i class="fa fa-envelope" aria-hidden="true"></i>Email us at: 
								<a href="#">info@bravocan.ca</a>
							</div>
							
							<div class="contact-row"><i class="fa fa-map-marker" aria-hidden="true"></i>Bravo Canada<br>
							<a href="#">P.O Box 47116 - 10 Dundas,<br> Street East, Toronto, Ontario<br> M5B 2G9, Canada</a></div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</main>

<?php $this->load->view('footer'); ?>