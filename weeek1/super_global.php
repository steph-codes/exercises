
<!DOCTYPE html>
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
	
	$length = 10;
	$breadth =20;

	function calcRectArea(){
		global $length, $breadth;
		//$area = $GLOBALS['length'] * $GLOBALS['breadth'];
		$area = $length * $breadth;
		$echo "Area of a rectangle = $area";
	}
	calcRectArea();

	?>
	

	</body>
</html>