<?php $this->load->view('admin/common/header'); ?>

<?php $this->load->view('admin/common/sidebar'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $this->lang->line('category_list');?>      
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
              <table id="catTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Category Name</th>
                         <th>Description</th>
                         <th>Parent Category</th>                         
                         <th>Meta Keywords</th>
                         <th>Meta Descriptions</th>                         
                         <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                         <?php foreach($category as $rows):?>
                           <tr>
                             <td><?php echo $rows->cat_name;?></td>
                             <td><?php echo $rows->cat_description;?> </td>
                             <td>
                                  <?php

                                      if($rows->parent_cat_id)
                                      {

                                        $this->db->select('cat_name');
                                        $this->db->from('category');
                                        $this->db->where('cat_id',$rows->parent_cat_id);

                                        $query = $this->db->get();
                                        $cat   = $query->row();

                                        echo $cat->cat_name;

                                      }

                                        

                                  ?>

                             </td>                             
                             <td><?php echo $rows->meta_keywords;?></td>
                             <td><?php echo $rows->meta_description;?></td>                             
                             <td>                       
                     
                               <a href="<?php echo base_url('admin/category/editCategory/'.$rows->cat_id);?>" class="btn btn-primary">Edit</a>
                               <a href="<?php echo base_url('admin/category/deleteCategory/'.$rows->cat_id);?>" class="btn btn-danger">Delete</a>
                     
                             </td>
                           </tr> 
                         <?php endforeach;?>             
                  </tbody>
                <tfoot>
                     <tr>
                       <th>Category Name</th>
                         <th>Description</th>
                         <th>Parent Category</th>                         
                         <th>Meta Keywords</th>
                         <th>Meta Descriptions</th>                         
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
    $('#catTable').DataTable();
} );
</script>
