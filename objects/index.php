

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
	/* 
	Author: ogundele tunde
	date:01-02-21 
	first PHP code */

	print("stephen <br>");
	echo(" tunde <br>");
	?>
	<?php
	print"programme to calculate area of a rectangle <br>";
	$length = 10;
	$breadth = 12.5;
	$area = $length * $breadth;
	echo"<br> Area of a rectangle = $area";

	$school = 'st david\'s school';
	$poermtitle = 'i\'m all yours';

	$school_1 = "st david\"s school";
	$poermtitle_1 = "i\"m all yours";

//heredoc
	$liverpool = <<<POOL
		<p>'Mamp has "launched "and config your web page
		all set to serve <b> your web's <b>content'</p>
	POOL;

	echo $liverpool;

//nowdoc
	$school_2 = <<<'SCH'
	 	st david's school.area of rectangle =
	 	$area
	SCH;
	
	echo $school_2; 
	?>
</body>
</html>