<?php
include"dbconfig.php";
$n=iud("DELETE FROM `addcart` WHERE `add_id`='".$_REQUEST['id']."'");
if($n==1)
{
	echo"<script>alert(' Removed');
		window.location='womens.php';
		</script>";
}
?>