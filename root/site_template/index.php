<!DOCTYPE html>

<html lang="en">

	<?php 
		session_start(); // to allow variable transfer between pages
		include("config.php"); 

		// connecting to the database
		$dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

		if(mysqli_connect_errno()) {
			echo "Connection Failed:".mysqli_connect_error();
			exit;
		}
	?>

	<head>
		<meta charset="utf-8">
		
		<!-- For assessment you need to change these -->
		<meta name="description" content="games, apps, ">
		<meta name="keywords" content="Game / App Database">
		<meta name="keywords" content="games, apps, ratings">
		
		<title>Game Database</title>
		
		<!-- for multiple fonts change | to %7c * no spaces* -->
		<link href="http://fonts.googleapis.com/css?family=Lato%7cUbuntu"
		rel="stylesheet">
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/data_style.css"> <!--custom style sheet -->
	</head>
	
	<body>
		<p class="message">Eek! Your browser does not support grid. 
		Please upgrade your system.</p>
		
		<div class="wrapper">
			
			<!-- logo / small image goes here -->
			<div class="box logo">
				<a href="index.php"><img src="images/logo.png"
				width ="261"
				height="150"
				alt="Dice" /></a>
			</div>
			
			<div class="box banner">
				<h1>Games Database</h1>
			</div> <!-- / banner -->
			
			<div class="box main">
				<h2>Welcome</h2>
				
				<p>
					This database contains some of the most popular apps on the appstore.
					The original dataset can be found at this link: <a href="https://www.kaggle.com/tristan581/17k-apple-app-store-strategy-games/version/1">Original Dataset</a>
				</p>
			</div> <!-- / main -->
			
			<div class="box side">
				<h2>Search Area</h2>
				
				<p>
					This is where the search area goes
				</p>
			</div> <!-- / side -->
			
			<div class="box footer">
				<p>Ethan Turnhout 2020</p>
			</div> <!-- / footer -->
			
		</div> <!-- / wrapper -->
	</body>
</html>