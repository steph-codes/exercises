

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
</head>
<body>
	<?php
	//local scope

	function myTest(){
		$x = 5;
		echo "<p>variable x inside function is : $x</p>";
	}
	myTest();
	// Use global keyword if not it won't be recpgnize, its different from js cos we are adding the global keyword.

	$x = 10;
	$y = 5;
	function myTests(){
		global $x;
		echo "<p>variable x inside function is : $x</p>";
	}
	myTests();
	?>
</body>
</html>