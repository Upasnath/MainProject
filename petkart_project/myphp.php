<?php
require_once"dbconfig.php";
//require_once"validation.php";
##################################################
if(isset($_REQUEST['submit']))
{
	extract($_REQUEST);
	$n=iud("INSERT INTO `addcart`( `userid`, `petid`, `sub_cat`) VALUES ('$userid','$petid','$sub_cat')");
	if($n==1)
	{
		echo"<script>alert('successfully Added');
		window.location='index.php';
		</script>";
	}
	
}
##################################################
if(isset($_REQUEST['buynow']))
{
	//echo "djfgj";
	extract($_REQUEST);
	$n=iud("INSERT INTO `buy`( `userid`, `sellerid`, `petid`, `sub_cat`) VALUES ('$userid','$seller_id','$petid','$sub_cat')");
	if($n==1)
	{
		echo"gjkjgk";
		$p=iud("UPDATE `pet_info` SET `status`=b'0' WHERE `pet_id`='$petid'");
		if($p==1)
		{
		echo"<script>alert('successful Placed We Will Contact You Soon ');
		window.location='index.php';
		</script>";
	}
	}
	
}

	   


?>