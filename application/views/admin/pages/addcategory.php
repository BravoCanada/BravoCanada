<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Category	      
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
               <form role="form" action="<?php echo base_url('admin/category/addCategory');?>" method="post" enctype="multipart/form-data">
                
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
                                          <label for="inst_name_en">Institute Name</label>
                                          <input type="text" class="form-control" name="inst_name_en" id="inst_name_en" placeholder="Institute Name">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_description_en">Description</label>
                                          <textarea name="inst_description_en" id="inst_description_en" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                       </div>
                                    </div>
                                      
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_logo_en">Institute Logo</label>
                                          <input type="file" name="inst_logo" id="inst_logo" class="form-control">
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
                                          <label for="inst_name_sp">Institute Name (spanish)</label>
                                          <input type="text" class="form-control" name="inst_name_sp" id="inst_name_sp" placeholder="Institute Name">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_description_sp">Description (spanish)</label>
                                          <textarea name="inst_description_sp" id="inst_description_sp" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                       </div>
                                    </div>                                     
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_logo_sp">Institute Logo</label>
                                          <input type="file" name="inst_logo_sp" id="inst_logo_sp" class="form-control">
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
                                          <label for="inst_name_tk">Institute Name (turkish)</label>
                                          <input type="text" class="form-control" name="inst_name_tk" id="inst_name_tk" placeholder="Institute Name">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_description_tk">Description (turkish)</label>
                                          <textarea name="inst_description_tk" id="inst_description_tk" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                       </div>
                                    </div>                                    
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_logo_tk">Institute Logo</label>
                                          <input type="file" name="inst_logo_tk" id="inst_logo_tk" class="form-control">
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
                                          <label for="inst_name_pr">Institute Name (progish)</label>
                                          <input type="text" class="form-control" name="inst_name_pr" id="inst_name_pr" placeholder="Institute Name">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_description_pr">Description (progish)</label>
                                          <textarea name="inst_description_pr" id="inst_description_pr" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                       </div>
                                    </div>                                    
                                    <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="inst_logo_pr">Institute Logo</label>
                                          <input type="file" name="inst_logo_pr" id="inst_logo_pr" class="form-control">
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