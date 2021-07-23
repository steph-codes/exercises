

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
	// switch is used when u have many conditions, 
	//label can be string or numeric
	$sports ="";
	$intro = "";

		switch($sports){
			case 'boxing':
				$intro = "boxing Intro";
				break;
			case 'football':
				$intro = "football Intro";
				break;
			case 'basketball':
				$intro = "basketball Intro";
				break;
			case 'baseball':
				$intro = "baseball Intro";
				# code...
				break;

			default:
				$intro = "No sport was selected";
		}

	echo"<h2>$sports</h2>";
	echo"<div>$intro</div>";

	?>
</body>
</html>