
<?php
include_once("model/user.php");
$o_client=new login($conn);
$where = "1=1";
$result = $o_client->AllData("accounts",$where);

?>
		<!-- BEGIN RIGHTSIDE -->
        <div class="rightside bg-grey-100">
        	<p style="text-align: center;color: red;font-size: 18px;">
				<?php if($_REQUEST['msg'] == "1"){

					echo 'Record Successfully Added..';
				} 

				if($_REQUEST['msg'] == "2"){

					echo 'Record Successfully Updated..';
				} 


				if($_REQUEST['msg'] == "3"){

					echo 'Record Successfully Deleted.';
				} 

				if($_REQUEST['msg'] == "4"){

					echo 'Record Successfully Updated.';
				} 

				?>
			</p>
	<!-- BEGIN PAGE HEADING -->
         <div class="page-head">
	<h1 class="page-title">Manage Account</h1>
	<!-- BEGIN BREADCRUMB -->
	<ol class="breadcrumb">
	<li><a href="<?php echo SITE_URL; ?>dashboard.php"><i class="ion-home margin-right-5"></i> Dashboard</a></li>
	<li class="active">Manage Todo</li>

	</ol>
	<div class="panel-title bg-transparent">
							
								
	<!-- END BREADCRUMB -->
	</div>
	<!-- END PAGE HEADING -->

        <div class="container-fluid">
	<!-- /.row -->
					
	<div class="row">
	<div style="margin-top: 10px;">
	<a href="<?php echo SITE_URL; ?>dashboard.php?page=account&action=add"><button type="button" style="float:right;" class="btn bg-green-500 color-white btn-dark padding-left-40 padding-right-40" >Add Account</button></a>
	</div>
        <div class="col-lg-12">
    	<div class="panel no-border ">
                                
       <div class="panel-body no-padding-top bg-white">
       <h3 class="color-grey-700">Manage Account</h3>
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
	<th>Action</th>
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
														
												
												
<td>	<a href="<?php echo SITE_URL."dashboard.php?page=account&action=edit&id=".$row['id']; ?>"><button type="button" class="btn bg-green-500 color-white btn-dark padding-left-10 padding-right-10">Edit</button></a>
<a href="<?php echo SITE_URL."controller/account.php?mode=delete&id=".$row['id']; ?>"><button type="button" class="btn bg-red-500 color-white btn-dark padding-left-10 padding-right-10">Delete</button></a>

												
	</td>
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
	<th>Action</th>
	</tr>
	</tfoot>
	</table>
        </div>
        </div><!-- /.col -->
        </div><!-- /. row -->
	<!-- BEGIN FOOTER -->

