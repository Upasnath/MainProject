<?php
include"dbconfig.php";
if(isset($_REQUEST['saveexpence']))
	{
		
		extract($_REQUEST);
		
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];
//$userid=$_SESSION['userid'];
	//$query="update user set image='$name' where userid='$userid'";
$seller_id=$_SESSION['sellerid'];
	if(move_uploaded_file($tmp_name,"images/$name"))
	{
		echo $query="INSERT INTO `pet_info`( `sub_cat_id`, `color`, `image`, `price`, `description`, `seller_id`)
		VALUES ('$category','$colour','$name','$price','$des','$seller_id')";
	$n=iud($query);
	 if($n==1)
	 {
		
		echo"<script>alert(' uploaded successfully');
		 window.location='view.php';
		 </script>";
		
		 }
		 else
		 {
			 echo"efrtuiytiuytyittttttttttttttttttt";
		 }
	}
	else
	{
		echo"imagesssssssssssssssss";
	}
	}
	


?>