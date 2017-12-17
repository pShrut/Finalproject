<?php 
include_once("../config/config.php");
include_once("../model/user.php");
$o_client=new login($conn);
$user_id=$_REQUEST['email'];
$qry = "id='".$user_id."'";
$result1 = $o_client->AllData("accounts",$qry);

$email = $result1[0]['email'];
$cdate= date('Y-m-d H:i:s',strtotime($_REQUEST['cdate']));
$ddate= date('Y-m-d H:i:s',strtotime($_REQUEST['ddate']));
$message=$_REQUEST['message'];


$record=array('owneremail'=>$email,'ownerid'=>$user_id,'createddate'=>$cdate,'duedate'=>$ddate,'message'=>$message);


if($_REQUEST['mode'] == "add")
{
	$result  = $o_client->insert("todos",$record);
	header('location:'.SITE_URL.'dashboard.php?page=todo&action=all&msg=1');
}
if($_REQUEST['mode'] == "edit")
{
	$result  = $o_client->ProfileUpdate("todos",$record,$_REQUEST['id']);
	header('location:'.SITE_URL.'dashboard.php?page=todo&action=all&msg=2');
}
if($_REQUEST['mode'] == "delete")
{
	$where = "id='".$_REQUEST['id']."'";
	$result  = $o_client->DeleteData("todos",$where);
	header('location:'.SITE_URL.'dashboard.php?page=todo&action=all&msg=3');

}
if($_REQUEST['mode'] == "isdone")
{
	$where = "id='".$_REQUEST['id']."'";
	$rec = array("isdone"=>"1");
	$result  = $o_client->ProfileUpdate("todos",$rec,$_REQUEST['id']);
	header('location:'.SITE_URL.'dashboard.php?page=todo&action=all&msg=4');

}
if($_REQUEST['mode'] == "notdone")
{
	$where = "id='".$_REQUEST['id']."'";
	$rec = array("isdone"=>"0");
	$result  = $o_client->ProfileUpdate("todos",$rec,$_REQUEST['id']);
	header('location:'.SITE_URL.'dashboard.php?page=todo&action=all&msg=4');

}



?>
