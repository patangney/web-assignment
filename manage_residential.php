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
					<li class="header">Properties</li>
					<!-- Optionally, you can add icons to the links -->
					<li><a href="admindashboard.php"><i class="fa fa-drupal"></i> <span>Dashboard</span></a>
					</li>
					<li><a href="managetestimonials.php"><i class="fa fa-commenting-o"></i> <span>Manage Testimonials</span></a>
					</li>
					<li><a href="manage_vendor.php"><i class="fa fa-user-plus"></i> <span>Manage Vendor</span></a>
					</li>
					
					<li class="treeview"> <a href="#"><i class="fa fa-inbox"></i> <span>Manage Mail</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
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

    <!-- Main content -->
    <section class="content">

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
            <a href="manage_propertiesall.php" class="small-box-footer">Manage Properties <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="managetestimonials.php" class="small-box-footer">Manage Testimonials <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="manage_newsletters.php" class="small-box-footer">Manage Newsletters <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          	<!-- ./end enquiries -->
        </div>
	    <!-- ./Information row -->
      </div>
      <!-- START CONTENT -->
      
      <!-- =============================================================== -->
	
	<!-- manage properties information box -->
	<div class="col-md-2">
		<div class="box box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">Manage Properties</h3>
				<div class="box-tools">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
				</div>
			</div>
			<div class="box-body no-padding">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"> <a href="manage_residential.php"><i class="fa fa-home"></i> Manage Residential <span class="label label-info pull-right"><?php echo $countRes; ?></span></a>
					</li>
					<li> <a href="manage_commercial.php"><i class="fa fa-building"></i> Manage Commercial <span class="label label-default pull-right"><?php echo $countCom; ?></span></a>
					</li>
					<li> <a href="manage_sites.php"><i class="fa fa-tree"></i> Manage Sites <span class="label label-success pull-right"><?php echo $countSite; ?></span></a>
					</li>
					<li><a href="manage_propertiesall.php"><i class="fa fa-list"></i> All Properties<span class="label label-danger pull-right"><?php echo $countAll; ?></span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- ./end manage properties information box -->
	
					<div class="table-responsive manage_property">
					<form name="bulk_action_form" action="delete_multiple_properties.php" method="post" onsubmit="return deleteConfirm();"/>
					<table class="table table-hover table-striped">
						<tbody>
							<thead>
								<tr>
									<th><input type="checkbox" name="select_all" id="select_all" value=""/></th>
									<th>Property</th>
									<th>Price</th>
									<th>Description</th>
									
								</tr>
							</thead>

							<?php 
								$getAllPropety = mysqli_query($link,"SELECT * FROM property WHERE categoryid=1");
							
								if(mysqli_num_rows($getAllPropety)>0){
									while($row = mysqli_fetch_assoc($getAllPropety)){ 
										
										

							?>

						<tr>
							<td align="center"><input type="checkbox" name="propertyid[]" class="checkbox" value="<?php echo $row['propertyid']; ?>"/></td>        
							<td><img style="max-height: 100px; max-width: 100px;" src="images/forsale/<?php echo $row['image_folder']; ?>/<?php echo $row['image_thumbs']; ?>"</td>
							<td><?php echo $row['price']; ?></td>
							<td><?php echo $row['shortdescription']; ?></td>
							
							<?php
									
										
										
										
										
							?>
							<td><a href="manageproperty-edit.php?propertyid=<?php echo $row['propertyid'] ?>"><div class="btn btn-bitbucket">Edit</div></a></td>

						</tr> 
						<?php } }else{ ?>
							<tr><td>No Comments found.</td></tr> 
						<?php } ?>
					</table>
					<input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>

				</form>
				<!-- end mail table -->
			</div>
		
      
      
      
      
      

	<!-- =============================================================== -->
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

	<script src="admin/plugins/fastclick/fastclick.js"></script>
	<script>
		$( function () {
					//Enable iCheck plugin for checkboxes
					//iCheck for checkbox and radio inputs
					$( '.mailbox-messages input[type="checkbox"]' ).iCheck( {
						checkboxClass: 'icheckbox_flat-blue',
						radioClass: 'iradio_flat-blue'
					} );

					//Enable check and uncheck all functionality
					$( ".checkbox-toggle" ).click( function () {
						var clicks = $( this ).data( 'clicks' );
						if ( clicks ) {
							//Uncheck all checkboxes
							$( ".mailbox-messages input[type='checkbox']" ).iCheck( "uncheck" );
							$( ".fa", this ).removeClass( "fa-check-square-o" ).addClass( 'fa-square-o' );
						} else {
							//Check all checkboxes
							$( ".mailbox-messages input[type='checkbox']" ).iCheck( "check" );
							$( ".fa", this ).removeClass( "fa-square-o" ).addClass( 'fa-check-square-o' );
						}
						$( this ).data( "clicks", !clicks );
					} );
	</script>

	<script type="text/javascript">
		function deleteConfirm() {
			var result = confirm( "Are you sure to delete?" );
			if ( result ) {
				return true;

			} else {
				return false;
			}
		}

		$( document ).ready( function () {
			$( '#select_all' ).on( 'click', function () {
				if ( this.checked ) {
					$( '.checkbox' ).each( function () {
						this.checked = true;
					} );
				} else {
					$( '.checkbox' ).each( function () {
						this.checked = false;
					} );
				}
			} );

			$( '.checkbox' ).on( 'click', function () {
				if ( $( '.checkbox:checked' ).length == $( '.checkbox' ).length ) {
					$( '#select_all' ).prop( 'checked', true );
				} else {
					$( '#select_all' ).prop( 'checked', false );
				}
			} );
		} );
	</script>
</body>
</html>
