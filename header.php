<?php include_once('config/config.php');

if(!isset($_SESSION['id']))
{
	header('location:'.SITE_URL.'index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	
	<title><?php echo SITE_TITLE; ?></title>
	
	<!-- BEGIN CORE FRAMEWORK -->
	<link href="<?php echo SITE_URL; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<!-- END CORE FRAMEWORK -->
	
	<!-- BEGIN PLUGIN STYLES -->
	<link href="<?php echo SITE_URL; ?>assets/plugins/animate/animate.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL; ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL; ?>assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL; ?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo SITE_URL; ?>assets/plugins/iCheck/skins/all.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" />
	<!-- END PLUGIN STYLES -->
	
	<!-- BEGIN THEME STYLES -->
	<link href="<?php echo SITE_URL; ?>assets/css/material.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/css/plugins.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/css/helpers.css" rel="stylesheet" />
	<link href="<?php echo SITE_URL; ?>assets/css/responsive.css" rel="stylesheet" />
	<!-- END THEME STYLES -->
	
	<link href="<?php echo SITE_URL; ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" />
	<!-- END THEME STYLES -->
	<style type="text/css">
	.dataTables_paginate{text-align:right;}
	.dataTables_filter{text-align:right;}
	</style>
	<!-- END THEME STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-leftside fixed-header">
	<!-- BEGIN HEADER -->
	<header>
		<a href="dashboard.php" class="logo"><i class="ion-ios-bolt"></i> <span><?php echo SITE_TITLE; ?></span></a>
		<nav class="navbar navbar-static-top">
		<a href="#" class="navbar-btn sidebar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
			
            
        </nav>
    </header>
	<!-- END HEADER -->
		 
	<div class="wrapper">
		<!-- BEGIN LEFTSIDE -->
        <div class="leftside">
			<div class="sidebar">
				<!-- BEGIN RPOFILE -->
			<div class="nav-profile">
			
			
			<div class="info">
			<a href= "<?php echo SITE_URL."dashboard.php?page=profile&action=edit" ;?>" > <?php echo $_SESSION['username']; ?></a>
			<ul class="tools list-inline">
<li><a href="<?php echo SITE_URL."dashboard.php?page=setting&action=password" ;?>" data-toggle="tooltip" title="Settings"><i class="ion-gear-a"></i></a></li>
							
			</ul>
			</div>
			<a href="<?php echo SITE_URL."logout.php" ?>" class="button"><i class="ion-log-out"></i></a>
			</div>
			<!-- END RPOFILE -->
			<!-- BEGIN NAV -->
			<div class="title">Navigation</div>
			<ul class="nav-sidebar">
			<li class="active">
                        <a href="<?php echo SITE_URL; ?>dashboard.php">
                        <i class="ion-home"></i> <span>Dashboard</span>
                        </a>
                        </li>
                  <li class="nav-dropdown">
		<a href="#">
		<i class="ion-email"></i><span>Account</span>
		<i class="ion-chevron-right pull-right"></i>
		</a>
		<ul>
		<li><a href="<?php echo SITE_URL; ?>dashboard.php?page=account&action=all">Manage Account</a></li>
                   </ul>
		   </li>
              <li class="nav-dropdown">
              <a href="#">
	<i class="ion-email"></i><span>Todo</span>
	<i class="ion-chevron-right pull-right"></i>
	</a> 
	<ul>
	<li><a href="<?php echo SITE_URL; ?>dashboard.php?page=todo&action=all">Manage Todo</a></li>
	</ul> 
	</li> 


		   </ul>
		<!-- END NAV -->
		<!-- BEGIN WIDGET -->
		<!-- END WIDGET -->
		</div><!-- /.sidebar -->
        </div>
 <!-- END LEFTSIDE -->
 
