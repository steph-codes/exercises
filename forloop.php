<?php
	/*$counter = 0;
	// ($num = 100; $num <= 100 ; $num--)
	for($number=50; $number < 100; $number++){
		if($number % 2 !== 0){
			echo "<p>$number</p>";

			$counter ++;
		}
		if($counter ==5){
			break;
		}
	}
		/*echo"<table border='1'>
		<tr><th>s/n</th></tr>";
		
		for($num=0 ; $num<= 10; $num++){
		
		echo"<tr><td>$num--$num<br></td></tr>";
	}
	echo"</table>";
	
	*/

function getCircumference(){
	for($radius = 60; $radius<= 80; $radius++){
		if($radius == 65 || $radius==75){
			continue;
		}
		$circumference = 2 * M_PI * $radius;
		echo "<p>circumference $radius =". $circumference."</p>";
	}
}

getCircumference();
?>