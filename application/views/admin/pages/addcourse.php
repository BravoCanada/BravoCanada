<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Course        
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Forms</a></li>
         <li class="active">General Elements</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <?php 
               if($this->session->flashdata("error_message") != ""){ 
                  echo $this->session->flashdata("error_message");
                  $this->session->set_flashdata("error_message","");
               } 
               ?> 
            <div class="box box-primary">
               <form role="form" action="<?php echo base_url('admin/course/addCourse');?>" method="post" enctype="multipart/form-data">
                
                    <div class="box-body">
                     <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                           <li class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false">English</a></li>
                           <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Spanish</a></li>
                           <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Turkish</a></li>
                           <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Progish</a></li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane active" id="tab_1">
                              <div class="row">
                                 <div class="col-md-6">
                                       <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="country_en">Country</label>
                                             <select name="country_en" id="country_en" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>"><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                           </div>  
                                        </div>     
                                         <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="location_en">Location</label>
                                             <select name="location_en[]" id="location_en" class="form-control" multiple>                                             
                                                <option value="">Select</option>                                             
                                             </select>
                                           </div>  
                                        </div> 

                                        <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="institute_en">Institute</label>
                                             <select name="institute_en" id="institute_en" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>"><?php echo $rows->inst_name_en;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                           </div>  
                                        </div>   
                                         
                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_title_en">Course Title</label>
                                             <input type="text" class="form-control" name="course_title_en" id="course_title_en" placeholder="Course Title">                     
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_tag">Course Tag</label>
                                             <select name="course_tag" class="form-control">                                             
                                              <?php foreach($course_tag as $rows):?> 

                                                <option value="<?php echo $rows->tag_id;?>"><?php echo $rows->tag_name;?></option> 

                                              <?php endforeach;?>                               
                                             </select>                    
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_description_en">Description</label>
                                             <textarea name="course_description_en" id="course_description_en" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                          </div>
                                       </div>  

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_image_en">Course Image</label>
                                             <input type="file" name="course_image_en" id="course_image_en" class="form-control">
                                          </div>
                                       </div> 

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_time_en">Course Time</label>
                                             <input type="text" class="form-control" name="course_time_en" id="course_time_en" placeholder="Course Time">                     
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_discount_en">Discount(in %)</label>
                                             <input type="number" class="form-control" name="course_discount_en" id="course_discount_en" placeholder="Discount in percentage">                     
                                          </div>
                                       </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="starting_date_en">Starting Date</label>
                                          <input type="text" class="form-control" name="starting_date_en" id="starting_date_en" placeholder="DD-MM-YYYY">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="total_lesson_en">Total Lesson</label>
                                          <input type="text" class="form-control" name="total_lesson_en" id="total_lesson_en" placeholder="Total Lesson">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                         <div class="form-group col-md-10">
                                             <label for="currency_en">Currency</label>
                                             <select name="currency_en" id="currency_en" class="form-control">                                             
                                                <option value="">Select</option>   
                                                <option value="$">$</option>
                                                <option value="CA$">CA$</option> 
                                                <option value="€">€</option> 
                                                <option value="US$">US$</option> 
                                                <option value="£">£</option>                                        
                                             </select>
                                        </div>  
                                     </div>
                                    
                                    <div id="price_div_en">
                                       <div class="row">                     
                                           <div class="form-group col-md-2">
                                             <label for="weeks_en">Weeks</label>
                                             <input type="text" class="form-control" name="weeks_en[]" placeholder="Weeks">                                                                 
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="hours_en">Hours</label>
                                              <input type="text" class="form-control" name="hours_en[]" placeholder="Hours">                                                                 
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="">Price(G)</label>
                                             <input type="text" class="form-control" name="price_en[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(LA)</label>
                                             <input type="text" class="form-control" name="price_en_la[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(TR)</label>
                                             <input type="text" class="form-control" name="price_en_tr[]" placeholder="Price">                     
                                          </div>

                                       </div>
                                    </div>                                   
                                    <a href="javascript:void(0);" id="add_another_price_en">+Add another price</a>

                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="course_intensity_en">Course Intensity</label>
                                          <input type="text" class="form-control" name="course_intensity_en" id="course_intensity_en" placeholder="Course Intensity">                     
                                       </div>
                                    </div>

                                    <div class="row">                                      
                                      <div class="form-group col-md-10">
                                          <label for="course_reg_fee_en">Course Registration Fees</label>
                                          <input type="text" class="form-control" name="course_reg_fee_en" id="course_reg_fee_en" placeholder="Registration Fess">                     
                                       </div>
                                    </div>
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_2">
                              <div class="row">
                                 <div class="col-md-6">
                                       <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="country_sp">Country(spanish)</label>
                                             <select name="country_sp" id="country_sp" class="form-control">                                             
                                                <option value="">Select</option>  

                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>"><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                           </div>  
                                        </div>     
                                         <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="location_sp">Location(spanish)</label>
                                             <select name="location_sp[]" id="location_sp" class="form-control" multiple="">                                             
                                                <option value="">Select</option>                                             
                                             </select>
                                           </div>  
                                        </div> 

                                        <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="institute_sp">Institute(spanish)</label>
                                             <select name="institute_sp" id="institute_sp" class="form-control">                                             
                                                <option value="">Select</option> 

                                                 <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>"><?php echo $rows->inst_name_sp;?></option>                                        
                                                     
                                                <?php endforeach;?>                                            
                                             </select>
                                           </div>  
                                        </div>   
                                         
                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_title_sp">Course Title(spanish)</label>
                                             <input type="text" class="form-control" name="course_title_sp" id="course_title_sp" placeholder="Course Title">                     
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_tag_sp">Course Tag(spanish)</label>
                                             <select name="course_tag_sp" id="course_tag_sp" class="form-control">                                             
                                              <?php foreach($course_tag as $rows):?> 

                                                <option value="<?php echo $rows->tag_id;?>"><?php echo $rows->tag_name_sp;?></option> 

                                              <?php endforeach;?>                               
                                             </select>                    
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_description_sp">Description(spanish)</label>
                                             <textarea name="course_description_sp" id="course_description_sp" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                          </div>
                                       </div>  

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_image_sp">Course Image</label>
                                             <input type="file" name="course_image_sp" id="course_image_sp" class="form-control">
                                          </div>
                                       </div> 

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_time_sp">Course Time(spanish)</label>
                                             <input type="text" class="form-control" name="course_time_sp" id="course_time_sp" placeholder="Course Time">                     
                                          </div>
                                       </div>
                                        <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_discount_sp">Discount(in %)</label>
                                             <input type="number" class="form-control" name="course_discount_sp" id="course_discount_sp" placeholder="Discount in percentage">                     
                                          </div>
                                       </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="starting_date_sp">Starting Date(spanish)</label>
                                          <input type="text" class="form-control" name="starting_date_sp" id="starting_date_sp" placeholder="Starting Date">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="total_lesson_sp">Total Lesson(spanish)</label>
                                          <input type="text" class="form-control" name="total_lesson_sp" id="total_lesson_sp" placeholder="Total Lesson">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                         <div class="form-group col-md-10">
                                             <label for="currency_sp">Currency</label>
                                             <select name="currency_sp" id="currency_sp" class="form-control">                                             
                                                <option value="">Select</option>   
                                                <option value="$">$</option>
                                                <option value="CA$">CA$</option> 
                                                <option value="€">€</option> 
                                                <option value="US$">US$</option> 
                                                <option value="£">£</option>                                        
                                             </select>
                                        </div>  
                                     </div>
                                    
                                    <div id="price_div_sp">
                                       <div class="row">                                     

                                           <div class="form-group col-md-2">
                                             <label for="">Weeks(spanish)</label>
                                             <input type="text" class="form-control" name="weeks_sp[]" placeholder="Weeks">                     
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="hours_sp">Hours</label>
                                             <input type="text" name="hours_sp[]" class="form-control" placeholder="Hours">                                                               
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="">Price(G)</label>
                                             <input type="text" class="form-control" name="price_sp[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(LA)</label>
                                             <input type="text" class="form-control" name="price_sp_la[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(TR)</label>
                                             <input type="text" class="form-control" name="price_sp_tr[]" placeholder="Price">                     
                                          </div>
                                       </div>
                                    </div>
                                    <a href="javascript:void(0);" id="add_another_price_sp">Add another price</a>
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="course_intensity_sp">Course Intensity(spanish)</label>
                                          <input type="text" class="form-control" name="course_intensity_sp" id="course_intensity_sp" placeholder="Course Intensity">                     
                                       </div>
                                    </div>

                                     <div class="row">                                      
                                      <div class="form-group col-md-10">
                                          <label for="course_reg_fee_sp">Course Registration Fees(spanish)</label>
                                          <input type="text" class="form-control" name="course_reg_fee_sp" id="course_reg_fee_sp" placeholder="Registration Fees">                     
                                       </div>
                                    </div>
                                    
                                 </div>                               
                              </div>
                           </div>

                             <div class="tab-pane" id="tab_3">
                              <div class="row">
                                 <div class="col-md-6">
                                       <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="country_tk">Country(turkish)</label>
                                             <select name="country_tk" id="country_tk" class="form-control">                                             
                                                <option value="">Select</option>  

                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>"><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                           </div>  
                                        </div>     
                                         <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="location_tk">Location(turkish)</label>
                                             <select name="location_tk[]" id="location_tk" class="form-control" multiple="">                                             
                                                <option value="">Select</option>                                             
                                             </select>
                                           </div>  
                                        </div> 

                                        <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="institute_tk">Institute(turkish)</label>
                                             <select name="institute_tk" id="institute_tk" class="form-control">                                             
                                                <option value="">Select</option>  

                                                 <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>"><?php echo $rows->inst_name_tk;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                           </div>  
                                        </div>   
                                         
                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_title_tk">Course Title(turkish)</label>
                                             <input type="text" class="form-control" name="course_title_tk" id="course_title_tk" placeholder="Course Title">                     
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_tag">Course Tag(turkish)</label>
                                             <select name="course_tag_tk" class="form-control">                                             
                                              <?php foreach($course_tag as $rows):?> 

                                                <option value="<?php echo $rows->tag_id;?>"><?php echo $rows->tag_name_tk;?></option> 

                                              <?php endforeach;?>                               
                                             </select>                    
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_description_tk">Description(turkish)</label>
                                             <textarea name="course_description_tk" id="course_description_tk" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                          </div>
                                       </div>  

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_image_tk">Course Image</label>
                                             <input type="file" name="course_image_tk" id="course_image_tk" class="form-control">
                                          </div>
                                       </div> 

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_time_tk">Course Time(turkish)</label>
                                             <input type="text" class="form-control" name="course_time_tk" id="course_time_tk" placeholder="Course Time">                     
                                          </div>
                                       </div>

                                        <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_discount_tk">Discount(in %)</label>
                                             <input type="number" class="form-control" name="course_discount_tk" id="course_discount_tk" placeholder="Discount in percentage">                     
                                          </div>
                                       </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="starting_date_tk">Starting Date(turkish)</label>
                                          <input type="text" class="form-control" name="starting_date_tk" id="starting_date_tk" placeholder="Starting Date">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="total_lesson_tk">Total Lesson(turkish)</label>
                                          <input type="text" class="form-control" name="total_lesson_tk" id="total_lesson_tk" placeholder="Total Lesson">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                         <div class="form-group col-md-10">
                                             <label for="currency_tk">Currency</label>
                                             <select name="currency_tk" id="currency_tk" class="form-control">                                             
                                                <option value="">Select</option>   
                                                <option value="$">$</option>
                                                <option value="CA$">CA$</option> 
                                                <option value="€">€</option> 
                                                <option value="US$">US$</option> 
                                                <option value="£">£</option>                                        
                                             </select>
                                        </div>  
                                     </div>
                                    
                                    <div id="price_div_tk">
                                       <div class="row">                                         

                                           <div class="form-group col-md-2">
                                             <label for="">Weeks(turkish)</label>
                                             <input type="text" class="form-control" name="weeks_tk[]" placeholder="Weeks">                     
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="hours_tk">Hours</label>
                                             <input type="text" name="hours_tk" class="form-control" placeholder="Hours">                                                                 
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="">Price(G)</label>
                                             <input type="text" class="form-control" name="price_tk[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(LA)</label>
                                             <input type="text" class="form-control" name="price_tk_la[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(TR)</label>
                                             <input type="text" class="form-control" name="price_tk_tr[]" placeholder="Price">                     
                                          </div>
                                       </div>
                                    </div>
                                     <a href="javascript:void(0);" id="add_another_price_tk">Add another price</a>
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="course_intensity_tk">Course Intensity(turkish)</label>
                                          <input type="text" class="form-control" name="course_intensity_tk" id="course_intensity_tk" placeholder="Course Intensity">                     
                                       </div>                                      
                                    </div> 

                                    <div class="row">                                      
                                       <div class="form-group col-md-10">
                                          <label for="course_reg_fee_tk">Course Registration Fees(turkish)</label>
                                          <input type="text" class="form-control" name="course_reg_fee_tk" id="course_reg_fee_tk" placeholder="Registration Fees">                     
                                       </div>
                                    </div>                                  
                                 </div>                               
                              </div>
                           </div>

                             <div class="tab-pane" id="tab_4">
                              <div class="row">
                                 <div class="col-md-6">
                                       <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="country_pr">Country(progish)</label>
                                             <select name="country_pr" id="country_pr" class="form-control">                                             
                                                <option value="">Select</option>  

                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>"><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                           </div>  
                                        </div>     
                                         <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="location_pr">Location(progish)</label>
                                             <select name="location_pr[]" id="location_pr" class="form-control" multiple>                                             
                                                <option value="">Select</option>                                             
                                             </select>
                                           </div>  
                                        </div> 

                                        <div class="row">
                                            <div class="form-group col-md-10">
                                             <label for="institute_pr">Institute(progish)</label>
                                             <select name="institute_pr" id="institute_pr" class="form-control">                                             
                                                <option value="">Select</option>  

                                                 <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>"><?php echo $rows->inst_name_pr;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                           </div>  
                                        </div>   
                                         
                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_title_pr">Course Title(progish)</label>
                                             <input type="text" class="form-control" name="course_title_pr" id="course_title_pr" placeholder="Course Title">                     
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_tag_pr">Course Tag(progish)</label>
                                             <select name="course_tag_pr" id="course_tag_pr" class="form-control">                                             
                                              <?php foreach($course_tag as $rows):?> 

                                                <option value="<?php echo $rows->tag_id;?>"><?php echo $rows->tag_name_pr;?></option> 

                                              <?php endforeach;?>                               
                                             </select>                    
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_description_pr">Description(progish)</label>
                                             <textarea name="course_description_pr" id="course_description_pr" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                          </div>
                                       </div>  

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_image_pr">Course Image</label>
                                             <input type="file" name="course_image_pr" id="course_image_pr" class="form-control">
                                          </div>
                                       </div> 

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_time_pr">Course Time(progish)</label>
                                             <input type="text" class="form-control" name="course_time_pr" id="course_time_pr" placeholder="Course Time">                     
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="form-group col-md-10">
                                             <label for="course_discount_pr">Discount(in %)</label>
                                             <input type="number" class="form-control" name="course_discount_pr" id="course_discount_pr" placeholder="Discount in percentage">                     
                                          </div>
                                       </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="starting_date_pr">Starting Date(progish)</label>
                                          <input type="text" class="form-control" name="starting_date_pr" id="starting_date_pr" placeholder="Starting Date">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="total_lesson_pr">Total Lesson(progish)</label>
                                          <input type="text" class="form-control" name="total_lesson_pr" id="total_lesson_pr" placeholder="Total Lesson">                     
                                       </div>
                                    </div>

                                    <div class="row">
                                         <div class="form-group col-md-10">
                                             <label for="currency_pr">Currency</label>
                                             <select name="currency_pr" id="currency_pr" class="form-control">                                             
                                                <option value="">Select</option>   
                                                <option value="$">$</option>
                                                <option value="CA$">CA$</option> 
                                                <option value="€">€</option> 
                                                <option value="US$">US$</option> 
                                                <option value="£">£</option>                                        
                                             </select>
                                        </div>  
                                     </div>
                                    
                                    <div id="price_div_pr">
                                       <div class="row">                                         

                                           <div class="form-group col-md-2">
                                             <label for="">Weeks(progish)</label>
                                             <input type="text" class="form-control" name="weeks_pr[]" placeholder="Weeks">                     
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="hours_pr">Hours</label>
                                            <input type="text" name="hours_pr[]" class="form-control" placeholder="Hours">                                                                
                                          </div>

                                          <div class="form-group col-md-2">
                                             <label for="">Price(G)</label>
                                             <input type="text" class="form-control" name="price_pr[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(LA)</label>
                                             <input type="text" class="form-control" name="price_pr_la[]" placeholder="Price">                     
                                          </div>

                                           <div class="form-group col-md-2">
                                             <label for="">Price(TR)</label>
                                             <input type="text" class="form-control" name="price_pr_tr[]" placeholder="Price">                     
                                          </div>
                                       </div>
                                    </div>
                                    <a href="javascript:void(0);" id="add_another_price_pr">Add another price</a>
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="course_intensity_pr">Course Intensity(progish)</label>
                                          <input type="text" class="form-control" name="course_intensity_pr" id="course_intensity_pr" placeholder="Course Intensity">                     
                                       </div>                                        
                                    </div>

                                    <div class="row">                                      
                                      <div class="form-group col-md-10">
                                          <label for="course_reg_fee_pr">Course Registration Fees(progish)</label>
                                          <input type="text" class="form-control" name="course_reg_fee_pr" id="course_reg_fee_pr" placeholder="Registration Fees">                     
                                       </div>
                                    </div>
                                    
                                 </div>                               
                              </div>
                           </div>
                           <!-- /.tab-pane -->                         
                        </div>
                        <!-- /.tab-content -->
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Save</button>
                     <button type="reset" class="btn btn-danger">Reset</button>                    
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<?php $this->load->view('admin/common/footer'); ?>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/customadmin.js"></script>