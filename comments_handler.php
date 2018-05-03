<?php
    include_once('dbConfig.php');
    if(isset($_POST['update_id'])){
		
		$id = $_POST['update_id'];
		$status = $_POST["status"];
		$updateComment = "UPDATE comment SET status='$status' WHERE id=$id";
		
		$retval = mysqli_query($link, $updateComment);
		
	
	if (!$retval) {
		die('Could no update data: '.mysql_error());
	}
	
	else {
		header("Location: http://localhost/ptangney/managetestimonials.php");
		exit;
	}
	}
	mysqli_close($link);

//            mysqli_query($link,"DELETE FROM comment WHERE id=".$id);
//        }
//        $_SESSION['success_msg'] = 'deleted successfully.';
//        header("Location:http://localhost/ptangney/managetestimonials.php");
//		exit();
//    }

//	 else if(isset($_POST['update_comments'])){
//		
//        $idArr = $_GET['id'];
//		$status = $_POST['status'];
//        foreach($idArr as $id){
//            mysqli_query($link,"UPDATE comment SET status='$status WHERE id=".$id);
//        }
//        $_SESSION['success_msg'] = 'updated successfully.';
//        header("Location:http://localhost/ptangney/managetestimonials.php");
//		exit();
//    }


?>