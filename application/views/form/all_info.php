<?php
$user_data = $this->session->userdata['data'];
// echo "<pre>";
// print_r($user_data);exit;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company Info</title>

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/calendar.css" />

<script type="text/javascript" src="<?php echo base_url();?>js/dynamic.js"></script>

<script src="<?php echo base_url(); ?>js/calendar_eu.js" type="text/javascript"></script>

<style type="text/css">
.cominfo td{
font-weight:bold;

}
.cominfo select{
width:265px;
}
.bangla{
font-family:SolaimanLipi;
font-size:15px;
}
form input:focus,form textarea:focus,form select:focus {
  border:1px solid #666;
  background:#e3f1f1;
  }
  select, input, textarea, button {outline:solid 1px gray; resize:none; padding:1px;}
button {outline:solid 1px  #408080; resize:none; margin-right:10px; padding:2px;}
.salary_back
{
	background:#999;
	font-weight:bold;

}

</style>

</head>

<body bgcolor="#ECE9D8">
<div align="center" style=" width:1000px; overflow:hidden;" >


<div  style="width:1000px;">
<div id="error_id" style="display:none; color:red;">
<?php echo $validation_errors =  validation_errors(); ?>
</div>
<?php
if($validation_errors != '')
{
	echo "<SCRIPT LANGUAGE=\"JavaScript\">alert(document.getElementById('error_id').innerHTML);</SCRIPT>";
}
?>
<form name='cominfo' id="cominfo" class="cominfo"  enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/emp_info_con/personal_info_view1" >
<input type="hidden" name="units" value="1">
<fieldset style="background:#F2F2E6;">
<table cellpadding="0" cellspacing="3" width='1000px' border='0' align='center'>
<tr>
  <td>Emp Id </td>
  <td><input name="empid" type='text' id='empid' style="width:170px;" value="<?php echo set_value('empid'); ?>"/></td>
  <td>Punch Card No.</td>
  <td><input name="idcard" type='text' id='idcard' style="width:170px;" value="<?php echo set_value('idcard'); ?>"/></td>

  <td width="20%" rowspan="8"><img id='img'  name='image' alt=''><div id='emp_status' style='font-size:14px;color:blue;'></div></td>
</tr>

<tr>
  <td>Name(English)</td>
  <td><input  type='text' style="width:170px;" id='name' name="name" value="<?php echo set_value('name'); ?>"></td>
<td>Name(Bangla)</td>
<td><input  style="width:170px;" type='text' id='bname' name="bname" value="<?php echo set_value('bname'); ?>"></td>
</tr>

<tr><td>Mother's Name</td>
<td><input type='text' style="width:170px;" id='mname' name="mname" value="<?php echo set_value('mname'); ?>"></td>
<td>Father's Name</td>
<td><input type='text' style="width:170px;" id='fname' name="fname" value="<?php echo set_value('fname'); ?>"></td>
</tr>

<tr><td>Spouse Name</td>
<td><input type='text' style="width:170px;" id='sname' name="sname" value="<?php echo set_value('sname'); ?>"></td>
<!-- <td>Ident. Marks</td>
<td><input type='text' style="width:170px;" id='ident_marks' name="ident_marks" value="<?php echo set_value('ident_marks'); ?>"></td> -->
  <td>Mobile No</td>
	<td><input type='text'style="width:170px;" id='mobile_no' name="mobile_no" value="<?php echo set_value('text11'); ?>"></td>
</tr>

<tr><td>Present Add.</td>
<td><input type='text' style="width:170px;" id='padd' name='padd' value="<?php echo set_value('padd'); ?>"></td>
<td>Permanent Add.</td>
<td><input type='text' style="width:170px;" id='fadd' name='fadd' value="<?php echo set_value('fadd'); ?>"></td>
</tr>
<tr><td>Date Of Birth</td>
<td><input type='text' style="width:150px;" id='dob' name="dob"  value="<?php echo set_value('dob'); ?>" />
  <script language="JavaScript">
	var o_cal = new tcal ({
		// form name
		'formname': 'cominfo',
		// input name
		'controlname': 'dob'
	});

	// individual template parameters can be modified via the calendar variable
	o_cal.a_tpl.yearscroll = false;
	o_cal.a_tpl.weekstart = 6;

	</script></td>
<td>Photo</td><td><input type='file' value='Image Source' name='userfile' id='source' style="width:166px;" /></td>
</tr>
<tr><td>Religion</td>
<td>
	<select style="width:174px;"  id='reli' name="reli">
		<?php $religion_name = $this->processdb->get_religion_name();
		foreach($religion_name->result() as $rows) {
			if($this->input->post('reli') == $rows->religion_id) {?>
				<option value="<?php echo $rows->religion_id; ?>" selected="selected"><?php echo $rows->religion_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->religion_id; ?>"><?php echo $rows->religion_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
</td>
<td>Sex</td>
<td>
	<select style="width:174px;" id='sex' name="sex">
		<?php $sex_name = $this->processdb->get_sex_name();
		foreach($sex_name->result() as $rows) {
			if($this->input->post('sex') == $rows->sex_id) {?>
				<option value="<?php echo $rows->sex_id; ?>" selected="selected"><?php echo $rows->sex_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->sex_id; ?>"><?php echo $rows->sex_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
</td>
</tr>
<tr><td>Marital Status</td>
<td>
	<select style="width:174px;" id='ms' name="ms">
		<?php $matital_status_name = $this->processdb->get_matital_status_name();
		foreach($matital_status_name->result() as $rows) {
			if($this->input->post('ms') == $rows->marrital_status_id) {?>
				<option value="<?php echo $rows->marrital_status_id; ?>" selected="selected"><?php echo $rows->marrital_status_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->marrital_status_id; ?>"><?php echo $rows->marrital_status_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
</td>
<td>Blood Group</td>
<td>
	<select style="width:174px;" id='bgroup' name="bgroup">
		<?php $blood_name = $this->processdb->get_blood_name();
		foreach($blood_name->result() as $rows) {
			if($this->input->post('bgroup') == $rows->blood_id) {?>
				<option value="<?php echo $rows->blood_id; ?>" selected="selected"><?php echo $rows->blood_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->blood_id; ?>"><?php echo $rows->blood_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
</td>
</tr>

	<tr>
		<!-- <td>Nomini Name</td>
		<td><input type='text' style="width:170px;" id='nomini_name' name="nomini_name" value="<?php // echo set_value('nomini_name'); ?>"></td> -->

		<!-- <td>Relation</td>
		<td>
			<select style="width:174px;"  id='nomini_relation' name="nomini_relation">

				< ?php/*  $relation = $this->processdb->get_nomini_relation();

				foreach($relation->result() as $rows) {

					if($this->input->post('nomini_relation') == $rows->id) */ { ?>

						<option value="<?php //  echo $rows->id; ?>" selected="selected"><?php // echo $rows->nomini_relation; ?></option>

					<?php // } else { ?>

						<option value="<?php // echo $rows->id; ?>"><?php // echo $rows->nomini_relation; ?></option>

					<?php // } ?>

				<?php // } ?>
			</select>
		</td> -->
	</tr>



<tr>
	<!-- <td>No. of Child</td>
	<td><input type='text'style="width:170px;" id='child_no' name="child_no" value="<?php echo set_value('child_no'); ?>"></td> -->

    <!-- <td>Area</td>
	<td>
      <select style="width:174px;" id='emp_district' name='emp_district' >
          <?php /* $emp_dis_name = $this->processdb->get_emp_district_name();
          foreach($emp_dis_name->result() as $rows) {
              if($this->input->post('saldraw') == $rows->district_id) { */?>
                  <option value="<?php// echo $rows->district_id; ?>" selected="selected"><?php //echo $rows->dis_name; ?></option>
              <?php// } else { ?>
                  <option value="<?php// echo $rows->district_id; ?>"><?php //echo $rows->dis_name; ?></option>
              <?php //} ?>

          <?php //} ?>
      </select>
  </td> -->
</tr>

<tr>
    <!-- <td>Zone</td><td>
      <select style="width:174px;" id='zone' name='zone' >
          	   <?php /* $zone_name = $this->processdb->get_zone_name();
		foreach($zone_name->result() as $rows) {
			if($this->input->post('zone') == $rows->zone_id) { */?>
				<option value="<?php // echo $rows->zone_id; ?>" selected="selected"><?php // echo $rows->zone_name; ?></option>
			<?php // } else { ?>
				<option value="<?php // echo $rows->zone_id; ?>"><?php // echo $rows->zone_name; ?></option>
			<?php // } ?>

		<?php // } ?>
      </select>
  </td> -->
	<td>NID No</td>
	<td><input name="n_id" id='n_id' style="display:inline-block; width:170px;"  value="<?php echo set_value('n_id'); ?>"/></td>
	<td>No. of Child</td>
	<td><input type='text'style="width:170px;" id='child_no' name="child_no" value="<?php echo set_value('child_no'); ?>"></td>
	<!--<td><input type='text'style="width:170px;" id='nid' name="nid" value="<?php //echo set_value('text10'); ?>"></td>
  </tr>
  <tr>
  <td>Mobile No</td>

	<td><input type='text'style="width:170px;" id='mob_no' name="mob_no" value="<?php //echo set_value('text11'); ?>"></td>-->
  </tr>
<tr><td>Salary Withdraw</td><td>
      <select style="width:174px;" id='saldraw' name='saldraw' >
          <?php $salary_withdraw_name = $this->processdb->get_salary_withdraw_name();
          foreach($salary_withdraw_name->result() as $rows) {
              if($this->input->post('saldraw') == $rows->sal_withdraw_id) {?>
                  <option value="<?php echo $rows->sal_withdraw_id; ?>" selected="selected"><?php echo $rows->sal_withdraw_name; ?></option>
              <?php } else { ?>
                  <option value="<?php echo $rows->sal_withdraw_id; ?>"><?php echo $rows->sal_withdraw_name; ?></option>
              <?php } ?>

          <?php } ?>
      </select>
  </td>
  <td width="135px">Department</td>
  <td>
  	<select style="width:174px;" id='dept' name='dept'>
		<?php $department_name = $this->processdb->get_department_name();
		foreach($department_name->result() as $rows) {
			if($this->input->post('dept') == $rows->dept_id) {?>
				<option value="<?php echo $rows->dept_id; ?>" selected="selected"><?php echo $rows->dept_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->dept_id; ?>"><?php echo $rows->dept_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
  </td>
</tr>
<tr><td>Section</td>
<td>
	<select style="width:174px;" id='sec' name='sec' >
    	<?php $section_name = $this->processdb->get_section_name();
		foreach($section_name->result() as $rows) {
			if($this->input->post('sec') == $rows->sec_id) {?>
				<option value="<?php echo $rows->sec_id; ?>" selected="selected"><?php echo $rows->sec_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->sec_id; ?>"><?php echo $rows->sec_name; ?></option>
			<?php } ?>

		<?php } ?>
  	</select>
</td>
  <td>Designation</td>
  <td>
	<select style="width:174px;" id='desig' name='desig'>
    	<?php $designation_name = $this->processdb->get_designation_name();
		foreach($designation_name->result() as $rows) {
			if($this->input->post('desig') == $rows->desig_id) {?>
				<option value="<?php echo $rows->desig_id; ?>" selected="selected"><?php echo $rows->desig_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->desig_id; ?>"><?php echo $rows->desig_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
 </td>
</tr>
<tr><td>Line Number</td>
<td>
	<select style="width:174px;" id='line' name='line' >
		<?php $line_name = $this->processdb->get_line_name();
		foreach($line_name->result() as $rows) {
			if($this->input->post('line') == $rows->line_id) {?>
				<option value="<?php echo $rows->line_id; ?>" selected="selected"><?php echo $rows->line_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->line_id; ?>"><?php echo $rows->line_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
</td>
<td>Emp Status</td>
  <td>
	<select style="width:174px;" id='empstat' name='empstat' >
    	<?php $status_name = $this->processdb->get_status_name();
		foreach($status_name->result() as $rows) {
			if($this->input->post('empstat') == $rows->stat_id) {?>
				<option value="<?php echo $rows->stat_id; ?>" selected="selected"><?php echo $rows->stat_type; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->stat_id; ?>"><?php echo $rows->stat_type; ?></option>
			<?php } ?>

		<?php } ?>
  	</select>
  </td>
  <!-- <td>Position</td>
  <td>
	<select style="width:174px;" id='position' name='position' >
		<?php $position_name = $this->processdb->get_position_name();
		foreach($position_name->result() as $rows) {
			if($this->input->post('position') == $rows->posi_id) {?>
				<option value="<?php echo $rows->posi_id; ?>" selected="selected"><?php echo $rows->posi_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->posi_id; ?>"><?php echo $rows->posi_name; ?></option>
			<?php } ?>

		<?php } ?>
  	</select></td> -->
</tr>
<tr>
	<!-- <td>Operation</td>
	<td>
		<select style="width:174px;" id='operation' name='operation'>
			<?php $operation_name = $this->processdb->get_operation_name();
			foreach($operation_name->result() as $rows) {
				if($this->input->post('operation') == $rows->ope_id) {?>
					<option value="<?php echo $rows->ope_id; ?>" selected="selected"><?php echo $rows->ope_name; ?></option>
				<?php } else { ?>
					<option value="<?php echo $rows->ope_id; ?>"><?php echo $rows->ope_name; ?></option>
				<?php } ?>

			<?php } ?>
		</select>
	</td> -->
  <!-- <td>Emp Status</td>
  <td>
	<select style="width:174px;" id='empstat' name='empstat' >
    	<?php $status_name = $this->processdb->get_status_name();
		foreach($status_name->result() as $rows) {
			if($this->input->post('empstat') == $rows->stat_id) {?>
				<option value="<?php echo $rows->stat_id; ?>" selected="selected"><?php echo $rows->stat_type; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->stat_id; ?>"><?php echo $rows->stat_type; ?></option>
			<?php } ?>

		<?php } ?>
  	</select>
  </td> -->
</tr>

<!-- <tr>
	<td>Process Name</td>
	<td><input type='text' style="width:170px;" id='process' name="process" value="<?php echo set_value('process'); ?>"></td>

	<td>Process Qty</td>
	<td><input type='text' style="width:170px;" id='process_qty' name="process_qty" value="<?php echo set_value('process_qty'); ?>"></td>

</tr> -->

<tr><td>Floor</td><td>
	<select style="width:174px;" id='emp_floor' name='emp_floor'>
		<?php $grade_name = $this->processdb->get_floor_name();
		foreach($grade_name->result() as $rows) {
			if($this->input->post('floor') == $rows->id) {?>
				<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->floor_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->id; ?>"><?php echo $rows->floor_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
	</td>
	<td>Bank Acc No </td><td><input name="bank_ac_no" type='text' id='bank_ac_no' style="display:inline-block; width:170px;"  value="<?php echo set_value('bank_ac_no'); ?>"/></td>
</tr>

<tr><td>Emp Type</td>
	<td>
		<select style="width:174px;" id='emp_sts_id' name='emp_sts_id'>
			<?php $grade_name = $this->processdb->get_emp_sts();
			foreach($grade_name->result() as $rows) {
				if($this->input->post('emp_sts_id') == $rows->id) {?>
					<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->emp_sts; ?></option>
				<?php } else { ?>
					<option value="<?php echo $rows->id; ?>"><?php echo $rows->emp_sts; ?></option>
				<?php } ?>

			<?php } ?>
		</select>
	</td>
  <td></td>
  <td></td>
</tr>

<tr><td>Salary Grade</td><td>
	<select style="width:174px;" id='salg' name='salg'>
		<?php $grade_name = $this->processdb->get_grade_name();
		foreach($grade_name->result() as $rows) {
			if($this->input->post('salg') == $rows->gr_id) {?>
				<option value="<?php echo $rows->gr_id; ?>" selected="selected"><?php echo $rows->gr_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->gr_id; ?>"><?php echo $rows->gr_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
	</td>
  <td>OT Entitle</td>
  <td>
  	<select style="width:174px;" id='otentitle' name='otentitle' >
    	<?php $ot_name = $this->processdb->get_yes_no_asc();
		foreach($ot_name->result() as $rows) {
			if($this->input->post('otentitle') == $rows->id) {?>
				<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
			<?php } ?>

		<?php } ?>
  	</select>
</td>
</tr>


<tr><td>Emp Shift</td><td>
	<select style="width:174px;" id='empshift' name='empshift' >
		<?php $shift_name = $this->processdb->get_shift_name();
		foreach($shift_name->result() as $rows) {
			if($this->input->post('empshift') == $rows->shift_id) {?>
				<option value="<?php echo $rows->shift_id; ?>" selected="selected"><?php echo $rows->shift_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->shift_id; ?>"><?php echo $rows->shift_name; ?></option>
			<?php } ?>

		<?php } ?>
	</select>
</td>
  <td>Lunch Entitle</td>
<td>
	<select style="width:174px;" id='lunch' name='lunch' >
		<?php $lunch_name = $this->processdb->get_yes_no_desc();
		foreach($lunch_name->result() as $rows) {
			if($this->input->post('lunch') == $rows->id) {?>
				<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
			<?php } ?>

		<?php } ?>
  	</select>
</td>
</tr>
<tr>
  <td>Transport</td>
  <td>
    <select style="width:174px;" id='transport' name='transport' >
        <?php $transport_name = $this->processdb->get_yes_no_desc();
        foreach($transport_name->result() as $rows) {
            if($this->input->post('transport') == $rows->id) {?>
                <option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->name; ?></option>
            <?php } else { ?>
                <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
            <?php } ?>

        <?php } ?>
    </select>
  </td>
  <td>Emp join date</td>
  <td><input  type='text' style="width:150px;" id='ejd' name="ejd" value="<?php echo set_value('ejd'); ?>"  required/>
      <script language="JavaScript" type="text/javascript">
    var o_cal = new tcal ({
        // form name
        'formname': 'cominfo',
        // input name
        'controlname': 'ejd'
    });

    // individual template parameters can be modified via the calendar variable
    o_cal.a_tpl.yearscroll = false;
    o_cal.a_tpl.weekstart = 6;

    </script>
    </td>
</tr>
<tr>
  <td>Process 1</td>
  <td>
    <select style="width:174px;" id='skill_process_one' name='skill_process_one' >
		<option value="0">Select Process</option>	
        <?php $skill_process = $this->db->get('pr_skill_process');
        foreach($skill_process->result() as $rows) { ?>
		<option value="<?php echo $rows->id; ?>"><?php echo $rows->skill_process; ?></option>	
		<?php } ?>
    </select>
	<input type="number" style="width:50px;" id='hour_one' name="hour_one" value="0" placeholder="P/Hr">
  </td>
    <td>Process 2</td> 
  <td>
    <select style="width:174px;" id='skill_process_two' name='skill_process_two' >
		<option value="0">Select Process</option>	
        <?php 
        foreach($skill_process->result() as $rows) { ?>
		<option value="<?php echo $rows->id; ?>"><?php echo $rows->skill_process; ?></option>	
		<?php } ?>
    </select>
	<input type="number" style="width:50px;" id='hour_two' name="hour_two" value="0" placeholder="P/Hr">
  </td>
</tr>
<tr>
  <td>Process 3</td>
  <td>
    <select style="width:174px;" id='skill_process_three' name='skill_process_three' >
		<option value="0">Select Process</option>	
        <?php 
        foreach($skill_process->result() as $rows) { ?>
		<option value="<?php echo $rows->id; ?>"><?php echo $rows->skill_process; ?></option>	
		<?php } ?>
    </select>
	<input type="number" style="width:50px;" id='hour_three' name="hour_three" value="0" placeholder="P/Hr">
  </td>
    <td>Process 4</td>
  <td>
    <select style="width:174px;" id='skill_process_four' name='skill_process_four' >
		<option value="0">Select Process</option>	
        <?php 
        foreach($skill_process->result() as $rows) { ?>
		<option value="<?php echo $rows->id; ?>"><?php echo $rows->skill_process; ?></option>	
		<?php } ?>
    </select>
	<input type="number" style="width:50px;" id='hour_four' name="hour_four" value="0" placeholder="P/Hr">
  </td>
</tr>
<tr>
  <td>Att. Bonus</td><td>
      <select style="width:174px;" id='attbonus' name='attbonus' >
          <?php $att_bonus_name = $this->processdb->get_att_bonus_name();
          foreach($att_bonus_name->result() as $rows) {
              if($this->input->post('attbonus') == $rows->ab_id) {?>
                  <option value="<?php echo $rows->ab_id; ?>" selected="selected"><?php echo $rows->ab_rule_name; ?></option>
              <?php } else { ?>
                  <option value="<?php echo $rows->ab_id; ?>"><?php echo $rows->ab_rule_name; ?></option>
              <?php } ?>

          <?php } ?>
      </select>
  </td>
    <td>Salary Type</td>
  <td>
      <select style="width:174px;" id='saltype' name='saltype' >
          <?php $salary_type_name = $this->processdb->get_salary_type_name();
          foreach($salary_type_name->result() as $rows) {
              if($this->input->post('saltype') == $rows->sal_type_id) {?>
                  <option value="<?php echo $rows->sal_type_id; ?>" selected="selected"><?php echo $rows->sal_type_name; ?></option>
              <?php } else { ?>
                  <option value="<?php echo $rows->sal_type_id; ?>"><?php echo $rows->sal_type_name; ?></option>
              <?php } ?>

          <?php } ?>
      </select>
  </td>
</tr>
<tr>
  <td>Emp Height</td>
  <td>
	<select style="width:174px;" id='position' name='position' >
		<?php $position_name = $this->processdb->get_position_name();
		foreach($position_name->result() as $rows) {
			if($this->input->post('position') == $rows->posi_id) {?>
				<option value="<?php echo $rows->posi_id; ?>" selected="selected"><?php echo $rows->posi_name; ?></option>
			<?php } else { ?>
				<option value="<?php echo $rows->posi_id; ?>"><?php echo $rows->posi_name; ?></option>
			<?php } ?>
		<?php } ?>
  	</select>
  </td>
  <td width="135px">Passing year</td>
  <td><input name="text3" type='text' id='pass_year' style="width:170px;" value="<?php echo set_value('text3'); ?>"/></td>
</tr>
<tr>
  <!-- <td>Passing Institute</td>
  <td><input name="text4" type='text' id='edu_insti' style="width:170px;" value="<?php echo set_value('text4'); ?>"/></td> -->
  <td width="135px">Emp Last Dgree</td>
  <td width="250px"><input name="text2" type='text' id='emp_last_dg' style="width:170px;" value="<?php echo set_value('text2'); ?>"/></td>
  <td>Emp skill dept.</td>
  <td><input name="text5" type='text' id='skill_dept' style="width:170px;" value="<?php echo set_value('text5'); ?>"/></td>
</tr>
<tr>
  <td>Year of Skill</td>
  <td><input name="text6" type='text' id='skill_year' style="width:170px;" value="<?php echo set_value('text6'); ?>"/></td>
  <td>Company Name</td>
  <td><input name="text7" type='text' id='skill_com_na' style="width:170px;" value="<?php echo set_value('text7'); ?>"/></td>
</tr>

<?php 
	if($user_data->id_number != 'loopdot_admin'){

?>

<tr>
  <td class="salary_back">Gross</td>
  <td class="salary_back"><input name="text8" type='text' id='gsal'  onchange='basic_sal_cal()'  value="<?php echo set_value('text8'); ?>" style="width:170px;" style="background: #DDD;font-weight:bold;"/></td>
  <td class="salary_back">Basic</td>
  <td class="salary_back"><input name="text8" type='text' disabled='disabled' id='bsal'   style="background: #DDD;font-weight:bold;width:170px;"/></td>
</tr>

<tr>
  <td class="salary_back">House</td>
  <td class="salary_back"><input name="text8" type='text' disabled='disabled' id='hrent'   style="background: #DDD;font-weight:bold;width:170px;" /></td>
  <td class="salary_back">Medical</td>
  <td class="salary_back"><input name="text8" type='text' disabled='disabled' id='mallow'  style="background: #DDD;font-weight:bold;width:170px;" /></td>
</tr>
<tr>
  <td class="salary_back">Transport</td>
  <td class="salary_back"><input name="text8" type='text' disabled='disabled' id='transport_allow'   style="background: #DDD;font-weight:bold;width:170px;" /></td>
  <td class="salary_back">Food</td>
  <td class="salary_back"><input name="text8" type='text' disabled='disabled' id='lunch_allow'  style="background: #DDD;font-weight:bold;width:170px;" /></td>
</tr>
<tr>
  <td class="salary_back">Gross.</td>
  <td class="salary_back"><input name="text9" type='text' id='com_gsal'  onchange='com_basic_sal_cal()'  value="<?php echo set_value('text9'); ?>" style="width:170px;" style="background: #DDD;font-weight:bold;"/></td>
  <td class="salary_back">Basic.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_bsal'   style="background: #DDD;font-weight:bold;width:170px;"/></td>
</tr>

<tr>
  <td class="salary_back">House.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_hrent'   style="background: #DDD;font-weight:bold;width:170px;" /></td>
  <td class="salary_back">Medical.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_mallow'  style="background: #DDD;font-weight:bold;width:170px;" /></td>
</tr>
<tr>
  <td class="salary_back">Transport.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_transport_allow'   style="background: #DDD;font-weight:bold;width:170px;" /></td>
  <td class="salary_back">Food.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_lunch_allow'  style="background: #DDD;font-weight:bold;width:170px;" /></td>
</tr>
<?php }else{?>

<tr>
  <td class="salary_back">Gross.</td>
  <td class="salary_back"><input name="text9" type='text' id='com_gsal'  onchange='com_basic_sal_cal()'  value="<?php echo set_value('text9'); ?>" style="width:170px;" style="background: #DDD;font-weight:bold;"/></td>
  <td class="salary_back">Basic.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_bsal'   style="background: #DDD;font-weight:bold;width:170px;"/></td>
</tr>

<tr>
  <td class="salary_back">House.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_hrent'   style="background: #DDD;font-weight:bold;width:170px;" /></td>
  <td class="salary_back">Medical.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_mallow'  style="background: #DDD;font-weight:bold;width:170px;" /></td>
</tr>
<tr>
  <td class="salary_back">Transport.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_transport_allow'   style="background: #DDD;font-weight:bold;width:170px;" /></td>
  <td class="salary_back">Food.</td>
  <td class="salary_back"><input name="text9" type='text' disabled='disabled' id='com_lunch_allow'  style="background: #DDD;font-weight:bold;width:170px;" /></td>
</tr>

<?php }?>
</table>
 </fieldset>

 <div style="width:1000px; height:30px; background:#9DA2A6; margin-top:2px">
<input type="hidden" name="id_skill" id="id_skill" value="<?php echo set_value('id_skill'); ?>"   />
 <input type='button' name='add' onclick='enable_save()' value='NEW'/>&nbsp;<input type="submit" name='pi_save'   value='SAVE'  />&nbsp;<input type="submit" name="pi_edit" id="pi_edit" disabled="disabled"  value='EDIT'/></form><input style="margin-left:20px;" type='button' name='prev' onclick='com_info_prev_Search1()' value='Prev'/>Find ID :
  <input style='background-color:yellow;' type='text' size='15px' id='search_empid' name='search_empid' onchange="com_info_Search1()"  /><input type='button' name='next' onclick='com_info_next_Search1()' value='Next'/>

  </div>
   </div>

<script>
    window.IS_ADMIN = <?php echo ($this->session->userdata('data')->id_number === 'loopdot_admin') ? 'true' : 'false'; ?>;
</script>

<?php if($this->input->post('pi_edit')) {echo "<SCRIPT LANGUAGE=\"JavaScript\">document.cominfo.pi_edit.disabled = false; document.cominfo.pi_save.disabled = true;</SCRIPT>";} ?>

</body>
</html>
