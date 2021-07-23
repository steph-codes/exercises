

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
	$word ="that man is an idiot";

	if(strpos($word, "idiot")){
		$word_1 = str_replace("idiot","unpleasant words", $word);
		echo"<p><span style='color:red'>you have been banned</span>, for using ". substr($word_1, 15). "</p>";
	}else{
		echo"keep, enjoying twitter";
	}
	
	?>
</body>
</html>