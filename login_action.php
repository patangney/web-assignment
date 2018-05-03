<?php
	//Start the session
	session_start();
	include_once('dbConfig.php');

	//if the form is submitted
	if ( isset( $_POST[ 'adminname' ] )and isset( $_POST[ 'password' ] ) ) {
		$username = $_POST[ 'adminname' ];
		$password = $_POST[ 'password' ];


		//checking the values are existing in the database or not
		$query = "SELECT * FROM administrator WHERE adminname='$username' and password='$password'";
		$result = mysqli_query( $link, $query )or die( mysqli_error( $connection ) );
		$count = mysqli_num_rows( $result );

		//if the posted values are equal to the database vaules, then session will be created for the user.
		if ( $count == 1 ) {
			$_SESSION[ 'username' ] = $username;
			header( "Location:http://localhost/ptangney/admindashboard.php" );
			exit;
		} else {
			$_SESSION[ 'errors' ] = array( 'Your username or password was incorrect' );
			header( "Location:http://localhost/ptangney/adminlogin.php" );
		}
	}
