<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Additional Fee        
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
               <form role="form" action="<?php echo base_url('admin/Additionalfee/editAdditionalFees');?>" method="post" enctype="multipart/form-data">
                
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
                                            <label for="country_en">Country</label>
                                             <select name="country_en" id="country_en" class="form-control"> 
                                                <option value="">Select</option>

                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($additionalfee->country_en == $rows->country_id) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>    

                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_en">Institute</label>
                                             <select name="institute_en" id="institute_en" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($additionalfee->institute_en == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_en;?></option>                                        
                                                     
                                                <?php endforeach;?> 

                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="fee_div_en">                                                                 
                                       
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="">Fee Name</label>
                                                <input type="text" class="form-control" name="fee_name_en" placeholder="Fee Name" value="<?php echo $additionalfee->fee_name_en;?>">   
                                                <input type="hidden" value="<?php echo $additionalfee->id;?>" name="additional_fee_id">                  
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="">Price</label>
                                                <textarea name="price_en" cols="1" rows="1" class="form-control"><?php echo $additionalfee->price_en;?></textarea>
                                             </div>
                                          </div>
                                       </div>                                         
                                    
                                    </div>

                                    <!-- <a href="javascript:void(0);" id="fee_add_more_en" class="pull-right">+Add More Fee</a> -->
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_2">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                            <label for="country_sp">Country (spanish)</label>
                                             <select name="country_sp" id="country_sp" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($additionalfee->country_sp == $rows->country_id) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_sp">Institute (spanish)</label>
                                             <select name="institute_sp" id="institute_sp" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($additionalfee->institute_sp == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_sp;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="fee_div_sp">           
                                       
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="fee_name_sp">Fee Name (spanish)</label>
                                                <input type="text" class="form-control" name="fee_name_sp" placeholder="Fee Name" value="<?php echo $additionalfee->fee_name_sp;?>">                     
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="price_sp">Price (spanish)</label>
                                                <textarea name="price_sp" cols="1" rows="1" class="form-control"><?php echo $additionalfee->price_sp;?></textarea>
                                             </div>
                                          </div>
                                       </div>  
                                      
                                    </div>

                                   <!--  <a href="javascript:void(0);" id="fee_add_more_sp" class="pull-right">+Add More Fee</a> -->
                                 </div>                               
                              </div>
                           </div>

                           <div class="tab-pane" id="tab_3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                            <label for="country_tk">Country (turkish)</label>
                                             <select name="country_tk" id="country_tk" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($additionalfee->country_sp == $rows->country_id) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_tk">Institute (turkish)</label>
                                             <select name="institute_tk" id="institute_tk" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($additionalfee->institute_sp == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_sp;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="fee_div_sp">           
                                       
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="fee_name_tk">Fee Name (turkish)</label>
                                                <input type="text" class="form-control" name="fee_name_tk" placeholder="Fee Name" value="<?php echo $additionalfee->fee_name_tk;?>">                     
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="price_tk">Price (turkish)</label>
                                                <textarea name="price_tk" cols="1" rows="1" class="form-control"><?php echo $additionalfee->price_tk;?></textarea>
                                             </div>
                                          </div>
                                       </div>  
                                      
                                    </div>

                                   <!--  <a href="javascript:void(0);" id="fee_add_more_sp" class="pull-right">+Add More Fee</a> -->
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_4">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                            <label for="country_pr">Country (progish)</label>
                                             <select name="country_pr" id="country_pr" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($additionalfee->country_pr == $rows->country_id) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group col-md-12">
                                              <label for="institute_pr">Institute (progish)</label>
                                             <select name="institute_pr" id="institute_pr" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($additionalfee->institute_pr == $rows->inst_id) ? 'selected' : '';?>><?php echo $rows->inst_name_pr;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="fee_div_sp">           
                                       
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="fee_name_pr">Fee Name (progish)</label>
                                                <input type="text" class="form-control" name="fee_name_pr" placeholder="Fee Name" value="<?php echo $additionalfee->fee_name_pr;?>">                     
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group col-md-12">
                                                <label for="price_pr">Price (progish)</label>
                                                <textarea name="price_pr" cols="1" rows="1" class="form-control"><?php echo $additionalfee->price_pr;?></textarea>
                                             </div>
                                          </div>
                                       </div>  
                                      
                                    </div>

                                   <!--  <a href="javascript:void(0);" id="fee_add_more_sp" class="pull-right">+Add More Fee</a> -->
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
                     <a href="<?php echo base_url('admin/Additionalfee');?>" class="btn btn-danger">Cancel</a>                   
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