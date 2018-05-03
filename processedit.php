<?php

	include_once('dbConfig.php');
	
			$price = $_POST["price"];
			$propertyid = $_POST["propertyid"];
			$sale_or_rent = $_POST["sale_or_rent"];
			$shortdesc = $_POST["shortdescription"];
			$longdesc = $_POST["longdescription"];

			$feature1 = $_POST["amenties1"];
			$feature2 = $_POST["amenties2"];
			$feature3 = $_POST["amenties3"];
			$feature4 = $_POST["amenties4"];
			$feature5 = $_POST["amenties5"];
			$feature6 = $_POST["amenties6"];

			$folder = $_POST["image_folder"];
			$image = $_POST["image_thumbs"];
			$img1 = $_POST["image1"];
			$img2 = $_POST["image2"];
			$img3 = $_POST["image3"];
			$img4 = $_POST["image4"];
			$img5 = $_POST["image5"];

			$categoryid = $_POST["categoryid"];
			$vendor = $_POST["vendorid"];

			$bed = $_POST["bedrooms"];
			$bath = $_POST["bathroom"];
			$garage = $_POST["garage"];
			$squarefeet = $_POST["squarefeet"];



			$updateProperty = "UPDATE property SET price='$price', 
			sale_or_rent='$sale_or_rent',
			shortdescription='$shortdesc',
			longdescription='$longdesc',
			amenties1='$feature1', 
			amenties2='$feature2', 
			amenties3='$feature3', 
			amenties4='$feature4',
			amenties5='$feature5', 
			amenties6='$feature6',
			image_folder='$folder', 
			image_thumbs='$image', 
			image1='$img1', 
			image2='$img2', 
			image3='$img3',
			image4='$img4', 
			image5='$img5',
			categoryid='$categoryid', 
			vendorid='$vendor',
			bedrooms='$bed', 
			bathroom='$bath', 
			garage='$garage',
			squarefeet='$squarefeet'
			
						
			WHERE propertyid=$propertyid";

	$retval = mysqli_query($link, $updateProperty);

	if (!$retval) {
		die('Could no update data: '.mysql_error());
	}
	
	else {
		header("Location: http://localhost/ptangney/manage_propertiesall.php");
		exit;
	}
	mysqli_close($link);

?>