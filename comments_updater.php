   <?php
    session_start();
    include_once('dbConfig.php');
   
    
		$idArr = $_POST['id'];
        $pending_or_planned = $_POST['status'];
		
		$updateStatus = "UPDATE comment SET status='$pending_or_planned'
		WHERE id=$idArr";
		
        
       	$retval = mysqli_query($link, $updateStatus);
		
		if (!$retval) {
		die('Could no update data: '.mysql_error());
	}
	
	else {
		$_SESSION['success_msg'] = 'updated successfully.';
		header("Location: http://localhost/ptangney/managetestimonials.php");
		exit;
	}
	mysqli_close($link);

	
	?>