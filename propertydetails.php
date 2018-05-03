<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>O'Briens Agency | Real Estate</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.png">
<!-- filter:  default.css;core.css;skin-teal.css;slider.css;overwrites.css;header.css;footer.css;default.css;custom.css;meanmenu.min.css;responsive.css -->
<!-- All css files are included here. -->
<!-- Bootstrap fremwork main css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- nivo slider CSS -->
<link rel="stylesheet" href="lib/css/nivo-slider.css"/>
<!-- This core.css file contents all plugings css file. -->
<link rel="stylesheet" href="css/core.css">
<!-- import header /footer / slider -->
<link rel="stylesheet" href="css/styles/importall.css">
<!-- Theme main style -->
<link rel="stylesheet" href="css/styles/overwrites.css">
<!-- Responsive css -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Color Changes -->
<link href="css/color/color-core.css" data-style="styles" rel="stylesheet">
<!-- User style -->
<link rel="stylesheet" href="css/custom.css">
<!-- social icons -->
<link rel="stylesheet" href="css/social-icons.css">

<!-- Modernizr JS -->
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- Body main wrapper start -->
<div class="wrapper">
  <!-- HEADER AREA START -->
  <header class="header-area header-wrapper">
    <div class="header-top-bar bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="logo"> <a href="index.php"> <img src="images/logo/logo.png" alt="O Briens Logo"> </a> </div>
          </div>
          <div class="col-md-6 hidden-sm hidden-xs">
            <div class="company-info clearfix">
              <div class="company-info-item">
                <div class="header-icon"> <img src="images/icons/phone.png" alt=""> </div>
                <div class="header-info">
                  <h6><a href="tel:+353852240880">Call Us</a></h6>
                  <p>We are open 9 am - 6pm</p>
                </div>
              </div>
              <div class="company-info-item">
                <div class="header-icon"> <img src="images/icons/mail-open.png" alt=""> </div>
                <div class="header-info">
                  <h6><a href="mailto:info@obriensagency.com">info@obriensagency.com</a></h6>
                  <p>You can mail us</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="header-search clearfix">
              <form action="#">
                <button class="search-icon" type="submit"> <img src="images/icons/search.png" alt=""> </button>
                <input type="text" placeholder="Search...">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
      <div class="container">
        <div class="full-width-mega-drop-menu">
          <div class="row">
            <div class="col-md-12">
              <div class="sticky-logo"> <a href="index.php"> <img src="images/logo/logo.png" alt=""> </a> </div>
              <nav id="primary-menu">
                <ul class="main-menu text-center">
                  <li><a href="index.php">Home</a> </li>
                  <li><a href="#">Properties</a>
                    <ul class="drop-menu">
                      <li><a href="displayallproperties.php">All Properties</a></li>
                      <li><a href="displayproperties.php?categoryid=1">Residential</a></li>
                      <li><a href="displayproperties.php?categoryid=2">Commercial</a></li>
                      <li><a href="displayproperties.php?categoryid=3">Sites</a></li>
                    </ul>
                  </li>
                  <li><a href="testimonials.php">Testimonials</a> </li>
                  <li><a href="aboutus.html">About</a> </li>
                  <li><a href="contact.php">Contact Us</a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER AREA END -->
  <!-- MOBILE MENU AREA START -->
  <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul>
                <li><a href="index.php">Home</a> </li>
                <li><a href="#">Properties</a>
                  <ul>
                     <li><a href="displayallproperties.php">All Properties</a></li>
                      <li><a href="displayproperties.php?categoryid=1">Residential</a></li>
                      <li><a href="displayproperties.php?categoryid=2">Commercial</a></li>
                      <li><a href="displayproperties.php?categoryid=3">Sites</a></li>
                    </ul>
                  </li>
                  <li><a href="testimonials.php">Testimonials</a> </li>
                  <li><a href="aboutus.html">About</a> </li>
                  <li><a href="contact.php">Contact Us</a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MOBILE MENU AREA END -->
     
<!--stuff to go here -->
<!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-3 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">Properties Details</h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="properties.html">Properties</a></li>
                                <?php
						
									$_SERVER = "localhost";
									$dbuser = "root";
									$password = "";
									$link = mysqli_connect( $_SERVER, $dbuser, $password );
									mysqli_select_db( $link, "property" );

									$propertyid = $_GET["propertyid"];
									$sql="SELECT * from property WHERE propertyid=$propertyid";

									$result=mysqli_query($link, $sql);
								
								?>
                                
                                
                                <li>Property ID <?php echo $propertyid;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->
        
        <!-- start content -->
        <section id="page-content" class="page-wrapper">
        
           <!-- PROPERTIES DETAILS AREA START -->
            <div class="properties-details-area pt-115 pb-60">
                <div class="container">
                    <div class="row">
                       <?php
						
			
						while ($row=mysqli_fetch_array($result)){
							
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
        

 
 <!-- end custom template -->

 <!-- Start footer area -->
  <footer id="footer" class="footer-area bg-2 bg-opacity-black-70">
    <div class="footer-top pt-110 pb-80">
      <div class="container">
        <div class="row">
          <!-- footer-address -->
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="footer-widget">
              <h6 class="footer-titel">GET IN TOUCH</h6>
              <ul class="footer-address">
                <li>
                  <div class="address-icon"> <img src="images/icons/location-2.png" alt=""> </div>
                  <div class="address-info"> <span>Unit 5, Main Street, Killarney</span> <span>Co Kerry, Ireland</span> </div>
                </li>
                <li>
                  <div class="address-icon"> <img src="images/icons/phone-3.png" alt=""> </div>
                  <div class="address-info"> <span>Telephone: 1800 123 4567</span> <span>Telephone: +353 64 1234567</span> </div>
                </li>
                <li>
                  <div class="address-icon"> <img src="images/icons/world.png" alt=""> </div>
                  <div class="address-info"> <span>Email: info@obriensagency.com</span> <span>Web :<a href="#" target="_blank"> www.obriensagency.com</a></span> </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- footer-social icons -->
          <div class="col-lg-6 col-md-5 hidden-sm col-xs-12">
            <div class="footer-widget middle">
              <h6 class="footer-titel">Social Media</h6>
              <div class="social">
                <div class="facebook-icon mediaicons"><a href="http://www.facebook.com" target="_blank"></a></div>
                <div class="linkedin-icon mediaicons"><a href="http://www.linkedin.com" target="_blank"></a></div>
                <div class="pinterest-icon mediaicons"><a href="http://www.pintrest.com" target="_blank"></a></div>
                <div class="instagram-icon mediaicons"><a href="http://www.pintrest.com" target="_blank"></a></div>
                <div class="plus-icon mediaicons"><a href="http://www.plus.google.com" target="_blank"></a></div>
              </div>
              <div class="social-info">
                <p>Don't forget to contact us on social media!</p>
              </div>
            </div>
          </div>
          <!-- footer-contact -->
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="footer-widget">
              <h6 class="footer-titel">QUICK CONTACT</h6>
              <div class="footer-contact">
                <p>A agent will get back to you as soon as possible</p>
					<form  id="quickreply" action="contactprocess.php" method="post">
				  	<input type="text" name="contact_name" placeholder="Your name">	
					  <input type="email" name="contact_email" placeholder="Your email address">
					  <input type="tel" name="contact_mobile" placeholder="Your phone number">
					  <textarea name="content" placeholder="What can we help you with ?"></textarea>
					  <button type="submit" value="send">Send</button>
					</form>
                <p class="form-messege"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="copyright text-center">
              <p>Copyright &copy; 2017 <a href="#"><b>O'Briens Agency</b></a>. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer area -->
</div>
<!-- Body main wrapper end --> 

<!-- Placed js at the end of the document so the pages load faster --> 

<!-- jquery latest version --> 
<script src="js/vendor/jquery-3.1.1.min.js"></script> 
<!-- Bootstrap framework js --> 
<script src="js/bootstrap.min.js"></script>
<!-- Nivo slider js --> 
<script src="lib/js/jquery.nivo.slider.js"></script> 
<!-- All js plugins included in this file. --> 
<script src="js/plugins.js"></script> 
<!-- Main js file that contents all jQuery plugins activation. --> 
<script src="js/main.js"></script>
</body>
</html>
