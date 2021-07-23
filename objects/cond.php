

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
	$jack_age = 12;
	$jill_age = 8;
	$jack_score = 45;
	$jill_score = 56;
	$student_score =45;
	

	//test for one condition
	if($jack_age > $jill_age){
		echo "Jack is the eldest";
	}
	// test if true and when condition is not met
	if($jack_age > $jill_age){
		echo "<p>Jack is the eldest</p>";
	}else{
		echo "Jill is the youngest";
	}

	$remark ="";
	if(student_score > 75){
		$remarks ="Excellent";
	}elseif(student_score < 75 && student_score > 59){
		$remarks ="Better";
	}else{
		$remarks ="passed";
	}
	echo"<p>$remarks</p>";
	?>
</body>
</html>