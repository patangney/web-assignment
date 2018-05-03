<?php
    session_start();
    include_once('dbConfig.php');

	$messageid = $_GET["id"];
	$deleteSingleMessage = "DELETE FROM contactus WHERE id=$messageid";

	$returnVal = mysqli_query($link, $deleteSingleMessage);
	
	if (!$returnVal) {
		die('Could no update data: '.mysql_error());
	}

	else {
		
		header("Location:http://localhost/ptangney/managemail.php");
		exit;
		
	}

	mysqli_close($link);

?>