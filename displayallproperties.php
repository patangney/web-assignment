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
        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">Properties</h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="index.php">Home</a></li>
                                <li>All Properties</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->
 
 
<section id="page-content" class="page-wrapper">
	<div class="displayallproperties pt-115 pb-60">
		<div class="container">
			<div class="display-properties">
				<div class="row">

					
					
					<?php
						
						$_SERVER = "localhost";
						$dbuser = "root";
						$password = "";
						$link = mysqli_connect( $_SERVER, $dbuser, $password );
						mysqli_select_db( $link, "property" );
						
						$sql="SELECT * from property";
						$result=mysqli_query($link, $sql);
						
						while ($row=mysqli_fetch_array($result)){
							
							$price = $row["price"];
							$town = $row["town"];
							$county = $row["county"];
							$shortdesc = $row["shortdescription"];
							$bed = $row["bedrooms"];
							$bath = $row["bathroom"];
							$image = $row["image_thumbs"];
							$ber = $row["ber"];
							$propertyid = $row["propertyid"];
							$sqaurefeet = $row["squarefeet"];
							$address1 = $row["address1"];
							$sale_or_rent = $row["sale_or_rent"];
							$folder = $row["image_folder"];
							
							echo '
							
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="flat-item">
											<div class="flat-item-image">
												<span class="for-'.$sale_or_rent.'">For '.$sale_or_rent.'</span>
													<a href="propertydetails.php?propertyid='.$propertyid.'"><img src="images/forsale/'.$folder.'/'.$image.'" alt=""></a>
												<div class="flat-link">
													<a href="propertydetails.php?propertyid='.$propertyid.'">More Details</a>								
												</div>
												<ul class="flat-desc">
													<li>
														<img src="images/icons/4.png" alt="">
															<span>'.$sqaurefeet.' sqft</span>
													</li>
													<li>
														<img src="images/icons/5.png" alt="">
															<span>'.$bed.'</span>
													</li>
													<li>
														<img src="images/icons/6.png" alt="">
															<span>'.$bath.'</span>
													</li>
												</ul>							
											<!-- end flat item image -->
											</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="propertydetails.php?propertyid='.$propertyid.'">'.$address1.' </a></h5>
													<span class="price"><i class="fa fa-eur" aria-hidden="true"></i>'.$price.'</span>
											</div>
												<p><img src="images/icons/location.png" alt="">'.$town.','.$county.'</p>
										</div>
									</div>

								<!-- end property col -->							
								</div>
							
							';
							
							
							
						}
						
						mysqli_close( $link );						
						?>
					
				
				

				<!--end row -->
				</div>
			</div>			
		</div>		
	</div>
</section>
 
 <!-- end custom template -->

 <!-- Start footer area -->
  <footer id="footer" class="footer-area bg-2 bg-opacity-black-70">
        <div class="footer-top pt-110 pb-80">
     <!-- admin button -->
	  <div class="adminlogin">
	  	<ul>
	  		<li>
	  			<a href="adminlogin.php">Admin Login
	  				<i class="fa fa-sign-in"></i>
	  			</a>
	  		</li>
	  	</ul>
	  </div>
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
