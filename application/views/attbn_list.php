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
                <a class="navbar-brand" href="#">Add AttendanceBonus</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/erp-mysoftheaven2/index.php/payroll_con">Home</a></li>
                </ul>
                
              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
      <div class="row">
        <div class="col-md-8">
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
          <div class="col-md-8">
              <div class="col-md-6"><h3>AttendanceBonus List</h3></div>
              <div class="col-md-6 text-right">
                  <a href="<?=base_url('index.php/crud_con/attbn_add')?>"target='_blank' class="btn btn-info" role="button">Add AttendanceBonus</a>
              </div>
         </div>   
      </div>
            
        <!-- <br> -->
           <div class="row">

                <div class="col-md-8">     

                    <table class="table table-striped">

                    		
                        <tbody>
                            <tr>
                                <th>Rule Name </th>
                                <th>Amount</th>
                                <th width="80">Edit</th>
                                <th>Delete</th>
                                
                            </tr>

                            <?php 
                         // print_r($pr_attbn);exit('keno?');


                            if(!empty($pr_attn_bonus)){ foreach($pr_attn_bonus as $pr_attbns){?>

                                <tr>
                                    <td><?php echo $pr_attbns['ab_rule_name'] ?></td>
                                    <td><?php echo $pr_attbns['ab_rule'] ?></td>
                                    
                                   
                                    <td >
                                        <a href="<?=base_url('index.php/crud_con/attbn_edit').'/'.$pr_attbns["ab_id"]?>"target='_blank' class="btn btn-primary" role="button">Edit</a>
                                    </td>
                                        
                                    <td>        
                                        <a href="<?=base_url('index.php/crud_con/attbn_delete').'/'.$pr_attbns["ab_id"]?>" class="btn btn-danger" role="button">Delete</a>
                                        
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
