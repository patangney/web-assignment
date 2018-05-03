<html>

<head>

	<title>Links Page</title>

</head>

<body>

	<h2>Choose and delete selected links.</h2>

	<?php

		$_SERVER = "localhost";
		$dbuser = "root";
		$password = "";
		$link = mysqli_connect( $_SERVER, $dbuser, $password );
		mysqli_select_db( $link, "property" );

		$query_allMail = "SELECT * FROM contactus";
		
		$allMail = mysqli_query($query_allMail, $link);
		
		
	?>

	<table width="400" border="0" cellspacing="1" cellpadding="0">
		<tr>
			<td>
				<form name="form1" method="post" action="">
					<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
						<tr>
							<td bgcolor="#FFFFFF">&nbsp;</td>
							<td colspan="3" bgcolor="#FFFFFF"><strong>Delete multiple links</strong> </td>
						</tr>
						<tr>
							<td align="center" bgcolor="#FFFFFF">#</td>
							<td align="center" bgcolor="#FFFFFF"><strong>From</strong>
							</td>
							<td align="center" bgcolor="#FFFFFF"><strong>Contact Number</strong>
							</td>
							<td align="center" bgcolor="#FFFFFF"><strong>Data Sent</strong>
							</td>
						</tr>

						<?php

						while ( $row = mysqli_fetch_array( $allMail ) ) {
							?>

						<tr>
							<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['id']; ?>">
							</td>
							<td bgcolor="#FFFFFF">
								<?php echo $row['contact_name']; ?>
							</td>
							<td bgcolor="#FFFFFF">
								<?php echo $row['contact_email']; ?>
							</td>
							<td bgcolor="#FFFFFF">
								<?php echo $row['contact_mobile']; ?>
							</td>
						</tr>

						<?php
						}
						?>

						<tr>
							<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete">
							</td>
						</tr>
						<table width="400" border="0" cellspacing="1" cellpadding="0">
							<tr>
								<td>
									<form name="form1" method="post" action="">
										<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
											<tr>
												<td bgcolor="#FFFFFF">&nbsp;</td>
												<td colspan="3" bgcolor="#FFFFFF"><strong>Delete multiple links</strong> </td>
											</tr>
											<tr>
												<td align="center" bgcolor="#FFFFFF">#</td>
												<td align="center" bgcolor="#FFFFFF"><strong>Link ID</strong>
												</td>
												<td align="center" bgcolor="#FFFFFF"><strong>Link Name</strong>
												</td>
												<td align="center" bgcolor="#FFFFFF"><strong>Link URL</strong>
												</td>
											</tr>

											<?php

											while ( $row = mysqli_fetch_array( $result ) ) {
												?>

											<tr>
												<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['link_id']; ?>">
												</td>
												<td bgcolor="#FFFFFF">
													<?php echo $row['link_id']; ?>
												</td>
												<td bgcolor="#FFFFFF">
													<?php echo $row['link_name']; ?>
												</td>
												<td bgcolor="#FFFFFF">
													<?php echo $row['link_url']; ?>
												</td>
											</tr>

											<?php
											}
											?>

											<tr>
												<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete">
												</td>
											</tr>



											<?php

											// Check if delete button active, start this 

											if ( isset( $_POST[ 'delete' ] ) ) {
												$checkbox = $_POST[ 'checkbox' ];

												for ( $i = 0; $i < count( $checkbox ); $i++ ) {

													$del_id = $checkbox[ $i ];
													$sql = "DELETE FROM links WHERE link_id='$del_id'";
													$result = mysqli_query( $sql );
												}
												// if successful redirect to delete_multiple.php 
												if ( $result ) {
													echo "<meta http-equiv=\"refresh\" content=\"0;URL=view_links.php\">";
												}
											}

											mysqli_close( $dbc );

											?>

										</table>
									</form>
								</td>
							</tr>
						</table>

</body>

</html>