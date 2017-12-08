<?php
include("../config/config.php");
include("../model/user.php");
$email=$_POST['email'];
$pass=$_POST['password'];
$o_client=new login($conn);
$where = "email='".$email."' AND password='".$pass."'";
$chk  = $o_client->ChkLogin("accounts",$where);
if(!empty($chk))
{
   $_SESSION['id'] = $chk[0]['id'];
   $_SESSION['username'] = $chk[0]['fname']." ".$chk[0]['lname'];
   $_SESSION['email'] = $chk[0]['email'];
   header('location:'.SITE_URL.'dashboard.php');
  }else
{
					
   header('location:'.SITE_URL.'index.php?msg=4');
}
?>
