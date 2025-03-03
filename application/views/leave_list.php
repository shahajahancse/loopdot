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
                <a class="navbar-brand" href="#">Leave</a>
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
              <div class="col-md-12"><h3>Leave List</h3></div>
              
         </div>   
      </div>
            
        <!-- <br> -->
           <div class="row">

                <div class="col-md-12">     

                    <table class="table table-striped">

                    		
                        <tbody>
                            <tr>
                                <th>Leave Name</th>
                                <th>Status ID </th>
                                <th>Sick Leave</th>
                                <th>Casual Leave</th>
                                <th>Maternity Leave</th>
                                <th>Paternity Leave</th>
                              	<th width="80">Edit</th>
                                
                                
                            </tr>

                            <?php 
                         // print_r($pr_leave);exit('keno?');


                            if(!empty($pr_leave)){ foreach($pr_leave as $pr_leaves){?>

                                <tr>
                                    <td><?php echo $pr_leaves['lv_name'] ?></td>
                                    <td><?php echo $pr_leaves['status_id'] ?></td>
                                    <td><?php echo $pr_leaves['lv_sl'] ?></td>
                                    <td><?php echo $pr_leaves['lv_cl'] ?></td>
                                    <td><?php echo $pr_leaves['lv_ml'] ?></td>
                                    <td><?php echo $pr_leaves['lv_pl'] ?></td>
                                    
                                    
                                    <td >
                                        <a href="<?=base_url('index.php/crud_con/leave_edit').'/'.$pr_leaves["lv_id"]?>"target='_blank' class="btn btn-primary" role="button">Edit</a>
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
