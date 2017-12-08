
<?php include_once('config/config.php');?>
 <!DOCTYPE html>
 <html lang="en">
 <!-- BEGIN HEAD -->

 <!-- Mirrored from maniac.yakuzi.eu/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2016 06:17:42 GMT -->
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title><?php echo SITE_TITLE;?></title>
    <!-- BEGIN CORE FRAMEWORK -->
    <link href="<?php echo SITE_URL;?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL; ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL;?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- END CORE FRAMEWORK -->

    <!-- BEGIN PLUGIN STYLES -->
   <link href="<?php echo SITE_URL;?>assets/plugins/animate/animate.css"rel="stylesheet" />
   <link href="<?php echo
   SITE_URL;?>assets/plugins/bootstrapValidator/bootstrapValidator.min.css"rel="stylesheet"
   />
   <link href="<?php echo
   SITE_URL;?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
   <!-- END PLUGIN STYLES -->
   
   <!-- BEGIN THEME STYLES -->
   <link href="<?php echo SITE_URL;?>assets/css/material.css" rel="stylesheet"/>
   <link href="<?php echo SITE_URL;?>assets/css/style.css"rel="stylesheet"/>
   <link href="<?php echo SITE_URL;?>assets/css/plugins.css" rel="stylesheet" />
   <link href="<?php echo SITE_URL;?>assets/css/helpers.css"rel="stylesheet"/>
   <link href="<?php echo SITE_URL;?>assets/css/responsive.css"rel="stylesheet"/>
   <!-- END THEME STYLES -->

   </head>
   <!-- END HEAD  -->
   <!-- BEGIN BODY-->
  <body class="auth-page height-auto bg-blue-600">
<!-- BEGIN CONTENT-->
<?php 
    if($_REQUEST['page'] == "account" && $_REQUEST['action'] == "register")
    { 
        include("register.php");
     }else
     { 
        include("login.php");
     }
 ?>
 <!-- END CONTENT -->		
 <!-- BEGIN JAVASCRIPTS-->
 	
  <!-- BEGIN CORE PLUGINS-->
    <script src="<?php echo SITE_URL;?>assets/plugins/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo SITE_URL;?>assets/plugins/bootstrap/js/bootstrap.min.js"type="text/javascript"></script>
    <script src="<?php echo SITE_URL;?>assets/plugins/bootstrap/js/holder.js"></script>
    <script src="<?php echo SITE_URL;?>assets/plugins/slimScroll/jquery.slimscroll.min.js"type="text/javascript"></script>
    <script src="<?php echo SITE_URL;?>assets/js/core.js" type="text/javascript"></script>
<!-- END CORE PLUGINS-->
<!-- bootstrap validator -->
    <script src="<?php echo SITE_URL;?>assets/plugins/bootstrapValidator/bootstrapValidator.min.js"type="text/javascript"></script>
<!-- switchery -->
<script src="<?php echo SITE_URL;?>asseassets/plugins/switchery/switchery.min.js"type="text/javascript"></script>
<script src="<?php echo SITE_URL; ?>assets/js/maniac.js"type="text/javascript"></script>
 <script type="text/javascript">
	maniac.loadvalidator();
	maniac.loadswitchery();
	</script>
	<!--END JAVASCRIPTS-->
	</body>
	</html>
