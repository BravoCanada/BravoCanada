<?php $this->load->view('admin/common/header'); ?>
<?php $this->load->view('admin/common/sidebar'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Course List      
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Tables</a></li>
         <li class="active">Data tables</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <?php 
         if($this->session->flashdata("error_message") != ""){ 
           echo $this->session->flashdata("error_message");
           $this->session->set_flashdata("error_message","");
         } 
         ?>  
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-body">
                  <table id="courseTable" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>Course Title</th>
                           <th>Description</th>                           
                           <th>Country</th>
                           <th>Location</th>
                           <th>Institute</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($course as $rows):?>
                        <tr>
                           <td><?php echo $rows->course_title_en;?></td>
                           <td><?php echo $rows->course_description_en;?></td>                            
                           <td>
                             
                             <?php

                                $this->db->select('*');
                                $this->db->from('country');
                                $this->db->where('country_id',$rows->country_en);
                                $query = $this->db->get()->row();

                                echo $query->country_name;
                             ?>
                           </td>
                            <td>
                             
                             <?php

                                $this->db->select('*');
                                $this->db->from('location');
                                $this->db->where('location_id',$rows->location_en);
                                $query = $this->db->get()->row();

                                echo $query->location_name;
                             ?>
                           </td>    

                            <td>
                             
                             <?php

                                $this->db->select('*');
                                $this->db->from('institute');
                                $this->db->where('inst_id',$rows->institute_en);
                                $query = $this->db->get()->row();

                                echo $query->inst_name_en;
                             ?>
                           </td>                                   
                           <td>                       
                              <a href="<?php echo base_url('admin/course/editCourse/'.$rows->course_id);?>" class="btn btn-primary">Edit</a>
                              <a href="<?php echo base_url('admin/course/deleteCourse/'.$rows->course_id);?>" class="btn btn-danger">Delete</a>
                           </td>
                        </tr>
                        <?php endforeach;?>             
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>Course Title</th>
                           <th>Description</th>                           
                           <th>Country</th>
                           <th>Location</th>
                           <th>Institute</th>
                           <th>Action</th>                   
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->       
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<?php $this->load->view('admin/common/footer'); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
   $(document).ready(function() {
   $('#courseTable').DataTable();
   } );
</script>

