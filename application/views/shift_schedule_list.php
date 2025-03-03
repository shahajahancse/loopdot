<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.js') ?>"></script>
	
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body style="background-color:#FCE9D9;">

    <div class="container" style="padding-top: 10px;">

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Add Shift Schedule</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/erp-mysoftheaven2/index.php/payroll_con">Home</a></li>
                </ul>
                
              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
      <div class="row">
        <div class="col-md-12">
          <?php 
          $success = $this->session->flashdata('success');
          if ($success != "") {
           ?>
           <div class="alert alert-success"><?php echo $success; ?></div>
           <?php 
            }
            $failuer = $this->session->flashdata('failuer');
            if ($failuer) {
             ?>
           <div class="alert alert-failuer"><?php echo $failuer; ?></div>
           <?php 
            }
            ?>

        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="col-md-6"><h3>Shift Schedule List</h3></div>
              <div class="col-md-6 text-right">
                  <a href="<?=base_url('index.php/crud_con/shiftschedule_add')?>"target='_blank' class="btn btn-info" role="button">Add Shift Schedule</a>
              </div>
         </div>   
      </div>
            
        <!-- <br> -->
           <div class="row">

                <div class="col-md-12">     

                    <table class="table table-striped">

                    		
                        <tbody>
                            <tr>
                                <th>Unit Name </th>
                                <th>Shift Type</th>
                                <th>IN Start</th>
                                <th>IN Time</th>
                                <th>Late Start</th>
                                <th>IN End</th>
                                <th>OUT Start</th>
                                <th>OUT End</th>
                                <th>OT Start</th>
                                <th>OT Minute</th>
                                <th>One Hour OT Time</th>
                                <th>Two Hour OT Time</th>
                                <th width="80">Edit</th>
                                <th>Delete</th>
                                
                            </tr>

                            <?php 
                         // print_r($pr_emp_shift_schedule);exit('keno?');


                            if(!empty($pr_emp_shift_schedule)){ foreach($pr_emp_shift_schedule as $pr_emp_shift_schedules){?>

                                <tr>
                                    <td><?php echo $pr_emp_shift_schedules['unit_name'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['sh_type'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['in_start'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['in_time'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['late_start'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['in_end'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['out_start'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['out_end'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['ot_start'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['ot_minute_to_one_hour'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['one_hour_ot_out_time'] ?></td>
                                    <td><?php echo $pr_emp_shift_schedules['two_hour_ot_out_time'] ?></td>
                                    
                                   
                                    <td >
                                        <a href="<?=base_url('index.php/crud_con/shiftschedule_edit').'/'.$pr_emp_shift_schedules["shift_id"]?>"target='_blank' class="btn btn-primary" role="button">Edit</a>
                                    </td>
                                        
                                    <td>        
                                        <a href="<?=base_url('index.php/crud_con/shiftschedule_delete').'/'.$pr_emp_shift_schedules["shift_id"]?>" class="btn btn-danger" role="button">Delete</a>
                                        
                                    </td>
                                </tr>
                            <?php } }else{?>

                                <tr>
                                    <td colspan="12">Records not Found</td>
                                </tr>
                            <?php }?>   

                    	</tbody>
                    </table>
                 </div> 
           </div>  
        
    </div>
</body>
</html>
