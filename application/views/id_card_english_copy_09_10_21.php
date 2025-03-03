<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ID Card EN</title>
<link  rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/id_card_style_2.css" />
<style type="text/css"></style>
</head>

<body>
<?php
$i = 0;
$k = 0;
$count = $values->num_rows();
$div_loop = ceil($count/3);
$data = $values->result_array();

for($j=0; $j<= $div_loop; $j++){
	$end = $k-5;
	if($j == $div_loop){
		$end = $count - $div_loop;
	}
	
 	for($i; $i <$count; $i++){
		if($l % 2 == 0){
			if($j==0){
				echo '<div class=""style="height:0px;width:100%;"></div>';
				$style="margin-bottom:0px;";
			}else{
				echo '<div class=""style="height:0px;width:100%"></div>';
			}
		} 
		if($i==0){
			$style_2 = "<div style='height:0px;width:100%;'></div>";
	    }else{
	    	$style_2 = "<div style='height:10px;width:100%;'></div>";
        }	
   ?>
   <?php //echo $style_2; ?>
 <!-- <div style="clear:both;"></div> -->
 <div style="width: 100%;">
 <div class="id_container" style="width:205px;height:342px;border:1px solid black; padding:3px;border-radius:10px; <?php echo $style; ?> font-family: arial; float: left; margin: 15px;">
    <div class="id_card_front" style="width:196px;height:331px;padding:2px; vertical-align: top;">
	  	<div class="front_top">
		    <div class="front_top_left" style="width:30px;float:left;">
				<img src="<?php  echo base_url();?>images/<?php echo $company_logo = $this->common_model->company_information("company_logo"); ?>" height="30" width="30" />
			</div>
			<div class="front_top_middle" style="width:160px; text-align:center; float:right; margin: 0 auto;vertical-align:top;">
			   	<div class="e_front_col_6" style="font-size:12px; padding:18px 0px 0px 0px;">
					<u><b><spam style="font-size: 16px;"><?php echo "Lopdot Fashion Limited."; ?></spam></b></u>
					
			   </div>
			</div>
		</div>
		<div class="front_top_left" style="width:100%; vertical-align:top; font-size: 20px;">
			<div style="width:190px;padding-right:5px;text-align:center;margin-top: 0px;font-size:12px;" >
				<h5 style="margin: 0px; margin-top: 5px;">(A Member of Creative Group)</h5>
				<h5 style="margin: 0px">Phone: 9291211</h5>
			</div>
			<div style="width:190px;text-align:center;margin-top: 0px; padding:2px 0 0 2px;" >
				<img style="border:1px dashed black;" src="<?php echo base_url();?>uploads/photo/<?php echo $data[$i]["img_source"];?>" height="90" width="70" />
			</div>
		</div>
		<div class="front_top_left" style="width:100%; vertical-align:top; font-size: 20px; padding-top: 10px;">
			<div class="front_row_left_3">
				<div class="e_front_col_6" style="font-size: 13px; margin: 5px;"><b><?php echo $data[$i]["emp_full_name"]; ?></b></div>
			</div>
			<div class="front_row_left_1">
				<div class="e_front_col_1" style="font-size: 13px; margin: 5px;"><b>ID No : </b></div>
				<div class="e_front_col_2" style="font-size: 13px; margin: 5px;"><b><?php echo $data[$i]["emp_id"] ?></b></div>
			</div>
		</div>
		<div class="front_row_2">
			<div class="e_front_col_8" style="font-size: 13px; margin: 5px;">
			   <?php 
			     $des = strtolower($data[$i]["desig_name"]);
                  echo ucwords($des);				 
			   ?>
			</div>
		</div>
		<div class="front_row_3">
			<div class="e_front_col_12" style="font-size: 13px; margin: 5px;"><?php echo $data[$i]["sec_name"]; ?></div>
		</div>

		<!-- <div class="front_row_4" style="border-bottom:1px dotted black"> -->
		<div class="front_row_4">
			<div class="e_front_col_13" style="font-size: 13px; margin: 5px;"> DOJ : </div>
			<div class="e_front_col_14" style="font-size: 13px; margin: 5px;">
				<?php 
					$join_date = $data[$i]["emp_join_date"]; 
					$year=trim(substr($join_date,0,4));
					$month=trim(substr($join_date,5,2));
					$day=trim(substr($join_date,8,2));
					echo " ".$date_format = date("d/m/Y", mktime(0, 0, 0, $month, $day, $year));
				?>
			</div>
		</div>
		
		<div class="front_row_5" style="text-align:left;margin-top:10px;  width: 100%;">
			<div style=" float: left;  width: 60%;">
				<img src="<?php echo base_url();?>images/<?php echo $company_signature = $this->common_model->company_information("company_signature"); ?>" width="68" height="40" />
			</div>
			<div style=" width: 35%; height: 40px; border: 1px dashed black; float: right; "></div>
		</div>
		<!-- <br> -->
		<!--<div class="front_row_6" style="text-align:right">
			<div class="e_front_col_17" style="display:none;">Authority Signature</div>
		</div> -->
		<div class="front_row_7" style=" margin-top:1px; width: 100%;">
			<div class="e_front_col_19" style=" width: 60%; float:left; border-top:1px dotted black; font-size: 13px; margin: 1px;">Authority Signature</div>
			<div class="e_front_col_18" style=" width: 35%; float:right; font-size: 13px; margin: 1px;">Signature</div>
		</div>
	</div>
 </div>
 </div>
<?php  
		$k=$i+1;
		} 
	}
 ?>

</body>
</html>