<?php $this->load->view('common/header'); ?>


	<main role="body-area">
		<section role="contact-slider" class="contact-bg">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>MAKE PAYMENT</h1>
	    			</div>
	    		</div>
	    	</div>	
	    </section>	
		
		<section role="payment-area">
			<div class="container" style="max-width: 690px;">
				<div class="row">
					<div class="col-md-12">
						<form>
							<div class="form-row mt-5">
							    <div class="col">
									<input type="text" class="form-control" placeholder="Card Number">
								</div>
							</div>
						   <div class="form-row mt-3">
							    <div class="col">
										  <input type="text" class="form-control" placeholder="First name">
										</div>
										<div class="col">
										  <input type="text" class="form-control" placeholder="Last name">
										</div>
						   </div>
								  
							 <div class="form-row mt-3">
								 <div class="col">
									 <input type="text" class="form-control" placeholder="Expiry month">
								 </div>
						
								 <div class="col">
									 <input type="text" class="form-control" placeholder="Expiry year">
							    </div>
					         </div>
								  
								  <div class="form-row mt-3">
									<div class="col">
									  <input type="text" class="form-control" placeholder="CVV">
									</div>
								  </div>
								  
								  <div class="form-row mt-3">
									<input type="submit" class="btn btn-danger btn-block" value="Submit">
								  </div>
								  
						</form>		  
					</div>
				</div>
			</div>
		</section>
	
	</main>

<?php $this->load->view('footer'); ?>