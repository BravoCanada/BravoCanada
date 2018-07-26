<?php 

    if($this->session->userdata('loggedUser'))
    {
      
        $user = $this->session->userdata('loggedUser');      

    } 

?>

    <button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
          <!-- BEGIN: Aside Menu -->
          <div
              id="m_ver_menu"
              class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-aside-menu--dropdown "
              data-menu-vertical="true"
              data-menu-dropdown="true" data-menu-scrollable="true" data-menu-dropdown-timeout="500"
              >
              <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                  <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                      <a href="<?php echo base_url();?>" class="m-menu__link ">
                          <span class="m-menu__item-here"></span>
                          <!-- <i class="m-menu__link-icon flaticon-line-graph"></i> -->
                          <span class="m-menu__link-text">
                              Dashboard
                          </span>
                      </a>
                  </li>

                  
                <?php if($user->user_role == 'seller'):?>

                     <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                        <a href="#" class="m-menu__link ">
                            <span class="m-menu__item-here"></span>
                            <!-- <i class="m-menu__link-icon flaticon-line-graph"></i> -->
                            <span class="m-menu__link-text">
                                SELL
                            </span>
                        </a>

                         <ul class="treeview-menu">
                          <li class=""><a href="<?php echo base_url('sell/addVehicles');?>"><i class="fa fa-circle-o"></i> Add Vehicles</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i>Manage Vehicles</a></li>
                      </ul>
                    </li> 

                <?php endif;?>                   
               
              </ul>
          </div>
          <!-- END: Aside Menu -->
        </div>