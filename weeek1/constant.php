

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	//constant demo
	define("BASE_URL", "http://konga.com");
	echo"<a href=" . BASE_URL . ">Visit my Site</a>"; 

	echo BASE_URL;

	//circumference of a circle
	$radius = 2.8;
	$circum = 2 * pi() * $radius;

	echo"<p>circumference of a circle = $circum </p>";
	//as a constant u concatenate, php pi function is M_PI
	define("PIE", "3.142");
	echo"<p>our PI value is now. ".M_PI."</p>";
	//concat

	$author ="<ul>";
	$author .="<li>Wole soyinka</li>";
	$author .="<li>sammy ekpo</li>";
	$author .="<li>emole byles</li>";
	$author .="<li>arsene wenger</li>";
	$author .="<li>sir alex</li>";
	$author .="</ul>";

	echo $author;
	?>
</body>
</html>