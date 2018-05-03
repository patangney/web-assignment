<?php
    session_start();
    include_once('dbConfig.php');
    if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['id'];
        foreach($idArr as $id){
            mysqli_query($link,"DELETE FROM contactus WHERE id=".$id);
        }
        $_SESSION['success_msg'] = 'deleted successfully.';
        header("Location:http://localhost/ptangney/managemail_all.php");
		exit();
    }
?>