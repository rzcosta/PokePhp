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
		background-image: url("images/8bitbg.png")!important;
	}
</style>



<body>





<div class="container_12 clearfix">
	<div id="oak" class="grid_12">
		<p id="oakSpeak"> 
			Hello, there! </br>
			Glad to meet you!</br>
			Welcome to the world of <b>POKéMON!</b></br>
			My name is <b>OAK</b>.</br>
			People affectionately refer to me as the <b>POKéMON PROFESSOR.</b> </br>
			This world… </br>
			…is inhabited far and wide by creatures called <b>POKéMON!</b>.</br>
			For some people, <b>POKéMON!</b> are pets.</br>
			Others use them for battling.</br>
			As for myself…</br>
			I study <b>POKéMON!</b> as a profession.</br>
		<img id="oakPic" src="images/oak.png"/>
		</p>
	
	</div>
<div id="main"  class="grid_12">
<?php 

$pokemon = ['Fire' => '<h2>Charmander</h2></br><img src="images/charmander2.png" class="medium"/>',
			'Water'=> '<h2>Squirtle</h2></br><img src="images/squirtle2.png" class="medium"/>',
			'Grass'=> '<h2>Bulbasaur</h2></br><img src="images/bulbasaur2.png" class="medium"/>',
			'Lightening' => '<h2>Pikachu</h2></br><img src="images/pikachu2.png" class="medium"/>'];
			

$starters = count ($pokemon);


echo "There are $starters starting pokemon that you can choose from.";
echo "</br>";
print "You can select from the following Pokemon:";
print '</br>';
print "<table id='pokeTable' border-color='#efefef'>\n";
foreach ($pokemon as $key => $value) {
	print "<tr><td align: center>$value</td><td><b>$key</b></td></tr>\n";
	}
print '</table>';



$randStarter = $pokemon[array_rand($pokemon)];

echo '</div>';
echo '<div id="rival" class="grid_12">';

echo " Your rival Gary has chosen  $randStarter.";

echo '</div>';

?>

</div>
</div>
</body>
</html>



<b>POKéMON PROFESSOR.</b></p>
			<p>This world… </p>
			<p>…is inhabited far and wide by creatures called <b>POKéMON!</b>.</p>
			<p>For some people, <b>POKéMON!</b> are pets.</p>
			<p>Others use them for battling.</p>
			<p>As for myself…</p>
			<p>I study <b>POKéMON!</b> as a profession.</p>
