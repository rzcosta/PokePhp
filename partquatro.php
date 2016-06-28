<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Dev Site</title>
	<meta name="Pokemon Php" content="Javascript">
	<meta name="Ryan C" content="RZwebsolutions">
	<link rel="stylesheet" type="text/css" href="css/960_12_col.css">
	</head>
<style>
body {
background-image: url(images/8bitbg.png); /*You will specify your image path here.*/

-moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
}
</style>
<body>
	<div id="oakIntroPic" class="">
		
	<img id="oakPic" src="images/oak.png"/>	
	</div>
	<div id="oakIntro">
			<?php 
			session_start();
			$playerName = $_SESSION['playerName'];
			$playerGender = $_SESSION['playerGender'];
			echo "<p>Your name is $playerName and you are a $playerGender.</p>";
			?>
	


			
			
			
	</div>
	</body>
</html>
