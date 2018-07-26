 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo isset($admin) ? ucfirst($admin->fname).' '.ucfirst($admin->lname) : '' ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo base_url('admin/dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>           
          </a>         
        </li>  

        <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>User manager</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/user');?>"><i class="fa fa-circle-o"></i> All Users</a></li>
              <li><a href="<?php echo base_url('admin/user/addUser');?>"><i class="fa fa-circle-o"></i> Add User</a></li>
            </ul>
        </li>  
             
         <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Institute Manager</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/institute');?>"><i class="fa fa-circle-o"></i> All Institutes</a></li>
              <li><a href="<?php echo base_url('admin/institute/addInstitute');?>"><i class="fa fa-circle-o"></i> Add Institute</a></li>
            </ul>
        </li> 

         <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Course Manager</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/course');?>"><i class="fa fa-circle-o"></i> All Courses</a></li>
              <li><a href="<?php echo base_url('admin/course/addCourse');?>"><i class="fa fa-circle-o"></i> Add Course</a></li>
            </ul>
        </li>

         <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Additional Fees Manager</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/Additionalfee');?>"><i class="fa fa-circle-o"></i> All Additional Fees</a></li>
              <li><a href="<?php echo base_url('admin/Additionalfee/addAdditionalFees');?>"><i class="fa fa-circle-o"></i> Add Additional Fees</a></li>
            </ul>
        </li> 

        <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Accommodation Manager</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/Accommodation');?>"><i class="fa fa-circle-o"></i> All Accommodation</a></li>
              <li><a href="<?php echo base_url('admin/Accommodation/addAccommodation');?>"><i class="fa fa-circle-o"></i> Add Accommodation</a></li>
            </ul>
        </li> 

        <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Booking Courses</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/Bookingcourses');?>"><i class="fa fa-circle-o"></i> All Bookings</a></li>              
            </ul>
        </li>  

         <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Course Image</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/courseimage');?>"><i class="fa fa-circle-o"></i> All Images</a></li>
              <li><a href="<?php echo base_url('admin/courseimage/addCourseImage');?>"><i class="fa fa-circle-o"></i> Add Image</a></li>              
            </ul>
        </li>      

        <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Setting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url('admin/setting');?>"><i class="fa fa-circle-o"></i>Home Page Location</a></li>              
            </ul>
        </li>        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>