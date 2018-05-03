<?php

	include_once('dbConfig.php');



	$messageid = $_GET["id"];
	
	$updateMailBoxCount = "UPDATE contactus SET status='respond' WHERE id=$messageid";

	$retval = mysqli_query($link, $updateMailBoxCount);

	if (!$retval) {
		die('Could no update data: '.mysql_error());
	}
	
	else {
		header("Location: http://localhost/ptangney/managemail.php");
		exit;
	}
	mysqli_close($link);

?>