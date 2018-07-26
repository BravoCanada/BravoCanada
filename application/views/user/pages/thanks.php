<style>

section[role="banner-tab-area"] h1{
	color: #b80509;
    font-size: 80px;
    text-transform: uppercase;
}

section[role="banner-tab-area"] p{
    font-size: 23px;
    line-height: 42px;
    font-weight: 500
}

</style>

<?php $this->load->view('common/header'); ?>

<!--BODY AREA STARTS HERE -->

<main role="main-wrapper">
	<section role="banner-tab-area">
		<div class="container">			
			<div class="row py-5 mt-4 mb-5">
				<div class="col-md-12 text-center">
					<h1>Thanks!</h1>
					<p class="pt-4">Thankyou for booking request, we will review your request.<br>
									A confirmation has been sent to your email address.</p>
				</div>				
			</div>
		</div>
	</section>
</main>

<!--BODY AREA ENDS HERE // -->

<!--FOOTER AREA STARTS HERE-->

<?php $this->load->view('footer'); ?>
