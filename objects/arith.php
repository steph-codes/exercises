

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
	//arith operations
	$x = 0;
	$b = 2;
	$y = 10;
	$x %=$y;
	echo $x;

	@$res = $y/ $x;
	echo $res;

	++$b;
	echo $b;

	$academy ="Moat academy for Developers";
	echo strlen($academy)."<br>";
	echo strrev($academy)."<br>";
	echo str_word_count($academy)."<br>";
	if(strpos($academy, "for")){
		echo "you're good to go";
	}else{
		echo "calm dowm";
	}
	$academy_1 = str_replace("moat", "linda ikeji", $academy);
	echo "<p>$academy_1</p>";
	$academy_1 = str_replace("Developers","Bloggers", $academy_1);
	echo "<p>$academy_1</p>";
	echo substr($academy_1, 5, 7);


	$phone1 = "+18173891477";// +1
	$phone2 = "+2348051257088"; // +234
	$phone3 = "+448023891478"; // +

	echo substr($phone2, -10);
	/*$a ="2";	
	$b = 2;
	if($a === $b){
		echo"true";
	}else{
		echo"false";
	}*/

	?>
</body>
</html>