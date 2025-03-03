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
                <a class="navbar-brand" href="#">Night Allowance</a>
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
              <div class="col-md-6"><h3>Night Allowance</h3></div>
         </div>   
      </div>
            
        <!-- <br> -->
           <div class="row">

                <div class="col-md-12">     

                    <table class="table table-striped">

                    		
                        <tbody>
                            <tr>
                                <th>Rules Name </th>
                                <th>Unit Name </th>
                                <th>Time </th>
                                <th>Night Time 2ND </th>
                                <th>Night Allowance</th>
                                <th>Night Allowance 2ND </th>
                                <th>Designation</th>
                                
                                
                            </tr>

                            <?php 
                         // print_r($pr_line);exit('keno?');


                            if(!empty($pr_night_allowance_rules)){ foreach($pr_night_allowance_rules as $night_allowance){?>

                                <tr>
                                    <td><?php echo $night_allowance['rules_name'] ?></td>
                                    <td><?php echo $night_allowance['unit_name'] ?></td>
                                    <td><?php echo $night_allowance['night_time'] ?></td>
                                    <td><?php echo $night_allowance['night_time_2nd'] ?></td>
                                    <td><?php echo $night_allowance['night_allowance'] ?></td>
                                    <td><?php echo $night_allowance['night_allowance_2nd'] ?></td>
                                    <td><?php echo $night_allowance['desig_name'] ?></td>
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
