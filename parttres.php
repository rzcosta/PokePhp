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



<?php 
$playerGender = $_POST["playerGender"];
$_SESSION['playerGender'] = $playerGender;
?>
	<div id="oakIntroPic" class="">
		
	<img id="oakPic" src="images/oak.png"/>	

	</div>
			
	
	
	<div id="oakIntro">
			<p>Let’s begin with your name.</p>
			<p>What is it? </p>
			</br>
			<form action="parttres.php" method="post">	
			<input type="text" name="playerName">
			<input type="submit" value="Submit">
			</form> 
			</div>
			
			
			























</body>
</html>
