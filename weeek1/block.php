

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

	$friend = "shola";
	$post = "Happy birthday dear";
	$age = 67;
	$tolu_age = 37;
	if(strpos($post, "dear") && ($age < $tolu_age + 10)){
		echo $friend.", tolu has un-friended you";
	}else{
		echo"Thank you ".$friend;
	}
	
	?>
</body>
</html>