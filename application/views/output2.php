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
                <a class="navbar-brand" href="#">Add Comapny Unit</a>
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
              <div class="col-md-6"><h3>Company Unit List</h3></div>
              <div class="col-md-6 text-right">
                  <a href="<?=base_url('index.php/crud_con/company_add')?>"target='_blank' class="btn btn-info" role="button">Add Company</a>
              </div>
         </div>   
      </div>
            
        <!-- <br> -->
           <div class="row">

                <div class="col-md-12">     

                    <table class="table table-striped">

                    		
                        <tbody>
                            <tr>
                                <th>Company Name </th>
                                <th>Company Address</th>
                                <th>Company Phone No</th>
                                <th>Company Logo</th>
                                <th>Company Signature</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                
                            </tr>

                            <?php 
                            // print_r($company_infos);exit('keno?');


                            if(!empty($company_infos)){ foreach($company_infos as $cominfos){?>

                                <tr>
                                    <td><?php echo $cominfos['company_name_bangla'] ?></td>
                                    <td><?php echo $cominfos['company_add_bangla'] ?></td>
                                    <td><?php echo $cominfos['company_phone'] ?></td>
                                   <!--  <td><?php echo $cominfos['company_logo'] ?></td>
                                    <td><?php echo $cominfos['company_signature'] ?></td> -->
                                    
                                    <td><img width="55" height="55" src="<?=base_url()?>images/<?=$cominfos['company_logo'] ?>" /></td>
                                    <td><img width="55" height="55" src="<?=base_url()?>images/<?=$cominfos['company_signature'] ?>" /></td>
                                   
                
                                    <td >
                                        <a href="<?=base_url('index.php/crud_con/company_edit').'/'.$cominfos["id"]?>"target='_blank' class="btn btn-primary" role="button">Edit</a>
                                    </td>
                                        
                                    <td>        
                                        <a href="<?=base_url('index.php/crud_con/company_delete').'/'.$cominfos["id"]?>" class="btn btn-danger" role="button">Delete</a>
                                        
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
