<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Course Image        
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
               <form role="form" action="<?php echo base_url('admin/courseimage/editCourseImage');?>" method="post" enctype="multipart/form-data">
                
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
                                 <div class="col-md-12">
                                    <div class="row">                                       
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_en">Institute</label>
                                              <input type="hidden" name="hidden_course_id" value="<?php echo isset($course_image) ? $course_image->id : '';?>">
                                             <select name="institute_en" id="institute_en" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($course_image->inst_id == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_en;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div> 
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="">Location</label>
                                             <select name="location_en" id="" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($location as $rows):?>   

                                                    <option value="<?php echo $rows->location_id;?>" <?php echo ($course_image->location_id == $rows->location_id) ? 'selected' : '';?>><?php echo $rows->location_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>                                           
                                     </div>

                                      <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Course Image</label>
                                             <input type="file" name="course_image" class="form-control">
                                             <input type="hidden" name="hidden_course_image" value="<?php echo isset($course_image) ? $course_image->course_image : '';?>">
                                          </div>
                                       </div>                                           
                                     </div>

                                     <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Location iframe</label>
                                             <textarea name="location_iframe" id="" cols="4" rows="2" class="form-control"><?php echo $course_image->location_iframe;?></textarea>
                                          </div>
                                       </div>                                           
                                     </div>

                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_2">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">                                      
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_sp">Institute (spanish)</label>
                                             <select name="institute_sp" id="institute_sp" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($course_image->inst_id == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_sp;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="">Location(spanish)</label>
                                             <select name="location_sp" id="" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($location as $rows):?>   

                                                    <option value="<?php echo $rows->location_id;?>" <?php echo ($course_image->location_id == $rows->location_id) ? 'selected' : '';?>><?php echo $rows->location_name_sp;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                    </div> 
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Course Image</label>
                                             <input type="file" name="course_image_sp" class="form-control">
                                          </div>
                                       </div>                                           
                                     </div>

                                     <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Location iframe</label>
                                             <textarea name="location_iframe_sp" id="" cols="4" rows="2" class="form-control"><?php echo $course_image->location_iframe;?></textarea>
                                          </div>
                                       </div>                                           
                                     </div>                                   
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">                                      
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_tk">Institute (turkish)</label>
                                             <select name="institute_tk" id="institute_tk" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($course_image->inst_id == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_tk;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                       </div>
                                       <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="">Location(turkish)</label>
                                             <select name="location_tk" id="" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($location as $rows):?>   

                                                    <option value="<?php echo $rows->location_id;?>" <?php echo ($course_image->location_id == $rows->location_id) ? 'selected' : '';?>><?php echo $rows->location_name_tk;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Course Image</label>
                                             <input type="file" name="course_image_tk" class="form-control">
                                          </div>
                                       </div>                                           
                                     </div>

                                     <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Location iframe</label>
                                             <textarea name="location_iframe_tk" id="" cols="4" rows="2" class="form-control"><?php echo $course_image->location_iframe;?></textarea>
                                          </div>
                                       </div>                                           
                                     </div>                            
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_4">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">                                      
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_pr">Institute (progish)</label>
                                             <select name="institute_pr" id="institute_pr" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($course_image->inst_id == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_pr;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                       </div>
                                       <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="">Location(progish)</label>
                                             <select name="location_pr" id="" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($location as $rows):?>   

                                                    <option value="<?php echo $rows->location_id;?>" <?php echo ($course_image->location_id == $rows->location_id) ? 'selected' : '';?>><?php echo $rows->location_name_pr;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                    </div> 
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Course Image</label>
                                             <input type="file" name="course_image_pr" class="form-control">
                                          </div>
                                       </div>                                           
                                     </div>

                                     <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                             <label for="">Location iframe</label>
                                             <textarea name="location_iframe_pr" id="" cols="4" rows="2" class="form-control"><?php echo $course_image->location_iframe;?></textarea>
                                          </div>
                                       </div>                                           
                                     </div>                           
                                 </div>                               
                              </div>
                           </div>
                           <!-- /.tab-pane -->                         
                        </div>
                        <!-- /.tab-content -->                     
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?php echo base_url('admin/courseimage');?>" class="btn btn-danger">Cancel</a>                    
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