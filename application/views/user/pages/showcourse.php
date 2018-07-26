<?php $this->load->view('common/header'); ?>

<!--BODY AREA STARTS HERE -->

<main role="main-wrapper">
	<section role="contact-slider" class="contact-bg">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>	    					

	    					<?php

	    						if(isset($course_en))
	    						{
	    							echo $course_en[0]->location_name;
	    						}

	    						if(isset($course_sp))
	    						{
	    							echo $course_sp[0]->location_name_sp;
		    					}

		    					if(isset($course_tk))
		    					{
		    						echo $course_tk[0]->location_name_tk;
		    					}

		    					if(isset($course_pr))
		    					{
		    						echo $course_pr[0]->location_name_pr;
		    					}

	    					?>
	    				</h1>
	    			</div>
	    		</div>
	    	</div>	
	    </section>
	<section role="banner-tab-area">
		<div class="container">			
			<div class="row py-5 mt-4 mb-5">
				<div class="col-md-12">
					<!-- <table class="table">
					  <thead class="" style="color: #b80509 ">
					    <tr>					      
					      <th scope="col"><?php echo $this->lang->line('country');?></th>
					      <th scope="col"><?php echo $this->lang->line('location');?></th>
					      <th scope="col"><?php echo $this->lang->line('institute');?></th>
					      <th scope="col"><?php echo $this->lang->line('action');?></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php if(isset($course_en)):?>
						  	<?php foreach($course_en as $rows):?>
							    <tr>
									<td><?php echo $rows->country_name;?></td>
									<td><?php echo $rows->location_name;?></td>
									<td><?php echo $rows->inst_name_en;?></td>
									<td><a href="<?php echo base_url('course/viewCourse/'.$rows->location_en.'/'.$rows->institute_en.'/'.$rows->country_en);?>" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td>				     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>	

						<?php if(isset($course_sp)):?>
						  	<?php foreach($course_sp as $rows):?>
							    <tr>
									<td><?php echo $rows->country_name_sp;?></td>
									<td><?php echo $rows->location_name_sp;?></td>
									<td><?php echo $rows->inst_name_sp;?></td>
									<td><a href="<?php echo base_url('course/viewCourse/'.$rows->location_sp.'/'.$rows->institute_sp.'/'.$rows->country_sp);?>" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td>				     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>	

						<?php if(isset($course_tk)):?>
						  	<?php foreach($course_tk as $rows):?>
							    <tr>
									<td><?php echo $rows->country_name_tk;?></td>
									<td><?php echo $rows->location_name_tk;?></td>
									<td><?php echo $rows->inst_name_tk;?></td>
									<td><a href="<?php echo base_url('course/viewCourse/'.$rows->location_tk.'/'.$rows->institute_tk.'/'.$rows->country_tk);?>" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td>				     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>	

						<?php if(isset($course_pr)):?>
						  	<?php foreach($course_pr as $rows):?>
							    <tr>
									<td><?php echo $rows->country_name_pr;?></td>
									<td><?php echo $rows->location_name_pr;?></td>
									<td><?php echo $rows->inst_name_pr;?></td>
									<td><a href="<?php echo base_url('course/viewCourse/'.$rows->location_pr.'/'.$rows->institute_pr.'/'.$rows->country_pr);?>" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td>				     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>								   
					  </tbody>
					</table> -->

					<section role="courses-area">
							<div class="container">
								<div class="row pt-2">
									<div class="col-md-12 cources-head">
									<!-- 	<h1>English Courses in 
											<?php 

											if(isset($course_en))
											{
												echo $course_en[0]->location_name;
											}

											if(isset($course_sp))
											{
												echo $course_sp[0]->location_name_sp;
											}

											if(isset($course_tk))
											{
												echo $course_tk[0]->location_name_tk;
											}

											if(isset($course_pr))
											{
												echo $course_pr[0]->location_name_pr;
											}									

										?>	

										</h1> -->
										<!-- <p class="mt-3">See all our <span style="color:#b80509">English courses in 

											<?php 

											if(isset($course_en))
											{
												echo $course_en[0]->location_name;
											}

											if(isset($course_sp))
											{
												echo $course_sp[0]->location_name_sp;
											}

											if(isset($course_tk))
											{
												echo $course_tk[0]->location_name_tk;
											}

											if(isset($course_pr))
											{
												echo $course_pr[0]->location_name_pr;
											}									

										?>	

										</span></p> -->
									</div>
								</div>

								<div class="row ">
									<div class="col-md-12 cources-head">
										<div class="row courses-content mt-4">
											<?php if(isset($course_en)):?>
												<?php foreach($course_en as $rows):?>									
									                <div class="col-md-4">
									                    <img src="<?php echo base_url('uploads/'.$rows->course_image_en);?>" class="img-fluid" alt=""/>
									                    <div class="card">
									                      <div class="card-body">
									                        <!--  <a href="<?php echo base_url('course/viewCourse/'.$rows->location_en.'/'.$rows->institute_en.'/'.$rows->country_en);?>"><h5 style="font-weight: 700;"><?php echo $rows->course_title_en;?></h5></a> -->

									                         <a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h5 style="font-weight: 700;"><?php echo $rows->course_title_en;?></h5></a>
									                         <div class="border-course">
									                         </div>
									                         <p class="text-left pb-3 pt-4" style="font-weight: 500;"><?php echo $rows->course_description_en;?></p>
									                      </div>
									                    </div>
									                </div>
									            <?php endforeach;?>
								            <?php endif;?>

								            <?php if(isset($course_sp)):?>
												<?php foreach($course_sp as $rows):?>									
									                <div class="col-md-4">
									                    <img src="<?php echo base_url('uploads/'.$rows->course_image_sp);?>" class="img-fluid" alt=""/>
									                    <div class="card">
									                      <div class="card-body">
									                        <!-- <a href="<?php echo base_url('course/viewCourse/'.$rows->location_sp.'/'.$rows->institute_sp.'/'.$rows->country_sp);?>"> <h5 style="font-weight: 700;"><?php echo $rows->course_title_sp;?></h5></a> -->
									                        <a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h5 style="font-weight: 700;"><?php echo $rows->course_title_sp;?></h5></a>
									                         <div class="border-course">
									                         </div>
									                         <p class="text-left pb-3 pt-4" style="font-weight: 500;"><?php echo $rows->course_description_sp;?></p>
									                      </div>
									                    </div>
									                </div>
									            <?php endforeach;?>
								            <?php endif;?>	

								            <?php if(isset($course_tk)):?>
												<?php foreach($course_tk as $rows):?>									
									                <div class="col-md-4">
									                    <img src="<?php echo base_url('uploads/'.$rows->course_image_tk);?>" class="img-fluid" alt=""/>
									                    <div class="card">
									                      <div class="card-body">
									                        <!-- <a href="<?php echo base_url('course/viewCourse/'.$rows->location_tk.'/'.$rows->institute_tk.'/'.$rows->country_tk);?>"> <h5 style="font-weight: 700;"><?php echo $rows->course_title_tk;?></h5></a> -->
									                        <a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h5 style="font-weight: 700;"><?php echo $rows->course_title_tk;?></h5></a>
									                         <div class="border-course">
									                         </div>
									                         <p class="text-left pb-3 pt-4" style="font-weight: 500;"><?php echo $rows->course_description_tk;?></p>
									                      </div>
									                    </div>
									                </div>
									            <?php endforeach;?>
								            <?php endif;?>	

								             <?php if(isset($course_pr)):?>
												<?php foreach($course_pr as $rows):?>									
									                <div class="col-md-4">
									                    <img src="<?php echo base_url('uploads/'.$rows->course_image_pr);?>" class="img-fluid" alt=""/>
									                    <div class="card">
									                      <div class="card-body">
									                        <!-- <a href="<?php echo base_url('course/viewCourse/'.$rows->location_pr.'/'.$rows->institute_pr.'/'.$rows->country_pr);?>"> <h5 style="font-weight: 700;"><?php echo $rows->course_title_pr;?></h5></a> -->
									                        <a href="<?php echo base_url('course/viewCourse/'.$rows->course_id);?>"><h5 style="font-weight: 700;"><?php echo $rows->course_title_pr;?></h5></a>
									                         <div class="border-course">
									                         </div>
									                         <p class="text-left pb-3 pt-4" style="font-weight: 500;"><?php echo $rows->course_description_pr;?></p>
									                      </div>
									                    </div>
									                </div>
									            <?php endforeach;?>
								            <?php endif;?>	         	               

				            			</div>
									</div>
								</div>
							</div>
					</section>
				</div>				
			</div>
		</div>
	</section>
</main>

<!--BODY AREA ENDS HERE // -->

<!--FOOTER AREA STARTS HERE-->

<?php $this->load->view('footer'); ?>
