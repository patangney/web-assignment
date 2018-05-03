<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

    <?php
			$_SERVER = "localhost";
			$dbuser = "root";
			$password = "";
			$link = mysqli_connect( $_SERVER, $dbuser, $password );
			mysqli_select_db( $link, "property" );
	?>
			
	<?php

			$queryNews = "SELECT COUNT(*) AS totalNewsletters FROM newsletter WHERE STATUS='new_request' ";	
			$result_News = mysqli_query($link, $queryNews); // Result resource


			while ($row=mysqli_fetch_array($result_News)){
			
				$countNews = $row ["totalNewsletters"];
				echo $countNews;
								
			}
	?>
	
	<?php
		//close link
		mysqli_close( $link );	
	
	?>
			                    <div class="leave-review">
                      <h5>Leave a Review</h5>
                      <form action="mysql/testimonialsprocess.php" method="post" id="leavereview">
                        <input type="text" name="author_name" placeholder="Your name">
                        <input type="email" name="author_email" placeholder="Email here">
                        <input type="text" name="title" placeholder="Title">
                        <textarea name="content"></textarea>
                        <button type="submit" value="send" class="submit-btn-1">SUBMIT REVIEW</button>
                      </form>
                    </div>
	
	
		
	
	

	
	
			

	  

</body>
</html>