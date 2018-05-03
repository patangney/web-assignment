<?php
    session_start();
    include_once('dbConfig.php');
    if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['propertyid'];
        foreach($idArr as $id){
            mysqli_query($link,"DELETE FROM property WHERE propertyid=".$id);
        }
        $_SESSION['success_msg'] = 'Property has deleted successfully.';
        header("Location:http://localhost/ptangney/manage_propertiesall.php");
		exit();
    }
?>