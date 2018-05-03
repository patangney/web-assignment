<?php
	session_start();
	include_once('dbConfig.php');
	
	$id = $_GET["id"];
	$sql = "UPDATE comment SET status='denied' WHERE id=$id";

	$retval = mysqli_query($link, $sql);
		
		if (!$retval) {
		die('Could no update data: '.mysql_error());
	}
	
	else {
		$_SESSION['success_msg'] = 'Comment has been set to: Denied.';
		header("Location: http://localhost/ptangney/managetestimonials.php");
		exit;
	}
	mysqli_close($link);

	


?>