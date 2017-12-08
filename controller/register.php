<?php
include_once("../config/config.php");
include_once("../model/user.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$phone=$_POST['phone'];
$bdate=$_POST['bdate'];
$gender=$_POST['gender'];
$record=array('email'=>$email,'fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'birthday'=>$bdate,'gender'=>$gender,'password'=>$pass);
$o_client=new login($conn);
$where = "email='".$email."'";
$chk  = $o_client->chkRegister("accounts",$where);
if(!empty($chk))
{
  header('location:'.SITE_URL.'index.php?msg=3');
 }else
{
  $result  = $o_client->insert("accounts",$record);
  header('location:'.SITE_URL.'index.php?msg='.$result);
}
?>
