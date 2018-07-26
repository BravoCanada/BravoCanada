<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Institute         
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
               <form role="form" action="<?php echo base_url('admin/institute/editInstitute');?>" method="post" enctype="multipart/form-data">
                
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
                                       <div class="form-group col-md-5">
                                          <label for="inst_name_en">Institute Name</label>
                                          <input type="text" class="form-control" name="inst_name_en" id="inst_name_en" placeholder="Institute Name" value="<?php echo ($instituteById->inst_name_en) ? $instituteById->inst_name_en : ''; ?>">   
                                          <input type="hidden" value="<?php echo ($instituteById->inst_id) ? $instituteById->inst_id : '';?>" name="inst_id">                  
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_en">Institute Logo</label>
                                          <input type="file" name="inst_logo_en" id="inst_logo_en" class="form-control">
                                          <input type="hidden" name="hidden_inst_logo_en" value="<?php echo ($instituteById->inst_logo_en) ? $instituteById->inst_logo_en : ''; ?>">
                                       </div>                                   
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_en">Description</label>
                                          <textarea name="inst_description_en" id="inst_description_en" cols="4" rows="2" class="form-control" placeholder="Description"><?php echo ($instituteById->inst_description_en) ? $instituteById->inst_description_en : ''; ?></textarea>
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_course_image_en">Institue Course Image</label>
                                          <input type="file" name="inst_course_image_en" id="inst_course_image_en" class="form-control">
                                          <input type="hidden" name="hidden_inst_course_image_en" value="<?php echo ($instituteById->inst_course_image_en) ? $instituteById->inst_course_image_en : ''; ?>">
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility[]" <?php echo ($inst_facility) ? ((in_array('FREE WIFI',$inst_facility)) ? 'checked': '') : '';?>>FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility[]" <?php echo ($inst_facility) ? ((in_array('INTERACTIVE WHITEBOARD',$inst_facility)) ? 'checked' : '') : '';?>>INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility[]" <?php echo ($inst_facility) ? ((in_array('LIBRARY FACILITIES',$inst_facility)) ? 'checked' : '') : '';?>>LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility[]" <?php echo ($inst_facility) ? ((in_array('STUDENT LOUNGE',$inst_facility)) ? 'checked' : '') : '';?>>STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility[]" <?php echo ($inst_facility) ? ((in_array('SELF-STUDY AREA',$inst_facility)) ? 'checked' : '') : '';?>>SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_en">Overview</label>
                                          <textarea name="inst_overview_en" id="inst_overview_en" class="form-control"><?php echo ($instituteById->inst_overview_en) ? $instituteById->inst_overview_en : ''; ?></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_en">Institue Accomodation</label>
                                          <textarea name="inst_acc_en" id="inst_acc_en" class="form-control" ><?php echo ($instituteById->inst_acc_en) ? $instituteById->inst_acc_en : ''; ?></textarea>
                                       </div>
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_en">Local Address Info</label>
                                          <textarea name="inst_local_info_en" id="inst_local_info_en" class="form-control"><?php echo ($instituteById->inst_local_info_en) ? $instituteById->inst_local_info_en : ''; ?></textarea>
                                       </div>
                                    </div> 
                                    
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_2">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_name_sp">Institute Name (spanish)</label>
                                          <input type="text" class="form-control" name="inst_name_sp" id="inst_name_sp" placeholder="Institute Name" value="<?php echo ($instituteById->inst_name_sp) ? $instituteById->inst_name_sp : ''; ?>">                     
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_sp">Institute Logo</label>
                                          <input type="file" name="inst_logo_sp" id="inst_logo_sp" class="form-control">
                                          <input type="hidden" name="hidden_inst_logo_sp" value="<?php echo ($instituteById->inst_logo_sp) ? $instituteById->inst_logo_sp : ''; ?>">
                                       </div>                                     
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_sp">Description (spanish)</label>
                                          <textarea name="inst_description_sp" id="inst_description_sp" cols="4" rows="2" class="form-control" placeholder="Description"><?php echo ($instituteById->inst_description_sp) ? $instituteById->inst_description_sp : ''; ?></textarea>
                                       </div>

                                       <div class="form-group col-md-5">
                                          <label for="inst_course_image_sp">Institue Course Image (spanish)</label>
                                          <input type="file" name="inst_course_image_sp" id="inst_course_image_sp" class="form-control">
                                          <input type="hidden" name="hidden_inst_course_image_sp" value="<?php echo ($instituteById->inst_course_image_sp) ? $instituteById->inst_course_image_sp : ''; ?>">
                                       </div>
                                    </div> 

                                     <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility (spanish)</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility_sp[]" <?php echo ($inst_facility) ? ((in_array('FREE WIFI',$inst_facility)) ? 'checked': '') : '';?>>FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility_sp[]" <?php echo ($inst_facility) ? ((in_array('INTERACTIVE WHITEBOARD',$inst_facility)) ? 'checked': '') : '';?>>INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility_sp[]"<?php echo ($inst_facility) ? ((in_array('LIBRARY FACILITIES',$inst_facility)) ? 'checked': '') : '';?>>LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility_sp[]" <?php echo ($inst_facility) ? ((in_array('STUDENT LOUNGE',$inst_facility)) ? 'checked': '') : '';?>>STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility_sp[]" <?php echo ($inst_facility) ? ((in_array('SELF-STUDY AREA',$inst_facility)) ? 'checked': '') : '';?>>SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div> 

                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_sp">Overview(spanish)</label>
                                          <textarea name="inst_overview_sp" id="inst_overview_sp" class="form-control"><?php echo ($instituteById->inst_overview_en) ? $instituteById->inst_overview_en : ''; ?></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_sp">Institue Accomodation(spanish)</label>
                                          <textarea name="inst_acc_sp" id="inst_acc_sp" class="form-control" ><?php echo ($instituteById->inst_acc_en) ? $instituteById->inst_acc_en : ''; ?></textarea>
                                       </div>
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_sp">Local Address Info(spanish)</label>
                                          <textarea name="inst_local_info_sp" id="inst_local_info_sp" class="form-control"><?php echo ($instituteById->inst_local_info_en) ? $instituteById->inst_local_info_en : ''; ?></textarea>
                                       </div>
                                    </div>                                   
                                    
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_name_tk">Institute Name (turkish)</label>
                                          <input type="text" class="form-control" name="inst_name_tk" id="inst_name_tk" placeholder="Institute Name" value="<?php echo ($instituteById->inst_name_tk) ? $instituteById->inst_name_tk : ''; ?>">                     
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_tk">Institute Logo</label>
                                          <input type="file" name="inst_logo_tk" id="inst_logo_tk" class="form-control">
                                          <input type="hidden" name="hidden_inst_logo_tk" value="<?php echo ($instituteById->inst_logo_tk) ? $instituteById->inst_logo_tk : ''; ?>">
                                       </div>                                   
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_tk">Description (turkish)</label>
                                          <textarea name="inst_description_tk" id="inst_description_tk" cols="4" rows="2" class="form-control" placeholder="Description"><?php echo ($instituteById->inst_description_tk) ? $instituteById->inst_description_tk : ''; ?></textarea>
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_course_image_tk">Institue Course Image (turkish)</label>
                                          <input type="file" name="inst_course_image_tk" id="inst_course_image_tk" class="form-control">
                                          <input type="hidden" name="hidden_inst_course_image_tk" value="<?php echo ($instituteById->inst_course_image_tk) ? $instituteById->inst_course_image_tk : ''; ?>">
                                       </div>
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility (turkish)</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility_tk[]" <?php echo ($inst_facility) ? ((in_array('FREE WIFI',$inst_facility)) ? 'checked': '') : '';?>>FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility_tk[]" <?php echo ($inst_facility) ? ((in_array('INTERACTIVE WHITEBOARD',$inst_facility)) ? 'checked': '') : '';?>>INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility_tk[]" <?php echo ($inst_facility) ? ((in_array('LIBRARY FACILITIES',$inst_facility)) ? 'checked': '') : '';?>>LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility_tk[]" <?php echo ($inst_facility) ? ((in_array('STUDENT LOUNGE',$inst_facility)) ? 'checked': '') : '';?>>STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility_tk[]" <?php echo ($inst_facility) ? ((in_array('SELF-STUDY AREA',$inst_facility)) ? 'checked': '') : '';?>>SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_tk">Overview(turkish)</label>
                                          <textarea name="inst_overview_tk" id="inst_overview_tk" class="form-control"><?php echo ($instituteById->inst_overview_en) ? $instituteById->inst_overview_en : ''; ?></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_tk">Institue Accomodation(turkish)</label>
                                          <textarea name="inst_acc_tk" id="inst_acc_tk" class="form-control" ><?php echo ($instituteById->inst_acc_en) ? $instituteById->inst_acc_en : ''; ?></textarea>
                                       </div>
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_tk">Local Address Info(turkish)</label>
                                          <textarea name="inst_local_info_tk" id="inst_local_info_tk" class="form-control"><?php echo ($instituteById->inst_local_info_en) ? $instituteById->inst_local_info_en : ''; ?></textarea>
                                       </div>
                                    </div>                                    
                                    
                                 </div>                                 
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_4">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_name_pr">Institute Name (progish)</label>
                                          <input type="text" class="form-control" name="inst_name_pr" id="inst_name_pr" placeholder="Institute Name" value="<?php echo ($instituteById->inst_name_pr) ? $instituteById->inst_name_pr : ''; ?>">                     
                                       </div>                                       
                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_pr">Institute Logo</label>
                                          <input type="file" name="inst_logo_pr" id="inst_logo_pr" class="form-control">
                                          <input type="hidden" name="hidden_inst_logo_pr" value="<?php echo ($instituteById->inst_logo_pr) ? $instituteById->inst_logo_pr : ''; ?>">
                                       </div>                                   
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_pr">Description (progish)</label>
                                          <textarea name="inst_description_pr" id="inst_description_pr" cols="4" rows="2" class="form-control" placeholder="Description"><?php echo ($instituteById->inst_description_pr) ? $instituteById->inst_description_pr : ''; ?></textarea>
                                       </div>

                                       <div class="form-group col-md-5">
                                          <label for="inst_course_image_tk">Institue Course Image (progish)</label>
                                          <input type="file" name="inst_course_image_pr" id="inst_course_image_pr" class="form-control">
                                          <input type="hidden" name="hidden_inst_course_image_pr" value="<?php echo ($instituteById->inst_course_image_pr) ? $instituteById->inst_course_image_pr : ''; ?>">
                                       </div>
                                    </div> 

                                     <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility (progish)</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility_pr[]" <?php echo ($inst_facility) ? ((in_array('FREE WIFI',$inst_facility)) ? 'checked': '') : '';?>>FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility_pr[]" <?php echo ($inst_facility) ? ((in_array('INTERACTIVE WHITEBOARD',$inst_facility)) ? 'checked': '') : '';?>>INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility_pr[]" <?php echo ($inst_facility) ? ((in_array('LIBRARY FACILITIES',$inst_facility)) ? 'checked': '') : '';?>>LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility_pr[]" <?php echo ($inst_facility) ? ((in_array('STUDENT LOUNGE',$inst_facility)) ? 'checked': '') : '';?>>STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility_pr[]" <?php echo ($inst_facility) ? ((in_array('SELF-STUDY AREA',$inst_facility)) ? 'checked': '') : '';?>>SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_pr">Overview(progish)</label>
                                          <textarea name="inst_overview_pr" id="inst_overview_pr" class="form-control"><?php echo ($instituteById->inst_overview_en) ? $instituteById->inst_overview_en : ''; ?></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_pr">Institue Accomodation(turkish)</label>
                                          <textarea name="inst_acc_pr" id="inst_acc_pr" class="form-control" ><?php echo ($instituteById->inst_acc_en) ? $instituteById->inst_acc_en : ''; ?></textarea>
                                       </div>
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_pr">Local Address Info(turkish)</label>
                                          <textarea name="inst_local_info_pr" id="inst_local_info_pr" class="form-control"><?php echo ($instituteById->inst_local_info_en) ? $instituteById->inst_local_info_en : ''; ?></textarea>
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
                     <a href="<?php echo base_url('admin/institute');?>" class="btn btn-danger">Cancel</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<?php $this->load->view('admin/common/footer'); ?>

<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

<script>
   CKEDITOR.replace('inst_overview_en');
   CKEDITOR.replace('inst_acc_en');
   CKEDITOR.replace('inst_overview_sp');
   CKEDITOR.replace('inst_acc_sp');
   CKEDITOR.replace('inst_overview_tk');
   CKEDITOR.replace('inst_acc_tk');
   CKEDITOR.replace('inst_overview_pr');
   CKEDITOR.replace('inst_acc_pr');
   // CKEDITOR.replace('inst_local_info_en');
   // CKEDITOR.replace('inst_local_info_sp');
   // CKEDITOR.replace('inst_local_info_tk');
   // CKEDITOR.replace('inst_local_info_pr');
   
   CKEDITOR.replace('inst_description_en');
   CKEDITOR.replace('inst_description_sp');
   CKEDITOR.replace('inst_description_tk');
   CKEDITOR.replace('inst_description_pr');
</script>