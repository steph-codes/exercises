

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


	function gender($user){

		if(strtolower($user) =="male"){
			echo"Gentleman, we have clippers";
		}elseif($user="female"){
			"Hi, lady we have shoes";
		}
		else{
			echo"can we meet you";
		}
		//echo msg
	}
	gender("male");



	function calcRectArea($length=13, $breadth=8.6){
		//$area = $GLOBALS['length'] * $GLOBALS['breadth'];
		$area = $length * $breadth;
		//return $area;
		echo "<p>Area of a rectangle = $area</p>";
	}
	// echo "Rectangle Area = ". calRectArea(2,5, 10);
	calcRectArea(2.5, 10);
	//if(function_exist('calcRectArea')){
		//calcRectArea("3, 6");
	//}
}
	/*$user="male";

	function gender(){
		global $user;
		if($user =="male"){
			echo"Gentleman, we have clippers";
		}elseif($user="female"){
			echo"Hi, lady we have shoes";
		}
		else{
			echo"can we meet you";
		}
	}
	gender();*/



	?>
</body>
</html>