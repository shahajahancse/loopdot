<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Earn Leave Process</title>
<link href="<?=base_url()?>awedget/assets/plugins/boostrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css') ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.js') ?>"></script>
	
<script src="<?=base_url()?>awedget/assets/plugins/boostrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/style.css" />
<?php if(isset($output)){
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach;} ?>
<style type='text/css'>
a {
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: none;
}

</style>

 
<script type="text/javascript" src="<?php echo base_url();?>js/earn_leave.js"></script>

</head>

<body bgcolor="#ECE9D8">

<div class="form-group" align="center" style="margin:0 auto; width:100%; overflow:hidden; ">

<fieldset style='width:600px;'><legend><font size='+1'><b>Earn Leave Process</b></font></legend>

Select Year :
<select class="form-control" id='report_year_sal' name="report_year_sal" style="width: 200px;">
		<?php
			$current_year = date('Y');
			for($i = $current_year-10; $i <= $current_year + 10; $i++)
			{
				if($current_year == $i){
				?>
					<option value="<?php echo $i;?>" selected="selected"><?php echo $i;?></option>
				<?php
				}else{
				?>
					<option value="<?php echo $i;?>" ><?php echo $i;?></option>
				<?php
				}
			}
		?>
	</select>
<?php // $this->load->view('month_year'); 
$earn_leave_process = "1";
$final_earn_leave_process = "2";
?>
<input class="btn btn-primary" type='button' name='view' onclick='earn_leave_process(<?php echo $earn_leave_process; ?>)' value='Process'/>
<input class="btn btn-primary" type='button' name='view' onclick='earn_leave_process(<?php echo $final_earn_leave_process; ?>)' value='Final Process'/>
</fieldset>

</div>

<div id="loader"  align="center" style="margin:0 auto; width:600px; overflow:hidden; display:none; margin-top:10px;"><img src="<?php echo base_url();?>/images/ajax-loader.gif" /></div>
<!-- 
<div style="width:58%; margin:5px; margin:0 auto; margin-top:90px;" >
<?php 
if(isset($output))
{
 echo $output; 
 }
?>
</div> -->
</body>
</html>