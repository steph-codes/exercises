<?php
	$results =[50,50,90,100,87];
	

	echo"<pre>";
	print_r($results);
	echo"</pre>";
	
	//loop runs the amount of times the element we have
	$result =array([50,50,90],[50,30,230],[20,540,910,]);


	echo"<table border='1'>
		<tr><th>Maths</th><th>Science</th><th>English</th></tr>";
	foreach ($result as $key => $value) {
		echo"<tr>";
			foreach ($value as $res => $score){
				echo"<td>$score</td>";
			}
		echo"</tr>";
	}

	echo "</table>";


	die();
	echo"<pre>";
	print_r($result);
	echo"</pre>";

	/*$student = array('one'=>50, 'two'=>100,'three'=>60,'four'=>78,'five'=>89);

	echo"<pre>";
	print_r($student);
	echo"</pre>";

	$x =1;
	echo"<table border='1'><tr><th>s/n</th><th>Student no</th><th>Score</th></tr>";
		foreach ($student as $key => $value) {
			echo "<tr><td>$x</td><td>$key</td><td>$value</td></tr>";
			$x++;
		}
	echo"</table>";*/
?>