<?php
require("../config/config.php");
require("../model/user.php");
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];
$o_client=new login($conn);
$where = "password='".$old_pass."' AND id='".$_SESSION['id']."'";
$chk  = $o_client->ChkPassword("accounts",$where);
if(!empty($chk))
{
	$record = array("password"=>$new_pass);
	$result  = $o_client->ProfileUpdate("accounts",$record,$_SESSION['id']);
	?>
	<script type="text/javascript">
	 alert('Your Password Successfully Updated. Please Login!');
	 window.location.assign("<?php echo SITE_URL; ?>logout.php");
	</script>
	<?php 
  }else
  {
 
header('location:'.SITE_URL.'dashboard.php?page=setting&action=password&msg=1');
}
?>
