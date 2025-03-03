
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company Info</title>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/calendar.css" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
		<?php
$user_id = $this->acl_model->get_user_id($this->session->userdata('username'));
$acl     = $this->acl_model->get_acl_list($user_id);
if(in_array(10,$acl))
{
	
?>
	display:none;

<?php } ?>
	
}
.com_salary_back
{
	background:#E2E2E2;
	font-weight:bold;
	
}

label{
	width: 130px;
}
.btn{
	border: none;
	border-radius: 0;
	padding: 4px 12px;
}
.btn,button,input{
	outline: solid 0px gray;
}
</style>

</head>

<body bgcolor="#ECE9D8">
<div class="container">
<div class="row centered-form">
<div class="col-xs-12 col-sm-8 col-md-10">
<div id="error_id" style="display:none; color:red;">
<?php echo $validation_errors =  validation_errors(); ?>
</div>
<?php  
if($validation_errors != '')
{
	echo "<SCRIPT LANGUAGE=\"JavaScript\">alert(document.getElementById('error_id').innerHTML);</SCRIPT>"; 
}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Please Entry Information for Employee</h3>
	</div>
<div class="panel-body">
<form name='cominfo' class="cominfo form-inline"  enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/emp_info_con/personal_info_view1" >
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="empid">Emp Id:</label>
  			<input name="empid" type='text' id='empid' style="width:171px;" value="<?php echo set_value('empid'); ?>"/>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="idcard">Punch No:</label>
			<input name="idcard" type='text' id='idcard' style="width:171px;" value="<?php echo set_value('idcard'); ?>"/>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="name">Name(English):</label>
  			<input  type='text' style="width:171px;" id='name' name="name" value="<?php echo set_value('name'); ?>">
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="bname">Name(Bangla):</label>
			<input  style="width:171px;" type='text' id='bname' name="bname" value="<?php echo set_value('bname'); ?>" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="mname">M.Name:</label>
  			<input type='text' style="width:171px;" id='mname' name="mname" value="<?php echo set_value('mname'); ?>" required>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="bname">F.Name:</label>
			<input type='text' style="width:171px;" id='fname' name="fname" value="<?php echo set_value('fname'); ?>" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="mname_bn">M.Name-BN:</label>
  			<input type='text' style="width:171px;" id='mname_bn' class="bangla" name="mname_bn" value="<?php echo set_value('mname_bn'); ?>" required>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="bname">F.Name-BN:</label>
			<input type='text' style="width:171px;" id='fname_bn' class="bangla" name="fname_bn" value="<?php echo set_value('fname_bn'); ?>" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="spouse_name">Spouse Name:</label>
  			<input type='text' style="width:171px;" id='spouse_name' name="spouse_name" value="<?php echo set_value('spouse_name'); ?>">
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="no_child">No.of Child:</label>
			<input type='text' style="width:171px;" id='no_child' name="no_child" value="<?php echo set_value('no_child'); ?>">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="padd">Pre. Add.:</label>
  			<input type='text' style="width:171px;" id='padd' name='padd' value="<?php echo set_value('padd'); ?>" required>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="fadd">Per. Add.:</label>
			<input type='text' style="width:171px;" id='fadd' name='fadd' value="<?php echo set_value('fadd'); ?>" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="preadd_bn">Pre. Add_bn.:</label>
  			<input type='text' style="width:171px;" id='preadd_bn' name='preadd_bn' value="<?php echo set_value('preadd_bn'); ?>" required>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="peradd_bn">Per. Add_bn.:</label>
			<input type='text' style="width:171px;" id='peradd_bn' name='peradd_bn' value="<?php echo set_value('peradd_bn'); ?>" required>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="dob">Date Of Birth:</label>
  			<input type='text' style="width:142px;" id='dob' name="dob"  value="<?php echo set_value('dob'); ?>" />
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
				
				</script>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="source" style="display: inline-block;">Photo:</label>
			<input type='file' value='Image Source' name='userfile' id='source' style="width:170px;display: inline;"/>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="reli">Religion:</label>
  			<select style="width:171px;" id='reli' name="reli">
				<?php $religion_name = $this->processdb->get_religion_name();
				foreach($religion_name->result() as $rows) { 
					if($this->input->post('reli') == $rows->religion_id) {?>
						<option value="<?php echo $rows->religion_id; ?>" selected="selected"><?php echo $rows->religion_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->religion_id; ?>"><?php echo $rows->religion_name; ?></option>	
					<?php } ?>	
				<?php } ?>	    	  
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="sex">Sex:</label>
			<select style="width:171px;" id='sex' name="sex">
				<?php $sex_name = $this->processdb->get_sex_name();
				foreach($sex_name->result() as $rows) { 
					if($this->input->post('sex') == $rows->sex_id) {?>
						<option value="<?php echo $rows->sex_id; ?>" selected="selected"><?php echo $rows->sex_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->sex_id; ?>"><?php echo $rows->sex_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	  	
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="ms">Marital Status:</label>
  			<select style="width:171px;" id='ms' name="ms">
				<?php $matital_status_name = $this->processdb->get_matital_status_name();
				foreach($matital_status_name->result() as $rows) { 
					if($this->input->post('ms') == $rows->marrital_status_id) {?>
						<option value="<?php echo $rows->marrital_status_id; ?>" selected="selected"><?php echo $rows->marrital_status_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->marrital_status_id; ?>"><?php echo $rows->marrital_status_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	  	
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="sex">Blood Group:</label>
			<select style="width:171px;" id='bgroup' name="bgroup">
				<?php $blood_name = $this->processdb->get_blood_name();
				foreach($blood_name->result() as $rows) { 
					if($this->input->post('bgroup') == $rows->blood_id) {?>
						<option value="<?php echo $rows->blood_id; ?>" selected="selected"><?php echo $rows->blood_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->blood_id; ?>"><?php echo $rows->blood_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	  	
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="units">Unit:</label>
  			<select style="width:171px;" id='units' name='units' onchange='grid_get_all_data_for_unit()'>
		    <option value='Select'>	Select	</option>
			  <?php 
				$units = $this->common_model->get_unit_id_name();
				foreach($units->result() as $rows) { 
					if($this->input->post('unit_id') == $rows->unit_id) {?>
						<option value="<?php echo $rows->unit_id; ?>" selected="selected"><?php echo $rows->unit_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->unit_id; ?>"><?php echo $rows->unit_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="floor_name">Floor Name:</label>
			<select style="width:171px;" id='floor_name' name='floor_name'>
	    	<option value='Select'>	Select	</option>
			  <?php 
				$floor_name = $this->processdb->get_floor_name();
				foreach($floor_name->result() as $rows) { 
					if($this->input->post('unit_id') == $rows->id) {?>
						<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->floor_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->id; ?>"><?php echo $rows->floor_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="saldraw">Salary Draw:</label>
  			<select style="width:171px;" id='saldraw' name='saldraw' >
	          <?php $salary_withdraw_name = $this->processdb->get_salary_withdraw_name();
	          foreach($salary_withdraw_name->result() as $rows) { 
	              if($this->input->post('saldraw') == $rows->sal_withdraw_id) {?>
	                  <option value="<?php echo $rows->sal_withdraw_id; ?>" selected="selected"><?php echo $rows->sal_withdraw_name; ?></option>
	              <?php } else { ?>	
	                  <option value="<?php echo $rows->sal_withdraw_id; ?>"><?php echo $rows->sal_withdraw_name; ?></option>	
	              <?php } ?>	
	              
	          <?php } ?>	    	
      		</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="dept">Department:</label>
			<select style="width:171px;" id='dept' name='dept'>
				<?php $department_name = $this->processdb->get_department_name();
				foreach($department_name->result() as $rows) { 
					if($this->input->post('dept') == $rows->dept_id) {?>
						<option value="<?php echo $rows->dept_id; ?>" selected="selected"><?php echo $rows->dept_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->dept_id; ?>"><?php echo $rows->dept_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="sec">Section:</label>
  			<select style="width:171px;" id='sec' name='sec' >
		    	<?php $section_name = $this->processdb->get_section_name();
				foreach($section_name->result() as $rows) { 
					if($this->input->post('sec') == $rows->sec_id) {?>
						<option value="<?php echo $rows->sec_id; ?>" selected="selected"><?php echo $rows->sec_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->sec_id; ?>"><?php echo $rows->sec_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>
  			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="sec_bn">Sec. Bangla:</label>
			<select style="width:171px;" id='sec_bn' name='sec_bn'>
		    	<?php $section_name_bn = $this->processdb->get_section_name();
				foreach($section_name_bn->result() as $rows) { 
					if($this->input->post('sec_bn') == $rows->sec_id) {?>
						<option value="<?php echo $rows->sec_id; ?>" selected="selected"><?php echo $rows->sec_bangla; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->sec_id; ?>"><?php echo $rows->sec_bangla; ?></option>	
					<?php } ?>	
					
				<?php } ?>
  			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="desig">Designation:</label>
  				<select style="width:171px;" id='desig' name='desig'>
		    	<?php $designation_name = $this->processdb->get_designation_name();
				foreach($designation_name->result() as $rows) { 
					if($this->input->post('desig') == $rows->desig_id) {?>
						<option value="<?php echo $rows->desig_id; ?>" selected="selected"><?php echo $rows->desig_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->desig_id; ?>"><?php echo $rows->desig_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="desig_bn">Designation Bangla:</label>
			<select style="width:171px;" id='desig_bn' name='desig_bn'>
		    	<?php $desig_name_bn = $this->processdb->get_designation_name();
				foreach($desig_name_bn->result() as $rows) { 
					if($this->input->post('desig_bn') == $rows->desig_id) {?>
						<option value="<?php echo $rows->desig_id; ?>" selected="selected"><?php echo $rows->desig_bangla; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->desig_id; ?>"><?php echo $rows->desig_bangla; ?></option>	
					<?php } ?>	
					
				<?php } ?>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="line">Line Number:</label>
  			<select style="width:171px;" id='line' name='line' >
				<?php $line_name = $this->processdb->get_line_name();
				foreach($line_name->result() as $rows) { 
					if($this->input->post('line') == $rows->line_id) {?>
						<option value="<?php echo $rows->line_id; ?>" selected="selected"><?php echo $rows->line_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->line_id; ?>"><?php echo $rows->line_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="position">Height:</label>
			<select style="width:171px;" id='position' name='position'>
				<?php $position_name = $this->processdb->get_position_name();
				foreach($position_name->result() as $rows) { 
					if($this->input->post('position') == $rows->posi_id) {?>
						<option value="<?php echo $rows->posi_id; ?>" selected="selected"><?php echo $rows->posi_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->posi_id; ?>"><?php echo $rows->posi_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
		  	</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="working_type">Working Type:</label>
  			<select style="width:171px;" id='working_type' name='working_type'>
				<?php $wk_type_name = $this->processdb->working_type_name();
				foreach($wk_type_name->result() as $rows){ 
					if($this->input->post('working_type') == $rows->id){?>
						<option value="<?php echo $rows->line_id; ?>" selected="selected"><?php echo $rows->wk_type; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->id; ?>"><?php echo $rows->wk_type; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="work_process">Work Process:</label>
			<select style="width:171px;" id='work_process' name='work_process'>
				<?php $work_process = $this->processdb->work_process_name();
				foreach($work_process->result() as $rows){ 
					if($this->input->post('working_type') == $rows->id){?>
						<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->process; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->id; ?>"><?php echo $rows->process; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="nid">NID:</label>
  			<input type='text' style="width:171px;" id='nid' name='nid' value="<?php echo set_value('nid'); ?>">
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="ot_define">OT Show IN:</label>
			<select style="width:171px;" id='ot_define' name='ot_define'>
				<?php $ot_define = $this->processdb->ot_show_or_not();
				foreach($ot_define->result() as $rows){ 
					if($this->input->post('ot_define') == $rows->id){?>
						<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->salary_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->id; ?>"><?php echo $rows->salary_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="baccnt">Bank Accnt:</label>
  			<input type='text' style="width:171px;" id='baccnt' name='baccnt' value="<?php echo set_value('baccnt'); ?>">
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="empsts">Emp Position:</label>
			<select style="width:171px;" id='empsts' name='empsts' >
				<?php $emp_sts = $this->processdb->get_emp_sts();
				foreach($emp_sts->result() as $rows) { 
					if($this->input->post('empsts') == $rows->id) {?>
						<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->emp_sts; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->id; ?>"><?php echo $rows->emp_sts; ?></option>	
					<?php } ?>	
					
				<?php } ?>		
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="operation">Weight:</label>
  			<select style="width:171px;" id='operation' name='operation'>
				<?php $operation_name = $this->processdb->get_operation_name();
				foreach($operation_name->result() as $rows) { 
					if($this->input->post('operation') == $rows->ope_id) {?>
						<option value="<?php echo $rows->ope_id; ?>" selected="selected"><?php echo $rows->ope_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->ope_id; ?>"><?php echo $rows->ope_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="empstat">Emp Status:</label>
			<select style="width:171px;" id='empstat' name='empstat' >
		    	<?php $status_name = $this->processdb->get_status_name();
				foreach($status_name->result() as $rows) { 
					if($this->input->post('empstat') == $rows->stat_id) {?>
						<option value="<?php echo $rows->stat_id; ?>" selected="selected"><?php echo $rows->stat_type; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->stat_id; ?>"><?php echo $rows->stat_type; ?></option>	
					<?php } ?>	
					
				<?php } ?>		
	  		</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="salg">Salary Grade:</label>
  			<select style="width:171px;" id='salg' name='salg'>
				<?php $grade_name = $this->processdb->get_grade_name();
				foreach($grade_name->result() as $rows) { 
					if($this->input->post('salg') == $rows->gr_id) {?>
						<option value="<?php echo $rows->gr_id; ?>" selected="selected"><?php echo $rows->gr_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->gr_id; ?>"><?php echo $rows->gr_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="otentitle">OT Entitle:</label>
			<select style="width:171px;" id='otentitle' name='otentitle' >
		    	<?php $ot_name = $this->processdb->get_yes_no_asc();
				foreach($ot_name->result() as $rows) { 
					if($this->input->post('otentitle') == $rows->id) {?>
						<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	
  			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="empshift">Emp Shift:</label>
  			<select style="width:171px;" id='empshift' name='empshift' >
				<?php $shift_name = $this->processdb->get_shift_name();
				foreach($shift_name->result() as $rows) { 
					if($this->input->post('empshift') == $rows->shift_id) {?>
						<option value="<?php echo $rows->shift_id; ?>" selected="selected"><?php echo $rows->shift_name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->shift_id; ?>"><?php echo $rows->shift_name; ?></option>	
					<?php } ?>	
					
				<?php } ?>		
			</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="lunch">Lunch Entitle:</label>
			<select style="width:171px;" id='lunch' name='lunch' >
				<?php $lunch_name = $this->processdb->get_yes_no_desc();
				foreach($lunch_name->result() as $rows) { 
					if($this->input->post('lunch') == $rows->id) {?>
						<option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->name; ?></option>
					<?php } else { ?>	
						<option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>	
					<?php } ?>	
					
				<?php } ?>	    	
	  		</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="transport">Transport:</label>
  			<select style="width:171px;" id='transport' name='transport' >
		        <?php $transport_name = $this->processdb->get_yes_no_desc();
		        foreach($transport_name->result() as $rows) { 
		            if($this->input->post('transport') == $rows->id) {?>
		                <option value="<?php echo $rows->id; ?>" selected="selected"><?php echo $rows->name; ?></option>
		            <?php } else { ?>	
		                <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>	
		            <?php } ?>	
		            
		        <?php } ?>
	    	</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="ejd">Join Date:</label>
			<input  type='text' style="width:142px;" id='ejd' name="ejd" value="<?php echo set_value('ejd'); ?>"  required/>
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
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="attbonus">Att. Bonus:</label>
  			<select style="width:171px;" id='attbonus' name='attbonus' >
	          <?php $att_bonus_name = $this->processdb->get_att_bonus_name();
	          foreach($att_bonus_name->result() as $rows) { 
	              if($this->input->post('attbonus') == $rows->ab_id) {?>
	                  <option value="<?php echo $rows->ab_id; ?>" selected="selected"><?php echo $rows->ab_rule_name; ?></option>
	              <?php } else { ?>	
	                  <option value="<?php echo $rows->ab_id; ?>"><?php echo $rows->ab_rule_name; ?></option>	
	              <?php } ?>	
	              
	          <?php } ?>
	      	</select>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="saltype">Salary Type:</label>
			<select style="width:171px;" id='saltype' name='saltype' >
	          <?php $salary_type_name = $this->processdb->get_salary_type_name();
	          foreach($salary_type_name->result() as $rows) { 
	              if($this->input->post('saltype') == $rows->sal_type_id) {?>
	                  <option value="<?php echo $rows->sal_type_id; ?>" selected="selected"><?php echo $rows->sal_type_name; ?></option>
	              <?php } else { ?>	
	                  <option value="<?php echo $rows->sal_type_id; ?>"><?php echo $rows->sal_type_name; ?></option>	
	              <?php } ?>	
	              
	          <?php } ?>	    	
      		</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="emp_last_dg">Last Deg:</label>
  			<input name="text2" type='text' id='emp_last_dg' style="width:171px;" value="<?php echo set_value('text2'); ?>"/>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="pass_year">Mobile:</label>
			<input name="text3" type='text' id='pass_year' style="width:171px;" value="<?php echo set_value('text3'); ?>"/>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="edu_insti">Nominee Name:</label>
  			<input name="text4" type='text' id='edu_insti' style="width:171px;" value="<?php echo set_value('text4'); ?>"/>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="skill_dept">Nominee Relation:</label>
			<input name="text5" type='text' id='skill_dept' style="width:171px;" value="<?php echo set_value('text5'); ?>"/>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="skill_year">Nominee Address:</label>
  			<input name="text6" type='text' id='skill_year' style="width:171px;" value="<?php echo set_value('text6'); ?>"/>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="peradd_bn">Nominee Cell No.:</label>
			<input name="text7" type='text' id='skill_com_na' style="width:171px;" value="<?php echo set_value('text7'); ?>"/>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="gsal">Gross(N):</label>
  			<input name="text8" type='text' id='gsal'  onchange='basic_sal_cal()'  value="<?php echo set_value('text8'); ?>" required autocomplete="off" size='24px'"/>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="peradd_bn">Basic:</label>
			<input name="text8" type='text' disabled='disabled' id='bsal'  size='24px'"/>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="hrent">House:</label>
  			<input name="text8" type='text' disabled='disabled' id='hrent'  size='24px'" />
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="mallow">Medical:</label>
			<input name="text8" type='text' disabled='disabled' id='mallow' size='24px'" />
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="transport_allow">Transport:</label>
  			<input name="text8" type='text' disabled='disabled' id='transport_allow'  size='24px'" />
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="peradd_bn">Food:</label>
			<input name="text8" type='text' disabled='disabled' id='lunch_allow' size='24px'" />
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="com_gsal">Gross:</label>
  			<input name="text9" type='text' id='com_gsal'  onchange='com_basic_sal_cal()'  value="<?php echo set_value('text9'); ?>" required autocomplete="off" size='24px'"/>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="com_bsal">Basic:</label>
			<input name="com_bsal" type='text' disabled='disabled' id='com_bsal'  size='24px'"/>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="com_hrent">House:</label>
  			<input name="com_hrent" type='text' disabled='disabled' id='com_hrent'  size='24px'" />
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="com_mallow">Medical:</label>
			<input name="com_mallow" type='text' disabled='disabled' id='com_mallow' size='24px'" />
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="com_transport_allow">Transport:</label>
  			<input name="com_transport_allow" type='text' disabled='disabled' id='com_transport_allow'  size='24px'" />
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label for="com_lunch_allow">Food:</label>
			<input name="com_lunch_allow" type='text' disabled='disabled' id='com_lunch_allow' size='24px'" />
		</div>
	</div>
</div>
	<div class="row">
		<div class="btn-container" style="background: #c0c0c0;padding:5px 0px;min-height: 40px;">
			<div class="col-md-6" style="">
			   	<div class="text-center">
					<input type="hidden" class="btn btn-primary" name="id_skill" id="id_skill" value="<?php echo set_value('id_skill'); ?>"   />
					 <input type='button' class="btn btn-primary btn-md" name='add' onclick='enable_save()' value='NEW'/>
					 <input type="submit" class="btn btn-success" name='pi_save'  value='SAVE'/>
					 <input type="submit" class="btn btn-primary" name="pi_edit" id="pi_edit" disabled="disabled" value='UPDATE'/>
					 <input type="submit" class="btn btn-danger" name="pi_delete" id="pi_delete" disabled="disabled" value='DELETE'/>
				</div>
			</div>
			<div class="col-md-6">
				<input style="margin-left:20px;" type='button' class="btn btn-primary" name='prev' onclick='com_info_prev_Search1()' value='Prev'/> Find ID :
		  		<input style='background-color:yellow;' type='text' size='15px' id='search_empid' name='search_empid' onchange="com_info_Search1()"  />
		  		<input type='button' class="btn btn-success" name='next' onclick='com_info_next_Search1()' value='Next'/>
			</div>
		</div>
	  </div>
	  </div>
	</form>
	</div>
   </div>
  </div>
 </div>
 
<?php if($this->input->post('pi_edit')) {echo "<SCRIPT LANGUAGE=\"JavaScript\">document.cominfo.pi_edit.disabled = false; document.cominfo.pi_save.disabled = true;</SCRIPT>";} ?>
 
</body>
</html>