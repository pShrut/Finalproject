<?php
include_once("../config/config.php");
include_once("../model/user.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$bdate=$_POST['dob'];
$gender=$_POST['gender'];
$record=array('fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'birthday'=>$bdate,'gender'=>$gender);
$value = implode(",",$record);
$o_client=new login($conn);
$result  = $o_client->ProfileUpdate("accounts",$record,$_SESSION['id']);
header('location:'.SITE_URL.'dashboard.php?msg='.$result);
?>
