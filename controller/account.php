<?php 
include_once("../config/config.php");
include_once("../model/user.php");

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$phone=$_REQUEST['phone'];
$bdate= date('Y-m-d H:i:s',strtotime($_REQUEST['bdate']));
$gender=$_REQUEST['gender'];

$user_id = $_SESSION['id'];

$record=array('email'=>$email,'fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'birthday'=>$bdate,'gender'=>$gender,'password'=>$pass);
$o_client=new login($conn);

if($_REQUEST['mode'] == "add")
{
	$result  = $o_client->insert("accounts",$record);
	header('location:'.SITE_URL.'dashboard.php?page=account&action=all&msg=1');
}
if($_REQUEST['mode'] == "edit")
{
	$result  = $o_client->ProfileUpdate("accounts",$record,$_REQUEST['id']);
	header('location:'.SITE_URL.'dashboard.php?page=account&action=all&msg=2');
}
if($_REQUEST['mode'] == "delete")
{
	$where = "id='".$_REQUEST['id']."'";
	$result  = $o_client->DeleteData("accounts",$where);
	header('location:'.SITE_URL.'dashboard.php?page=account&action=all&msg=3');

}
if($_REQUEST['mode'] == "isdone")
{
	$where = "id='".$_REQUEST['id']."'";
	$rec = array("isdone"=>"1");
	$result  = $o_client->ProfileUpdate("accounts",$rec,$_REQUEST['id']);
	header('location:'.SITE_URL.'dashboard.php?page=account&action=all&msg=4');

}
if($_REQUEST['mode'] == "notdone")
{
	$where = "id='".$_REQUEST['id']."'";
	$rec = array("isdone"=>"0");
	$result  = $o_client->ProfileUpdate("accounts",$rec,$_REQUEST['id']);
	header('location:'.SITE_URL.'dashboard.php?page=account&action=all&msg=4');

}



?>
