<?php

	$_SERVER = "localhost";
	$dbuser = "root";
	$password = "";
	$link = mysqli_connect( $_SERVER, $dbuser, $password );
	mysqli_select_db( $link, "property" );


?>