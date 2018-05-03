<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>

<body>

<?php
		
		session_start();
		if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		}
	
		echo $username;
	
	
		$_SERVER = "localhost";
		$dbuser = "root";
		$password = "";
		$link = mysqli_connect( $_SERVER, $dbuser, $password );
		mysqli_select_db( $link, "property" );
	
		$propertyid = $_GET["propertyid"];
		$sql="SELECT * from property WHERE propertyid=$propertyid";

		$result452=mysqli_query($link, $sql);
	
		?>
		
		<section id="page-content" class="page-wrapper">
        
           <!-- PROPERTIES DETAILS AREA START -->
            <div class="properties-details-area pt-115 pb-60">
                <div class="container">
                    <div class="row">
                       <?php
						
			
						while ($row=mysqli_fetch_array($result452)){
							
							$price = $row["price"];
							$town = $row["town"];
							$county = $row["county"];
							$shortdesc = $row["shortdescription"];
							$longdesc = $row["longdescription"];
							$bed = $row["bedrooms"];
							$bath = $row["bathroom"];
							$garage = $row["garage"];
							
							$ber = $row["ber"];
							$propertyid = $row["propertyid"];
							$sqaurefeet = $row["squarefeet"];
							$address1 = $row["address1"];
							$sale_or_rent = $row["sale_or_rent"];
							
							$folder = $row["image_folder"];
							$image = $row["image_thumbs"];
							$img1 = $row["image1"];
							$img2 = $row["image2"];
							$img3 = $row["image3"];
							$img4 = $row["image4"];
							$img5 = $row["image5"];
							
							$feature1 = $row["amenties1"];
							$feature2 = $row["amenties2"];
							$feature3 = $row["amenties3"];
							$feature4 = $row["amenties4"];
							$feature5 = $row["amenties5"];
							$feature6 = $row["amenties6"];
						
						
                       
                       
                       
               echo'        
                        <div class="col-md-8">
                            <!-- pro-details-image -->
                            <div class="pro-details-image mb-60">
                                <div class="pro-details-big-image">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="pro-1">
                                            <a href="images/forsale/'.$folder.'/'.$img1.'" data-lightbox="image-1" data-title="OBriens Properties - 1">
                                                <img src="images/forsale/'.$folder.'/'.$img1.'" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="pro-2">
                                            <a href="images/forsale/'.$folder.'/'.$img2.'" data-lightbox="image-1" data-title="OBriens Properties - 2">
                                                <img src="images/forsale/prop2/'.$img2.'" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="pro-3">
                                            <a href="images/forsale/'.$folder.'/'.$img3.'" data-lightbox="image-1" data-title="OBriens Properties - 3">
                                                <img src="images/forsale/'.$folder.'/'.$img3.'" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="pro-4">
                                            <a href="images/forsale/'.$folder.'/'.$img4.'" data-lightbox="image-1" data-title="OBriens Properties - 4">
                                                <img src="images/forsale/'.$folder.'/'.$img4.'" alt="">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="pro-5">
                                            <a href="images/forsale/'.$folder.'/'.$img5.'" data-lightbox="image-1" data-title="OBriens Properties - 5">
                                                <img src="images/forsale/'.$folder.'/'.$img5.'" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-carousel">
                                    <div class="pro-details-item">
                                        <a href="#pro-1" data-toggle="tab">
                                        	<img src="images/forsale/'.$folder.'/'.$img1.'" alt="">
                                       </a>
                                    </div>
                                    <div class="pro-details-item">
                                        <a href="#pro-2" data-toggle="tab">
                                            <img src="images/forsale/'.$folder.'/'.$img2.'" alt="">                
                                        </a>
                                    </div>
                                    <div class="pro-details-item">
                                        <a href="#pro-3" data-toggle="tab">
                                            <img src="images/forsale/'.$folder.'/'.$img3.'" alt="">                
                                        </a>
                                    </div>
                                    <div class="pro-details-item">
                                        <a href="#pro-4" data-toggle="tab">
                                            <img src="images/forsale/'.$folder.'/'.$img4.'" alt="">                
                                        </a>
                                    </div>
                                    <div class="pro-details-item">
                                        <a href="#pro-5" data-toggle="tab">
                                            <img src="images/forsale/'.$folder.'/'.$img5.'" alt="">                
                                        </a>
                                    </div>
                                </div>                           
                            </div>
                            
                            <div class="pro-details-short-info mb-60">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="pro-details-condition">
                                            <h5>Property Details</h5>
                                            <div class="pro-details-condition-inner bg-gray">
                                                <ul class="condition-list">
                                                    <li><img src="images/icons/4.png" alt="">Area '.$sqaurefeet.' sqft</li>
                                                    <li><img src="images/icons/5.png" alt="">Bedroom '.$bed.'</li>
                                                    <li><img src="images/icons/6.png" alt="">Bathroom '.$bath.'</li>
                                                    <li><img src="images/icons/13.png" alt="">Garage '.$garage.'</li>
                                                    <li>€'.$price.'</li>
                                                </ul>
                                                <p><img src="images/icons/location.png" alt="">'.$address1.', '.$town.', Co '.$county.'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="pro-details-amenities">
                                            <h5>Features</h5>
                                            <div class="pro-details-features-inner bg-gray">
                                                <ul class="amenities-list">
                                                    <li>'.$feature1.'</li>
                                                    <li>'.$feature2.'</li>
                                                    <li>'.$feature3.'</li>
                                                    <li>'.$feature4.'</li>
                                                    <li>'.$feature5.'</li>
                                                    <li>'.$feature6.'</li>
                             
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- pro-details-description -->
                            <div class="pro-details-description mb-50">
                               	<p>'.$shortdesc.'</p>
                                <p>'.$longdesc.'</p>
                            </div>
                            
        				<!-- end col -->
						</div>
						';
													
						}
							
						mysqli_close( $link );
						?>
					
					
					
					
					</div>
				</div>
			</div>
        	
        
        
        <!-- end content -->	
        </section>
		
		



</body>
</html>