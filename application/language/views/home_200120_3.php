<?php //echo  base_url();exit; ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <link rel="icon" type="image/ico" href="<?=base_url()?>awedget/assets/img/favicon.ico"/>

  <title>ERP | Mysoftheaven</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="Mysoftheaven (BD) Ltd." name="author" />

  <link href="<?=base_url()?>awedget/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?=base_url()?>awedget/assets/plugins/jquery-superbox/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?=base_url()?>awedget/assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?=base_url()?>awedget/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">

  <link href="<?=base_url()?>awedget/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>awedget/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>awedget/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
  <link href="<?=base_url()?>awedget/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?=base_url()?>awedget/assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?=base_url()?>awedget/assets/plugins/ios-switch/ios7-switch.css" rel="stylesheet" type="text/css" media="screen">
  <link href="<?=base_url()?>awedget/assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?=base_url()?>awedget/assets/plugins/boostrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

  <link href="<?=base_url()?>awedget/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="<?=base_url()?>awedget/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>

  <link href="<?=base_url()?>awedget/assets/croper/css/cropper.min.css" rel="stylesheet" >
  <link href="<?=base_url()?>awedget/assets/croper/css/main.css" rel="stylesheet" >

  <!-- BEGIN CSS TEMPLATE -->
  <link href="<?=base_url()?>awedget/assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="<?=base_url()?>awedget/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
  <link href="<?=base_url()?>awedget/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
  <script src="<?=base_url()?>awedget/assets/plugins/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">var hostname='<?=base_url()?>';</script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <style type="text/css">
  .n_demand {
  position: absolute;
  top: 10px;
  right: 65px;
  font-size:7px;
  color: white;
  border-radius: 50%;
  background: #f95959;
  min-width: 16px;
  min-height: 16px;
  text-align: center;
  line-height: 16px;

}
.n_demand_sub {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size:7px;
  color: white;
  border-radius: 50%;
  background: #f95959;
  min-width: 16px;
  min-height: 16px;
  text-align: center;
  line-height: 16px;

}
.n_budget {
  position: absolute;
  top: 10px;
  right: 45px;
  font-size: 7px;
  color: white;
  border-radius: 50%;
  background: #a1c45a;
  min-width: 16px;
  min-height: 16px;
  text-align: center;
  line-height: 16px;

}
.n_budget_sub {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 7px;
  color: white;
  border-radius: 50%;
  background: #a1c45a;
  min-width: 16px;
  min-height: 16px;
  text-align: center;
  line-height: 16px;
}
  </style>
}
}
</head> <!-- END HEAD -->

  <body class="">
        <div id="loading">
      <img id="loading-image" src="<?=base_url()?>awedget/assets/img/icon/loading.gif" alt="Loading..." />
    </div>
    
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
            <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >              
              <div class="iconset top-menu-toggle-white"></div> </a> 
            </li>
          </ul>
          <a href="<?=base_url()?>"><span style="color:#ffffff; font-size: 19px; padding-left: 15px; line-height: 60px">ভূমি তথ্য ব্যবস্থাপনা সিস্টেম</span></a>
          <ul class="nav pull-right notifcation-center">
          </ul>
        </div> <!-- END RESPONSIVE MENU TOGGLER -->

        <div class="header-quick-nav" >
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks"> <a href="javascript:;" class="" id="layout-condensed-toggle" style="color: #8dc641;">
                <i class="fa fa-bars" style="font-size: 22px; color: #8dc641 !important;"></i>
                <!-- <div class="iconset top-menu-toggle-dark"></div> --> </a> 
              </li>
            </ul>
          </div> <!-- END TOP NAVIGATION MENU -->

          <!-- BEGIN CHAT TOGGLER -->
          <div class="pull-right">
            <div class="chat-toggler">
              <div class="user-details" style="float:right;">                
                <div class="username">
                  <span class="bold" style="margin-left: 20px;">  

                  Mysoftheaven (BD) Ltd.,
                  
                  ঢাকা                                                      <img src="<?=base_url()?>awedget/assets/img/avater.jpg"  alt="Profile Image" data-src="<?=base_url()?>awedget/assets/img/avater.jpg" data-src-retina="<?=base_url()?>awedget/assets/img/avater.jpg" width="35" height="35" style="border-radius: 35px;" /> 
                  </span>
                </div>
              </div>

            </div>

            <ul class="nav quick-section ">
              <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="javascript:;" id="user-options">
               <i class="fa fa-cog" style="font-size: 22px; color: #8dc641 !important;"></i>
               </a>
               <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">               
                <li><a href="<?=base_url()?>change_password"><i class="fa fa-lock"></i>&nbsp;&nbsp;পাসওয়ার্ড পরিবর্তন</a></li>
                <li><a href="<?=base_url()?>general_setting/single_office_update"><i class="fa fa-building-o " aria-hidden="true"></i>&nbsp;&nbsp; অফিস হালনাগাদ</a></li>
                <li><a href="<?=base_url()?>login/logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;লগ আউট</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- END CHAT TOGGLER -->
      </div> <!-- END TOP NAVIGATION MENU -->
    </div> <!-- END TOP NAVIGATION BAR -->
  </div> <!-- END HEADER -->


  <!-- BEGIN CONTAINER -->
  <div class="page-container row-fluid">

         <div class="page-sidebar" id="main-menu">
       <!-- BEGIN MINI-PROFILE -->
       <div class="page-sidebar-wrapper" id="main-menu-wrapper">
                  <!-- <div class="slimScrollDiv"> -->

         <div class="user-info-wrapper text-center" style=" padding-bottom: 10px; border-bottom: 1px solid #db0424;">        
          <div class="user-info" style="background-color: white; ">
            <!-- <span style="color: #683091">লগইন আসেন :</span> -->
              <span class="label label-success"> 
                <strong>
                  Mysoftheaven (BD) Ltd.</strong>
              </span>
            
          </div>
        </div>

        <!-- BEGIN SIDEBAR MENU -->
          <ul class="pull-left">
            <li class="start active"> 
               <a href="<?=base_url()?>dashboard"> <i class="icon-custom-home"></i>  <span class="title">ড্যাশবোর্ড</span></a>
            </li>
            <li class="start "> <a href="javascript:;" > <i class="fa fa-folder-open"></i> <span class="title">Dash Board</span> <span class="selected"></span> <span class="arrow"></span> </a> 
              <ul class="sub-menu">
                <li> <a href="<?=base_url()?>index.php/setup_con/dashboard_date_setup"> Date SetUp </a></li>
                <li> <a href="<?=base_url()?>index.php/emp_info_con/at_a_glance_info_view"> At A Glance </a></li>
              </ul>
            </li>                  
                                    
            <li class="start "> <a href="javascript:;" > <i class="fa fa-folder-open"></i> <span class="title">HRM</span> <span class="selected"></span> <span class="arrow"></span> </a>
              <ul class="sub-menu">
                <li class="start "> <a href="<?=base_url()?>index.php/emp_info_con/personal_info_view1" target="body_load" >Emp Info</a></li>
                <li class="start "> <a href="javascript:;"><span class="title">Setup</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/company_info_setup">Company Information</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/floor">Floor</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/department">Department</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/section">Section</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/line">Line</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/designation">Designation</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/address">Address</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/position">Height</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/operation">Weight</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/job_desc">Job Description</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/nid_wk_typ">Working Type</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/work_process_type">Work Process Type</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/staff_id_entry">Entry Staff Id</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/proxi_id_entry">Proxi Id Update</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/attendance_bonus">Attendance Bonus</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/salary_grade">Salary Grade</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/shift_schedule">Shift Schedules</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/shift_management">Shift Manage</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/leave_setup">Leave</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/bonus_setup">Bonus</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/weekend_allowance_setup">Weekend Allowance</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/night_allowance_setup">Night Allowance</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/holiday_allowance_setup">Holiday Allowance</a> </li>
                  </ul>
                </li>
                <li class="start "> <a href="javascript:;"><span class="title">Entry System</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/grid_entry_system">All Entry</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/tax_others_deduction">Tax & Others Deduction</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/weekend_delete">Weeked Delete</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/holiday_delete">Holiday Delete</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/shift_log_delete">Log Data Delete</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/stop_salary">Stop Salary</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/leave_transation">Leave Transaction</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/leave_delete">Leave Delete</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/advance_loan">Advance Loan</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/due_amt_entry">Add Due Amt.</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/left_resign_con/left_resign_entry">Left/Resign Entry</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/new_to_regular">New To Regular</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/emp_increment_con/increment_info">Increment Entry</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/emp_increment_con/promotion_info">Promotion Entry</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/entry_system_con/proximity_card_edit">Proximity Card Edit</a> </li>
                  </ul>
                </li>
                <li class="start "> <a href="javascript:;"><span class="title">Process</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <!-- <li class="start "> <a href="<?=base_url()?>index.php/attn_process_con/file_upload">File Upload</a> </li> -->
                    <li class="start "> <a href="<?=base_url()?>index.php/attn_process_con/attn_process_form">Attendance Process</a> </li>
                  </ul>
                </li>
                <li class="start "> <a href="javascript:;"><span class="title">Reports</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="start "> <a href="<?=base_url()?>index.php/grid_con/grid_window">All Report</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/grid_con/grid_window_auto_notify">Auto Notify Board</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/mars_con/others_report_front_end">Others Report</a> </li>
                  </ul>
                </li>
              </ul>
            </li>                       
            <li class="start ">
              <a href="javascript:;" > <i class="fa fa-folder-open"></i> <span class="title">Payroll</span> <span class="selected"></span> <span class="arrow"></span> </a>
              <ul class="sub-menu">
                <li class="start "> <a href="javascript:;"><span class="title">Process</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="start "> <a href="<?=base_url()?>index.php/salary_process_con/salary_process_form">Salary Process</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/salary_process_con/festival_bonus_form">Festival Process</a> </li>
                    <li class="start"><a href="<?=base_url()?>index.php/earn_leave_con/earn_process_form">Earn Leave Process</a></li>

                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/floor">Floor</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/department">Department</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/section">Section</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/line">Line</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/designation">Designation</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/address">Address</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/position">Height</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/operation">Weight</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/setup_con/job_desc">Job Description</a> </li>
                  </ul>
                </li>
                <li class="start "> <a href="javascript:;"><span class="title">Reports</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="start "> <a href="<?=base_url()?>index.php/salary_report_con/grid_salary_report">Salary Report</a> </li>
                    <li class="start "> <a href="<?=base_url()?>index.php/earn_leave_con/grid_earn_report">Earn Leave Report</a> </li>
                  </ul>
                </li>
              </ul>
            </li>                      
            <li class="start "> <a href="javascript:;" > <i class="fa fa-folder-open"></i> <span class="title">Maintenance</span> <span class="selected"></span> <span class="arrow"></span> </a>
              <ul class="sub-menu">
                <li class="start "> <a href="javascript:;"><span class="title">Database</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="start "> <a href="<?=base_url()?>index.php/maintainance_con/database_backup_form">Backup</a> </li>
                  </ul>
                </li>
                <li class="start "> <a href="javascript:;"><span class="title">User</span> <span class="selected"></span> <span class="arrow"></span> </a>
                  <ul class="sub-menu">
                    <li class="start "> <a href="<?=base_url()?>index.php/acl_con/acl">ACL</a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="start"><a href="<?=base_url()?>login/logout"> <i class="fa fa-power-off"></i>  <span class="title">Log Out</span></a>
            </li>
          </ul>
         <div id="notification_div"></div>
         <div class="clearfix"></div>
         <!-- END SIDEBAR MENU -->
       </div>
    </div>

          <a href="#" class="scrollup">Scroll</a>

          <div class="footer-widget">
           <!-- <div class="copyrights pull-left" style="width: 50%" >
             <span> <span style="vertical-align: bottom; font-size: 10px;">কারিগরি সহায়তায় |</span>  <a href="http://www.lrb.gov.bd/" target="_blank"> 
             <img src="<?=base_url()?>awedget/assets/img/a2i-logo.png" height="18"> </a> </span>
           </div> -->
           <div class="copyrights text-center" style="width: 100%">
             <span style=" float: right;"> <span style="vertical-align: bottom; font-size: 11px;">Developed By |</span> <a href="http://www.mysoftheaven.com/" target="_blank"> 
             <img src="<?=base_url()?>awedget/assets/img/mysoft-logo.png" height="18"> Mysoftheaven (BD) Ltd.</a> </span>
           </div>
 
</div>
<!-- END SIDEBAR --> 
<style type="text/css">
   @font-face {
    font-family: 'Kalpurush';
    src: url('<?=base_url()?>awedget/assets//fonts/Kalpurush.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
  .page-content {
    font-family: 'Kalpurush', 'Open Sans', Arial, sans-serif;
    background: #e5e9ec;
  }
  .report-table{
    width: 100%;
  }
  .report-table tr th{
    font-size: 15px;
    text-align: left;
    width: 25%;
    font-weight: normal;
  }
  .report-table tr td{
    text-align: left;
    width: 25%;
    font-size: 15px;
  }
  .report-table tr th:nth-child(1),
  .report-table tr td:nth-child(1){
    width: 35%;
  }
  .report-table tr th:nth-child(2),
  .report-table tr td:nth-child(2){
    width: 20px;
  }
  .sub-mark{
    width: 5% !important;
  }
  .new{
    -webkit-box-shadow: 13px 11px 40px 0px rgba(82,82,82,0.43);
    -moz-box-shadow: 13px 11px 40px 0px rgba(82,82,82,0.43);
    box-shadow: 13px 11px 40px 0px rgba(82,82,82,0.43);
  }
  .new .tiles-title {
    height: 40px;
}
  .new .heading{
    width: 180px;
    padding: 5px 10px;
    margin-left: -30px !important;
    border-radius: 0 20px 20px 0px;
    position: relative;
    text-align: center;
  }
  .new .triangle-up {
    width: 0;
    height: 0;
    right: -3px;
    bottom: -3px;
    position: absolute;
  }
  
  .new1 .heading{
    color: #fff !important;
    background: #9424b8;
  }

  .new2 tr:nth-child(1),
  .new1 .tiles-title{
    color: #9424b8 !important;
  }

  .new3 tr:nth-child(1){
    color: #78c72f !important;
  }

  .new1 .triangle-up {
   
    border-left: 70px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 70px solid #9424b8;
  }

  .new2 .heading{
    color: #fff !important;
    background: #00adef;
  }

  .new1 tr:nth-child(1),
  .new2 .tiles-title{
    color: #00adef !important;
  }
  .new2 .triangle-up {
   
    border-left: 70px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 70px solid #00adef;
  }

  .new3 .heading{
    color: #fff !important;
    background: #ff940b;
  }

  .new4 tr:nth-child(1),
  .new3 .tiles-title{
    color: #ff940b !important;
  }
  .new3 .triangle-up {
   
    border-left: 70px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 70px solid #ff940b;
  }

  .new4 .heading{
    color: #fff !important;
    background: #78c72f;
  }

  .new4 .tiles-title{
    color: #78c72f !important;
  }
  .new4 .triangle-up {
   
    border-left: 70px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 70px solid #78c72f;
  }
  .grand_total{
      color: #fff !important;
      background: #9424b8;
      width: 20%;
      height: 40px;
      padding: 0px 10px;
      font-size: 20px;
      border-radius: 0;
      text-align: center;
      position: relative;
      right: 40%;
      bottom: 45px;
      float: right;
  }
  .head-title{
    font-size: 14px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
    font-weight:600;
  }
  .field, .field1{
    position: relative;
  }
  .field .tiles-title{
    color: #9424b8;
  }

  .field .triangle-up {
    width: 0;
    height: 0;
    right: 0px;
    bottom: 0px;
    position: absolute;
    border-left: 50px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 50px solid #9424b8;
  }
  .field1 .tiles-title{
    color: #00adef;
  }

  .field1 .triangle-up {
    width: 0;
    height: 0;
    right: 0px;
    bottom: 0px;
    position: absolute;
    border-left: 50px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 50px solid #00adef;
  }
  .head-title i{
    margin-right: 10px;
    line-height: 20px
  }

  .zc-ref {
    display: none;
  }
  div#myChart1-license-text,
  div#myChart2-license-text,
  div#myChart-license-text {
      display: none !important;
  }
  td i{
    color: #9424b8 !important;
    font-size: 12px !important;
  }

</style>
 
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>    
    <div class="clearfix"></div>

    <div class="content">
     <div class="page-title">
        <!-- <h4>ড্যাশবোর্ড </h4> -->
      </div>
              <div id="container">
        <div class="row spacing-bottom 2col">
            <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin new new1">
                <div class="tiles-body">
                 
                  <div class="tiles-title"> বাজেট চাহিদা (সর্বমোট অফিস)</div>
                  <div class="heading"> <span class="" data-value="" data-animation-duration="1200">১৯৪৮</span> </div>
                  
                  <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
                  <div class="description">
                    <table class="report-table">
                      <tr>
                        <td>অফিস</td>
                        <td></td>
                        <td>পূর্ণ চাহিদা</td>
                        <td>ইন্সঃ চাহিদা</td>
                      </tr>
                      <tr>
                        <td>এস এ শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>৬৪</td>
                        <td>৩৯</td>
                      </tr>
                      <tr>
                        <td>এল এ শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>৬৪</td>
                        <td>৩৯</td>
                      </tr>
                      <tr>
                        <td>সার্কেল</td>
                        <td class="sub-mark">:</td>
                        <td>৬</td>
                        <td>৪</td>
                      </tr>
                      <tr>
                        <td>মেট্রো থানা</td>
                        <td class="sub-mark">:</td>
                        <td>১৯</td>
                        <td>১৫</td>
                      </tr>
                      <tr>
                        <td>উপজেলা</td>
                        <td class="sub-mark">:</td>
                        <td>৪৭৪</td>
                        <td>৩৮৩</td>
                      </tr>
                      <tr>
                         <td>ইউনিয়ন</td>
                         <td class="sub-mark">:</td>
                         <td>৪৮৭</td>
                         <td>৩৫৪</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin new new2">
                <div class="tiles-body">
                 
                  <div class="tiles-title"> প্রস্তাবিত বরাদ্দ (সর্বমোট অফিস) </div>
                  <div class="heading "> <span class="" data-value="" data-animation-duration="1000">১৯২৯</span> </div>
                  
                  <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
                  <div class="description">
                    <table class="report-table report-tabe2">
                      <tr>
                        <td>অফিস</td>
                        <td></td>
                        <td>পূর্ণ বরাদ্দ</td>
                        <td>ইন্সঃ বরাদ্দ</td>
                      </tr>
                      <tr>
                        <td>এস এ শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>৬৪</td>
                        <td>৩৮</td>
                      </tr>
                      <tr>
                        <td>এল এ শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>৬৪</td>
                        <td>৩৯</td>
                      </tr>
                      <tr>
                        <td>সার্কেল</td>
                        <td class="sub-mark">:</td>
                        <td>৬</td>
                        <td>৪</td>
                      </tr>
                      <tr>
                        <td>মেট্রো থানা</td>
                        <td class="sub-mark">:</td>
                        <td>১৯</td>
                        <td>১৫</td>
                      </tr>
                      <tr>
                        <td>উপজেলা</td>
                        <td class="sub-mark">:</td>
                        <td>৪৭৪</td>
                        <td>৩৬৯</td>
                      </tr>
                      <tr>
                         <td>ইউনিয়ন</td>
                         <td class="sub-mark">:</td>
                         <td>৪৮৭</td>
                         <td>৩৫০</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 spacing-bottom">
              <div class="tiles white added-margin new new3">
                <div class="tiles-body">
                  <div class="tiles-title"> অপেক্ষারত প্রস্তাবিত বরাদ্দ (সর্বমোট অফিস) </div>
                  <div class="heading"> <span class="" data-value="" data-animation-duration="1200">৭১</span> </div>
                  
                  <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
                  <div class="description">
                    <table class="report-table">
                      <tr>
                        <td>অফিস</td>
                        <td></td>
                        <td>পূর্ণ বরাদ্দ</td>
                        <td>ইন্সঃ বরাদ্দ</td>
                      </tr>
                      <tr>
                        <td>বাজেট শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>এ এল আর সি-৪</td>
                        <td class="sub-mark">:</td>
                       <td>০</td>
                       <td>০</td>
                      </tr>
                      <tr>
                        <td>ডি এল আর সি-৩</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>৭১</td>
                      </tr>
                      <tr>
                        <td>মেম্বার ভূমি</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                         <td>চেয়ারম্যান</td>
                         <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>*******</td>
                        <td class="sub-mark"></td>
                        <td></td>
                        <td></td>
                      </tr>
                      
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="tiles white added-margin new new4">
                <div class="tiles-body">
                  
                  <div class="tiles-title"> অপেক্ষারত বরাদ্দ পোস্টিং (আইবাস++) </div>
                  <div class="row-fluid ">
                    <div class="heading"> <span class="" data-value="" data-animation-duration="700">০</span> </div>
                  </div>
                  <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
                  <div class="description">
                    <table class="report-table">
                      <tr>
                        <td>অফিস</td>
                        <td></td>
                        <td>পূর্ণ বরাদ্দ</td>
                        <td>ইন্সঃ বরাদ্দ</td>
                      </tr>
                      <tr>
                        <td>এস এ শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>এল এ শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>সার্কেল</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>মেট্রো থানা</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>উপজেলা</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                         <td>ইউনিয়ন</td>
                         <td class="sub-mark">:</td>
                         <td>০</td>
                         <td>০</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div id='myChart2'style="margin-bottom: 10px; padding: 0px; width: 102%; position: relative;">
                </div>
                <!-- <div class="grand_total"></div> -->
                <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
                <script>
                  zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
                  ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
                </script>
                <script type="text/javascript">
                      
                    var myConfig2 = {
                       
                        "type": "bar",
                        title: {
                          text: "অনুমোদিত (সর্বমোট অফিস) : ১৮৫৮",
                          fontSize: 13,
                          padding: "15",
                          fontColor : "#00adef",
                        },
                        "background-color": "white",

                        'plotarea': {
                            "margin":"50px dynamic 65px dynamic"
                        },
                        "scale-y": {
                            "line-color": "none",
                            "tick": {
                                "line-color": "none"
                            },
                            "guide": {
                                "line-style": "solid"
                            },
                            "item": {
                                "color": "#606060"
                            }
                        },
                        "scale-x": {
                          
                            "values": [
                                "এস এ শাখা",
                                "এল এ শাখা",
                                "সার্কেল",
                                "মেট্রো থানা",
                                "উপজেলা",
                                "ইউনিয়ন",
                                "এস এ ইন্সঃ",
                                "এল এ ইন্সঃ",
                                "সার্কেল ইন্সঃ",
                                "মেট্রো থানা ইন্সঃ",
                                "উপজেলা ইন্সঃ",
                                "ইউনিয়ন ইন্সঃ",
                            ],
                            "line-color": "#C0D0E0",
                            "line-width": 1,
                            "tick": {
                                "line-width": 1,
                                "line-color": "#C0D0E0"
                            },
                            "guide": {
                                "visible": false
                            },
                            "item": {
                                "color": "#606060",
                                "font-angle":-45,
                            }
                        },
                        "crosshair-x": {
                            "marker": {
                                "visible": false
                            },
                            "line-color": "none",
                            "line-width": "0px",
                            "scale-label": {
                                "visible": false
                            },
                        },
                        "plot": {
                            
                            "cursor": "hand",
                            "value-box": {
                                "text": "%v",
                                "color": "#606060"
                            },
                            "tooltip": {
                                "visible": false
                            },
                            "animation": {
                                "effect": "7"
                            },
                             "rules": [
                                    {
                                        "rule": "%i==0",
                                        "background-color": "#1976d2"
                                    },
                                    {
                                        "rule": "%i==1",
                                        "background-color": "#424242"
                                    },
                                    {
                                        "rule": "%i==2",
                                        "background-color": "#388e3c"
                                    },
                                    {
                                        "rule": "%i==3",
                                        "background-color": "#ffa000"
                                    },
                                    {
                                        "rule": "%i==4",
                                        "background-color": "#1976d2"
                                    },
                                    {
                                        "rule": "%i==5",
                                        "background-color": "#424242"
                                    },
                                    {
                                        "rule": "%i==6",
                                        "background-color": "#388e3c"
                                    },
                                    {
                                        "rule": "%i==7",
                                        "background-color": "#ffa000"
                                    },
                                    {
                                        "rule": "%i==8",
                                        "background-color": "#1976d2"
                                    },
                                    {
                                        "rule": "%i==9",
                                        "background-color": "#424242"
                                    },
                                    {
                                        "rule": "%i==10",
                                        "background-color": "#388e3c"
                                    },
                                    {
                                        "rule": "%i==11",
                                        "background-color": "#ffa000"
                                    },
                                    
                                ]
                        },

                        "series": [
                          { 
                              "values": [
                                  parseInt("64"),
                                  parseInt("64"),
                                  parseInt("6"),
                                  parseInt("19"),
                                  parseInt("474"),
                                  parseInt("487"),

                                  parseInt("33"),
                                  parseInt("36"),
                                  parseInt("4"),
                                  parseInt("14"),
                                  parseInt("349"),
                                  parseInt("308")
                              ]
                          }
                      ]
                    };

                    zingchart.render({
                        id : 'myChart2', 
                        data : myConfig2,
                        height: '287', 
                        width: '100%',
                      });

                    </script>
            </div>
        </div>

        <div class="row spacing-bottom 2col">
          <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin new new1" style="height: 372px">
                <div class="tiles-body">
                 
                  <div class="tiles-title">এল আর বি বাজেট  (সর্বমোট অফিস)</div>
                  <!-- <div class="heading"> <span class="" data-value="" data-animation-duration="1200"></span> </div> -->
                  
                  <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
                  <div class="description">
                    <table class="report-table" style="line-height: 27px">
                      <tr>
                        <td>অবস্থান</td>
                        <td></td>
                        <td>পূর্ণ বরাদ্দ</td>
                        <td>ইন্সঃ বরাদ্দ</td>
                      </tr>
                      <tr>
                        <td>চাহিদা</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td> ০</td>
                      </tr>
                      <tr>
                        <td>বরাদ্দ</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>হিসাব শাখা</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>অ্যাকাউন্ট অফিসার</td>
                        <td class="sub-mark">:</td>
                       <td>০</td>
                       <td>০</td>
                      </tr>
                      <tr>
                        <td>ডি এল আর সি ১</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>মেম্বার প্রশাসন</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                         <td>চেয়ারম্যান</td>
                         <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      <tr>
                        <td>আইবাস++</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>

                      <tr>
                        <td>অনুমোদিত</td>
                        <td class="sub-mark">:</td>
                        <td>০</td>
                        <td>০</td>
                      </tr>
                      
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
          </div>
          <div class="col-md-5">
              <div id='myChart'></div>
              <script type="text/javascript">
                      
                    var myConfig = {
                       
                        "type": "bar",
                        title: {
                          text: "সর্বমোট প্রাক্কলন বাজেট : ৭৯৭৫৬২০০০০",
                          fontSize: 15,
                          padding: "10 0 0 0",
                          fontColor : "#00adef",
                        },
                        "background-color": "white",

                        'plotarea': {
                            "margin":"50px dynamic 65px dynamic"
                        },
                        "scale-y": {
                            "line-color": "none",
                            "tick": {
                                "line-color": "none"
                            },
                            "guide": {
                                "line-style": "solid"
                            },
                            "item": {
                                "color": "#606060"
                            }
                        },
                        "scale-x": {
                            "values": [
                                "এল আর বি",
                                "এস এ শাখা",
                                "এল এ শাখা",
                                "সার্কেল",
                                "মেট্রো থানা",
                                "উপজেলা",
                                "ইউনিয়ন",
                            ],
                            "line-color": "#C0D0E0",
                            "line-width": 1,
                            "tick": {
                                "line-width": 1,
                                "line-color": "#C0D0E0"
                            },
                            "guide": {
                                "visible": false
                            },
                            "item": {
                                "color": "#606060",
                                "font-angle":-45,
                            }
                        },
                        "crosshair-x": {
                            "marker": {
                                "visible": false
                            },
                            "line-color": "none",
                            "line-width": "0px",
                            "scale-label": {
                                "visible": false
                            },
                        },
                        "plot": {
                            
                            "cursor": "hand",
                            "value-box": {
                                "text": "%v",
                                "color": "#606060"
                            },
                            "tooltip": {
                                "visible": false
                            },
                            "animation": {
                                "effect": "7"
                            },
                             "rules": [
                                    {
                                        "rule": "%i==0",
                                        "background-color": "#1976d2"
                                    },
                                    {
                                        "rule": "%i==1",
                                        "background-color": "#424242"
                                    },
                                    {
                                        "rule": "%i==2",
                                        "background-color": "#388e3c"
                                    },
                                    {
                                        "rule": "%i==3",
                                        "background-color": "#ffa000"
                                    },
                                    {
                                        "rule": "%i==4",
                                        "background-color": "#1976d2"
                                    },
                                    {
                                        "rule": "%i==5",
                                        "background-color": "#424242"
                                    },
                                    {
                                        "rule": "%i==6",
                                        "background-color": "#388e3c"
                                    },
                                    
                                ]
                        },

                        "series": [
                          { 
                              "values": [
                                  parseInt("0"),
                                  parseInt("547215000"),
                                  parseInt("537785000"),
                                  parseInt("36910000"),
                                  parseInt("112180000"),
                                  parseInt("2489160000"),
                                  parseInt("4364550000")
                              ]
                          }
                      ]
                    };

                    zingchart.render({
                        id : 'myChart', 
                        data : myConfig,
                        height: '372', 
                        width: '100%',
                      });

                    </script>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="tiles green added-margin">
              <div class="tiles-body">
                <div class="tiles-title"> এল আর বি </div>
                <div class="row-fluid">
                  <div class="heading"> <span class="" data-value="" data-animation-duration="700">০</span> </div>
                </div>
                <div class="description">
                    <table class="report-table">
                      <tr>
                        <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">০</td>
                      </tr>
                      <tr>
                        <th class="text-left">মোট বরাদ্দ</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">০</td>
                      </tr>
                      <tr>
                        <th class="text-left">মোট ব্যয়</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">০</td>
                      </tr>
                      <tr>
                        <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">০</td>
                      </tr>
                    </table>
                </div>
              </div>
            </div>

            <div class="tiles light-green added-margin">
              <div class="tiles-body">
                <div class="tiles-title"> এস এ সেকশন </div>
                <div class="row-fluid">
                  <div class="heading"> <span class="" data-value="" data-animation-duration="700">৫৪৭২১৫০০০</span> </div>
                </div>
                <div class="description">
                    <table class="report-table">
                      <tr>
                        <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">১৮৩২৯২৭৯৭</td>
                      </tr>
                      <tr>
                        <th class="text-left">মোট বরাদ্দ</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">৩৬৩৯২২২০৩</td>
                      </tr>
                      <tr>
                        <th class="text-left">মোট ব্যয়</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">১১২২৮৬৫২৮</td>
                      </tr>
                      <tr>
                        <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                        <td class="sub-mark">:</td>
                        <td class="text-left">২৫১৬৩৫৬৭৫</td>
                      </tr>
                      
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row spacing-bottom 2col">
              <div class="col-md-4 col-sm-6">
                <div class="tiles green added-margin">
                  <div class="tiles-body">
                    <div class="tiles-title"> এল এ সেকশন</div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700">৫৩৭৭৮৫০০০</span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                          <tr>
                            <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৯৭১৬০৯২২</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৪৪০৬২৪০৭৮</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট ব্যয়</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১১৫৯৬১০৮৯.৯৫</td>
                          </tr>
                          <tr>
                            <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৩২৪৬৬২৯৮৮.০৫</td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="tiles blue added-margin">
                  <div class="tiles-body">

                    <div class="tiles-title"> সার্কেল </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700">৩৬৯১০০০০</span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                           <tr>
                            <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১৮৯৭৬০০০</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১৭৯৩৪০০০</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট ব্যয়</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৩৫৩৭৮২১</td>
                          </tr>
                          <tr>
                            <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১৪৩৯৬১৭৯</td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="tiles light-blue added-margin">
                  <div class="tiles-body">

                    <div class="tiles-title"> মেট্রো থানা </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700">১১২১৮০০০০</span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                           <tr>
                            <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৪২০৯৩৫৯৮</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৭০০৮৬৪০২</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট ব্যয়</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১৩০৮২২০৫</td>
                          </tr>
                          <tr>
                            <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৫৭০০৪১৯৭</td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="tiles light-green added-margin">
                  <div class="tiles-body">

                    <div class="tiles-title"> উপজেলা </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700">২৪৮৯১৬০০০০</span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                           <tr>
                            <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৪৫৩২১০৩১৬</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">২০৩৫৯৪৯৬৮৪</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট ব্যয়</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৬৬৮১১১৪৬৫.৭৮</td>
                          </tr>
                          <tr>
                            <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১৩৬৭৮৩৮২১৮.২২</td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="tiles dark-purple added-margin">
                  <div class="tiles-body">

                    <div class="tiles-title"> ইউনিয়ন </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700">৪৩৬৪৫৫০০০০</span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                          <tr>
                            <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১১১৪৬০৫৩০০</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">৩২৪৯৯৪৪৭০০</td>
                          </tr>
                          <tr>
                            <th class="text-left">মোট ব্যয়</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">১১০৪৩১৫০৩২.৩২</td>
                          </tr>
                          <tr>
                            <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark">:</td>
                            <td class="text-left">২১৪৫৬২৯৬৬৭.৬৮</td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
              <div class="tiles purple added-margin">
                <div class="tiles-body">
                  <div class="tiles-title"> সর্বমোট </div>
                  <div class="row-fluid">
                    <div class="heading"> <span class="" data-value="" data-animation-duration="700">৮০৮৭৮০০০০০</span> </div>
                  </div>
                  <div class="description">
                      <table class="report-table">
                        <tr>
                          <th class="text-left">অবশিষ্ট প্রাক্কলন</th>
                          <td class="sub-mark">:</td>
                          <td class="text-left">১৯০৯৩৩৮৯৩৩</td>
                        </tr>
                        <tr>
                          <th class="text-left">মোট বরাদ্দ</th>
                          <td class="sub-mark">:</td>
                          <td class="text-left">
                            ৬১৭৮৪৬১০৬৭                          </td>
                        </tr>
                        <tr>
                          <th class="text-left">মোট ব্যয়</th>
                          <td class="sub-mark">:</td>
                          <td class="text-left">
                            ২০১৭২৯৪১৪২.০৫                          </td>
                        </tr>
                        <tr>
                          <th class="text-left">অবশিষ্ট বরাদ্দ</th>
                          <td class="sub-mark">:</td>
                          <td class="text-left">৪১৬১১৬৬৯২৪.৯৫</td>
                        </tr>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
          </div>
  </div></div>
<!-- END CONTAINER --> 

<!-- BEGIN CORE JS FRAMEWORK--> 
<!-- <script src="<?=base_url()?>awedget/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>  -->
<script src="<?=base_url()?>awedget/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<!-- <script src="<?=base_url()?>awedget/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  -->
<script src="<?=base_url()?>awedget/assets/plugins/boostrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script> 
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script src="<?=base_url()?>awedget/assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="<?=base_url()?>awedget/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="<?=base_url()?>awedget/assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS -->  
<script src="<?=base_url()?>awedget/assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>  
<script src="<?=base_url()?>awedget/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="<?=base_url()?>awedget/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<!-- <script src="<?=base_url()?>awedget/assets/plugins/select2/select2.min.js" type="text/javascript"></script> -->
<script src="<?=base_url()?>awedget/assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/jquery-validation/dist/additional-methods.min.js" type="text/javascript"></script>
<script src="//oss.maxcdn.com/jquery.mask/1.11.4/jquery.mask.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- <script src="<?=base_url()?>awedget/assets/js/form_validations.js" type="text/javascript"></script> -->
<!-- <script src="<?=base_url()?>awedget/assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script> -->

<script src="<?=base_url()?>awedget/assets/plugins/jquery-superbox/js/superbox.js" type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
  
<!-- BEGIN PAGE DATATABLE -->   
<script src="<?=base_url()?>awedget/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="<?=base_url()?>awedget/assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
<script src="<?=base_url()?>awedget/assets/plugins/datatables-responsive/js/datatables.responsive.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/datatables-responsive/js/lodash.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- <script src="<?=base_url()?>awedget/assets/js/datatables.js" type="text/javascript"></script> -->
<script src="<?=base_url()?>awedget/assets/js/tabs_accordian.js" type="text/javascript"></script>
<script src="<?=base_url()?>awedget/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?=base_url()?>awedget/assets/js/messages_notifications.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS --> 
<script src="<?=base_url()?>awedget/assets/js/core.js" type="text/javascript"></script> 
<!-- <script src="<?=base_url()?>awedget/assets/js/chat.js" type="text/javascript"></script>  -->
<script src="<?=base_url()?>awedget/assets/js/demo.js" type="text/javascript"></script> 

<script src="<?=base_url()?>awedget/assets/croper/js/cropper.min.js"></script>
<script src="<?=base_url()?>awedget/assets/croper/js/main.js"></script>

<!-- END CORE TEMPLATE JS --> 
<!-- <script src="<?=base_url()?>awedget/assets/js/dashboard_v2.js" type="text/javascript"></script> -->
<script type="text/javascript">
  $(document).ready(function () {
      // $(".live-tile,.flip-list").liveTile();
      $(".source").select2();
  });
</script>

<script src="<?=base_url()?>awedget/assets/js/jquery.bongabdo.js"></script>
<!-- <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script> -->
<script>
  // $(function () {
  //   CKEDITOR.replace('editor1');
  // });
  
  $(function() {    
    // Call SuperBox - that's it!
    $('.superbox').SuperBox();    
  });

    //district dropdown
    $('#division').change(function(){
      $('.distirict_val').addClass('form-control input-sm');
      $(".distirict_val > option").remove();
      var id = $('#division').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_district_by_division/" + id,
        success: function(func_data)
        {
          $.each(func_data['district'],function(id,name)
          {
            var opt = $('<option />');
            opt.val(id);
            opt.text(name);
            $('.distirict_val').append(opt);
          });
          $('#office').empty();
          if(func_data['offices'].length !==0){
            loadOffices(func_data['offices']);            
          }
        }
      });
    });


    // Upazila  dropdown
    $('#district').change(function(){
      $('.upazila_val').addClass('form-control input-sm');
      $(".upazila_val > option").remove();
      var dis_id = $('#district').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_upazila_by_district/" + dis_id,
        success: function(func_data)
        {
          $.each(func_data['upazila'],function(id,ut_name)
          {
            var opt = $('<option />');
            opt.val(id);
            opt.text(ut_name);
            $('.upazila_val').append(opt);
          });

          $('#office').empty();
          if(func_data['offices'].length !==0){
            loadOffices(func_data['offices']);            
          }
        }
      });
    });

    // Union  dropdown
    $('#upazila').change(function(){
      $('.union_val').addClass('form-control input-sm');
      $(".union_val > option").remove();
      var dis_id = $('#upazila').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_union_by_upazila/" + dis_id,
        success: function(func_data)
        {
          $.each(func_data['union'],function(id,ut_name)
          {
            var opt = $('<option />');
            opt.val(id);
            opt.text(ut_name);
            $('.union_val').append(opt);
          });
          $('#office').empty();
          if(func_data['offices'].length !==0){
            loadOffices(func_data['offices']);            
          }
        }
      });
    });

    // Designation Dropdown
    $('#office').change(function(){
      $("#employee > option").remove();
      var office_id = $('#office').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_employee_by_office/" + office_id,
        success: function(func_data)
        {
          $.each(func_data['union'],function(id,ut_name)
          {
            var opt = $('<option />');
            opt.val(id);
            opt.text(ut_name);
            $('#employee').append(opt);
          });
          
        }
      });
    });

    // estimated Budget check
    $(".exits").hide();
    $('#checking_lrb').change(function(){
      var fiscal_year = $('#checking_lrb').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_lrb_estimated_exits_by_fiscal_year/" + fiscal_year,
        success: function(fiscal_year)
        { 
          if(fiscal_year){
            $(".used").hide();
            $(".exits").show();
          }else{
            $(".exits").hide();
            $(".used").show();
          }
        }
      });
    });
    $('#checking_sa').change(function(){
      var fiscal_year = $('#checking_sa').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_sa_estimated_exits_by_fiscal_year/" + fiscal_year,
        success: function(fiscal_year)
        { 
          if(fiscal_year){
            $(".used").hide();
            $(".exits").show();
          }else{
            $(".exits").hide();
            $(".used").show();
          }
        }
      });
    });
    $('#checking_la').change(function(){
      var fiscal_year = $('#checking_la').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_la_estimated_exits_by_fiscal_year/" + fiscal_year,
        success: function(fiscal_year)
        { 
          if(fiscal_year){
            $(".used").hide();
            $(".exits").show();
          }else{
            $(".exits").hide();
            $(".used").show();
          }
        }
      });
    });

    $('#checking_upazila').change(function(){
      var fiscal_year = $('#checking_upazila').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_upazila_estimated_exits_by_fiscal_year/" + fiscal_year,
        success: function(fiscal_year)
        { 
          if(fiscal_year){
            $(".used").hide();
            $(".exits").show();
          }else{
            $(".exits").hide();
            $(".used").show();
          }
        }
      });
    });

    $('#checking_circle').change(function(){
      var fiscal_year = $('#checking_circle').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_circle_estimated_exits_by_fiscal_year/" + fiscal_year,
        success: function(fiscal_year)
        { 
          if(fiscal_year){
            $(".used").hide();
            $(".exits").show();
          }else{
            $(".exits").hide();
            $(".used").show();
          }
        }
      });
    });

    $('#checking_union').change(function(){
      var fiscal_year = $('#checking_union').val();
      $.ajax({
        type: "POST",
        url: hostname +"common/ajax_get_union_estimated_exits_by_fiscal_year/" + fiscal_year,
        success: function(fiscal_year)
        { 
          if(fiscal_year){
            $(".used").hide();
            $(".exits").show();
          }else{
            $(".exits").hide();
            $(".used").show();
          }
        }
      });
    });


    // Jquery Onload
    $(document).ready(function() {
      // console.log( "run!" );

      //Datepicker
      $('.datetime').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true
      });


     

      $('#letter_form_submit').on('click',function(){
        //alert("hh");
        var division_id = $('#division').val();
        if(division_id == null || typeof(division_id) == 'undefined' || division_id == '')division_id = '0';

        var district_id = $('#district').val();
        if(district_id == null || typeof(district_id) == 'undefined' || district_id == '')district_id = '0';

        var upazila_id = $('#upazila').val();
        if(upazila_id == null || typeof(upazila_id) == 'undefined' || upazila_id == '')upazila_id = '0';

        var union_id = $('#union').val();
        if(union_id == null || typeof(union_id) == 'undefined' || union_id == '')union_id = '0';

        var office_id = $('#offices').val();
        if(office_id == null || typeof(office_id) == 'undefined' || office_id == '')office_id = '0';

        var budget_fiscal_year_id = $('#budget_fiscal_year').val();
        if(budget_fiscal_year_id == null || typeof(budget_fiscal_year_id) == 'undefined' || budget_fiscal_year_id == '')budget_fiscal_year_id = '0';

        var budget_file_id = $('#budget_files').val();
        if(budget_file_id == null || typeof(budget_file_id) == 'undefined' || budget_file_id == '')budget_file_id = '0';
        $.ajax({
          type: "POST",
          url: "budget_setting/budget_letter_add/",
          data: { "division_id": division_id, "district_id": district_id, "upazila_id" : upazila_id, "union_id" : union_id, "office_id" : office_id, "budget_fiscal_year_id" : budget_fiscal_year_id, "budget_file_id" : budget_file_id },
          success: function(data)
            {

            }
          });
      });
    });

function loadOffices(data){
   $.each(data,function(id,name)
    {
      var opt = $('<option />');
      opt.val(id);
      opt.text(name);
      $('.office_val').append(opt);
    });
}
</script>

<script>
      setTimeout(function() {
        $('#mydivdanger').fadeOut('fast');
      }, 4000); // <-- time in milliseconds

      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    function printSpecificContents(id)
    {
          var divContents = document.getElementById(id).innerHTML;
          var printWindow = window.open('', '', 'height=800,width=1000');
          printWindow.document.write(divContents);

          printWindow.print();

    }
</script>

<script type="text/javascript">
  function subTotal(sl, sl2){
      var sum = 0;
      $(".sum_"+sl).each(function(){
          sum += +$(this).val();
      });

      $("#sum_"+sl).val(sum);

      var extra = $(".before_extra_"+sl2).val()-0;
      var budget = $(".single_"+sl2).val()-0;
      var after_extra = extra-budget;

      if(extra<budget){
          alert('বাজেট লিমিটেড ।');
          $(".single_"+sl2).val(0);
          var extra = $(".before_extra_"+sl2).val()-0;
          var budget = $(".single_"+sl2).val()-0;
          var after_extra = extra-budget;
      }

      $(".after_extra_"+sl2).val(after_extra);

      var extra = 0;
      $(".after_extra").each(function(){
          extra += +$(this).val();
      });
      $("#after_extra").val(extra);

      var sum = 0;
      $(".sum").each(function(){
          sum += +$(this).val();
      });
      $("#sum").val(sum);
      
  }
  
</script>

<script type="text/javascript">
  $(".sum").on("keyup", function() {
    var sum = 0;
    $(".sum").each(function(){
        sum += +$(this).val();
    });
    $("#sum").val(sum);
    var bangla_converted_number=en2bn(sum);
    var convert_in_word =convertNumberToWords(sum);
    $("#total-amount").html(bangla_converted_number + ' ('+convert_in_word+')');
    $(".edit-text").val($(".default-text").html());

    var extra = 0;
    $(".after_extra").each(function(){
        extra += +$(this).val();
    });
    $("#after_extra").val(extra);
  });
</script>

<script type="text/javascript">
  $(".edit-text").on("keyup", function() {
      $(".default-text").html($(".edit-text").val());
  });

  function en2bn(sum){
    var finalEnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};
 
    String.prototype.getDigitBanglaFromEnglish = function() {
        var retStr = this;
        for (var x in finalEnlishToBanglaNumber) {
             retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
        }
        return retStr;
    };
     
    var english_number=String(sum);
     
    var bangla_converted_number=english_number.getDigitBanglaFromEnglish();

    return bangla_converted_number;
  }

</script>


<!-- Privious year calculation -->
<script type="text/javascript">
  function subreceived(sl, sl2){
      var remaining=$(".received_"+sl2).val()-$(".expenditure_"+sl2).val();
      $(".remaining_"+sl2).val(remaining);

      var sub_received = 0;
      $(".received_"+sl).each(function(){
          sub_received += +$(this).val();
      });

      $("#received_"+sl).val(sub_received);

      var sub_remaining=$("#received_"+sl).val()-$("#expenditure_"+sl).val();
      $("#remaining_"+sl).val(sub_remaining);


      var total_received = 0;
      $(".received").each(function(){
          total_received += +$(this).val();
      });

      $("#received").val(total_received);

      var total_remaining=$("#received").val()-$("#expenditure").val();
      $("#remaining").val(total_remaining);
      
  }

  function subexpenditure(sl, sl2){
      var remaining=$(".received_"+sl2).val()-$(".expenditure_"+sl2).val();
      $(".remaining_"+sl2).val(remaining);

      var sub_received = 0;
      $(".expenditure_"+sl).each(function(){
          sub_received += +$(this).val();
      });

      $("#expenditure_"+sl).val(sub_received);

      var sub_remaining=$("#received_"+sl).val()-$("#expenditure_"+sl).val();
      $("#remaining_"+sl).val(sub_remaining);


      var total_received = 0;
      $(".expenditure").each(function(){
          total_received += +$(this).val();
      });

      $("#expenditure").val(total_received);

      var total_remaining=$("#received").val()-$("#expenditure").val();
      $("#remaining").val(total_remaining);
      
  }

  function update() {
    $("#notification_div").html('Loading..'); 
    $.ajax({
      type: 'GET',
      url: '',
      timeout: 2000,
      success: function(data) {
        //console.log(data);
        //$("#some_div").html(data);
        $("#notification_div").html(''); 
        window.setTimeout(update, 10000);
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        $("#notification_div").html('Timeout contacting server..');
        window.setTimeout(update, 60000);
      }
  });
}

 $(document).ready(function () {
    $('.memorandum_no').bind('keydown', function(e){

        var num = this.value;

        if(e.keyCode== 32){
          e.preventDefault();
        }

        if(e.key!= 0 && e.key != 1 && e.key!= 2 && e.key!= 3 && e.key!= 4 && e.key!= 5 && e.key!= 6 && e.key!= 7 && e.key!= 8 && e.key!= 9 && e.keyCode!= 8 && e.keyCode!= 9 && e.keyCode!= 16 && e.keyCode!= 37 && e.keyCode!= 38 && e.keyCode!= 39 && e.keyCode!= 40){
          e.preventDefault();
        }

        if(num.length >= 5 && e.keyCode!= 8 && e.keyCode!= 9 && e.keyCode!= 16 && e.keyCode!= 37 && e.keyCode!= 38 && e.keyCode!= 39 && e.keyCode!= 40){
          e.preventDefault();
        }

    });
    // update();
  });

</script>

<script language="javascript" type="text/javascript">
     $(window).load(function() {
       $('#loading').hide();
    });

    function convertNumberToWords(amount) {
        var words = new Array();
        words[0] = '';
        words[1] = 'One';
        words[2] = 'Two';
        words[3] = 'Three';
        words[4] = 'Four';
        words[5] = 'Five';
        words[6] = 'Six';
        words[7] = 'Seven';
        words[8] = 'Eight';
        words[9] = 'Nine';
        words[10] = 'Ten';
        words[11] = 'Eleven';
        words[12] = 'Twelve';
        words[13] = 'Thirteen';
        words[14] = 'Fourteen';
        words[15] = 'Fifteen';
        words[16] = 'Sixteen';
        words[17] = 'Seventeen';
        words[18] = 'Eighteen';
        words[19] = 'Nineteen';
        words[20] = 'Twenty';
        words[30] = 'Thirty';
        words[40] = 'Forty';
        words[50] = 'Fifty';
        words[60] = 'Sixty';
        words[70] = 'Seventy';
        words[80] = 'Eighty';
        words[90] = 'Ninety';
        amount = amount.toString();
        var atemp = amount.split(".");
        var number = atemp[0].split(",").join("");
        var n_length = number.length;
        var words_string = "";
        if (n_length <= 9) {
            var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
            var received_n_array = new Array();
            for (var i = 0; i < n_length; i++) {
                received_n_array[i] = number.substr(i, 1);
            }
            for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                n_array[i] = received_n_array[j];
            }
            for (var i = 0, j = 1; i < 9; i++, j++) {
                if (i == 0 || i == 2 || i == 4 || i == 7) {
                    if (n_array[i] == 1) {
                        n_array[j] = 10 + parseInt(n_array[j]);
                        n_array[i] = 0;
                    }
                }
            }
            value = "";
            for (var i = 0; i < 9; i++) {
                if (i == 0 || i == 2 || i == 4 || i == 7) {
                    value = n_array[i] * 10;
                } else {
                    value = n_array[i];
                }
                if (value != 0) {
                    words_string += words[value] + " ";
                }
                if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Crores ";
                }
                if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Lakhs ";
                }
                if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Thousand ";
                }
                if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                    words_string += "Hundred and ";
                } else if (i == 6 && value != 0) {
                    words_string += "Hundred ";
                }
            }
            words_string = words_string.split("  ").join(" ");
        }
        return words_string;
    }

</script>

<!-- <script language="javascript">
  document.onkeydown = function(e) {
      if(event.keyCode == 123) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
         return false;
      }
  }
  
  $(document).bind("contextmenu",function(e) { 
    e.preventDefault();
   
  });

</script> -->

</body>
</html>