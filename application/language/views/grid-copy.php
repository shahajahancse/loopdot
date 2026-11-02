<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MSH Payroll Reports</title>

	<link href="<?=base_url()?>awedget/assets/plugins/boostrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=base_url()?>awedget/assets/plugins/boostrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>themes/redmond/jquery-ui-1.8.2.custom.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>themes/ui.jqgrid.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/calendar.css"/>

	<script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/jquery.jqGrid.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/grid_content.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/calendar_eu.js" type="text/javascript"></script>
	<script>
    $(function(){
            $( ".clearfix" ).dialog({
                autoOpen: false,
                height: 370,
                width: 300,
                resizable: false,
                modal: true
            });

            $(".ui-dialog-titlebar").hide();

        });
    </script>
	<style>
		.select-date {
			border: 1px solid #d6d5cf;
			padding: 10px;
			margin-right: 15px;
			margin-left: 15px;
		}
		.select-date .form-group-sm .form-control{
			height: 25px !important;
		}

		.category-option {
			padding: 10px;
			margin-right: 15px;
			margin-left: 15px;
		}

		.category-option fieldset {
			border: 1px solid silver !important;
		}
		.category-option legend {
			width: 150px;
			padding: 2px;
			margin-left: calc(10% - 55px - 8px);
			margin-bottom: 2px;
			font-size: 16px;
			font-weight: bold;
		}
		.category-fields{
			padding-right: 15px;
			padding-left: 15px;
		}

		.category-fields .form-group-sm .form-control {
			height: 25px !important;
			padding: 5px !important;
			font-size: 12px;
			line-height: 1.5;
			border-radius: 3px;
		}

		/* Tabs section  */
		/* Tabs section  */

	</style>

</head>
<body bgcolor="#ECE9D8">
	<div style=" margin:0 auto; width:1200px; min-height:555px; overflow:hidden;">
		<div style="float:left; overflow:hidden; width:65%; height:auto; padding:10px;">
			<form name="grid" target="_blank">
				<div style="margin-top-10px">
					<div class="row select-date" align="left">
						<div class="col-md-6 form-inline">
							<div class="form-group form-group-sm">
								<label class="control-label">First Date : </label>
								<input class="form-control" name="firstdate" id="firstdate" type="text" style="width:100px;">
								<span>
									<script language="JavaScript">
										var o_cal = new tcal ({
											// form name
											'formname': 'grid',
											// input name
											'controlname': 'firstdate'
										});
										// individual template parameters can be modified via the calendar variable
										o_cal.a_tpl.yearscroll = false;
										o_cal.a_tpl.weekstart = 6;

									</script>
								</span>
							</div>
						</div>
						<div class="col-md-6 form-inline">
							<div class="form-group form-group-sm">
								<label class="control-label">Second Date : </label>
								<input class="form-control" name="seconddate" id="seconddate" type="text" style="width:100px;">
								<span>
									<script language="JavaScript">
										var o_cal = new tcal ({
											// form name
											'formname': 'grid',
											// input name
											'controlname': 'seconddate'
										});

										// individual template parameters can be modified via the calendar variable
										o_cal.a_tpl.yearscroll = false;
										o_cal.a_tpl.weekstart = 6;

									</script>
								</span>
							</div>
						</div>

						<div class="col-md-6 form-inline" style="padding-top:10px">
							<div class="form-group form-group-sm">
								<label class="control-label">First Time : </label>
								<input class="form-control" name="f_time" id="f_time" type="text" style="width:100px;">
							</div>
						</div>
						<div class="col-md-6 form-inline" style="padding-top:10px">
							<div class="form-group form-group-sm">
								<label class="control-label">Second Time : </label>
								<input class="form-control" name="s_time" id="s_time" type="text" style="width:100px;">
							</div>
						</div>
					</div>

					<div class="row category-option">
						<fieldset>
							<legend>Category Options</legend>
							<div class="row category-fields">
								<div class="col-md-6 form-inline">
									<div class="form-group form-group-sm">
										<label class="control-label">Unit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </label>
										<?php
											$this->load->model('common_model');
											$unit = $this->common_model->get_unit_id_name();
											$units = $unit->result();
										?>
										<select class="form-control" name='grid_start' id='grid_start' style="width:250px;" onchange='grid_get_all_data()' />
											<option value='Select'>Select</option>
											<?php foreach ($units as $value) { ?>
												<option value="<?php echo $value->unit_id; ?>"><?php echo $value->unit_name; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 form-inline">
									<div class="form-group form-group-sm">
										<label class="control-label">Dept. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </label>
										<select class="form-control" id='grid_dept' name='grid_dept' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select>
									</div>
								</div>

								<div class="col-md-6 form-inline" style="padding-top:6px">
									<div class="form-group form-group-sm">
										<label class="control-label">Section &nbsp;:&nbsp; </label>
										<select class="form-control" id='grid_section' name='grid_section' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select>
									</div>
								</div>
								<div class="col-md-6 form-inline" style="padding-top:6px">
									<div class="form-group form-group-sm">
										<label class="control-label">Line &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </label>
										<select class="form-control" id='grid_line' name='grid_line' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select>
									</div>
								</div>

								<div class="col-md-6 form-inline" style="padding-top:6px">
									<div class="form-group form-group-sm">
										<label class="control-label">Desig. &nbsp;&nbsp;&nbsp;:&nbsp;</label>
										<select class="form-control" id='grid_desig' name='grid_desig' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select>
									</div>
								</div>
								<div class="col-md-6 form-inline" style="padding-top:6px">
									<div class="form-group form-group-sm">
										<label class="control-label">Sex &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;</label>
										<select class="form-control" id='grid_sex' name='grid_sex' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></select>
									</div>
								</div>

								<div class="col-md-6 form-inline" style="padding-top:6px; padding-bottom:10px">
									<div class="form-group form-group-sm">
										<label class="control-label">Status &nbsp;&nbsp;&nbsp;:&nbsp; </label>
										<select class="form-control" id='grid_status' name='grid_status' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select>
									</div>
								</div>
								<div class="col-md-6 form-inline" style="padding-top:6px; padding-bottom:10px">
									<div class="form-group form-group-sm">
										<label class="control-label">Position :&nbsp; </label>
										<select class="form-control" id='grid_position' name='grid_position' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select>
									</div>
								</div>
							</div>
						</fieldset>
					</div>


					<!-- <fieldset style=''><legend><font size='+1'><b>Date</b></font></legend> -->
					<!-- <table class="table"> -->
					<!-- <tr>
						<td>First Date </td><td>:</td><td> <input class="form-control" type="text" name="firstdate" id="firstdate" style="width:100px;"/></td>
						<td>
							<script language="JavaScript">
							var o_cal = new tcal ({
								// form name
								'formname': 'grid',
								// input name
								'controlname': 'firstdate'
							});

							// individual template parameters can be modified via the calendar variable
							o_cal.a_tpl.yearscroll = false;
							o_cal.a_tpl.weekstart = 6;

							</script>
						</td>
						<td>TO Second Date</td><td>:</td><td> <input class="form-control" type="text" name="seconddate" id="seconddate" style="width:100px;"/></td>
						<td>
						<script language="JavaScript">
							var o_cal = new tcal ({
								// form name
								'formname': 'grid',
								// input name
								'controlname': 'seconddate'
							});

							// individual template parameters can be modified via the calendar variable
							o_cal.a_tpl.yearscroll = false;
							o_cal.a_tpl.weekstart = 6;

							</script>
						</td>
					</tr> -->
					<!-- <tr>
						<td>First Time</td><td>:</td><td> <input class="form-control" name="f_time" id="f_time" style="width:100px;" /> </td><td></td>
						<td>TO Second Time</td><td>:</td><td> <input class="form-control" name="s_time" id="s_time" style="width:100px;"/></td><td></td>
					</tr> -->
					<!-- </table> -->
					<!-- </fieldset> -->

					<?php
						$this->load->model('common_model');
						$unit = $this->common_model->get_unit_id_name();
					?>
					<!-- <div>
					<fieldset style=''><legend><font size='+1'><b>Category Options</b></font></legend>
					<table class="table">
					<tr>
						<td>Unit</td>
						<td>:</td>
						<td><select class="form-control" name='grid_start' id='grid_start' style="width:250px;" onchange='grid_get_all_data()' />
								<option value='Select'>	Select	</option>
								<?php foreach($unit->result() as $rows) { ?>
										<option value="<?php echo $rows->unit_id; ?>"><?php echo $rows->unit_name; ?></option>
								<?php } ?>
							</select>
						</td>

						<td>Dept. </td><td>:</td><td><select class="form-control" id='grid_dept' name='grid_dept' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></td>
					</tr>

					<tr><td>Section </td><td>:</td><td><select class="form-control" id='grid_section' name='grid_section' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></td>
					<td>Line </td><td>:</td><td><select class="form-control" id='grid_line' name='grid_line' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></td>
					</tr>

					<tr><td>Desig. </td><td>:</td><td><select class="form-control" id='grid_desig' name='grid_desig' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></td>
					<td>Sex </td><td>:</td><td><select class="form-control" id='grid_sex' name='grid_sex' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></select></td>
					</tr>
					<tr><td>Status</td><td>:</td><td><select class="form-control" id='grid_status' name='grid_status' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></td>
						<td>Position</td><td>:</td><td><select class="form-control" id='grid_position' name='grid_position' style="width:250px;" onChange="grid_all_search()"><option value=''></option></select></td> -->

					<!--<td>Gen. Rpt</td><td>:</td><td><select class="form-control" id='general_report' name='general_report' style="width:250px;"><option value='1'>With Image</option><option value='2'>Without Image</option></select></td>-->
					<!-- </tr>
					</table>
					</fieldset>
					</div> -->

					<div>
					<br />
					<fieldset style=''><legend><font size='+1'><b>Daily Reports</b></font></legend>
					<table class="table" width="100%"  style="font-size:11px; ">
					<?php
						$usr_arr = array(3,7,8);
						$usr_arr_2 = array(6);
						$usr_arr_3 = array(11);
						$usr_arr_4 = array(6,11);
						$user_id = $this->acl_model->get_user_id($this->session->userdata('username'));
						$acl = $this->acl_model->get_acl_list($user_id);
					?>
					<tr>
					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Present Report" onClick="grid_daily_present_report()"></td>
					<?php } ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Absent Report" onClick="grid_daily_absent_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Leave Report" onClick="grid_daily_leave_report()"></td>
					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Late Report" onClick="grid_daily_late_report()"></td>
					</tr>
					<tr>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily OT" onClick="grid_daily_ot()"></td>
					<?php if(!in_array($user_id,$usr_arr_2)){  ?>
					<?php if(!in_array($user_id,$usr_arr_3)){  ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Out & IN Report" onClick="grid_daily_out_in_report()"></td>
					<?php } ?>
					<?php } ?>
					<?php
					if(!in_array(10,$acl)){ ?>
					<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Out Punch Miss" onClick="grid_daily_out_punch_miss_report()"></td>
					<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Movement Report" onClick="grid_daily_move_report()"></td>
					</tr>

					<tr>
					<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily EOT" onClick="grid_daily_eot()"></td>
					<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Actual Present Report" onClick="grid_actual_present_report()"></td>
					<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Allowance" onClick="grid_daily_allowance_bills()"></td>
					<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Actual Out & IN Report" onClick="grid_daily_actual_out_in_report()"></td>
					</tr>

					<tr>
					<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Night Allowance" onClick="grid_daily_night_allowance_report()"></td>
					<?php if(!in_array(14,$acl)){ ?>
					<td style="width:20%; background-color: #6CC;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Daily Costing" onClick="daily_costing_report()"></td>

					<td style="width:20%; background-color: #6CC;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Holiday / Weekend Present" onClick="grid_daily_holiday_weekend_present_report()"></td>

					<td style="width:20%; background-color: #6CC;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Holiday / Weekend Absent" onClick="grid_daily_holiday_weekend_absent_report()"></td>
					<?php } ?>
					</tr>
					<tr>
						<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Weekend Allowance Sheet" onClick="grid_daily_weekend_allowance_sheet()"></td>

						<td style="width:20%; background-color: #666666;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Holiday Allowance Sheet" onClick="grid_daily_holiday_allowance_sheet()"></td>
					</tr>
					<?php } ?>
					<?php } ?>
					</table>

					</fieldset>
					<br />
					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<fieldset style=''><legend><font size='+1'><b>Monthly Reports</b></font></legend>
					<table class="table" width="75%"  style="font-size:11px; float: left;">
					<tr >

					<td style="width:20%;"><input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;" value="Attendance Register" onClick="grid_monthly_att_register_ot()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;" value="OT Register" onClick="grid_monthly_ot_register()"></td>

					<?php if(!in_array(10,$acl)){ ?>

					<td style="width:20%; background-color: #666666;">
					<input class="btn btn-primary" type="button" style=" width:100%; font-size:100%; " value="EOT Register" onClick="grid_monthly_eot_register()">
					<?php
					$register = 1;
					$register_blank = 2;
					$register_blank_without_name = 3;
					?>
					<td style="width:20%; background-color: #666666;">
						<input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;" value="Attendance Register" onClick="grid_monthly_att_register(<?php echo $register;?>)">
					</td>
					<?php } ?>
					<td style="width:20%; background-color: #666666;">
						<input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;" value="Attendance Register Blank" onClick="grid_monthly_att_register(<?php echo $register_blank;?>)">
					</td>
					</tr>

					<tr>
						<td style="width:20%; background-color: #666666;">
						<input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;" value="Register Blank Without Name" onClick="grid_monthly_att_register(<?php echo $register_blank_without_name;?>)">
					</td>
					</tr>
					</table>

					</fieldset>

					<br />

					<fieldset style=''><legend><font size='+1'><b>Continuous Reports</b></font></legend>
					<table class="table" width="100%"  style="font-size:11px; ">
					<tr>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Present Report" onClick="grid_continuous_present_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Absent Report" onClick="grid_continuous_absent_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Leave Report" onClick="grid_continuous_leave_report_new()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Leave Report (OLD)" onClick="grid_continuous_leave_report_old()"></td>
					</tr>
					<tr>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Late Report" onClick="grid_continuous_late_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;"  value="Increment Report" onClick="grid_continuous_incre_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;"  value="Promotion Report" onClick="grid_continuous_prom_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Increment/Promotion Propsal" onClick="grid_continuous_increment_promotion_proposal()"></td>
					</tr>

					<?php if(!in_array(10,$acl)){ ?>
					<?php if(!in_array(14,$acl)){ ?>

					<tr>

					<td style="width:20%; background-color: #6CC;"><input class="btn btn-primary" type="button" style=" width:100%; font-size:100%;"  value="OT / EOT Report" onClick="grid_continuous_ot_eot_report()"></td>
					<td style="width:20%; background-color: #6CC;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Continuous Costing Report" onClick="grid_continuous_costing_report()"></td>
					<td style="width:20%;"></td>
					<td style="width:20%;"></td>

					</tr>
					<?php } ?>
					<?php } ?>

					</table>

					</fieldset>
					<?php } ?>
					<br />
					<fieldset style=''><legend><font size='+1'><b>Other Reports</b></font></legend>
					<table class="table"   style="font-size:11px; ">
					<tr>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="App. Letter" onClick="grid_app_letter()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="ID Card Bangla" onClick="grid_id_card()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="ID Card English" onClick="grid_id_card_english()"></td>
					<?php
					if(!in_array($user_id,$usr_arr_3)){  ?>
					<?php if(!in_array($user_id,$usr_arr)){ ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Job Card" onClick="grid_job_card()"></td>
					<?php } ?>
					<?php } ?>
					</tr>
					<tr>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="New Join Report" onClick="grid_new_join_report()"></td>

					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Resign Report" onClick="grid_resign_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Left Report" onClick="grid_left_report()"></td>
					<?php } ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="BGM Current Report" onClick="grid_current_info()"></td>
					</tr>
					<tr>
					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="BGM New Join Report" onClick="grid_bgm_new_join_report()"></td>

					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Leave Application" onClick="grid_leave_application_form()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Earn Leave Report" onClick="grid_earn_leave()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="General Report" onClick="grid_general_info()"></td>

					</tr>
					<tr>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="BGM Resign Report" onClick="grid_bgm_resign_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="BGM Left Report" onClick="grid_bgm_left_report()"></td>

					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="BGM Left Resign Report" onClick="grid_bgm_left_resign_report()"></td>

					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Letter 1" onClick="grid_letter1_report()"></td>

					</tr>
					<tr>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Letter 2" onClick="grid_letter2_report()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Letter 3" onClick="grid_letter3_report()"></td>
					<?php } ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Employee Information" onClick="grid_employee_information()"></td>
					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Leave Register" onClick="grid_yearly_leave_register()"></td>
					<?php } ?>
					</tr>
					<tr>
					<td style="width:20%;">
					<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Service Book" onClick="grid_service_book()"></td>
					<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Job Application" onClick="grid_emp_job_application()"></input></td>
					<td style="width:20%;">
					<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Joining Letter" onClick="join_letter()"></input>
					</td>
					<!--
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Service Book 2" onClick="grid_service_book2()"></td>
					</td>
					-->
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Age estimation" onClick="grid_age_estimation()">
					</td>

					</tr>
					<tr>
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Nominee From" onClick="grid_nominee()">
					</td>
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Requitement Form" onClick="grid_requitement_form()"></input>
					</td>
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Verification Report" onClick="grid_verification_report()"></input>
					</td>
					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Job Description" onClick="grid_job_description()">
					</td>
					<?php } ?>
					</tr>
					<tr>
						<?php if(!in_array($user_id,$usr_arr)){  ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="First Letter For Maternity Leave" onClick="first_letter_of_maternity_leave()"></td>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Shorts Emp Summery" onClick="shorts_emp_summery()"></td>
						<?php } ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="CTPAT" onClick="grid_ctpat()"></input></td>
						<td style="width:20%;">
						<?php if(!in_array($user_id,$usr_arr)){  ?>
						<input class="btn btn-primary" type="submit" style="width:100%; font-size:100%;" value="Designation Wise Short Report" formaction="<?php echo base_url();?>index.php/grid_con/all_desig_id"></input>
						</td>
						<?php } ?>
					</tr>
					<tr>
					<?php if(!in_array($user_id,$usr_arr)){  ?>
					<?php if(!in_array($user_id,$usr_arr_2)){  ?>
					<?php if(!in_array($user_id,$usr_arr_3)){  ?>
					<td style="width:20%; background-color:#666666;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="EOT Job Card" onClick="grid_extra_ot()">
					</td>
					<?php } ?>
					<td style="width:20%; background-color:#666666;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="EOT Job Card BFL" onClick="grid_extra_ot_mix()">
					</td>

					<?php } ?>
					<?php } ?>
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Service Full Book" onClick="grid_service_book2()">
					</td>
					<td style="width:20%;">
						<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="File" onClick="grid_per_file()">
					</td>
					</tr>
					<tr>
						<?php if(!in_array($user_id,$usr_arr)){  ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Increment Letter" onClick="grid_incre_prom_report()"></td>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Promotion Letter" onClick="grid_prom_report()"></td>
						<?php } ?>
						<?php if(!in_array($user_id,$usr_arr_4)){  ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Final SettleMent" onClick="grid_pension_report()"></td>
						<?php } ?>
						<td style="width:20%;">
							<input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Certificate" onClick="bando_certificate_report()">
						</td>

					</tr>
					<tr>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Drug Screening" onClick="grid_drugscreening_report()"></td>
						<?php if(!in_array($user_id,$usr_arr_4)){  ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Less 1 Month Paid" onClick="grid_one_month_settel_paid_report()"></td>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Ackknowledgement Report" onClick="grid_ackknowledgement_report()"></td>
						<?php } ?>
						<?php if(!in_array($user_id,$usr_arr)){  ?>
						<?php if(!in_array($user_id,$usr_arr_4)){  ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="EarnLeave Letter" onClick="grid_earnl_payment()"></td>
						<?php } ?>
						<?php } ?>
					</tr>

					<tr>
						<?php if(!in_array($user_id,$usr_arr_4)){  ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Service Benifit" onClick="grid_grid_service_benifit()"></td>
						<?php } ?>
						<?php if(!in_array($user_id,$usr_arr)){  ?>
						<?php if(!in_array($user_id,$usr_arr_4)){  ?>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Resign Report With Sal." onClick="grid_resign_report_with_sal()"></td>
						<td style="width:20%;"><input class="btn btn-primary" type="button" style="width:100%; font-size:100%;" value="Left Report With Sal." onClick="grid_left_report_with_sal()"></td>
						<?php } ?>
						<?php } ?>
					</tr>
					</table>
					</fieldset>
				</div>
			</form>
		</div>


		<div style="float:right;">
			<table class="table" id="list1" style="font-family: 'Times New Roman', Times, serif; font-size:15px;"><tr><td></td></tr></table>
		</div>
		<!--<div id="pager1"></div>-->
		<div id="viewid"></div>
		<div class="clearfix" style="display:none;">
			<div class="loading" style="text-align-last: center;"><img src="<?php echo base_url() ?>img/load.gif"  alt="Load"/></div>
			<div style="margin-top:50px; text-align-last: center;"> Processing Please Wait..... </div>
		</div>
	</div>

</body>
</html>


