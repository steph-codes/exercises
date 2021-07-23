<?php
	
	//$cars = array("volvo","toyota","benz");
	//$cars = ["volvo","toyota","benz"];
	/*$cars = [0=>'toyota','bmw','honda'];

	echo "<pre>";
	print_r($cars);
	echo "</pre>";

	/*$weather =["rain","sunshine","clouds","hail","sleet","snow","wind"];
	echo "<p>We've seen all kinds of weather this month at the beginning of the month,<br> we had ". $weather[5]. " and ". $weather[6] ." then came ". $weather[1] . " and with a few ". $weather[2] . " and some ". $weather[0] . " at least we didnt get any ". $weather[3] ." or ". $weather[4] ;

	/*$no = count($weather);
	echo "<br>we have $no";
	
	$subjects =["English","Maths","Crk"];
	$no = count($subjects);
	echo "<br>$subjects[0]";
	echo "<br>$subjects[1]";
	echo "<br>$subjects[2]";

	for($x=0; $x>$no ; $x++){
		echo $subjects[0]."<br>"; 

	$garages = [ 10=> "toyota", "bmw","volvo", "honda"];

	for($x=10; $x<=13; $x++){
		echo $garages[$x]."<br>"; 
	}
	*/

	$subjects =["English","Maths","Crk"];
	
	foreach ($subjects as $key=>$sub){
		echo "$sub has a key of $key <br>";
	}
	foreach ($subjects as $sub) {
		echo "<h1>$sub.</h1>" ;
	}
?>	


