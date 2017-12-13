<?php
include_once("model/user.php");
$o_client=new login($conn);
$where = "id='".$_REQUEST['id']."'";
$result = $o_client->AllData("accounts",$where);

?>
	<!-- END LEFTSIDE -->

	<!-- BEGIN RIGHTSIDE -->
        <div class="rightside bg-grey-100">
	<!-- BEGIN PAGE HEADING -->

        <div class="page-head">
	<h1 class="page-title">Manage Account</h1>
	<!-- BEGIN BREADCRUMB -->
	<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL; ?>dashboard.php"><i class="ion-home margin-right-5"></i> Dashboard</a></li>
	<li class="active">Manage Account</li>
	</ol>
	<!-- END BREADCRUMB -->
	</div>
	<!-- END PAGE HEADING -->
          <div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
	<div class="panel">
	<div class="panel-title bg-transparent">
    <div class="panel-head"><?php echo ucfirst($_REQUEST['action']); ?> Account</div>
	<div class="panel-tools">
							
	</div>
	</div>
	<div class="panel-body">
      <form name="frm" id="frm" action="controller/account.php" method="post">
  <input type="hidden" name="mode" id="mode" value="<?php echo $_REQUEST['action']; ?>">
<input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
	<!-- Text input -->
    <div class="form-group">
  <label for="input-text" class="control-label">Frist Name</label>
<input type="text" class="form-control" id="fname" name="fname" placeholder="Frist Name"  value="<?php echo $result[0]['fname']; ?>" required>
  </div>
   <div class="form-group">
   <label for="input-text" class="control-label">Last Name</label>
  <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name"  value="<?php echo $result[0]['lname']; ?>" required>
  </div>
   <div class="form-group">
   <label for="input-text" class="control-label">Enter Email</label>
  <input type="email" class="form-control" id="email" name="email" placeholder="email"  value="<?php echo $result[0]['email']; ?>" required>
   </div>

   <div class="form-group">
   <label for="input-text" class="control-label">Password</label>
   <input type="password" class="form-control" id="password" name="password" placeholder="Password"  value="<?php echo $result[0]['password']; ?>" required onchange="checkLength()">
   </div>
					
   <div class="form-group">
<label for="input-text" class="control-label">Phone</label>
<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required value="<?php echo $result[0]['phone']; ?>">
   </div>
	
  <div class="form-group">
  <label for="input-text" class="control-label">Birth Date</label>
 <input type="text" class="form-control datepicker" id="bdate" name="bdate" placeholder="Birth Date" value="<?php echo date('d-m-Y',strtotime($result[0]['birthday'])); ?>" required>
   </div>
   <div class="form-group">
   <label for="input-text" class="control-label">Gender</label>
   <select name="gender" id="gender" class="form-control" required>
    <option value="">Select Gender</option>
  <option <?php if($result[0]['gender'] == "male") { ?> selected <?php } ?> value="male">Male</option>
  <option <?php if($result[0]['gender'] == "female") { ?> selected <?php } ?> value="female">Female</option>
  </select>
   </div>

   <div class="margin-top-20 padding-top-20 border-top-1 border-grey-100">
  <button type="submit" name="account_add" id="account_add" class="btn bg-green-500 color-white btn-dark padding-left-40 padding-right-40">Submit</button>
  <a href="<?php echo SITE_URL; ?>dashboard.php?page=account&action=all">
  <button type="button" class="btn bg-orange-500 color-white btn-dark margin-right-10 padding-left-40 padding-right-40">Cancel</button></a>
  </div>
  </div>
 <!-- Input text with help -->
  </form>
  </div>
  </div>
  </div><!-- /.col -->
		
  <!-- /.col -->
  </div><!-- /.row -->	
 
  <!-- /.row -->
  <!-- /.row -->
	
  <!-- /.row -->
 <script type="text/javascript">
 function checkLength(){
  var textbox = document.getElementById("password");
  if(textbox.value.length <= 6){
    }
    else{
     alert("password at least 6 character.");
     textbox.value = "";
    }
}
</script>
