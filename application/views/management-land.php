<?php //print_r($username);exit; ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <link rel="icon" type="image/ico" href="<?=base_url()?>awedget/assets/img/mysoft-logo.png"/>

  <title>ERP | Loopdot Fahion Ltd.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="Mysoftheaven (BD) Ltd." name="author" />

  <link href="<?=base_url()?>awedget/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?=base_url()?>awedget/assets/plugins/jquery-superbox/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?php echo base_url(); ?>js/calendar/fullcalendar.min.css" rel='stylesheet' />
<link href="<?php echo base_url(); ?>js/calendar/fullcalendar.print.min.css" rel='stylesheet' media='print' />
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
  <link href="<?=base_url()?>awedget/assets/css/dashboard.css" rel="stylesheet" >

  <!-- BEGIN CSS TEMPLATE -->
  <link href="<?=base_url()?>awedget/assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="<?=base_url()?>awedget/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
  <link href="<?=base_url()?>awedget/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
  <script src="<?=base_url()?>awedget/assets/plugins/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>js/highcharts.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>js/highcharts-more.js" type="text/javascript"></script>
  <script type="text/javascript">var hostname='<?=base_url()?>';</script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head> <!-- END HEAD -->

<body class="">
    
<style type="text/css">
  html, body {
    background-color: #f4f6f9 !important;
    overflow: hidden !important;
    margin: 0 !important;
    padding: 0 !important;
  }
  .content {
    background-color: #f4f6f9 !important;
    padding: 10px 12px 0 12px !important;
    margin: 0 !important;
  }
  .tiles.white {
    background-color: #ffffff !important;
    border-radius: 6px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.07) !important;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .tiles.white:hover {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
  }
  .tiles.added-margin {
    margin-right: -5px !important;
    margin-bottom: 5px !important;
  }
  .field .tiles .tiles-body {
    padding: 8px 10px 5px 10px !important;
  }
  .field .tiles .tiles-title {
    font-size: 12px !important;
    font-weight: 600;
    margin-bottom: 2px !important;
    height: auto !important;
    color: #9424b8 !important;
    line-height: 15px !important;
  }
  .field .tiles .heading {
    font-size: 18px !important;
    line-height: 20px !important;
    margin-bottom: 0 !important;
  }
  .field .triangle-up {
    border-left: 30px solid transparent !important;
    border-bottom: 30px solid #9424b8 !important;
  }
  .filter-bar-container {
    margin-left: 0 !important;
    margin-right: 0 !important;
    margin-bottom: 5px !important;
  }
  .filter-bar-box {
    border-radius: 6px;
    padding: 4px 12px !important;
    box-shadow: 0 1px 5px rgba(0,0,0,0.07) !important;
    border-left: 4px solid #9424b8;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 6px;
    background: #fff;
  }
  .new {
    border-radius: 6px;
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.08) !important;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    margin-bottom: 6px !important;
  }
  .new:hover {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.12) !important;
  }
  .new .tiles-body {
    padding: 8px 14px 6px 14px !important;
  }
  .new .tiles-title {
    height: auto !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    margin-bottom: 4px !important;
    line-height: 18px !important;
  }
  .new .heading {
    width: 140px !important;
    padding: 3px 8px !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    margin-left: -18px !important;
    border-radius: 0 14px 14px 0px !important;
    margin-bottom: 5px !important;
  }
  .report-table tr td {
    padding: 2px 0 !important;
    font-size: 14px !important;
    line-height: 19px !important;
    color: #444;
  }
  .report-table tr td:first-child {
    font-weight: 600;
  }
  .report-table tr td:last-child {
    font-weight: 700;
    font-size: 14px !important;
  }
  .report-table .sub-mark {
    font-size: 14px !important;
    font-weight: 600;
    padding: 0 5px !important;
  }
  .new .triangle-up {
    border-left: 36px solid transparent !important;
    border-bottom: 36px solid !important;
  }
  .new1 .triangle-up {
    border-bottom-color: #9424b8 !important;
  }
  .new2 .triangle-up {
    border-bottom-color: #00adef !important;
  }
  .new3 .triangle-up {
    border-bottom-color: #78c72f !important;
  }
  .new4 .triangle-up {
    border-bottom-color: #ff940b !important;
  }
  .spacing-bottom {
    margin-bottom: 5px !important;
  }
</style>

  <?php
          $all_emp = $values["all_emp"];
          $all_present = $values["all_present"];
          $all_absent = $values["all_absent"];
          $all_male = $values["all_male"];
          $all_female = $values["all_female"];
          $all_late = $values["all_late"];
          $all_leave = $values["all_leave"];

          $monthly_join_id = $values["monthly_join_id"];
          $monthly_resign_id = $values["monthly_resign_id"];
          $monthly_left_id = $values["monthly_left_id"];
          $salary = $values["salary"];
          $ot = $values["ot"];
          $att_bonus = $values["att_bonus"];
          $day_1 = $values["day_1"];
          $day_2 = $values["day_2"];
          $day_3 = $values["day_3"];
          $day_4 = $values["day_4"];
          $day_5 = $values["day_5"];
          $day_6 = $values["day_6"];
          $day_7 = $values["day_7"];
          $all_present_2 = $values["all_present_2"];
          $all_present_3 = $values["all_present_3"];
          $all_present_4 = $values["all_present_4"];
          $all_present_5 = $values["all_present_5"];
          $all_present_6 = $values["all_present_6"];
          $all_present_7 = $values["all_present_7"];

          $all_absent_2 = $values["all_absent_2"];
          $all_absent_3 = $values["all_absent_3"];
          $all_absent_4 = $values["all_absent_4"];
          $all_absent_5 = $values["all_absent_5"];
          $all_absent_6 = $values["all_absent_6"];
          $all_absent_7 = $values["all_absent_7"];

         ?>

    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->    
    <div class="content">

        <!-- Page Header -->
        <div class="page-title-box" style="margin-bottom: 8px; padding-left: 2px;">
          <h3 style="margin: 0; font-size: 17px; font-weight: 700; color: #450D3C; display: inline-flex; align-items: center; gap: 7px; letter-spacing: -0.2px;">
            <i class="fa fa-tachometer" style="color: #9424b8; font-size: 18px;"></i> Dashboard
          </h3>
        </div>

        <div id="container" class="field">
          <div class="row spacing-bottom 2col">
             <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin">
                <div class="tiles-body">
                  <div class="tiles-title">Total Department</div>
                  <div class="heading" style="text-align: center;">
                    <span class="" data-value="" data-animation-duration="1200">
                      <?php 
                         $this->db->select('*');
                         $this->db->from('pr_dept');
                         echo $query = $this->db->get()->num_rows();
                      ?>
                    </span>
                  </div>
                  <div class="description"></div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin">
                <div class="tiles-body">
                  
                  <div class="tiles-title">Total Section</div>
                  <div class="heading" style="text-align: center;">
                  <span class="" data-value="" data-animation-duration="1200" >
                    <?php 
                      $this->db->select('*');
                      $this->db->from('pr_section');
                      echo $query = $this->db->get()->num_rows();
                    ?>
                  </span>
                  </div>
                  <div class="description">
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin">
                <div class="tiles-body">
                  
                  <div class="tiles-title"> Total Designation </div>
                  <div class="heading" style="text-align: center;">
                  <span class="" data-value="" data-animation-duration="1000">
                    <?php 
                      $this->db->select('*');
                      $this->db->from('pr_designation');
                      echo $query = $this->db->get()->num_rows();
                     ?>
                  </span>
                  </div>
                  <div class="description">
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom">
              <div class="tiles white added-margin">
                <div class="tiles-body">
                  
                  <div class="tiles-title">Total Line</div>
                  <div class="heading" style="text-align: center;">
                    <span class="" data-value="" data-animation-duration="1200" >
                      <?php 
                        $this->db->select('*');
                        $this->db->from('pr_line_num');
                        $query = $this->db->get()->num_rows();
                         echo $gtotal_line = $query - 1;
                       ?>
                    </span>
                  </div>
                  <div class="description"></div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="container">
          <!-- Date Filter for Daily Total Manpower & Daily Attendance -->
          <div class="row filter-bar-container">
            <div class="col-md-12" style="padding-left: 0; padding-right: 0;">
              <div class="tiles white added-margin filter-bar-box">
                <div style="display: flex; align-items: center; gap: 8px;">
                  <i class="fa fa-calendar-check-o" style="font-size: 20px; color: #9424b8;"></i>
                  <div>
                    <span style="font-size: 14px; font-weight: 700; color: #450D3C;">Daily Manpower & Attendance Filter</span>
                    <span id="badge_selected_date_mgmt" style="background: #f3e5f5; color: #7b1fa2; font-weight: 600; padding: 2px 8px; border-radius: 10px; font-size: 12px; margin-left: 6px;">
                      Selected Date: <strong id="filter_date_label_mgmt"><?=date('d M Y', strtotime($report_date))?></strong>
                    </span>
                  </div>
                </div>
                <div style="display: flex; align-items: center; gap: 6px;">
                  <button type="button" id="btn_attendance_summary_mgmt" class="btn btn-success" style="background: #2e7d32; border-color: #2e7d32; color: #ffffff; height: 30px; font-weight: bold; font-size: 12px; padding: 0 12px; border-radius: 4px; margin-right: 6px; display: inline-flex; align-items: center; gap: 5px;" title="View Section-wise Attendance Summary">
                    <i class="fa fa-file-text-o"></i> Attendance Summary
                  </button>
                  <label for="filter_date_mgmt" style="margin: 0; font-weight: 600; color: #333; font-size: 12px;">Select Date:</label>
                  <div class="input-group" style="width: 140px; margin-bottom: 0;">
                    <input type="text" id="filter_date_mgmt" name="filter_date" class="form-control" value="<?=date('Y-m-d', strtotime($report_date))?>" placeholder="YYYY-MM-DD" style="height: 30px; font-weight: bold; font-size: 12px; text-align: center; border: 1px solid #9424b8; border-radius: 4px 0 0 4px; background: #fff; cursor: pointer; padding: 2px 5px;" readonly>
                    <span class="input-group-addon" id="btn_cal_addon_mgmt" style="background: #9424b8; color: #fff; border: 1px solid #9424b8; border-radius: 0 4px 4px 0; cursor: pointer; padding: 4px 8px;">
                      <i class="fa fa-calendar" style="font-size: 12px;"></i>
                    </span>
                  </div>
                  <button type="button" id="btn_run_filter_mgmt" class="btn btn-primary" style="background: #9424b8; border-color: #9424b8; height: 30px; font-weight: bold; font-size: 12px; padding: 0 12px; border-radius: 4px;">
                    <i class="fa fa-filter"></i> Filter
                  </button>
                  <span id="filter_loading_spinner_mgmt" style="display: none; color: #9424b8; margin-left: 4px;">
                    <i class="fa fa-spinner fa-spin"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="row spacing-bottom 2col">
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin new new1" id="card_manpower_mgmt">
                <div class="tiles-body">
                  <div class="tiles-title">
                    Daily Total Manpower
                    <span class="pull-right" style="font-size: 11px; font-weight: 600; color: #9424b8;" id="manpower_date_text_mgmt">(<?=date('d M Y', strtotime($report_date))?>)</span>
                  </div>
                  <div class="heading">
                    <span class="" data-value="" data-animation-duration="1200">Manpower</span>
                  </div>
                  
                  <div style="border-bottom:1px solid #eee; margin-bottom: 6px"></div>
                  <div class="description">
                    <table class="report-table">
                      <tr>
                        <td>Total Employee</td>
                        <td class="sub-mark">:</td>
                        <td id="val_all_emp_mgmt"><?=$all_emp?></td>
                      </tr>
                      <tr>
                        <td>Total Male</td>
                        <td class="sub-mark">:</td>
                        <td id="val_all_male_mgmt"><?=$all_male?></td>
                      </tr>
                      <tr>
                        <td>Total Female</td>
                        <td class="sub-mark">:</td>
                        <td id="val_all_female_mgmt"><?=$all_female?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
              <div class="tiles white added-margin new new2" id="card_attendance_mgmt">
                <div class="tiles-body">
                 
                  <div class="tiles-title">
                    Daily Attendance
                    <span class="pull-right" style="font-size: 11px; font-weight: 600; color: #00adef;" id="attendance_date_text_mgmt">(<?=date('d M Y', strtotime($report_date))?>)</span>
                  </div>
                  <div class="heading ">
                    <span class="" data-value="" data-animation-duration="1000">Atten. Status</span>
                  </div>
                  
                  <div style="border-bottom:1px solid #eee; margin-bottom: 6px"></div>
                  <div class="description">
                    <table class="report-table report-tabe2">
                      <tr>
                        <td>Present</td>
                        <td class="sub-mark">:</td>
                        <td id="val_all_present_mgmt"><?= $all_present?></td>
                      </tr>
                      <tr>
                        <td>Absent</td>
                        <td class="sub-mark">:</td>
                        <td id="val_all_absent_mgmt"><?= $all_absent?></td>
                      </tr>
                      <tr>
                        <td>Leave</td>
                        <td class="sub-mark">:</td>
                        <td id="val_all_leave_mgmt"><?= $all_leave?></td>
                      </tr>
                      <tr>
                        <td>Late</td>
                        <td class="sub-mark">:</td>
                        <td id="val_all_late_mgmt"><?= $all_late?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom">
              <div class="tiles white added-margin new new3">
                <div class="tiles-body">
                  <div class="tiles-title">Monthly Employee Status</div>
                  <div class="heading">
                    <span class="" data-value="" data-animation-duration="1200">Monthly Status</span>
                  </div>
                  
                  <div style="border-bottom:1px solid #eee; margin-bottom: 6px"></div>
                  <div class="description">
                    <table class="report-table">
                      <tr>
                        <td>New Join</td>
                        <td class="sub-mark">:</td>
                        <td><?=$monthly_join_id?></td>
                      </tr>
                      <tr>
                        <td>Resign</td>
                        <td class="sub-mark">:</td>
                       <td><?=$monthly_resign_id?></td>
                      </tr>
                      <tr>
                        <td>Lefty</td>
                        <td class="sub-mark">:</td>
                        <td><?=$monthly_left_id?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="tiles white added-margin new new4">
                <div class="tiles-body">
                  
                  <div class="tiles-title">Last Month Salary Expense</div>
                  <div class="row-fluid ">
                    <div class="heading">
                      <span class="" data-value="" data-animation-duration="700">Previous Status</span>
                    </div>
                  </div>
                  <div style="border-bottom:1px solid #eee; margin-bottom: 6px"></div>
                  <div class="description">
                    <table class="report-table">
                      <tr>
                        <td>Salary</td>
                        <td class="sub-mark">:</td>
                        <td><?=$salary?></td>
                      </tr>
                      <tr>
                        <td>Over Time</td>
                        <td class="sub-mark">:</td>
                        <td><?=$ot?></td>
                      </tr>
                      <tr>
                        <td>Attn.Bonus</td>
                        <td class="sub-mark">:</td>
                        <td><?=$att_bonus?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="triangle-up"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div id="piechart" style=""></div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div id='weekly_attn' style="margin-bottom: 10px; padding: 0px; position: relative;">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
              <div id='myChart2' style="margin-bottom: 10px; padding: 0px; width: 102%; position: relative;">
                </div>
            </div>
            <div class="col-md-5 col-sm-12" style="">
              <div style="background: #fff;height: 285px;overflow: hidden;">
                <!-- <blink>Another Option Reminder</blink> -->
                <div id="calendar"></div>
              </div>
            </div>
        </div>
        <div class="row spacing-bottom 2col">
              <div class="col-md-4 col-sm-6">
                <div class="tiles green added-margin">
                  <div class="tiles-body">
                    <div class="tiles-title">Another Option</div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700"></span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                          <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট ব্যয়</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="tiles blue added-margin">
                  <div class="tiles-body">

                    <div class="tiles-title"> Another Option </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700"></span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                           <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট ব্যয়</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="tiles light-blue added-margin">
                  <div class="tiles-body">

                    <div class="tiles-title"> Another </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700"></span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                           <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট ব্যয়</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="tiles light-green added-margin">
                  <div class="tiles-body">

                    <div class="tiles-title"> Another Option </div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700"></span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                           <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট ব্যয়</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="tiles dark-purple added-margin">
                  <div class="tiles-body">
                    <div class="tiles-title">Another Option</div>
                    <div class="row-fluid">
                      <div class="heading"> <span class="" data-value="" data-animation-duration="700"></span> </div>
                    </div>
                    <div class="description">
                        <table class="report-table">
                          <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট প্রাক্কলন</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">মোট ব্যয়</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                          <tr>
                            <th class="text-left" style="visibility:hidden;">অবশিষ্ট বরাদ্দ</th>
                            <td class="sub-mark" style="visibility:hidden;">:</td>
                            <td class="text-left"></td>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
              <div class="tiles purple added-margin">
                <div class="tiles-body">
                  <div class="tiles-title"> Another Option </div>
                  <div class="row-fluid">
                    <div class="heading"> <span class="" data-value="" data-animation-duration="700"></span> </div>
                  </div>
                  <div class="description">
                      <table class="report-table">
                        <tr>
                          <th class="text-left" style="visibility:hidden;">অবশিষ্ট প্রাক্কলন</th>
                          <td class="sub-mark" style="visibility:hidden;">:</td>
                          <td class="text-left"></td>
                        </tr>
                        <tr>
                          <th class="text-left" style="visibility:hidden;">মোট বরাদ্দ</th>
                          <td class="sub-mark" style="visibility:hidden;">:</td>
                          <td class="text-left">
                      
                          </td>
                        </tr>
                        <tr>
                          <th class="text-left" style="visibility:hidden;">মোট ব্যয়</th>
                          <td class="sub-mark" style="visibility:hidden;">:</td>
                          <td class="text-left">
                            
                          </td>
                        </tr>
                        <tr>
                          <th class="text-left" style="visibility:hidden;">অবশিষ্ট বরাদ্দ</th>
                          <td class="sub-mark" style="visibility:hidden;">:</td>
                          <td class="text-left"></td>
                        </tr>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>


  
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
<script src="<?php echo base_url(); ?>js/calendar/moment.min.js"></script>
<script src="<?php echo base_url(); ?>js/calendar/fullcalendar.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?=base_url()?>awedget/assets/js/messages_notifications.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS --> 
<script src="<?=base_url()?>awedget/assets/js/core.js" type="text/javascript"></script> 
<!-- <script src="<?=base_url()?>awedget/assets/js/chat.js" type="text/javascript"></script>  -->
<script src="<?=base_url()?>awedget/assets/js/demo.js" type="text/javascript"></script> 
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
  zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
  ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>
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

<script type="text/javascript">
Highcharts.chart('piechart', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Daily Attendance Percentage With Graph'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
        style: {
          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
        }
      }
    }
  },
  series: [{
    name: 'Brands',
    colorByPoint: true,
    data: [{
      name: 'Present',
      y: <?php echo $all_present;?>,
      sliced: true,
      selected: true
    }, {
      name: 'Absent',
      y: <?php echo $all_absent;?>
    }]
  }]
});
</script>

<script type="text/javascript">
                      
    var myConfig2 = {
       
        "type": "bar",
        title: {
          text: "Monthly Present Status",
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
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
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
                  parseInt("29.9"),
                  parseInt("71.5"),
                  parseInt("106.4"),
                  parseInt("129.2"),
                  parseInt("144.0"),
                  parseInt("176.0"),

                  parseInt("135.6"),
                  parseInt("148.5"),
                  parseInt("216.4"),
                  parseInt("194.1"),
                  parseInt("95.6"),
                  parseInt("54.4")
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

  <script type="text/javascript">
  
Highcharts.chart('weekly_attn', {
  chart: {
    type: 'areaspline'
  },
  title: {
    text: 'Weekly Attendance With Graph'
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    verticalAlign: 'top',
    x: 150,
    y: 100,
    floating: true,
    borderWidth: 1,
    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
  },
  xAxis: {
    categories: [
      '<?php echo $day_7; ?>',
      '<?php echo $day_6; ?>',
      '<?php echo $day_5; ?>',
      '<?php echo $day_4; ?>',
      '<?php echo $day_3; ?>',
      '<?php echo $day_2; ?>',
      '<?php echo $day_1; ?>'
    ],
    plotBands: [{ // visualize the weekend
      from: 4.5,
      to: 6.5,
      color: 'rgba(68, 170, 213, .2)'
    }]
  },
  yAxis: {
    title: {
      text: 'Weekly Attendance'
    }
  },
  tooltip: {
    shared: true,
    valueSuffix: ' units'
  },
  credits: {
    enabled: false
  },
  plotOptions: {
    areaspline: {
      fillOpacity: 0.5
    }
  },
  series: [{
    name: 'Present',
    data: [<?php echo $all_present_7.','.$all_present_6.','.$all_present_5.','.$all_present_4.','.$all_present_3.','.$all_present_2.','.$all_present;?>]
  }, {
    name: 'Absent',
    data: [<?php echo $all_absent_7.','.$all_absent_6.','.$all_absent_5.','.$all_absent_4.','.$all_absent_3.','.$all_absent_2.','.$all_absent;?>]
  }]
});
</script>

<script type="text/javascript">
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultDate: '2019-03-07',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-07'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-07T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-07T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-07',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-07T10:30:00',
          end: '2019-03-07T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-07T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-07T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-07T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-07T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-07T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-07'
        }
      ]
    });

  });
</script>

<script type="text/javascript">
$(document).ready(function() {
  if ($.fn.datepicker) {
    $('#filter_date_mgmt').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      todayHighlight: true
    }).on('changeDate', function(e) {
      applyAttendanceDateFilterMgmt();
    });
  }

  $('#btn_cal_addon_mgmt').on('click', function() {
    $('#filter_date_mgmt').focus();
  });

  $('#btn_run_filter_mgmt').on('click', function() {
    applyAttendanceDateFilterMgmt();
  });

  $('#filter_date_mgmt').on('change', function() {
    applyAttendanceDateFilterMgmt();
  });

  function applyAttendanceDateFilterMgmt() {
    var selectedDate = $('#filter_date_mgmt').val();
    if (!selectedDate) {
      return;
    }

    $('#filter_loading_spinner_mgmt').show();
    $('#btn_run_filter_mgmt').prop('disabled', true);
    $('#card_manpower_mgmt, #card_attendance_mgmt').css({
      'opacity': '0.5',
      'transition': 'opacity 0.2s'
    });

    $.ajax({
      url: '<?=base_url()?>index.php/payroll_con/get_attendance_summary_ajax',
      type: 'POST',
      data: {
        filter_date: selectedDate
      },
      dataType: 'json',
      success: function(res) {
        $('#filter_loading_spinner_mgmt').hide();
        $('#btn_run_filter_mgmt').prop('disabled', false);
        $('#card_manpower_mgmt, #card_attendance_mgmt').css('opacity', '1');

        if (res && res.status === 'success') {
          $('#val_all_emp_mgmt').text(res.all_emp);
          $('#val_all_male_mgmt').text(res.all_male);
          $('#val_all_female_mgmt').text(res.all_female);

          $('#val_all_present_mgmt').text(res.all_present);
          $('#val_all_absent_mgmt').text(res.all_absent);
          $('#val_all_leave_mgmt').text(res.all_leave);
          $('#val_all_late_mgmt').text(res.all_late);

          $('#filter_date_label_mgmt').text(res.filter_date_formatted);
          $('#manpower_date_text_mgmt').text('(' + res.filter_date_formatted + ')');
          $('#attendance_date_text_mgmt').text('(' + res.filter_date_formatted + ')');
        }
      },
      error: function(xhr, status, error) {
        $('#filter_loading_spinner_mgmt').hide();
        $('#btn_run_filter_mgmt').prop('disabled', false);
        $('#card_manpower_mgmt, #card_attendance_mgmt').css('opacity', '1');
        console.error('Attendance filter AJAX error:', error);
      }
    });
  }

  // Attendance Summary POST report handler (Section wise in New Window)
  $('#btn_attendance_summary_mgmt').on('click', function(e) {
    e.preventDefault();
    var selectedDate = $('#filter_date_mgmt').val();
    if (!selectedDate) {
      selectedDate = '<?=date("Y-m-d", strtotime($report_date))?>';
    }

    var windowName = 'AttendanceSummary_' + new Date().getTime();
    var windowFeatures = 'width=1150,height=750,menubar=yes,toolbar=yes,location=no,status=yes,scrollbars=yes,resizable=yes';
    window.open('', windowName, windowFeatures);

    var form = $('<form>', {
      'action': '<?=base_url()?>index.php/mars_con/daily_attendance_summary',
      'method': 'POST',
      'target': windowName
    });

    form.append($('<input>', {
      'type': 'hidden',
      'name': 'report_date',
      'value': selectedDate
    }));

    form.append($('<input>', {
      'type': 'hidden',
      'name': 'grid_date',
      'value': selectedDate
    }));

    form.append($('<input>', {
      'type': 'hidden',
      'name': 'category',
      'value': 'Section'
    }));

    form.append($('<input>', {
      'type': 'hidden',
      'name': 'unit_id',
      'value': '<?=isset($unit_id) && !empty($unit_id) ? $unit_id : 1?>'
    }));

    $('body').append(form);
    form.submit();
    form.remove();
  });
});
</script>

</body>
</html>