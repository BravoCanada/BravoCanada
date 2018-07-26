<style>

section[role="failed-area"] h1{
	color: #b80509;
    font-size: 80px;
    text-transform: uppercase;
}

section[role="failed-area"] p{
    font-size: 23px;
    line-height: 42px;
    font-weight: 500
}

</style>
<?php $this->load->view('common/header'); ?>

<!--BODY AREA STARTS HERE -->

<main role="main-wrapper">
	<section role="failed-area">
		<div class="container">			
			<div class="row py-5 mt-4 mb-5">
				<div class="col-md-12 text-center">
					<h1>Sorry!</h1>
					<p class="pt-4">Sorry for the inconvenience, because of some reasons we are unable to proceed your request.<br>
									Please try again later.</p>
				</div>				
			</div>
		</div>
	</section>
</main>

<!--BODY AREA ENDS HERE // -->

<!--FOOTER AREA STARTS HERE-->

<?php $this->load->view('footer'); ?>
