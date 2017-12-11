
<?php
include_once("model/user.php");
$o_client=new login($conn);
$where = "id='".$_SESSION['id']."'";
$chk  = $o_client->ChkLogin("accounts",$where);
?>
 <div class="rightside bg-grey-100">
<!-- BEGIN PAGE HEADING -->
<div class="page-head">
<h1 class="page-title">Profile</h1>
<!-- BEGIN BREADCRUMB -->
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL; ?>dashboard.php"><i class="ion-home margin-right-5"></i> Dashboard</a></li>
<li class="active">Profile</li>
</ol>
<!-- END BREADCRUMB -->
</div>
<!-- END PAGE HEADING -->

 <div class="container-fluid">
  <div class="row">
  <div class="col-lg-12">
   <div class="panel">
  <div class="panel-title bg-transparent">
  <div class="panel-head">Edit Profile</div>
  <div class="panel-tools">
			
  </div>
   </div>
 <div class="panel-body">
 <form name="frm" id="frm" action="controller/profile.php" method="post">
										
<!-- Text input -->
<div class="form-group">
<label for="input-text" class="control-label">First Name</label>
<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php echo $chk[0]['fname']; ?>" required>
</div>
							
<div class="form-group">
<label for="input-text" class="control-label">Last Name</label>
<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?php echo $chk[0]['lname']; ?>" required>
</div>

<div class="form-group">
<label for="input-text" class="control-label">Phone</label>
<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $chk[0]['phone']; ?>" required>
</div>
										
						
<div class="form-group">
<label for="input-text" class="control-label">Birth Date</label>
<input type="text" name="dob" id="dob" class="form-control datepicker" placeholder="DD/MM/YYYY" value="<?php echo $chk[0]['birthday']; ?>" required>
											
</div>
							
<div class="form-group">
<label for="input-text" class="control-label">Gender</label>
<select name="gender" id="gender" class="form-control" required>
<option value="">Select Gender</option>
<option <?php if($chk[0]['gender'] == "male") { ?> selected <?php } ?> value="male">Male</option>
<option <?php if($chk[0]['gender'] == "female") { ?> selected <?php } ?> value="female">Female</option>
</select>
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
