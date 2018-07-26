<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Blog	      
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
               <form role="form" action="<?php echo base_url('admin/blog/addBlog');?>" method="post" enctype="multipart/form-data">
                
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
                                          <label for="blog_title">Title</label>
                                          <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Title">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="blog_content">Description</label>
                                          <textarea name="blog_content" id="blog_content" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
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
                                          <label for="blog_title_sp">Title(spanish)</label>
                                          <input type="text" class="form-control" name="blog_title_sp" id="blog_title_sp" placeholder="Title">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="blog_content_sp">Description(spanish)</label>
                                          <textarea name="blog_content_sp" id="blog_content_sp" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
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
                                          <label for="blog_title_tk">Title(turkish)</label>
                                          <input type="text" class="form-control" name="blog_title_tk" id="blog_title_tk" placeholder="Title">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="blog_content_tk">Description(turkish)</label>
                                          <textarea name="blog_content_tk" id="blog_content_tk" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
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
                                          <label for="blog_title_pr">Title(progish)</label>
                                          <input type="text" class="form-control" name="blog_title_pr" id="blog_title_pr" placeholder="Title">                     
                                       </div>
                                    </div>
                                     <div class="row">
                                       <div class="form-group col-md-10">
                                          <label for="blog_content_pr">Description(progish)</label>
                                          <textarea name="blog_content_pr" id="blog_content_pr" cols="10" rows="5" class="form-control" placeholder="Description"></textarea>
                                       </div>
                                    </div>                       
                                 
                                 </div>                                 
                              </div>
                           </div>
                           <!-- /.tab-pane -->   

                           <div class="row">
                              <div class="form-group col-md-5">
                                 <label for="blog_image">Blog Image</label>
                                 <input type="file" name="blog_image" id="blog_image" class="form-control">
                              </div>
                           </div>                       
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