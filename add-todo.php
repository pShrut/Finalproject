<?php
include_once("model/user.php");
$o_client=new login($conn);
$where = "id='".$_REQUEST['id']."'";
$result = $o_client->AllData("todos",$where);

$result1 = $o_client->AllData("accounts","1=1");

?>
	
<!-- END LEFTSIDE -->
<!-- BEGIN RIGHTSIDE -->
<div class="rightside bg-grey-100">
<!-- BEGIN PAGE HEADING -->

 <div class="page-head">

<h1 class="page-title">Manage Todo</h1>
<!-- BEGIN BREADCRUMB -->
<ol class="breadcrumb">
<li><a href="<?php echo SITE_URL; ?>dashboard.php"><i class="ion-home margin-right-5"></i> Dashboard</a></li>
<li class="active">Manage Todo</li>
</ol>
<!-- END BREADCRUMB -->
</div>
<!-- END PAGE HEADING -->

<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="panel">
<div class="panel-title bg-transparent">
<div class="panel-head"><?php echo ucfirst($_REQUEST['action']); ?> Todo</div>
<div class="panel-tools">
					
</div>
</div>
<div class="panel-body">
<form name="frm" id="frm" action="controller/todo.php" method="post">
<input type="hidden" name="mode" id="mode" value="<?php echo $_REQUEST['action']; ?>">
<input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
<!-- Text input -->
<div class="form-group">
<label for="input-text" class="control-label">Select Email</label>
<select class="form-control" id="email" name="email"  required>
<option value="">Select Email</option>
<?php foreach($result1 as $row){ ?>
<option <?php if($result1[0]['id'] == $row['id']) { ?> selected <?php }  ?> value="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></option>
<?php } ?>
</select>
</div>
		
<div class="form-group">
<label for="input-text" class="control-label">Create Date</label>
<input type="text" class="form-control datepicker" id="cdate" name="cdate" placeholder="Create Date" required value="<?php echo date('d-m-Y',strtotime($result[0]['createddate'])); ?>">
</div>
<div class="form-group">
<label for="input-text" class="control-label">Due Date</label>
<input type="text" class="form-control datepicker" id="ddate" name="ddate" placeholder="Due Date" value="<?php echo date('d-m-Y',strtotime($result[0]['duedate'])); ?>" required>
</div>
	
<div class="form-group">
<label for="input-text" class="control-label">Message</label>
<textarea name="message" id="message" class="form-control" required><?php echo $result[0]['message']; ?></textarea>
</div>
					
<div class="margin-top-20 padding-top-20 border-top-1 border-grey-100">

 <button type="submit" name="todo_add" id="todo_add" class="btn bg-green-500 color-white btn-dark padding-left-40 padding-right-40">Submit</button>
 <a href="<?php echo SITE_URL; ?>dashboard.php?page=todo&action=all">
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
