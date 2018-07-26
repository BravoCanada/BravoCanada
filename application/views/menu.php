<div class="col-md-8">
   <nav class="navbar navbar-expand-sm bg-light navbar-light p-0">
      <a class="navbar-brand p-0" href="<?php echo base_url('/');?>"><img src="<?php echo base_url();?>assets/user/img/logo-bravo.png" class="img-fluid" alt=""/ style="max-width: 70%;"></a>
      <ul class="navbar-nav w-100">
         <li class="">           
			   <a href="<?php echo base_url('course');?>"><?php echo $this->lang->line('menu_sp_offer');?></a>
         </li>
          <li class="">
            <!-- <a href="<?php echo base_url('home/topDestination');?>"><?php echo $this->lang->line('menu_top_destination');?></a> -->
			<!-- <a href="#">Top Destinations</a> -->
			<a href="<?php echo base_url('course/showInstitutes/1');?>"><?php echo $this->lang->line('menu_schools');?></a>
         </li>
         <li class="">           
			   <a href="<?php echo base_url('home/testimonials');?>"><?php echo $this->lang->line('menu_testimonials');?></a>
         </li>
         <li class="">          
			   <a href="<?php echo base_url('home/testYourEng');?>"><?php echo $this->lang->line('menu_test_english');?></a>
         </li>         
        
      </ul>  
  </nav>
</div>

  <div class="col-md-4 login-icons justify-content-end align-items-center d-flex">
  <div class="row">
  	 <ul class="col row">
      <?php if(!$this->session->userdata('isLoggedUser')) :?>
    		<li class="col-auto">         
    		   <a href="https://wa.me/14168839557"><i class="fa fa-whatsapp" aria-hidden="true" style="color: #b80509;font-size: 41px;"></i></a>
        </li>
    		<li class="col">          
    			<a href="<?php echo base_url('user/Login');?>" class="btn btn-danger"><?php echo $this->lang->line('menu_login');?></a>
        </li>
        <li class="col">
              
    		  <a href="<?php echo base_url('user/Register');?>" class="btn btn-danger"><?php echo $this->lang->line('menu_register');?></a>
        </li>
		  <?php else:?>     
         <li class="col">
            <a href="<?php echo base_url('user/logOut');?>" class="btn btn-danger"><?php echo $this->lang->line('menu_logout');?></a>
         </li>
      <?php endif;?>
	  </ul>
   <div class="dropdown col-auto">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
      <?php echo ($this->session->userdata('language') == 'english') ? 'EN' : $this->session->userdata('language');?>
      </button>
      <div class="dropdown-menu ccc">
         <a class="dropdown-item lang_select" href="javascript:void(0)" style="display: <?php echo ($this->session->userdata('language') == 'english') ? 'none' : '';?>;"><img src="<?php echo base_url('assets/user/img/english.png')?>" class="img-fluid" style="width: 30px;"></a>
         <a class="dropdown-item lang_select" href="javascript:void(0)" style="display: <?php echo ($this->session->userdata('language') == 'SP') ? 'none' : '';?>;"><img src="<?php echo base_url('assets/user/img/spanish.png')?>" class="img-fluid" style="width: 30px;"></a>
         <a class="dropdown-item lang_select" href="javascript:void(0)" style="display: <?php echo ($this->session->userdata('language') == 'TK') ? 'none' : '';?>;"><img src="<?php echo base_url('assets/user/img/turkish.png')?>" class="img-fluid" style="width: 30px;"></a>
         <a class="dropdown-item lang_select" href="javascript:void(0)" style="display: <?php echo ($this->session->userdata('language') == 'PR') ? 'none' : '';?>;"><img src="<?php echo base_url('assets/user/img/portuguese.png')?>" class="img-fluid" style="width: 30px;"></a>
      </div>
   </div>
</div>
</div>

