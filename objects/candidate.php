<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
</head>
<body>
	<?php
	$candidate_age =70;
	$party ="APC";

	if(($candidate_age >= 70) && ($party=="APC")){
		echo"You can contest";
	}elseif($candidate_age < 70){
		echo"join $party";
	}else{
		echo"you cant vote";

	}
	
	?>
</body>
</html>