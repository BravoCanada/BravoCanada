<style>

	section[role="intitutes_area"] .institutes_area_holder .retreats-mid h4{
		color: #b80509;
		font-weight: 700 !important;
		font-size: 23px;
	}

	section[role="intitutes_area"] .institutes_area_holder .retreats-mid p{
	    font-size: 14px;
		color: #7b7474;
	   text-align: justify;
	}
	
	section[role="intitutes_area"] .icons-area ul{
	    margin-left: -14px;
	}
	
	section[role="intitutes_area"] .icons-area ul li{
	    list-style:none;
	}
	
	section[role="intitutes_area"] .icons-area li a{
	    float:left;
        padding-right: 10px;
	}
	
	section[role="intitutes_area"] .icons-area .fa{
	    font-size: 30px;
		color:#000;
		border: 1px solid #aea6a6;
		padding: 5px 9px;
		border-radius: 4px;
	}
	
	.holder-area{
		margin-left: 20px !important;
	}
	
	section[role="intitutes_area"] .left_bar_holder,
	section[role="intitutes_area"] .holder-area{
		box-shadow:0 14px 89px 0 rgba(0, 0, 0, 0.11);
		padding:20px;
		border-radius:4px;
	}
	
	section[role="intitutes_area"] .left_bar_holder h6{
	    font-weight: 700;
		color: #b80509;
		font-size: 22px;
	}
	
	section[role="intitutes_area"] .left_bar_holder .form-check-label{
		color: #7c7777;
	}

	[role="intitutes_area"]{
		padding:80px 0;
	}
	.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
    margin-bottom: 10px;
	font-size:14px
}
</style>

<?php $this->load->view('common/header');?>

<main role="body-area">
	<section role="contact-slider" class="contact-bg">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<h1>TOP INSTITUTE</span></h1>
	    			</div>
	    		</div>
	    	</div>	
    </section>	
	
	<section role="intitutes_area">
		<div class="container">
			<div class="row">		
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							<div class="left_bar_holder">
								<div class="top-header">
									<h6 class="pl-4">Refine By</h6>
									<p class="pl-4"></p>
								</div>
								
								<div class="form-area">
									<?php foreach($location as $rows):?>

										<?php 

											$this->db->select('*');
											$this->db->from('course');
											$this->db->join('institute','institute.inst_id = course.institute_en');
											$this->db->where('course.location_en',$rows->location_id);											
											$this->db->group_by('course.institute_en');

											$query 				=	$this->db->get()->result();
											$institute_count	=	count($query);

										?>
										
										<div class="form-check">
										  <label class="form-check-label" for="">
											<input type="radio" class="form-check-input location_radio" name="location_radio" value="<?php echo $rows->location_id;?>"<?php echo ($rows->location_id == $location_id) ? 'checked' : '';?>><?php echo $rows->location_name;?> (<?php echo $institute_count;?>)
										  </label>
										</div>
									<?php endforeach;?>									
							  </div>							  
								 <!-- <a href="javascript:void(0);" class="btn btn-danger my-2 mx-2" style="padding: 10px 71px;width: 100%;margin: 0 !important;" id="btn_filter">FILTER</a> -->
								 <input type="hidden" value="0" name="hidden_tag_id" id="hidden_tag_id">															 							 
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-md-9">
					<div class="institutes_area_holder" id="bind_institute">
						<?php foreach($institute_en as $rows):?>
							<div class="row holder-area">
								<div class="col-md-4">
	                                <div class="retreats_area_holder_img object-fit" style="margin-left: -15px;">
										<img src="<?php echo base_url('uploads/'.$rows->inst_logo_en);?>" class="img-fluid" alt="" />
									</div>
								</div>
								<div class="col-md-8">
									<div class="retreats-mid px-2 pt-4">
										<h4><?php echo $rows->inst_name_en;?></h4>
										<p><?php echo $rows->inst_description_en;?></p>	
											<div class="row pt-2">
										<div class="col-md-6 icons-area text-left">
											<ul>
											   <li><a href=""><i class="fa fa-map-marker" style="margin-left: -14px;"></i></a></li>
											   <li><a href=""><i class="fa fa-hotel"></i></a></li>
											</ul>
										</div>
										<div class="col-md-6">
											<div class="discover-btn text-right pr-3">
												<a href="<?php echo base_url('course/viewInstitute/'.$rows->location_en.'/'.$rows->inst_id);?>" class="btn btn-danger">Discover Now &nbsp;&nbsp;<i class="fa fa-angle-right custom" ></i></a>
											</div>
										</div>
									</div>
									</div>										
							    </div>		
							</div>
						<?php endforeach;?>					
					</div>
				</div>
			</div>
		</div>
	</section>
	
</main>

<?php $this->load->view('footer');?>