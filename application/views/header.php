<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>bravocanada</title>
      <!--CSS STARTS HERE-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/style.css">     
      <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/reset.css">
      <!-- CSS reset -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/top-style.css">
      <!-- Resource style -->      
      <script src="<?php echo base_url();?>assets/user/js/modernizr.js"></script> <!-- Modernizr -->
      <script>
         var base_url = '<?php echo base_url();?>';
      </script>
      <style type="text/css">
         .valid {
         border: 1px solid green;
         }
         .error {
         color: red;
         }
      </style>
   </head>
   <body>
      <!--HEADER AREA STARTS HERE-->
      <header role="header-area">
         <section role="top-head">
            <div class="container-fluid">
               <div class="row">
                  <?php $this->load->view('menu'); ?>
               </div>
            </div>
         </section>
         <section role="slider-area" class="py-5">
            <section role="search-form-area">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <form class="row top--search" action="<?php echo base_url('course/showInstitute');?>" method="post" id="header_form">
                           <div class="form-group col">
                              <label>I want to go to</label>
                              <select class="form-control custom-select valid" id="location_select" name="location_select" aria-required="true" aria-invalid="false">
                                 <option value="">Select Location</option>
                                 <optgroup label="CANADA">
                                    <option value="1">Toronto</option>
                                    <option value="2">Calgary</option>
                                    <option value="15">Montreal</option>
                                    <option value="16">Ottawa</option>
                                    <option value="17">Vancouver</option>
                                    <option value="18">Victoria</option>
                                    <option value="19">Halifax</option>
                                 </optgroup>
                              </select>
                           </div>
                           <div class="form-group col">
                              <label>To study</label>
                              <select class="form-control custom-select" id="course_select" name="course_select">
                                 <option value="">Select Course</option>
                              </select>
                           </div>
                           <div class="form-group col">
                              <label>From</label>
                              <select class="form-control custom-select" id="month_select" name="month_select">
                                 <option value="">Select</option>
                                 <option value="2018-07-">Jul 2018</option>
                                 <option value="2018-08-">Aug 2018</option>
                                 <option value="2018-09-">Sep 2018</option>
                                 <option value="2018-10-">Oct 2018</option>
                                 <option value="2018-11-">Nov 2018</option>
                                 <option value="2018-12-">Dec 2018</option>
                                 <option value="2019-01-">Jan 2019</option>
                                 <option value="2019-02-">Feb 2019</option>
                                 <option value="2019-03-">Mar 2019</option>
                                 <option value="2019-04-">Apr 2019</option>
                                 <option value="2019-05-">May 2019</option>
                                 <option value="2019-06-">Jun 2019</option>
                                 <option value="2019-07-">Jul 2019</option>
                              </select>
                           </div>
                           <div class="form-group col">
                              <label>Starting Date</label>
                              <select class="form-control custom-select" id="day_select" name="day_select">
                                 <option value="">Select</option>
                              </select>
                           </div>
                           <div class="form-group col">
                              <label>Duration</label>
                              <select class="form-control custom-select" id="course_duration" name="course_duration">
                                 <option value="">Select</option>
                                 <?php for($i=1;$i<=20;$i++):?>	
                                 <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                 <?php endfor;?>
                              </select>
                           </div>
                           <div class="form-group col-auto">
                              <button type="submit" class="btn-sub" style="color: #fff;background-color: #b80509;padding: 13px 25px;font-size: 16px;border: none;margin-top: 24px;border-radius: 3px;">SEARCH</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </section>
            </div>	
            <section role="top-destination" style="padding:30px 0;">
               <div class="container pb-4">
               <div style="background:rgba(0,0,0,0.4);margin: 0 -2px;border-radius: 3px;">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <h1 style="margin-top: 30px; color:#fff;">TOP <span style="color:#ffff;">DESTINATION</span> OF STUDY</h1>
                  </div>
               </div>
               <div class="row p-4">
                  <?php if(isset($location_en)):?>
                  <?php foreach($location_en as $rows):?>
                  <div class="col-md-3">
                     <div class="top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->location_image);?>') ; background-repeat: no-repeat;">
                        <h2><a href="<?php echo base_url('course/showInstitutes/'.$rows->location_id);?>"><?php echo $rows->location_name;?></a></h2>
                        <div class="btm-border">
                        </div>
                     </div>
                  </div>
                  <?php endforeach;?>
                  <?php endif;?>
                  <?php if(isset($location_sp)):?>
                  <?php foreach($location_sp as $rows):?>
                  <div class="col-md-3">
                     <div class="top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->location_image);?>') ; background-repeat: no-repeat;">
                        <h2><a href="<?php echo base_url('course/showInstitutes/'.$rows->location_id);?>"><?php echo $rows->location_name;?></a></h2>
                        <div class="btm-border">
                        </div>
                     </div>
                  </div>
                  <?php endforeach;?>
                  <?php endif;?>
                  <?php if(isset($location_tk)):?>
                  <?php foreach($location_tk as $rows):?>
                  <div class="col-md-3">
                     <div class="top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->location_image);?>') ; background-repeat: no-repeat;">
                        <h2><a href="<?php echo base_url('course/showInstitutes/'.$rows->location_id);?>"><?php echo $rows->location_name;?></a></h2>
                        <div class="btm-border">
                        </div>
                     </div>
                  </div>
                  <?php endforeach;?>
                  <?php endif;?>
                  <?php if(isset($location_pr)):?>
                  <?php foreach($location_pr as $rows):?>
                  <div class="col-md-3">
                     <div class="top-imgs" style="background-image: url('<?php echo base_url('uploads/'.$rows->location_image);?>') ; background-repeat: no-repeat;">
                        <h2><a href="<?php echo base_url('course/showInstitutes/'.$rows->location_id);?>"><?php echo $rows->location_name;?></a></h2>
                        <div class="btm-border">
                        </div>
                     </div>
                  </div>
                  <?php endforeach;?>
                  <?php endif;?>							
               </div>
            </section>
         </section>
      </header>
      <!--HEADER AREA ENDS HERE // -->