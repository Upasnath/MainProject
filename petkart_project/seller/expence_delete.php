<?php
include"dbconfig.php";
$n=iud("DELETE FROM `pet_info` WHERE pet_id='".$_REQUEST['id']."' ");
if($n==1)
{
	echo"<script>alert(' Delete successfully');
		 window.location='view.php';
		 </script>";
}

?>