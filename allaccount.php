<?php

include_once("model/user.php");
$o_client=new login($conn);
$where = "1=1";
$result = $o_client->AllData("accounts",$where);
//print_r($result);

?>
           

  <div class="container-fluid">
<!-- /.row -->
					
  <div class="row">
  			
  <div class="col-lg-12">
  <div class="panel no-border ">
                              
  <div class="panel-body no-padding-top bg-white">
  <h3 class="color-grey-700">All User</h3>
  <a href="<?php echo SITE_URL."index.php";?>"><button type="button" class="btn bg-green-500 color-white btn-dark padding-left-10 padding-right-10">Back</button></a>
  <table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
  <th>Sr.No</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>phone</th>
  <th>Birth Date</th>
  <th>Gender</th>
 								
  </tr>
  </thead>
  <tbody>
  <?php $i=1; foreach($result as $row){ ?>
  <tr>
  <td><?php echo $i; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['fname']; ?></td>
  <td><?php echo $row['lname']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td><?php echo  date('Y-m-d',strtotime($row['birthday'])); ?></td>
  <td> <?php echo $row['gender']; ?></td>
												
  </tr>
  <?php $i++; } ?>
  </tbody>
  <tfoot>
  <tr>
  <th>Sr.No</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>phone</th>
  <th>Birth Date</th>
  <th>Gender</th>
  							
  </tr>
  </tfoot>
  </table>
  </div>
  </div><!-- /.col -->
  </div><!-- /. row -->
  <!-- BEGIN FOOTER -->
  
