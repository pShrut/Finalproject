
<?php require('header.php'); ?>		
		<!-- BEGIN RIGHTSIDE -->

		<?php 
			if($_REQUEST['page'] == "profile" && $_REQUEST['action'] == "edit")
			{
				require("profile.php");
			}else if($_REQUEST['page'] == "setting" && $_REQUEST['action'] == "password"){
				require("resetpassword.php");
			}else if($_REQUEST['page'] == "todo" && $_REQUEST['action'] == "all"){
				require("todo.php");
			}else if($_REQUEST['page'] == "todo" && $_REQUEST['action'] == "add"){
				require("add-todo.php");
			}else if($_REQUEST['page'] == "todo" && $_REQUEST['action'] == "edit"){
				require("add-todo.php");
			}else if($_REQUEST['page'] == "account" && $_REQUEST['action'] == "all"){
				require("user.php");
			}
			else if($_REQUEST['page'] == "account" && $_REQUEST['action'] == "add"){
				require("add-account.php");
			}
			else if($_REQUEST['page'] == "account" && $_REQUEST['action'] == "edit"){
				require("add-account.php");
			}else
			{
				require("home.php");
			}
		?>

      
                <!-- /.row -->
					
					
                <!-- /.row -->
<?php require('footer.php'); ?>				
