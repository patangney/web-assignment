<?php 
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	header("Location:http://localhost/ptangney/adminlogout.php");
	exit;

	
	
	?>