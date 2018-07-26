<?php $this->load->view('common/header'); ?>
<style>
   /*TABBING AREA CSS STARTS HERE*/
   section[role="tabbing-area"] .nav-tabs {
   border-bottom: 1px solid #ddd0;
   }
   section[role="tabbing-area"] .nav-tabs {
   border-bottom: 1px solid #ddd0;
   }
   section[role="tabbing-area"] .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
   color: #fff;
   background-color: #b80509;
   border-color: #ddd0 #ddd0 #fff0;
   }
   section[role="tabbing-area"] .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
   border-color: #e9ecef00 #e9ecef03 #ddd0;
   }
   section[role="tabbing-area"] .nav-tabs .nav-link {
   /* border: 1px solid #e60c0c; */
   border-top-left-radius: 0.25rem;
   border-top-right-radius: 0.25rem;
   border: 2px solid #000;
   border-radius: 8px 63px 0px 0px;
   /* padding: 19px 40px; */
   padding-left: 70px;
   padding-right: 105px;
   padding-top: 20px;
   padding-bottom: 18px;
   background-color: #000;
   color: #fff;
   }
   section[role="tabbing-area"] #home{
   background-color: #b80509;
   color: #fff;
   }
   section[role="tabbing-area"] #home h5{
   font-weight: bold;  
   }
   section[role="tabbing-area"] #home p{
   font-size: 18px;
   }
   section[role="tabbing-area"] #home h6{
   font-weight: bold;  
   }
   section[role="tabbing-area"] #menu2{
   background-color: #b80509;
   color: #fff;
   }
   section[role="tabbing-area"] #menu2 h6{
   font-weight: bold;  
   }
   section[role="tabbing-area"] #menu2 p{
   font-size:17px;  
   }
   section[role="tabbing-area"] #menu3{
   background-color: #b80509;
   color: #fff;
   }
   section[role="tabbing-area"] #menu3 h6{
   font-weight: bold;  
   }
   section[role="tabbing-area"] #menu3 p{
   font-size:18px;  
   }
   section[role="tabbing-area"] #menu1{
   background-color: #b80509;
   color: #fff;
   }
   section[role="tabbing-area"] #menu1 h6{
   font-weight: bold;  
   }
   section[role="tabbing-area"] #menu1 p{
   font-size:18px;  
   }
   /*TABBING AREA CSS ENDS HERE*/
   .hiddy{display:none;}
</style>
<!--BODY AREA STARTS HERE -->
<main role="contact-body">
   <section role="contact-slider" class="contact-bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1>
                  <?php 
                     if(isset($course_en))
                     {
                     	echo $course_en[0]->tag_name;
                     }
                     
                     if(isset($course_sp))
                     {
                     	echo $course_sp[0]->tag_name_sp;
                     }
                     
                     if(isset($course_tk))
                     {
                     	echo $course_tk[0]->tag_name_tk;
                     }
                     
                     if(isset($course_pr))
                     {
                     	echo $course_pr[0]->tag_name_pr;
                     }									
                     ?>			
               </h1>
            </div>
         </div>
      </div>
   </section>
   <section class="about-city py-5">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="row about-top">
                  <div class="col-md-12">
                     <h5>
                        <?php 
                           if(isset($course_en))
                           {
                           	echo $course_en[0]->tag_name;
                           }
                           
                           if(isset($course_sp))
                           {
                           	echo $course_sp[0]->tag_name_sp;
                           }
                           
                           if(isset($course_tk))
                           {
                           	echo $course_tk[0]->tag_name_tk;
                           }
                           
                           if(isset($course_pr))
                           {
                           	echo $course_pr[0]->tag_name_pr;
                           }									
                           ?>
                     </h5>
                     <p class="mt-4" style="font-size: 17px;">
                        <?php 
                           if(isset($course_en))
                           {
                           	echo $course_en[0]->des_en;
                           }
                           
                           if(isset($course_sp))
                           {
                           	echo $course_sp[0]->des_sp;
                           }
                           
                           if(isset($course_tk))
                           {
                           	echo $course_tk[0]->des_tk;
                           }
                           
                           if(isset($course_pr))
                           {
                           	echo $course_pr[0]->des_pr;
                           }									
                           ?>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-12">
                     <div class="box-area">
                        <div class="box-panel">
                           <form class="form" action="<?php echo base_url('course/showInstitute');?>" method="post">
                              <p>Courses from</p>
                              <input type="hidden" name="hidden_location_id" value="<?php echo isset($course_en) ? $course_en[0]->location_en : ''?>">
                              <input type="hidden" name="hidden_course_price" id="hidden_course_price">
                              <input type="hidden" name="course_select" value="<?php echo $tag_id;?>">
                              <h1 class="pb-3 hiddy">$<span id="course_price">0</span></h1>
                              <?php if(isset($course_en)):?>
                              <select class="form-control form-control-lg mt-3 mb-2" name="location_select" id="select_course_location">
                              	<option value="">select</option>
                                 <?php foreach($course_en as $rows):?>
                                 <option value="<?php echo $rows->location_id;?>"><?php echo $rows->location_name;?></option>
                                 <?php endforeach;?>
                              </select>
                              <?php endif;?>
                              <?php if(isset($course_sp)):?>
                              <select class="form-control form-control-lg mt-3 mb-2"  name="select_course_location" id="select_course_location">
                              	<option value="">select</option>
                                 <?php foreach($course_sp as $rows):?>
                                 <option value="<?php echo $rows->location_id;?>"><?php echo $rows->location_name_sp;?></option>
                                 <?php endforeach;?>
                              </select>
                              <?php endif;?>
                              <?php if(isset($course_tk)):?>
                              <select class="form-control form-control-lg mt-3 mb-2"  name="select_course_location" id="select_course_location">
                              	<option value="">select</option>
                                 <?php foreach($course_tk as $rows):?>
                                 <option value="<?php echo $rows->location_id;?>"><?php echo $rows->location_name_tk;?></option>
                                 <?php endforeach;?>
                              </select>
                              <?php endif;?>
                              <?php if(isset($course_pr)):?>
                              <select class="form-control form-control-lg mt-3 mb-2"  name="select_course_location" id="select_course_location">
                              	<option value="">select</option>
                                 <?php foreach($course_pr as $rows):?>
                                 <option value="<?php echo $rows->location_id;?>"><?php echo $rows->location_name_pr;?></option>
                                 <?php endforeach;?>
                              </select>
                              <?php endif;?>
                              <select class="form-control form-control-lg mt-3 mb-2 hiddy" name="select_course_name" id="select_course_name">
                                 <?php if(isset($course_en)):?>
                                 <?php foreach($course_en as $rows):?>
                                 <option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_en;?></option>
                                 <?php endforeach;?>
                                 <?php endif;?>
                                 <?php if(isset($course_sp)):?>
                                 <?php foreach($course_sp as $rows):?>
                                 <option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_sp;?></option>
                                 <?php endforeach;?>
                                 <?php endif;?>
                                 <?php if(isset($course_tk)):?>
                                 <?php foreach($course_tk as $rows):?>
                                 <option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_tk;?></option>
                                 <?php endforeach;?>
                                 <?php endif;?>
                                 <?php if(isset($course_pr)):?>
                                 <?php foreach($course_pr as $rows):?>
                                 <option value="<?php echo $rows->course_id;?>"><?php echo $rows->course_title_pr;?></option>
                                 <?php endforeach;?>
                                 <?php endif;?>
                              </select>
                              <div class="row">
                                 <div class="col-md-6 hiddy" style="padding-right:5px !important;">
                                    <select class="start-date" data-val="true" data-val-date="The field StartDate must be a date." default-value="" name="starting_date" id="starting_date">
                                       <?php 
                                          $starting_d 					=	new DateTime();	
                                          $starting_date 					=	strtotime($starting_d->format('Y-m-d'));
                                          
                                          for($i=0;$i<=7;$i++)
                                          {
                                          	$starting_date				=	strtotime("+7 day", $starting_date);
                                          	$s_date[]					=	date('d-m-Y',$starting_date);
                                          }
                                          if(isset($s_date)):?>
                                       <?php foreach($s_date as $key=>$value):?>
                                       <option value="<?php echo $value;?>"><?php echo $value;?></option>
                                       <?php endforeach;?>
                                       <?php endif;?>
                                    </select>
                                 </div>
                                 <div class="col-md-6 hiddy" style="padding-left:5px !important;">
                                    <select class="duration-weeks" data-val="true" data-val-number="The field Duration must be a number." dataunittype="week" dataunittypes="weeks" default-value="2" id="course_week" name="course_week">
                                       <?php if(isset($course_en)):?>
                                       <?php foreach(unserialize($course_en[0]->weeks_en) as $key=>$value):?>
                                       <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                       <?php endforeach;?>
                                       <?php endif;?>
                                       <?php if(isset($course_sp)):?>
                                       <?php foreach(unserialize($course_sp[0]->weeks_sp) as $key=>$value):?>
                                       <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                       <?php endforeach;?>
                                       <?php endif;?>
                                       <?php if(isset($course_tk)):?>
                                       <?php foreach(unserialize($course_tk[0]->weeks_tk) as $key=>$value):?>
                                       <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                       <?php endforeach;?>
                                       <?php endif;?>
                                       <?php if(isset($course_pr)):?>
                                       <?php foreach(unserialize($course_pr[0]->weeks_pr) as $key=>$value):?>
                                       <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                       <?php endforeach;?>
                                       <?php endif;?>
                                    </select>
                                 </div>
                              </div>

                              <div class="row <?php echo isset($hours_en) ? '' : 'd-none';?>">                          
                                 <div class="col-md-6 hiddy" style="padding-left:18px !important;">
                                    <label for="">Hours</label>
                                    <select class="duration-weeks" name="hours_en" id="hours_en">
                                       <?php if(isset($course_en)):?>

                                          <?php if(isset($hours_en)):?>

                                             <?php foreach($hours_en as $key=>$value):?>

                                                <option value="<?php echo $key;?>"><?php echo $value;?></option>

                                             <?php endforeach;?>                                         

                                          <?php endif;?>

                                       <?php endif;?>
                                    </select>
                                 </div>   
                              </div>
                              <!-- <a href="javascript:void(0);" class="hiddy btn btn-primary book-now-button mt-2" id="btn_bookNow">Book Now</a> -->
                              <button type="submit" class="hiddy btn btn-primary book-now-button mt-2">Book Now</button>
                              <button type="button" class="btn btn-light book-now-button mt-2">Contact Us</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
   </section>   
</main>
<!--BODY AREA ENDS HERE // -->
<!--FOOTER AREA STARTS HERE-->
<?php $this->load->view('footer'); ?>

<script type="text/javascript">
   $(document).ready(function() {   
    
      $('form').validate({
          rules: {
              select_course_location: {
                  required: true                          
              } 
                            
          }
        
      });
   });
</script>

