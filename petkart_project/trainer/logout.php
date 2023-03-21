<?php 
	session_start();
	$user=$_GET['username'];
	$database= new mysqli("localhost","root","","trainers");	
	$sql="UPDATE `users` SET `status`='Offline' WHERE pemail='$user'";
    if($result=mysqli_query($database,$sql))
    {
		$_SESSION = array();

		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-86400, '/');
		}
	
		session_destroy();
	
		// redirecting the user to the login page
		header('Location: login.php?action=logout');
	}
?>