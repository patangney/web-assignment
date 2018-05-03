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
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
	<link rel="stylesheet" href="admin/dist/css/skins/_all-skins.css">

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
	if ( isset( $_SESSION[ 'username' ] ) ) {
		$username = $_SESSION[ 'username' ];
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
				<span class="logo-lg"><b>OBriens</b></span> </a>

			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<!-- Menu toggle button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="label label-success">4</span> </a>
							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<!-- inner menu: contains the messages -->
									<ul class="menu">
										<li>
											<!-- start message -->
											<a href="#">
												<div class="pull-left">
													<!-- User Image -->
													<img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div>
												<!-- Message title and timestamp -->
												<h4> Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small> </h4>
												<!-- The message -->
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
									</ul>
									<!-- /.menu -->
								</li>
								<li class="footer"><a href="#">See All Messages</a>
								</li>
							</ul>
						</li>
						<!-- /.messages-menu -->

						<!-- Notifications Menu -->
						<li class="dropdown notifications-menu">
							<!-- Menu toggle button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="label label-warning">10</span> </a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- Inner Menu: contains the notifications -->
									<ul class="menu">
										<li>
											<!-- start notification -->
											<a href="#"> <i class="fa fa-users text-aqua"></i> 5 new members joined today </a> </li>
										<!-- end notification -->
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a>
								</li>
							</ul>
						</li>
						<!-- Tasks Menu -->
						<li class="dropdown tasks-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-flag-o"></i> <span class="label label-danger">9</span> </a>
							<ul class="dropdown-menu">
								<li class="header">You have 9 tasks</li>
								<li>
									<!-- Inner menu: contains the tasks -->
									<ul class="menu">
										<li>
											<!-- Task item -->
											<a href="#">
												<!-- Task title and progress text -->
												<h3> Design some buttons <small class="pull-right">20%</small> </h3>
												<!-- The progress bar -->
												<div class="progress xs">
													<!-- Change the css width attribute to simulate progress -->
													<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">20% Complete</span> </div>
												</div>
											</a>
										</li>
										<!-- end task item -->
									</ul>
								</li>
								<li class="footer"> <a href="#">View all tasks</a> </li>
							</ul>
						</li>
						<!-- User Account Menu -->
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<!-- The user image in the navbar-->
								<img src="admin/dist/img/admin_default.png" class="user-image" alt="Admin User">
								<!-- hidden-xs hides the username on small devices so only the image appears. -->
								<span class="hidden-xs">
									<?php echo $username; ?>
								</span>
							</a>
							<ul class="dropdown-menu">
								<!-- The user image in the menu -->
								<li class="user-header"> <img src="admin/dist/img/admin_default.png" class="img-circle" alt="Admin User">
									<p>
										<?php echo $username; ?> </p>
									<p> Administrator<small>O'Briens Agency</small> </p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="row">
										<div class="col-xs-4 text-center"> <a href="#">Followers</a> </div>
										<div class="col-xs-4 text-center"> <a href="#">Sales</a> </div>
										<div class="col-xs-4 text-center"> <a href="#">Friends</a> </div>
									</div>
									<!-- /.row -->
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
									<div class="pull-right"> <a href="mysql/logout.php" class="btn btn-default btn-flat">Sign out</a> </div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
						<li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> </li>
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
					<div class="pull-left image"> <img src="admin/dist/img/admin_default.png" class="img-circle" alt="Admin Image"> </div>
					<div class="pull-left info">
						<p>
							<?php echo $username; ?>
						</p>
						<!-- Status -->
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
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
					<li class="header">Properties</li>
					<!-- Optionally, you can add icons to the links -->
					<li><a href="admindashboard.php"><i class="fa fa-drupal"></i> <span>Dashboard</span></a>
					</li>
					<li><a href="managetestimonials.php"><i class="fa fa-commenting-o"></i> <span>Manage Testimonials</span></a>
					</li>
					<li><a href="manage_vendor.php"><i class="fa fa-user-plus"></i> <span>Manage Vendor</span></a>
					</li>
					
					<li class="treeview active"> <a href="#"><i class="fa fa-inbox"></i> <span>Manage Mail</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
						<ul class="treeview-menu">
							<li><a href="managemail.php">New Mail</a>
							</li>
							<li><a href="managemail_all.php">All Mail</a>
							</li>
						</ul>
					</li>
					
					<li class="treeview"> <a href="#"><i class="fa fa-home"></i> <span>Manage Properties</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
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
				<h1> Enquiries <small>Mail Box</small> </h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Level</a>
					</li>
					<li class="active">Here</li>
				</ol>
			</section>
			<!-- =============================================================== -->

			<!-- DATABASE -->
	   <?php

			$queryMail = "SELECT COUNT(*) AS newMail FROM contactus WHERE STATUS='new_email' ";	
			$result_NewMail = mysqli_query($link, $queryMail); // Result resource


			while ($row=mysqli_fetch_array($result_NewMail)){
			
				$countNewMail = $row ["newMail"];
				
								
			}
		?>
		
		 	<!-- all mail counter -->
 	       <?php

			$queryMail = "SELECT COUNT(*) AS allMail FROM contactus ";	
			$result_AllMail = mysqli_query($link, $queryMail); // Result resource


			while ($row=mysqli_fetch_array($result_AllMail)){
			
				$countAllMail = $row ["allMail"];
				
								
			}
	?>
		
	

			<!-- =============================================================== -->

	<!-- Main content -->
	<section class="content">

		<!-- Your Page Content Here -->
		<!-- Small boxes (Stat box) -->
		<div class="row">
				
				<div class="getMailBox">
				
					<!-- mail inbox  -->
					<div class="col-md-3">
						<div class="box box-solid">
						  <div class="box-header with-border">
							<h3 class="box-title">O Briens Agency Enquiries</h3>
							<div class="box-tools">
							  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
							</div>
              			</div>
              			<div class="box-body no-padding">
                			<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="managemail.php"><i class="fa fa-inbox"></i> New Mail <span class="label label-primary pull-right"><?php echo $countNewMail; ?></span></a></li>
                 			 <li><a href="managemail_all.php"><i class="fa fa-envelope-square"></i> All Mail<span class="label label-success pull-right"><?php echo $countAllMail; ?></span></a></li>
                			</ul>
             		 	</div>
              		<!-- /.box-body --> 
            		</div>
            	<!-- /.mail inbox col --> 
          		</div>
          		
          		<!-- ================================== Previous & Next ======================================== -->
		    									<?php 
							
								$messageid = $_GET["id"];
								$updateMailBoxCount = "UPDATE contactus SET status='respond' WHERE id=$messageid";
															
								$getmail = "SELECT * FROM contactus WHERE id=$messageid";
							
								$output = mysqli_query($link, $getmail);
					
								//set two new vars to same as page number, increment one and subtract one
														
								$strNextMail = $messageid++ +1;
								$strPreviousMail = $messageid-- -2;
					
				
					
					?>
          		

          		
          		
          		<!-- ================================== ./Previous & Next ======================================== -->
          		<!-- read mail -->
          		<div class="readmessage">
					<div class="col-md-9">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Read Mail</h3>
								<div class="box-tools pull-right"> 
								
								
									<a href="http://localhost/ptangney/managemail-open.php?id=<?php echo $strPreviousMail ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Previous">
									<i class="fa fa-chevron-left"></i></a> 

									<a href="http://localhost/ptangney/managemail-open.php?id=<?php echo $strNextMail ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Next">
									<i class="fa fa-chevron-right"></i></a> 
							
								
								</div>
							</div>
							<!-- /.box-header -->
							<!-- read from database -->
							<!-- ===================================================================== -->

							<?php
								while ($row = mysqli_fetch_array($output)){
									
									$contactEmail = $row["contact_email"];
									$contactMailName = $row["contact_name"];
									$contactMobile = $row["contact_mobile"];
									$mailContent = $row["content"];
									$emailCreated = $row["created_at"];
										
									echo '
											<div class="box-body no-padding">
												<div class="mailbox-read-info">
													<h3>From: '.$contactEmail.'
													<h5><span class="mailbox-read-time pull-right">'.$emailCreated.'</span></h5>
												  </h3>
												</div>
												<!-- /.mailbox-read-info -->

											<div class="mailbox-read-message">
												<p><strong>Client Name:</strong> '.$contactMailName.'</p>
												<p><strong>Mobile Number:</strong>'.$contactMobile.'</p>
												<p><br></p>
												<p><strong>Message:</strong> '.$mailContent.'</p>
											</div>
											<!-- /.mailbox-read-message -->
										</div>
										<!-- /.box-body -->
										';
								}
							?>
										<div class="box-footer">
						
											<?php
												echo'
												<div class="btn btn-default"><i class="fa fa-reply"></i> <a href="updateinbox.php?id='.$messageid.'"> Mark As Read</a></div>
												<div class="btn btn-default"><i class="fa fa-trash-o"></i><a href="delete_single_mail.php?id='.$messageid.'"> Delete</a></div>
												';
											?>
											</form>
										</div>
							
																
									
														
							
						
<!--							<div class="btn btn-default"><i class="fa fa-reply"></i> <a href="updateinbox.php?id='.$messageid.'">Mark As Read</a></div>-->
							
							<!-- ./read from database -->
							<!-- ===================================================================== -->

							<!-- /.box-footer -->

							<!-- /.box-footer -->
						</div>
						<!-- end mail table -->
					</div>
          		</div>
					
					
					
					
			<!-- ./readmail -->	
			</div>			
		</div>
		<!-- /.row -->
		<!-- Main row -->

	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	
	<!-- Main Footer -->
	<footer class="main-footer">
		<!-- To the right -->
		<div class="pull-right hidden-xs"> Anything you want </div>
		<!-- Default to the left -->
		<strong>Copyright &copy; 2017 <a href="#">O'Briens Agency</a>.</strong> </footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Create the tabs -->
		<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
			<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a>
			</li>
			<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Home tab content -->
			<div class="tab-pane active" id="control-sidebar-home-tab">
				<h3 class="control-sidebar-heading">Recent Activity</h3>
				<ul class="control-sidebar-menu">
					<li> <a href="javascript:;"> <i class="menu-icon fa fa-birthday-cake bg-red"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
              <p>Will be 23 on April 24th</p>
            </div>
            </a> </li>
				</ul>
				<!-- /.control-sidebar-menu -->

				<h3 class="control-sidebar-heading">Tasks Progress</h3>
				<ul class="control-sidebar-menu">
					<li> <a href="javascript:;">
            <h4 class="control-sidebar-subheading"> Custom Template Design <span class="pull-right-container"> <span class="label label-danger pull-right">70%</span> </span> </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
            </a> </li>
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
						<label class="control-sidebar-subheading"> Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
						<p> Some information about this general settings option </p>
					</div>
					<!-- /.form-group -->
				</form>
			</div>
			<!-- /.tab-pane -->
		</div>
	</aside>
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

	<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>

</html>