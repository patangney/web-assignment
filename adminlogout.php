<!doctype html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<!-- <link href="css/bootstrap.min.css"> -->
	<link href="file:///C|/Users/ptang/AppData/Roaming/Adobe/Dreamweaver CC 2017/en_US/Configuration/Temp/Assets/eamA223.tmp/css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

	<div class="main">
		<div class="container">
			<center>
				<div class="middle">
					<div id="login">
						<form action="login_action.php" method="post">
							<fieldset class="clearfix">

								<p><span class="fa fa-user"></span>

									<input type="text" Placeholder="name" required name="adminname">
								</p>
								<!-- JS because of IE support; better: placeholder="Username" -->
								<p><span class="fa fa-lock"></span>
									<input type="password" Placeholder="password" required name="password">
								</p>
								<!-- JS because of IE support; better: placeholder="Password" -->

								<div><span style="width:100%; text-align:right;  display: inline-block;">
                <input type="submit" value="Sign In">
                </span>
									</div>
							</fieldset>
							<div class="clearfix"></div>
						</form>
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-lg-12 display-error">
								<div class="err">
									<p>You have been logged out</p>
								</div>



							</div>
						</div>
						<!-- end login -->
					</div>

					<div class="logo"><a href="index.php"><img src="images/logo/logobig.png"></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</center>
		</div>
	</div>
</body>

</html>