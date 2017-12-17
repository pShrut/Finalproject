
<?php
include_once("model/user.php");
$o_client=new login($conn);
$where = "1=1";
$result = $o_client->AllData("todos",$where);

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
   <th>Email</th>
   <th>Date</th>
   <th>Due Date</th>
   <th>Message</th>
   <th>Done</th>
 														
   </tr>
   </thead>
   <tbody>
    <?php $i=1; foreach($result as $row){ ?>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['owneremail']; ?></td>
    <td><?php  echo  date('Y-m-d',strtotime($row['createddate'])); ?></td>
    <td><?php echo  date('Y-m-d',strtotime($row['duedate'])); ?></td>
    <td> <?php echo $row['message']; ?></td>
    <td>
    <?php 
        if($row['isdone'] == "0"){
        	echo 'No';
	}else{
	echo 'Yes';
	}
	?></td>
													
	</tr>
	<?php $i++; } ?>
	</tbody>
	<tfoot>
	<tr>
															
	<th>Sr.No</th>
	<th>Email</th>
	<th>Date</th>
	<th>Due Date</th>
	<th>Message</th>
	<th>Done</th>
														
															
	</tr>
	</tfoot>
	</table>
        </div>
        </div><!-- /.col -->
        </div><!-- /. row -->
	<!-- BEGIN FOOTER -->  
