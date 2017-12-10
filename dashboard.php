<?php echo 'hi';?>
<?php include_once('header.php'); ?>		
		<!-- BEGIN RIGHTSIDE -->

		<?php 
			if($_REQUEST['page'] == "profile" && $_REQUEST['action'] == "edit")
			{
				include_once("profile.php");
			}else if($_REQUEST['page'] == "setting" && $_REQUEST['action'] == "password"){
				include_once("resetpassword.php");
			}else if($_REQUEST['page'] == "todo" && $_REQUEST['action'] == "all"){
				include_once("todo.php");
			}else if($_REQUEST['page'] == "todo" && $_REQUEST['action'] == "add"){
				include_once("add-todo.php");
			}else if($_REQUEST['page'] == "todo" && $_REQUEST['action'] == "edit"){
				include_once("add-todo.php");
			}else if($_REQUEST['page'] == "account" && $_REQUEST['action'] == "all"){
				include_once("user.php");
			}
			else if($_REQUEST['page'] == "account" && $_REQUEST['action'] == "add"){
				include_once("add-account.php");
			}
			else if($_REQUEST['page'] == "account" && $_REQUEST['action'] == "edit"){
				include_once("add-account.php");
			}else
			{
				include_once("home.php");
			}
		?>

      
                <!-- /.row -->
					
					
                <!-- /.row -->
<?php include_once('footer.php'); ?>				
