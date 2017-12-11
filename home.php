<?php 
include_once("model/user.php");
$o_client=new login($conn);
$where = "1=1";
$result_todo = $o_client->AllData("todos",$where);
$result_account = $o_client->AllData("accounts","1=1");

?>
			 	  <div class="rightside bg-grey-100">
			<!-- BEGIN PAGE HEADING -->
            <div class="page-head bg-grey-100">
            	<p style="text-align: center;font-size: 18px;color: red;">
            			<?php  if($_REQUEST['msg'] == "1") 
            			{
            				echo 'Your Profile Successfully Updated...';
            			}if($_REQUEST['msg'] == "2") 
            			{
            				echo 'Your Profile Not Updated...';
            			}
            			if($_REQUEST['msg'] == "2") 
            			{
            				echo 'Your Profile Not Updated...';
            			}
            			 ?>
            			
            			


            	</p>
		<h1 class="page-title">Dashboard<small>welcome to <?php echo $_SESSION['username']; ?></small></h1>
				
		</div>
		<!-- END PAGE HEADING -->

            <div class="container-fluid">
		<div class="row">
		<a href="">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="panel bg-teal-500">
		<div class="panel-body padding-15-20">
		<div class="clearfix">
		<div class="pull-left">
<div class="color-white font-size-26 font-roboto font-weight-600" data-toggle="counter" data-start="0" data-from="0" data-to="1230" data-speed="500" data-refresh-interval="10"></div>
<div class="display-block color-teal-50 font-weight-600"><i class="ion-plus-round"></i> Account</div>
               	</div>
	       	<div class="pull-right">
	     	<i class="font-size-36 color-teal-100 ion-person-add"></i>
	       	</div>
	        <div>
		<div class="progress progress-animation progress-xs margin-top-25 margin-bottom-5">
<div class="progress-bar bg-teal-100" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
         	</div>
	       	</div>
	<div class="font-size-11 clearfix color-teal-50 font-weight-600">
	<div class="pull-left">Total Account</div>
	<div class="pull-right"><?php echo COUNT($result_account); ?></div>
	</div>
	</div>
	</div><!-- /.panel -->
	</div><!-- /.col -->
	</a>	
	<a href="<?php echo SITE_URL; ?>dashboard.php?page=todo&action=all">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	<div class="panel bg-red-400">
	<div class="panel-body padding-15-20">
	<div class="clearfix">
	<div class="pull-left">
<div class="color-white font-size-26 font-roboto font-weight-600" data-toggle="counter" data-start="0" data-from="0" data-to="5613" data-speed="500" data-refresh-interval="10"></div>
<div class="display-block color-red-50 font-weight-600"><i class="ion-plus-round"></i> Todo</div>
          </div>
         	<div class="pull-right">
	<i class="font-size-36 color-red-100 ion-email-unread"></i>
	</div>
	</div>
	<div class="progress progress-animation progress-xs margin-top-25 margin-bottom-5">
<div class="progress-bar bg-red-100" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
	</div>
	</div>
 <div class="font-size-11 clearfix color-red-50 font-weight-600">
 	<div class="pull-left">Total Todo</div>
	<div class="pull-right"><?php echo COUNT($result_todo); ?></div>
	</div>
	</div>
	</div><!-- /.panel -->
       </div><!-- /.col -->
	</a>
								
					
