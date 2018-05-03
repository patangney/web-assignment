<!doctype html>
<html class="no-js" lang="zxx"><!-- InstanceBegin template="/Templates/new_content.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!-- InstanceBeginEditable name="doctitle" -->
<title>O'Briens Agency | Real Estate</title>
<!-- InstanceEndEditable -->
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
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
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
 <!-- content to go here -->
 <!-- InstanceBeginEditable name="new content" -->
<?php 
	$_SERVER = "localhost";
	$dbuser = "root";
	$password = "";
	$link = mysqli_connect( $_SERVER, $dbuser, $password );
	mysqli_select_db( $link, "property" );	
	
	$table = "comment";
	$field = "status";
?>

<?php
function set_and_enum_values( $link, $table , $field )
{
    $query = "SHOW COLUMNS FROM `$table` LIKE '$field'";
    $result = mysqli_query( $conn, $query ) or die( 'Error getting Enum/Set field ' . mysqli_error() );
    $row = mysqli_fetch_row($result);

    if(stripos($row[1], 'enum') !== false || stripos($row[1], 'set') !== false)
    {
        $values = str_ireplace(array('enum(', 'set('), '', trim($row[1], ')'));
        $values = explode(',', $values);
        $values = array_map(function($str) { return trim($str, '\'"'); }, $values);
    }

    return $values;
}
?>

<select name="owner">
<?php
  $options = set_and_enum_values($link, 'property', 'comment');
  foreach($options as $option):
     $selected = (isset($row['status']) && $row['status'] == $option) ? ' selected="selected"' : '';
?>
    <option<?php echo $selected; ?>><?php echo $option ?></option>
<?php endforeach; ?>
</select>


 <!-- InstanceEndEditable -->
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
                <form  id="contact-form-2" action="mail_footer.php" method="post">
                  <input type="email" name="email2" placeholder="Type your E-mail address...">
                  <textarea name="message2" placeholder="Write your message ......."></textarea>
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
<!-- ajax-mail js --> 
<script src="js/ajax-mail.js"></script> 
<!-- All js plugins included in this file. --> 
<script src="js/plugins.js"></script> 
<!-- Main js file that contents all jQuery plugins activation. --> 
<script src="js/main.js"></script>
</body>
<!-- InstanceEnd --></html>
