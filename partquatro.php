<?php session_start(); ?>
<!-- 
   #######################################################################################################
   || This code was written by Ryan Z. Costa in June 2016 as a practice and exercise in HTML & Css & PHP||
   || This is purely for educational purposes and the images used in this page are not mine.            ||  
   || This is not for business purposes, only personal use and educational practice.                    ||  
   || Pokemon, its characters, and everything pokemon related belongs to nintendo/gamefreak             ||
   #######################################################################################################
-->

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
