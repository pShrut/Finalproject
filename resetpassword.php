
 <div class="rightside bg-grey-100">
	<!-- BEGIN PAGE HEADING -->
	<p style="text-align: center;color: red;font-size: 18px;">
	<?php 
	if($_REQUEST['msg'] == "1") { 
	echo 'Sorry Your Old Password is wrong please fill right password!';
	}
	?>
	</p>
        <div class="page-head">
	<h1 class="page-title">Setting</h1>
	<!-- BEGIN BREADCRUMB -->
	<ol class="breadcrumb">
	<li><a href="<?php echo SITE_URL; ?>dashboard.php"><i class="ion-home margin-right-5"></i> Dashboard</a></li>
	<li class="active">Setting</li>
	</ol>
	<!-- END BREADCRUMB -->
	</div>
	<!-- END PAGE HEADING -->

        <div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
	<div class="panel">
	<div class="panel-title bg-transparent">
	<div class="panel-head">Change Password</div>
	<div class="panel-tools">
										
	</div>
	</div>
	<div class="panel-body">
	<form name="frm" id="frm" action="controller/changepass.php" method="post">
								
	<!-- Text input -->
	<div class="form-group">
	<label for="input-text" class="control-label">Old Password</label>
	<input type="Password" class="form-control" id="old_pass" name="old_pass" placeholder="OLD Password" required>
	</div>
					
	<div class="form-group">
	<label for="input-text" class="control-label">New Password</label>
	<input type="Password" class="form-control" id="new_pass" name="new_pass" placeholder="New Password"  required>
	</div>
										
										
							
	<div class="margin-top-20 padding-top-20 border-top-1 border-grey-100">
						  
  <button type="submit" name="submit" id="submit" class="btn bg-green-500 color-white btn-dark padding-left-40 padding-right-40">Submit</button>
  <button type="reset" class="btn bg-orange-500 color-white btn-dark margin-right-10 padding-left-40 padding-right-40">Reset</button>
  </div>
  </div>
										
  <!-- Input text with help -->
							
  </form>
						
   </div>
  </div>
  </div><!-- /.col -->

<!-- /.col -->
  </div><!-- /.row -->	
