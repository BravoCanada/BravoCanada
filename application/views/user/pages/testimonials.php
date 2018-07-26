<?php $this->load->view('common/header'); ?>
<!--BODY AREA STARTS HERE -->
<main role="testimonial-body">
   <section role="contact-slider" class="contact-bg" style="background-image: url('<?php echo base_url('uploads/test.jpg');?>');">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1>Testimonials</h1>
            </div>
         </div>
      </div>
   </section>
   <section role="testimonial-area" class="pt-5">
      <div class="container">
         <div class="row py-4">
         	<?php if(isset($testimonials_en)):?>
         		<?php foreach($testimonials_en as $rows):?>
		            <div class="col-md-4 text-center">
		               <div class="card mt-5">
		                  <div class="card-body">
		                     <img src="<?php echo base_url('uploads/'.$rows->author_image);?>" alt="author" class="img-fluid rounded-circle mb-3">
		                     <h6><?php echo $rows->title_en;?></h6>		                     
		                     <p class="mb-4"><?php echo $rows->description_en;?></p>
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
<?php $this->load->view('footer'); ?>