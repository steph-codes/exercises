

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


	$username ="john";
	$password ="";

	if(strlen($username) >= 3 && $password !== ""){
		echo"you're good to go"; 
	}else{
		echo"failed";
	}


	
	?>
</body>
</html>