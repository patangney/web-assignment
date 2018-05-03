<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OBriens | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.css">
  
  <link rel="stylesheet" href="admin/plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
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
	
		?>


<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="admin/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>OBriens</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="admin/dist/img/admin_default.png" class="user-image" alt="Admin User">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $username; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="admin/dist/img/admin_default.png" class="img-circle" alt="Admin User">

                <p><?php echo $username; ?> </p>
                 <p> Administrator<small>O'Briens Agency</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin/dist/img/admin_default.png" class="img-circle" alt="Admin Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
<!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header">Read Mail</li>
					<!-- Optionally, you can add icons to the links -->
					<li ><a href="admindashboard.php"><i class="fa fa-drupal"></i> <span>Dashboard</span></a>
					</li>
					<li><a href="managetestimonials.php"><i class="fa fa-commenting-o"></i> <span>Manage Testimonials</span></a>
					</li>
					<li><a href="manage_vendor.php"><i class="fa fa-user-plus"></i> <span>Manage Vendor</span></a>
					</li>
					
					<li class="treeview" > <a href="#"><i class="fa fa-inbox"></i> <span>Manage Mail</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
						<ul class="treeview-menu">
							<li><a href="managemail.php">New Mail</a>
							</li>
							<li><a href="managemail_all.php">All Mail</a>
							</li>
						</ul>
					</li>
					
					<li class="treeview active"> <a href="#"><i class="fa fa-home"></i> <span>Manage Properties</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
						<ul class="treeview-menu">
							<li><a href="manage_propertiesall.php">Manage All</a>
							</li>
							<li><a href="manage_residential.php">Manage Residential</a>
							</li>
							<li><a href="manage_commercial.php">Manage Commercial</a>
							</li>
							<li><a href="manage_residential.php">Manage Sites</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <!-- =============================================================== -->
    
    <!-- DATABASE -->
      <?php

			$query = "SELECT COUNT(propertyid) AS totalResidential FROM property.property WHERE categoryid=1";	
			$result = mysqli_query($link, $query); // Result resource


			while ($row=mysqli_fetch_array($result)){
			
				$countRes = $row ["totalResidential"];
								
			}
	
	?>
			
	<?php
			$query2 = "SELECT COUNT(propertyid) AS totalCommercial FROM property.property WHERE categoryid=2";
			$result2 = mysqli_query($link, $query2);
	
			while ($row=mysqli_fetch_array($result2)){
			
				$countCom = $row ["totalCommercial"];
				
			}
	
	?>
	
	<?php
			$query3 = "SELECT COUNT(propertyid) AS totalSites FROM property.property WHERE categoryid=3";
			$result3 = mysqli_query($link, $query3);
	
			while ($row=mysqli_fetch_array($result3)){
			
				$countSite = $row ["totalSites"];
				
			}
	
	
	?>
	
		<?php
			$query4 = "SELECT COUNT(propertyid) AS totalAll FROM property.property;";
			$result4 = mysqli_query($link, $query4);
	
			while ($row=mysqli_fetch_array($result4)){
			
				$countAll = $row ["totalAll"];
				
			}
	  ?>
	  
	  
	  <?php
	  
	  		$querycomments = "SELECT COUNT(*) AS totalCount FROM comment WHERE STATUS='pending'  ";	
			$result_comments = mysqli_query($link, $querycomments); 


			while ($row=mysqli_fetch_array($result_comments)){
			
				$countPending = $row ["totalCount"];
				
								
			}
	
	  ?>
	  
	  	<?php

			$queryMessage = "SELECT COUNT(*) AS totalMessages FROM contactus WHERE STATUS='new_email' ";	
			$result_Message = mysqli_query($link, $queryMessage); // Result resource


			while ($row=mysqli_fetch_array($result_Message)){
			
				$countMessage = $row ["totalMessages"];
				
								
			}
	?>
	
		<?php

			$queryNews = "SELECT COUNT(*) AS totalNewsletters FROM newsletter WHERE STATUS='new_request' ";	
			$result_News = mysqli_query($link, $queryNews); // Result resource


			while ($row=mysqli_fetch_array($result_News)){
			
				$countNews = $row ["totalNewsletters"];
				
								
			}
	?>
	<!-- ====================== MAIL ===================================== -->
	<?php

			$queryMail = "SELECT COUNT(*) AS newMail FROM contactus WHERE STATUS='new_email' ";
			$result_NewMail = mysqli_query( $link, $queryMail ); // Result resource


			while ( $row = mysqli_fetch_array( $result_NewMail ) ) {

				$countNewMail = $row[ "newMail" ];


			}
			?>

			<!-- display all mail from contactus -->

			<?php

			$queryContactUS = "SELECT * FROM contactus";
			$result_ContactUS = mysqli_query( $link, $queryContactUS );




			?>

			<!-- all mail counter -->
			<?php

			$queryMail = "SELECT COUNT(*) AS allMail FROM contactus ";
			$result_AllMail = mysqli_query( $link, $queryMail );


			while ( $row = mysqli_fetch_array( $result_AllMail ) ) {

				$countAllMail = $row[ "allMail" ];


			}
			?>
			
			

	<!-- =============================================================== -->
	
	<!-- =============================================================== -->

    <!-- information boxes-->
    <section class="content information-boxes">

      <!-- Your Page Content Here -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <!-- properties available -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
             <div class="row">             	
              <div class="col-lg-12"><p><strong>Total Properties Online: <?php echo $countAll; ?></strong></p></div>
               <div class="col-lg-4"><h3><?php echo $countRes; ?></h3><p>Residentail </p></div>
               <div class="col-lg-4"><h3><?php echo $countCom; ?></h3><p>Commercial</p></div>
               <div class="col-lg-4"><h3><?php echo $countSite; ?></h3><p>Sites</p></div>
             </div>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="#" class="small-box-footer">Manage Properties <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- Testimonials Pending -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-fuchsia">
            <div class="inner">
             <div class="row">             	
              <div class="col-lg-12"><p><strong>Testimonials</strong></p></div>
               <div class="col-lg-12"><h3><?php echo $countPending?></h3><p>Comments Pending </p></div>
             </div>
            </div>
            <div class="icon">
              <i class="ion ion-chatboxes"></i>
            </div>
            <a href="#" class="small-box-footer">Manage Testimonials <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./end Testimonials -->
        <!-- Enquiries  -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
             <div class="row">             	
              <div class="col-lg-12"><p><strong>Enquiries</strong></p></div>
               <div class="col-lg-12"><h3><?php echo $countMessage; ?></h3><p>Messages Recieved</p></div>
             </div>
            </div>
            <div class="icon">
              <i class="ion ion-email-unread"></i>
            </div>
            <a href="managemail.php" class="small-box-footer">Manage Enquiries <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		<!-- ./end enquiries -->
   		        <!-- Enquiries  -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
             <div class="row">             	
              <div class="col-lg-12"><p><strong>Newsletters</strong></p></div>
               <div class="col-lg-12"><h3><?php echo $countNews; ?></h3><p>Requests</p></div>
             </div>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paper"></i>
            </div>
            <a href="#" class="small-box-footer">Manage Newsletters <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          	<!-- ./end enquiries -->
        </div>
	    <!-- ./Information row -->
      </div>
      	<!-- =============================================================== -->
    </section>
     <!-- =============================================================== -->
     <!-- ============== SQL                           ================== -->
     <!-- =============================================================== -->
     
     <?php
	  
	  	$propertyid = $_GET["propertyid"];
	  
	  	$getpropertydetails = "SELECT * FROM property WHERE propertyid=$propertyid";
	  
	  	$result=mysqli_query($link, $getpropertydetails);
						
		while ($row=mysqli_fetch_array($result)){
							
			$price = $row["price"];
			$town = $row["town"];
			$county = $row["county"];
			$shortdesc = $row["shortdescription"];
			$longdesc = $row["longdescription"];
			$bed = $row["bedrooms"];
			$bath = $row["bathroom"];
			$garage = $row["garage"];

			
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
			
			$categoryid = $row["categoryid"];
			$vendor = $row["vendorid"];
			
			
		
		}
	  	
	  
	  ?>
     
      
      <!-- =============================================================== -->
      <!-- =================          manage property      =============== -->
      <!-- =============================================================== -->
	<section class="content manage_property">
		<div class="row">
			<div class="col-xs-12">
			<form method="post" action="processedit.php" onSubmit="return updateConfirm();">
			<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/>
			<!-- table 1 -->
				<div class="box table1">
					<div class="box-header">
						<h3 class="box-title">Edit Property Details</h3>
					</div>
					
					<div class="box-body">
						<table id="editproperty" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Address </th>
								  <th>Town</th>
								  <th>County</th>
								  <th>Price</th>
								  <th>Sale or Rent</th>
								</tr>
							</thead>
							  <tbody>
             					<tr>
             						<td><input type="text" name="address1" value="<?php echo $address1; ?>"/></td>
             						<td><input type="text" name="town" value="<?php echo $town; ?>"/></td>
             						<td><input type="text" name="county" value="<?php echo $county; ?>"/></td>
             						<td><input type="text" name="price" value="<?php echo $price; ?>"/></td>
             						<td><select name="sale_or_rent"><option value="sale">Sale</option><option value="rent">Rent</option></select><td>
             						
             					</tr>
              
							</tbody>
							<tfoot>
						  </table>			
					</div>
					<!--./table box -->
				</div>
				<!-- table 2 -->
				<div class="box table1">
					<div class="box-header">
						<h3 class="box-title">Edit Property</h3>
					</div>
					
					<div class="box-body">
						<table id="editproperty" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>No of Bedrooms</th>
								  <th>No of Bathrooms</th>
								  <th>No of Garages</th>
								  <th>Size in Squarefeet</th>
								  
								</tr>
							</thead>
							  <tbody>
								<tr>
             						<td><input type="text" name="bedrooms" value="<?php echo $bed; ?>"/></td>
             						<td><input type="text" name="bathroom" value="<?php echo $bath; ?>"/></td>
             						<td><input type="text" name="garage" value="<?php echo $garage; ?>"/></td>
             						<td><input type="text" name="squarefeet" value="<?php echo $sqaurefeet; ?>"/></td>
								</tr>
							</tbody>
						  </table>			
					</div>
					<!--./table box -->
				</div>
				<!-- table 3 -->
				<div class="box table1">
					<div class="box-header">
						<h3 class="box-title">Edit Amenities</h3>
					</div>
					
					<div class="box-body">
						<table id="editproperty" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Amenities 1</th>
								  <th>Amenities 2</th>
								  <th>Amenities 3</th>
								  <th>Amenities 4</th>
								  <th>Amenities 5</th>
								  <th>Amenities 6</th>
								  
								</tr>
							</thead>
							  <tbody>
								<tr>
             						<td><input type="text" name="amenties1" value="<?php echo $feature1; ?>"/></td>
             						<td><input type="text" name="amenties2" value="<?php echo $feature2; ?>"/></td>
             						<td><input type="text" name="amenties3" value="<?php echo $feature3; ?>"/></td>
             						<td><input type="text" name="amenties4" value="<?php echo $feature4; ?>"/></td>
             						<td><input type="text" name="amenties5" value="<?php echo $feature5; ?>"/></td>
             						<td><input type="text" name="amenties6" value="<?php echo $feature6; ?>"/></td>
								</tr>
							</tbody>
						  </table>	
					</div>
					<!--./table box -->
				</div>
				
				<!-- table 4 -->
				<div class="box table1">
					<div class="box-header">
						<h3 class="box-title">Edit Property Description</h3>
					</div>
					
					<div class="box-body">
						<table id="editproperty" class="table table-bordered table-hover">
							
								<tr>
								  <th>Short Description</th>
								  <td><textarea name="shortdescription" rows="1" cols="80"><?php echo $shortdesc; ?></textarea></td>
								</tr>
						  		<tr>
						  			<th>Long Description</th>
						  			<td><textarea name="longdescription" rows="2" cols="80"><?php echo $longdesc; ?></textarea></td>
						  		</tr>			
					
						  </table>	
					</div>
					<!--./table box -->
				</div>
				
				<!-- table 5 -->
				<div class="box table1">
					<div class="box-header">
						<h3 class="box-title">Edit Images</h3>
					</div>
					
					<div class="box-body">
						<table id="editproperty" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Image Folder Name</th>
								  <th>Default Image</th>
								  <th>Image 1</th>
								  <th>Image 2</th>
								  <th>Image 3</th>
								  <th>Image 4</th>
								  <th>Image 5</th>
								  
								</tr>
							</thead>
							  <tbody>
								<tr>
             						<td><input type="text" name="image_folder" value="<?php echo $folder; ?>"/></td>
             						<td><input type="text" name="image_thumbs" value="<?php echo $image; ?>"/></td>
             						<td><input type="text" name="image1" value="<?php echo $img1; ?>"/></td>
             						<td><input type="text" name="image2" value="<?php echo $img2; ?>"/></td>
             						<td><input type="text" name="image3" value="<?php echo $img3; ?>"/></td>
             						<td><input type="text" name="image4" value="<?php echo $img4; ?>"/></td>
             						<td><input type="text" name="image5" value="<?php echo $img5; ?>"/></td>
								</tr>
							</tbody>
						  </table>	
					</div>
					<!--./table box -->
				</div>
				
				<!-- table 6 -->
				<div class="box table1">
					<div class="box-header">
						<h3 class="box-title">Edit Category and Vendor</h3>
					</div>
					
					<div class="box-body">
						<table id="editproperty" class="table table-bordered table-hover">
							<thead>
								<tr>
								  <th>Category</th>
								  <th>Vendor</th>
								  								  
								</tr>
							</thead>
							  <tbody>
								<tr>
             						<td><select name="categoryid"><option value="1">Residential</option><option value="2">Commercial</option><option value="3">Site</option></select></td>
             						<td><input type="text" name="vendorid" value="<?php echo $vendor; ?>"/></td>
             		
								</tr>
							</tbody>
						  </table>	
					</div>
					<!--./table box -->
				</div>
				<input type="submit" name="submit" value="Update Property" class="bg-aqua btn">
			</form>
				
				<!-- ./col-xs-12 -->
			</div>
			

	<?php
		mysqli_close( $link );
	?>	
		</div>			
	  </section>
		
      
      
      
      
      


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">O'Briens Agency</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  	<?php
		//close link
		mysqli_close( $link );	
	
	?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin/plugins/fastclick/fastclick.js"></script>

<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#editproperty").DataTable();
    $('#editproperty2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
	
function updateConfirm(){
    var result = confirm("Are you you want to update?");
    if(result){
        return true;
		
    }else{
        return false;
    }
}
	
	
</script>


</body>
</html>
