<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <?php echo $this->lang->line('edit_category');?>	      
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
               <form role="form" action="<?php echo base_url('admin/category/editCategory');?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label for="cat_name">Category Name</label>
                                 <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Category Name" required="" value="<?php echo $categoryById->cat_name;?>">		
                                 <input type="hidden" class="form-control" name="cat_id" id="cat_id" value="<?php echo $categoryById->cat_id;?>">                                        
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label for="cat_description">Description</label>
                                 <textarea name="cat_description" id="cat_description" cols="10" rows="5" class="form-control" placeholder="Description" required=""><?php echo $categoryById->cat_description;?></textarea>
                              </div>
                           </div>
                           
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label for="parent_cat_id">Parent Category</label>
                                 <select name="parent_cat_id" id="parent_cat_id" class="form-control">
                                    <option value="">Select</option>
                                    <?php foreach($category as $rows):?>
                                    <option value="<?php echo $rows->cat_id;?>" <?php echo ($rows->cat_id == $categoryById->parent_cat_id) ? 'selected' : '';?>><?php echo $rows->cat_name;?></option>
                                    <?php endforeach;?>
                                 </select>
                              </div>
                           </div>
                          		             
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label for="cat_image">Category Image</label>
                                 <input type="file" name="cat_image" id="cat_image" class="form-control">
                              </div>
                           </div>                           
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                              <div class="form-group col-md-6">
                                 <label for="meta_keywords">Meta Keywords</label>
                                 <input class="form-control" type="text" name="meta_keywords" id="meta_keywords" placeholder="Meta Keywords" required="" value="<?php echo $categoryById->meta_keywords;?>">
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label for="meta_description">Meta Descriptions</label>
                                 <textarea name="meta_description" id="meta_description" cols="10" rows="5" class="form-control" placeholder="Meta Description" required><?php echo $categoryById->meta_description;?></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Update</button>
                     <!-- <button type="reset" class="btn btn-danger">Cancel</button> -->
                     <a href="<?php echo base_url('admin/category');?>" class="btn btn-danger">Cancel</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<?php $this->load->view('admin/common/footer'); ?>