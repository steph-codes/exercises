<?php
	


$age = 0;
$range = 5;	

/*echo"<select>";
	for($age=0,$range=5; $age<=35,$range<=40; $age++,$range++){
		if($age%5==0 && $range%5==0){
			echo"<option value=\"$age-$range\">$age-$range<br></option>";
		}
	}
echo"</select>";
*/
echo"<select>";
for($age=0;$age<=35,$range<=40;$age++,$range++){
	if($age%5==0){
		echo"<option value=\"$age -$range\">$age-$range</option>";
	}
}

?>	

