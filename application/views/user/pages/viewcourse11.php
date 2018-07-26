<?php $this->load->view('common/header'); ?>

<!--BODY AREA STARTS HERE -->
<main role="main-wrapper">
	<section role="banner-tab-area">
		<div class="container">		

			<div class="row py-4 mt-3 mb-4">

				<div class="col-md-12">
					<h2>

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

					</h2>
					<table class="table">
					  <thead class="" style="color: #b80509 ">
					    <tr>					     
					      <th scope="col"><?php echo $this->lang->line('course_title');?></th>
					      <th scope="col"><?php echo $this->lang->line('time');?></th>
					      <th scope="col"><?php echo $this->lang->line('lessons');?></th>
					      	<?php if(isset($course_en)):?>
						      <?php foreach(unserialize($course_en[0]->weeks_en) as $key=>$value):?>

						      	<th scope="col"><?php echo $value;?> WEEKS</th>	

						      <?php endforeach;?>
						    <?php endif;?>	

						    <?php if(isset($course_sp)):?>
						      <?php foreach(unserialize($course_sp[0]->weeks_sp) as $key=>$value):?>

						      	<th scope="col"><?php echo $value;?> WEEKS(sp)</th>	

						      <?php endforeach;?>
						    <?php endif;?>

						     <?php if(isset($course_tk)):?>
						      <?php foreach(unserialize($course_tk[0]->weeks_tk) as $key=>$value):?>

						      	<th scope="col"><?php echo $value;?> WEEKS(tk)</th>	

						      <?php endforeach;?>
						    <?php endif;?>	

						    <?php if(isset($course_pr)):?>
						      <?php foreach(unserialize($course_pr[0]->weeks_pr) as $key=>$value):?>

						      	<th scope="col"><?php echo $value;?> WEEKS(pr)</th>	

						      <?php endforeach;?>
						    <?php endif;?>					     
					     <!--  <th scope="col"><?php echo $this->lang->line('action');?></th> -->
					    </tr>
					  </thead>
					  <tbody>
					  	<?php if(isset($course_en)):?>
						  	<?php foreach($course_en as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->course_title_en;?></td>
						     		<td><?php echo $rows->course_time_en;?></td>
						     		<td><?php echo $rows->total_lesson_en;?></td>	

						     		<?php foreach(unserialize($rows->price_en) as $key=>$value):?>

						     			<td><?php echo $value;?></td>

						     		<?php endforeach;?>							

									<!-- <td><a href="#" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td> -->				     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>	

						<?php if(isset($course_sp)):?>
						  	<?php foreach($course_sp as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->course_title_sp;?></td>
						     		<td><?php echo $rows->course_time_sp;?></td>
						     		<td><?php echo $rows->total_lesson_sp;?></td>	

						     		<?php foreach(unserialize($rows->price_sp) as $key=>$value):?>

						     			<td><?php echo $value;?></td>

						     		<?php endforeach;?>							

									<!-- <td><a href="#" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td>	 -->			     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>

						<?php if(isset($course_tk)):?>
						  	<?php foreach($course_tk as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->course_title_tk;?></td>
						     		<td><?php echo $rows->course_time_tk;?></td>
						     		<td><?php echo $rows->total_lesson_tk;?></td>	

						     		<?php foreach(unserialize($rows->price_tk) as $key=>$value):?>

						     			<td><?php echo $value;?></td>

						     		<?php endforeach;?>							

									<!-- <td><a href="#" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td>	 -->			     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>	

						<?php if(isset($course_pr)):?>
						  	<?php foreach($course_pr as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->course_title_pr;?></td>
						     		<td><?php echo $rows->course_time_pr;?></td>
						     		<td><?php echo $rows->total_lesson_pr;?></td>	

						     		<?php foreach(unserialize($rows->price_pr) as $key=>$value):?>

						     			<td><?php echo $value;?></td>

						     		<?php endforeach;?>							

									<!-- <td><a href="#" class="btn btn-primary btn-sm"><?php echo $this->lang->line('btn_view');?></a></td>	 -->			     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>									   
					  </tbody>
					</table>
				</div>
			</div>

			<div class="row py-4 mt-3 mb-4">

				<div class="col-md-6">
					<h2><?php echo $this->lang->line('accommodation');?></h2>
					<table class="table">
					  <thead class="" style="color: #b80509 ">
					    <tr>					     
					      <th scope="col"><?php echo $this->lang->line('fee_name');?></th>
					      <th scope="col"><?php echo $this->lang->line('single');?></th>
					      <th scope="col"><?php echo $this->lang->line('double');?></th>
					           		     
					    </tr>
					  </thead>
					  <tbody>
					  	<?php if(isset($accommodation_en)):?>
						  	<?php foreach($accommodation_en as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->acc_title_en;?></td>
						     		<td><?php echo $rows->single_en;?></td>	
						     		<td><?php echo $rows->double_en;?></td>					     								     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>	

						<?php if(isset($accommodation_sp)):?>
						  	<?php foreach($accommodation_sp as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->acc_title_sp;?></td>
						     		<td><?php echo $rows->single_sp;?></td>	
						     		<td><?php echo $rows->double_sp;?></td>					     								     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>	

						<?php if(isset($accommodation_tk)):?>
						  	<?php foreach($accommodation_tk as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->acc_title_tk;?></td>
						     		<td><?php echo $rows->single_tk;?></td>	
						     		<td><?php echo $rows->double_tk;?></td>					     								     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>		

						<?php if(isset($accommodation_pr)):?>
						  	<?php foreach($accommodation_pr as $rows):?>
							    <tr>							     	
						     		<td><?php echo $rows->acc_title_pr;?></td>
						     		<td><?php echo $rows->single_pr;?></td>	
						     		<td><?php echo $rows->double_pr;?></td>					     								     	
							    </tr>
						    <?php endforeach;?>	
						<?php endif;?>								   
					  </tbody>
					</table>
				</div>				

			</div>	

			<div class="row">
				
				<div class="col-md-6">
						<h2><?php echo $this->lang->line('additional_fee');?></h2>
						<table class="table">
						  <thead class="" style="color: #b80509 ">
						    <tr>					     
						      <th scope="col"><?php echo $this->lang->line('fee_name');?></th>
						      <th scope="col"><?php echo $this->lang->line('price');?></th>					     
						    </tr>
						  </thead>
						  <tbody>
						  	<?php if(isset($additional_fees_en)):?>
							  	<?php foreach($additional_fees_en as $rows):?>
								    <tr>							     	
							     		<td><?php echo $rows->fee_name_en;?></td>
							     		<td><?php echo $rows->price_en;?></td>						     								     	
								    </tr>
							    <?php endforeach;?>	
							<?php endif;?>	

							<?php if(isset($additional_fees_sp)):?>
							  	<?php foreach($additional_fees_sp as $rows):?>
								    <tr>							     	
							     		<td><?php echo $rows->fee_name_sp;?></td>
							     		<td><?php echo $rows->price_sp;?></td>						     								     	
								    </tr>
							    <?php endforeach;?>	
							<?php endif;?>	

							<?php if(isset($additional_fees_tk)):?>
							  	<?php foreach($additional_fees_tk as $rows):?>
								    <tr>							     	
							     		<td><?php echo $rows->fee_name_tk;?></td>
							     		<td><?php echo $rows->price_tk;?></td>						     								     	
								    </tr>
							    <?php endforeach;?>	
							<?php endif;?>	

							<?php if(isset($additional_fees_pr)):?>
							  	<?php foreach($additional_fees_pr as $rows):?>
								    <tr>							     	
							     		<td><?php echo $rows->fee_name_pr;?></td>
							     		<td><?php echo $rows->price_pr;?></td>						     								     	
								    </tr>
							    <?php endforeach;?>	
							<?php endif;?>								   
						  </tbody>
						</table>
				</div>
			</div>				
	
		</div>
	</section>
</main>

<!--BODY AREA ENDS HERE // -->

<!--FOOTER AREA STARTS HERE-->

<?php $this->load->view('footer'); ?>
