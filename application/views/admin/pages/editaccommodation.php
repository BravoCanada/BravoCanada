<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Accommodation       
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
               <form role="form" action="<?php echo base_url('admin/Accommodation/editAccommodation');?>" method="post" enctype="multipart/form-data">
                
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
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                            <label for="country_en">Country</label>
                                             <select name="country_en" id="country_en" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($rows->country_id == $accommodation->country_en) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="location_en">Location</label>
                                             <select name="location_en" id="location_en" class="form-control">                                             
                                                <option value="">Select</option>   
                                                <?php foreach($location as $rows):?>    

                                                  <option value="<?php echo $rows->location_id;?>" <?php echo ($rows->location_id == $accommodation->location_en) ? 'selected' : '' ;?>><?php echo $rows->location_name;?></option>

                                                <?php endforeach;?>                                                                                     
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="institute_en">Institute</label>
                                             <select name="institute_en" id="institute_en" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($rows->inst_id == $accommodation->institute_en) ? 'selected' : '';?>><?php echo $rows->inst_name_en;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>                                       
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            <label for="">Other Supplement Fee</label>
                                            <input type="text" class="form-control" name="supp_fee_en" placeholder="Other Supplement Fee" value="<?php echo $accommodation->supp_fee_en;?>"> 
                                            <input type="hidden" name="acc_id" value="<?php echo $accommodation->acc_id;?>">                    
                                         </div>
                                      </div>
                                    </div>
                                    <div id="acc_div_en">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <div class="form-group col-md-12">
                                                <label for="">Accommodation Title</label>
                                                <input type="text" class="form-control" name="acc_title_en" placeholder="Fee Name" value="<?php echo $accommodation->acc_title_en;?>">                     
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Single</label>
                                                <input type="text" name="single_en" class="form-control" value="<?php echo $accommodation->single_en;?>">                                                                                            
                                             </div>   
                                             <div class="form-group col-md-6">
                                                <label for="">Status</label>
                                                <input type="text" name="single_status_en" class="form-control" value="<?php echo $accommodation->single_status_en;?>" placeholder="e.g p/week">                                                                                            
                                             </div>                                           
                                          </div> 
                                           <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Double</label>
                                                <input type="text" name="double_en" class="form-control" value="<?php echo $accommodation->double_en;?>">                                                                                            
                                             </div> 
                                             <div class="form-group col-md-6">
                                                <label for="">Status</label>
                                                <input type="text" name="double_status_en" class="form-control" value="<?php echo $accommodation->double_status_en;?>" placeholder="e.g p/week">                                                                                            
                                             </div>                                            
                                          </div>                                          
                                       </div>                                     
                                    </div>
                                    <!-- <a href="javascript:void(0);" id="acc_add_more_en" class="pull-right">+Add More Fee</a> -->
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_2">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                            <label for="country_sp">Country (spanish)</label>
                                             <select name="country_sp" id="country_sp" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($rows->country_id == $accommodation->country_sp) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                          </div>
                                       </div>
                                        <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="location_sp">Location (spanish)</label>
                                             <select name="location_sp" id="location_sp" class="form-control">                                             
                                                <option value="">Select</option> 
                                                <?php foreach($location as $rows):?>   

                                                    <option value="<?php echo $rows->location_id;?>"<?php echo ($rows->location_id == $accommodation->location_sp) ? 'selected' : '';?>><?php echo $rows->location_name;?></option>

                                                <?php endforeach;?>                                                                                        
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="institute_sp">Institute (spanish)</label>
                                             <select name="institute_sp" id="institute_sp" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($rows->inst_id == $accommodation->institute_sp) ? 'selected' : '';?>><?php echo $rows->inst_name_sp;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>                                      
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            <label for="">Other Supplement Fee (spanish)</label>
                                            <input type="text" class="form-control" name="supp_fee_sp" placeholder="Other Supplement Fee" value="<?php echo $accommodation->supp_fee_sp;?>">                     
                                         </div>
                                      </div>
                                    </div>
                                    <div id="acc_div_sp">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <div class="form-group col-md-12">
                                                <label for="">Accommodation Title (spanish)</label>
                                                <input type="text" class="form-control" name="acc_title_sp" placeholder="Fee Name" value="<?php echo $accommodation->acc_title_sp;?>">                     
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Single (spanish)</label>
                                                <input type="text" name="single_sp" class="form-control" value="<?php echo $accommodation->single_sp;?>">                                                                                          
                                             </div> 
                                             <div class="form-group col-md-6">
                                                <label for="">Stauts (spanish)</label>
                                                <input type="text" name="single_status_sp" class="form-control" value="<?php echo $accommodation->single_status_sp;?>" placeholder="e.g p/week">                                                                                          
                                             </div>                                            
                                          </div> 
                                           <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Double (spanish)</label>
                                                <input type="text" name="double_sp" class="form-control" value="<?php echo $accommodation->double_sp;?>">                                                                                            
                                             </div> 
                                             <div class="form-group col-md-6">
                                                <label for="">Status (spanish)</label>
                                                <input type="text" name="double_status_sp" class="form-control" value="<?php echo $accommodation->double_status_sp;?>" placeholder="e.g p/week">                                                                                            
                                             </div>                                             
                                          </div>                                          
                                       </div>                                     
                                    </div>
                                    <!-- <a href="javascript:void(0);" id="acc_add_more_sp" class="pull-right">+Add More Fee</a> -->
                                 </div>                               
                              </div>
                           </div>

                            <div class="tab-pane" id="tab_3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                            <label for="country_tk">Country (turkish)</label>
                                             <select name="country_tk" id="country_tk" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($rows->country_id == $accommodation->country_tk) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                          </div>
                                       </div>
                                        <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="location_tk">Location (turkish)</label>
                                             <select name="location_tk" id="location_tk" class="form-control">                                             
                                                <option value="">Select</option>      

                                                 <?php foreach($location as $rows):?>   

                                                    <option value="<?php echo $rows->location_id;?>"<?php echo ($rows->location_id == $accommodation->location_tk) ? 'selected' : '';?>><?php echo $rows->location_name;?></option>

                                                <?php endforeach;?>                                                                                           
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="institute_tk">Institute (turkish)</label>
                                             <select name="institute_tk" id="institute_tk" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($rows->inst_id == $accommodation->institute_tk) ? 'selected' : '';?>><?php echo $rows->inst_name_tk;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>                                      
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            <label for="">Other Supplement Fee (turkish)</label>
                                            <input type="text" class="form-control" name="supp_fee_tk" placeholder="Other Supplement Fee" value="<?php echo $accommodation->supp_fee_tk;?>">                     
                                         </div>
                                      </div>
                                    </div>
                                    <div id="acc_div_tk">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <div class="form-group col-md-12">
                                                <label for="">Accommodation Title (turkish)</label>
                                                <input type="text" class="form-control" name="acc_title_tk" placeholder="Fee Name" value="<?php echo $accommodation->acc_title_tk;?>">                     
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Single (turkish)</label>
                                                <input type="text" name="single_tk" class="form-control" value="<?php echo $accommodation->single_tk;?>">                                                                                           
                                             </div> 
                                             <div class="form-group col-md-6">
                                                <label for="">Status (turkish)</label>
                                                <input type="text" name="single_status_tk" class="form-control" value="<?php echo $accommodation->single_status_tk;?>" placeholder="e.g p/week">                                                                                           
                                             </div>                                             
                                          </div> 
                                           <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Double (turkish)</label>
                                                <input type="text" name="double_tk" class="form-control" value="<?php echo $accommodation->double_tk;?>">                                                                                            
                                             </div>  
                                              <div class="form-group col-md-6">
                                                <label for="">Status (turkish)</label>
                                                <input type="text" name="double_status_tk" class="form-control" value="<?php echo $accommodation->double_status_tk;?>" placeholder="e.g p/week">                                                                                            
                                             </div>                                           
                                          </div>                                          
                                       </div>                                     
                                    </div>
                                    <!-- <a href="javascript:void(0);" id="acc_add_more_tk" class="pull-right">+Add More Fee</a> -->
                                 </div>                               
                              </div>
                           </div>

                              <div class="tab-pane" id="tab_4">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                            <label for="country_pr">Country (progish)</label>
                                             <select name="country_pr" id="country_pr" class="form-control"> 
                                                <option value="">Select</option>
                                                <?php foreach($country as $rows):?>   

                                                    <option value="<?php echo $rows->country_id;?>" <?php echo ($rows->country_id == $accommodation->country_pr) ? 'selected' : '';?>><?php echo $rows->country_name;?></option>                                        
                                                     
                                                <?php endforeach;?>                                           
                                             </select>
                                          </div>
                                       </div>
                                        <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="location_pr">Location (progish)</label>
                                             <select name="location_pr" id="location_pr" class="form-control">                                             
                                                <option value="">Select</option>  

                                                 <?php foreach($location as $rows):?>   

                                                    <option value="<?php echo $rows->location_id;?>"<?php echo ($rows->location_id == $accommodation->location_pr) ? 'selected' : '';?>><?php echo $rows->location_name;?></option>

                                                <?php endforeach;?>                                                                                          
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group col-md-12">
                                              <label for="institute_pr">Institute (progish)</label>
                                             <select name="institute_pr" id="institute_pr" class="form-control">                                             
                                                <option value="">Select</option> 

                                                <?php foreach($institute as $rows):?>   

                                                    <option value="<?php echo $rows->inst_id;?>" <?php echo ($rows->inst_id == $accommodation->institute_pr) ? 'selected' : '';?>><?php echo $rows->inst_name_pr;?></option>                                        
                                                     
                                                <?php endforeach;?>                                             
                                             </select>
                                          </div>
                                       </div>                                      
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            <label for="">Other Supplement Fee (progish)</label>
                                            <input type="text" class="form-control" name="supp_fee_pr" placeholder="Other Supplement Fee" value="<?php echo $accommodation->supp_fee_pr;?>">                     
                                         </div>
                                      </div>
                                    </div>
                                    <div id="acc_div_pr">
                                       <div class="row">
                                          <div class="col-md-4">
                                             <div class="form-group col-md-12">
                                                <label for="">Accommodation Title (progish)</label>
                                                <input type="text" class="form-control" name="acc_title_pr" placeholder="Fee Name" value="<?php echo $accommodation->acc_title_pr;?>">                     
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Single (progish)</label>
                                                <input type="text" name="single_pr" class="form-control" value="<?php echo $accommodation->single_pr;?>">                                                                                            
                                             </div> 
                                              <div class="form-group col-md-6">
                                                <label for="">Status (progish)</label>
                                                <input type="text" name="single_status_pr" class="form-control" value="<?php echo $accommodation->single_status_pr;?>" placeholder="e.g p/week">                                                                                            
                                             </div>                                            
                                          </div> 
                                           <div class="col-md-4">
                                             <div class="form-group col-md-6">
                                                <label for="">Double (progish)</label>
                                                <input type="text" name="double_pr" class="form-control" value="<?php echo $accommodation->double_pr;?>">                                                                                            
                                             </div> 
                                             <div class="form-group col-md-6">
                                                <label for="">Status (progish)</label>
                                                <input type="text" name="double_status_pr" class="form-control" value="<?php echo $accommodation->double_status_pr;?>" placeholder="e.g p/week">                                                                                            
                                             </div>                                             
                                          </div>                                          
                                       </div>                                     
                                    </div>
                                    <!-- <a href="javascript:void(0);" id="acc_add_more_pr" class="pull-right">+Add More Fee</a> -->
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
                     <a href="<?php echo base_url('admin/Accommodation');?>" class="btn btn-danger">Cancel</a>                   
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