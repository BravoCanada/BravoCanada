<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
           NextGen Online
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Montserrat:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
		<style>
		.m-nav-sticky {
    display: none;
}
		</style>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <!--begin::Page Vendors -->
        <link href="<?php echo base_url(); ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        <link href="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/demo/demo3/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/demo/demo3/media/img/logo/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                            <div class="m-stack m-stack--ver m-stack--general">
                              <!--   <div class="m-stack__item m-stack__item--middle m-stack__item--center m-brand__logo">
                                  <a href="<?php echo base_url();?>" class="m-brand__logo-wrapper">
                                      <img alt="" src="<?php echo base_url(); ?>assets/demo/demo3/media/img/logo/logo.png"/>
                                  </a>
                              </div> -->
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Responsive Header Menu Toggler -->
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>
                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                          	<!-- BEGIN: Topbar -->
                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">

                                       <!--  <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center     m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
                                           <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                               <span class="m-nav__link-badge m-badge m-badge--accent">
                                                   3
                                               </span>
                                               <span class="m-nav__link-icon">
                                                   <i class="flaticon-alert-2"></i>
                                               </span>
                                           </a>
                                           <div class="m-dropdown__wrapper">
                                               <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                               <div class="m-dropdown__inner">
                                                   <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                       <span class="m-dropdown__header-title">
                                                           9 New
                                                       </span>
                                                       <span class="m-dropdown__header-subtitle">
                                                           User Notifications
                                                       </span>
                                                   </div>
                                                   <div class="m-dropdown__body">
                                                       <div class="m-dropdown__content">
                                                           <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                               <li class="nav-item m-tabs__item">
                                                                   <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                                                       Alerts
                                                                   </a>
                                                               </li>
                                                               <li class="nav-item m-tabs__item">
                                                                   <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
                                                                       Events
                                                                   </a>
                                                               </li>
                                                               <li class="nav-item m-tabs__item">
                                                                   <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
                                                                       Logs
                                                                   </a>
                                                               </li>
                                                           </ul>
                                                           <div class="tab-content">
                                                               <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                                   <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                       <div class="m-list-timeline m-list-timeline--skin-light">
                                                                           <div class="m-list-timeline__items">
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                   <span class="m-list-timeline__text">
                                                                                       12 new users registered
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       Just now
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge"></span>
                                                                                   <span class="m-list-timeline__text">
                                                                                       System shutdown
                                                                                       <span class="m-badge m-badge--success m-badge--wide">
                                                                                           pending
                                                                                       </span>
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       14 mins
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge"></span>
                                                                                   <span class="m-list-timeline__text">
                                                                                       New invoice received
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       20 mins
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge"></span>
                                                                                   <span class="m-list-timeline__text">
                                                                                       DB overloaded 80%
                                                                                       <span class="m-badge m-badge--info m-badge--wide">
                                                                                           settled
                                                                                       </span>
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       1 hr
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge"></span>
                                                                                   <span class="m-list-timeline__text">
                                                                                       System error -
                                                                                       <a href="#" class="m-link">
                                                                                           Check
                                                                                       </a>
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       2 hrs
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                   <span class="m-list-timeline__badge"></span>
                                                                                   <span href="" class="m-list-timeline__text">
                                                                                       New order received
                                                                                       <span class="m-badge m-badge--danger m-badge--wide">
                                                                                           urgent
                                                                                       </span>
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       7 hrs
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                   <span class="m-list-timeline__badge"></span>
                                                                                   <span class="m-list-timeline__text">
                                                                                       Production server down
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       3 hrs
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge"></span>
                                                                                   <span class="m-list-timeline__text">
                                                                                       Production server up
                                                                                   </span>
                                                                                   <span class="m-list-timeline__time">
                                                                                       5 hrs
                                                                                   </span>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                   <div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                                       <div class="m-list-timeline m-list-timeline--skin-light">
                                                                           <div class="m-list-timeline__items">
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                   <a href="" class="m-list-timeline__text">
                                                                                       New order received
                                                                                   </a>
                                                                                   <span class="m-list-timeline__time">
                                                                                       Just now
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                   <a href="" class="m-list-timeline__text">
                                                                                       New invoice received
                                                                                   </a>
                                                                                   <span class="m-list-timeline__time">
                                                                                       20 mins
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                   <a href="" class="m-list-timeline__text">
                                                                                       Production server up
                                                                                   </a>
                                                                                   <span class="m-list-timeline__time">
                                                                                       5 hrs
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                   <a href="" class="m-list-timeline__text">
                                                                                       New order received
                                                                                   </a>
                                                                                   <span class="m-list-timeline__time">
                                                                                       7 hrs
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                   <a href="" class="m-list-timeline__text">
                                                                                       System shutdown
                                                                                   </a>
                                                                                   <span class="m-list-timeline__time">
                                                                                       11 mins
                                                                                   </span>
                                                                               </div>
                                                                               <div class="m-list-timeline__item">
                                                                                   <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                   <a href="" class="m-list-timeline__text">
                                                                                       Production server down
                                                                                   </a>
                                                                                   <span class="m-list-timeline__time">
                                                                                       3 hrs
                                                                                   </span>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                   <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                       <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                           <span class="">
                                                                               All caught up!
                                                                               <br>
                                                                               No new logs.
                                                                           </span>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </li>
                                       <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
                                           <a href="#" class="m-nav__link m-dropdown__toggle">
                                               <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                               <span class="m-nav__link-icon">
                                                   <i class="flaticon-clipboard"></i>
                                               </span>
                                           </a>
                                           <div class="m-dropdown__wrapper">
                                               <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                               <div class="m-dropdown__inner">
                                                   <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                                                       <span class="m-dropdown__header-title">
                                                           Quick Actions
                                                       </span>
                                                       <span class="m-dropdown__header-subtitle">
                                                           Shortcuts
                                                       </span>
                                                   </div>
                                                   <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                       <div class="m-dropdown__content">
                                                           <div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
                                                               <div class="m-nav-grid m-nav-grid--skin-light">
                                                                   <div class="m-nav-grid__row">
                                                                       <a href="#" class="m-nav-grid__item">
                                                                           <i class="m-nav-grid__icon flaticon-file"></i>
                                                                           <span class="m-nav-grid__text">
                                                                               Generate Report
                                                                           </span>
                                                                       </a>
                                                                       <a href="#" class="m-nav-grid__item">
                                                                           <i class="m-nav-grid__icon flaticon-time"></i>
                                                                           <span class="m-nav-grid__text">
                                                                               Add New Event
                                                                           </span>
                                                                       </a>
                                                                   </div>
                                                                   <div class="m-nav-grid__row">
                                                                       <a href="#" class="m-nav-grid__item">
                                                                           <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                           <span class="m-nav-grid__text">
                                                                               Create New Task
                                                                           </span>
                                                                       </a>
                                                                       <a href="#" class="m-nav-grid__item">
                                                                           <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                           <span class="m-nav-grid__text">
                                                                               Completed Tasks
                                                                           </span>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </li> -->                                       

                                       <li class="m-nav__item">
                                           <a href="<?php echo base_url(); ?>dashboard/userForm" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                              Profile
                                           </a>
                                       </li>

                                      <li class="m-nav__item">
                                           <a href="<?php echo base_url(); ?>login/logout" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                               Logout
                                           </a>
                                       </li>
                                       <!--  <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                           <a href="#" class="m-nav__link m-dropdown__toggle">
                                               <span class="m-topbar__userpic">
                                                   <img src="<?php echo base_url(); ?>assets/app/media/img/users/user3.jpg" alt=""/>
                                               </span>
                                           </a>
                                           <div class="m-dropdown__wrapper">
                                               <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                               <div class="m-dropdown__inner">
                                                   <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                       <div class="m-card-user m-card-user--skin-dark">
                                                           <div class="m-card-user__pic">
                                                               <img src="<?php echo base_url(); ?>assets/app/media/img/users/user3.jpg" alt=""/>
                                                           </div>
                                                           <div class="m-card-user__details">
                                                               <span class="m-card-user__name m--font-weight-500">
                                                                   <?php echo ucfirst($user->fname).' '.ucfirst($user->lname);?>
                                                               </span>
                                                               <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                   <?php echo $user->email;?>
                                                               </a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="m-dropdown__body">
                                                       <div class="m-dropdown__content">
                                                           <ul class="m-nav m-nav--skin-light">
                                                               <li class="m-nav__section m--hide">
                                                                   <span class="m-nav__section-text">
                                                                       Section
                                                                   </span>
                                                               </li>
                                                               <li class="m-nav__item">
                                                                   <a href="<?php echo base_url('dashboard/userForm');?>" class="m-nav__link">
                                                                       <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                       <span class="m-nav__link-title">
                                                                           <span class="m-nav__link-wrap">
                                                                               <span class="m-nav__link-text">
                                                                                   My Profile
                                                                               </span>
                                                                              <span class="m-nav__link-badge">
                                                                                  <span class="m-badge m-badge--success">
                                                                                      2
                                                                                  </span>
                                                                              </span>
                                                                           </span>
                                                                       </span>
                                                                   </a>
                                                               </li>                                                              
                                                               <li class="m-nav__separator m-nav__separator--fit"></li>
                                                               <li class="m-nav__item">
                                                                   <a href="<?php echo base_url(); ?>index.php/login/logout" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                       Logout
                                                                   </a>
                                                               </li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </li> -->

                                    </ul>
                                </div>
                            </div>
                            <!-- END: Topbar -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- END: Header -->
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">