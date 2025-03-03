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
                <a class="navbar-brand" href="#">Add Floor</a>
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
              <div class="col-md-6"><h3>Section List</h3></div>
              <div class="col-md-6 text-right">
                  <a href="<?=base_url('index.php/crud_con/sec_add')?>"target='_blank' class="btn btn-info" role="button">Add Section</a>
              </div>
         </div>   
      </div>
            
        <!-- <br> -->
           <div class="row">

                <div class="col-md-12">     

                    <table class="table table-striped">

                    		
                        <tbody>
                            <tr>
                                <th>Section Name English </th>
                                <th>Section Name Bangla </th>
                                <th>Strength </th>
                                <th>Str staff </th>
                                <th>Sec index </th>
                                <th>Absent report index </th>
                                <th>Company Unit</th>
                                <th width="80">Edit</th>
                                <th>Delete</th>
                                
                            </tr>

                            <?php 
                         // print_r($pr_sec);exit('keno?');


                            if(!empty($pr_sec)){ foreach($pr_sec as $pr_secs){?>

                                <tr>
                                    <td><?php echo $pr_secs['sec_name'] ?></td>
                                    <td><?php echo $pr_secs['sec_bangla'] ?></td>
                                    <td><?php echo $pr_secs['strength'] ?></td>
                                    <td><?php echo $pr_secs['str_staff'] ?></td>
                                    <td><?php echo $pr_secs['sec_index'] ?></td>
                                    <td><?php echo $pr_secs['absent_report_index'] ?></td>
                                    <td><?php echo $pr_secs['unit_name'] ?></td>
                                    
                                   
                                    <td >
                                        <a href="<?=base_url('index.php/crud_con/sec_edit').'/'.$pr_secs["sec_id"]?>"target='_blank' class="btn btn-primary" role="button">Edit</a>
                                    </td>
                                        
                                    <td>        
                                        <a href="<?=base_url('index.php/crud_con/sec_delete').'/'.$pr_secs["sec_id"]?>" class="btn btn-danger" role="button">Delete</a>
                                        
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
