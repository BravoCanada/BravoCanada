<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Institute	      
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
               <form role="form" action="<?php echo base_url('admin/institute/addInstitute');?>" method="post" enctype="multipart/form-data">
                
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
                                          <input type="text" class="form-control" name="inst_name_en" id="inst_name_en" placeholder="Institute Name">                     
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_en">Institute Logo</label>
                                          <input type="file" name="inst_logo_en" id="inst_logo_en" class="form-control">
                                       </div>                                   
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_en">Description</label>
                                          <textarea name="inst_description_en" id="inst_description_en" cols="4" rows="2" class="form-control" placeholder="Description"></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_course_image_en">Institue Course Image</label>
                                          <input type="file" name="inst_course_image_en" id="inst_course_image_en" class="form-control">
                                       </div>
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility[]">FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility[]">INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility[]">LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility[]">STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility[]">SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div>

                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_en">Overview</label>
                                          <textarea name="inst_overview_en" id="inst_overview_en" class="form-control"></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_en">Institue Accomodation</label>
                                          <textarea name="inst_acc_en" id="inst_acc_en" class="form-control"></textarea>
                                       </div>
                                    </div>                                     
                                  
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_en">Local Info</label>
                                          <textarea name="inst_local_info_en" id="inst_local_info_en" class="form-control"></textarea>
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
                                          <input type="text" class="form-control" name="inst_name_sp" id="inst_name_sp" placeholder="Institute Name">                     
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_sp">Institute Logo</label>
                                          <input type="file" name="inst_logo_sp" id="inst_logo_sp" class="form-control">
                                       </div>                                   
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_sp">Description (spanish)</label>
                                          <textarea name="inst_description_sp" id="inst_description_sp" cols="4" rows="2" class="form-control" placeholder="Description"></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_course_image_sp">Institue Course Image</label>
                                          <input type="file" name="inst_course_image_sp" id="inst_course_image_sp" class="form-control">
                                       </div>
                                    </div> 

                                     <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility (spanish)</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility_sp[]">FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility_sp[]">INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility_sp[]">LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility_sp[]">STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility_sp[]">SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_sp">Overview (spanish)</label>
                                          <textarea name="inst_overview_sp" id="inst_overview_sp" class="form-control"></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_sp">Institue Accomodation (spanish)</label>
                                          <textarea name="inst_acc_sp" id="inst_acc_sp" class="form-control"></textarea>
                                       </div>
                                    </div>

                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_sp">Local Info (spanish)</label>
                                          <textarea name="inst_local_info_sp" id="inst_local_info_sp" class="form-control"></textarea>
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
                                          <input type="text" class="form-control" name="inst_name_tk" id="inst_name_tk" placeholder="Institute Name">                     
                                       </div>

                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_tk">Institute Logo</label>
                                          <input type="file" name="inst_logo_tk" id="inst_logo_tk" class="form-control">
                                       </div>
                                   
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_tk">Description (turkish)</label>
                                          <textarea name="inst_description_tk" id="inst_description_tk" cols="4" rows="2" class="form-control" placeholder="Description"></textarea>
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_course_image_tk">Institue Course Image</label>
                                          <input type="file" name="inst_course_image_tk" id="inst_course_image_tk" class="form-control">
                                       </div>
                                    </div>  

                                     <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility (turkish)</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility_tk[]">FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility_tk[]">INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility_tk[]">LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility_tk[]">STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility_tk[]">SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div>

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_tk">Overview (turkish)</label>
                                          <textarea name="inst_overview_tk" id="inst_overview_tk" class="form-control"></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_tk">Institue Accomodation (turkish)</label>
                                          <textarea name="inst_acc_tk" id="inst_acc_tk" class="form-control"></textarea>
                                       </div>
                                    </div>

                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_tk">Local Info (turkish)</label>
                                          <textarea name="inst_local_info_tk" id="inst_local_info_tk" class="form-control"></textarea>
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
                                          <input type="text" class="form-control" name="inst_name_pr" id="inst_name_pr" placeholder="Institute Name">                     
                                       </div>
                                       <div class="form-group col-md-5">
                                          <label for="inst_logo_pr">Institute Logo</label>
                                          <input type="file" name="inst_logo_pr" id="inst_logo_pr" class="form-control">
                                       </div>                                    
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_description_pr">Description (progish)</label>
                                          <textarea name="inst_description_pr" id="inst_description_pr" cols="4" rows="2" class="form-control" placeholder="Description"></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_course_image_pr">Institue Course Image</label>
                                          <input type="file" name="inst_course_image_pr" id="inst_course_image_pr" class="form-control">
                                       </div>
                                    </div> 

                                     <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="">Institute Facility (progish)</label><br>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" value="FREE WIFI" name="inst_facility_pr[]">FREE WIFI
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="INTERACTIVE WHITEBOARD" name="inst_facility_pr[]">INTERACTIVE WHITEBOARD
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="LIBRARY FACILITIES" name="inst_facility_pr[]">LIBRARY FACILITIES
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="STUDENT LOUNGE" name="inst_facility_pr[]">STUDENT LOUNGE
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="checkbox" value="SELF-STUDY AREA" name="inst_facility_pr[]">SELF-STUDY AREA
                                          </label>
                                       </div>                                        
                                    </div> 

                                    <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_overview_pr">Overview (progish)</label>
                                          <textarea name="inst_overview_pr" id="inst_overview_pr" class="form-control"></textarea>
                                       </div>

                                        <div class="form-group col-md-5">
                                          <label for="inst_acc_pr">Institue Accomodation (progish)</label>
                                          <textarea name="inst_acc_pr" id="inst_acc_pr" class="form-control"></textarea>
                                       </div>
                                    </div> 

                                     <div class="row">
                                       <div class="form-group col-md-5">
                                          <label for="inst_local_info_pr">Local Info (progish)</label>
                                          <textarea name="inst_local_info_pr" id="inst_local_info_pr" class="form-control"></textarea>
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
                     <!-- <a href="<?php echo base_url('admin/user');?>" class="btn btn-danger">Cancel</a>-->
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
   CKEDITOR.replace('inst_description_en');
   CKEDITOR.replace('inst_description_en');
   CKEDITOR.replace('inst_description_en');
   CKEDITOR.replace('inst_description_en');
</script>