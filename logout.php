<?php 
include_once('config/config.php');
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
header('location:'.SITE_URL.'index.php');
?>
