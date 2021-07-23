<?php
	

$sales=['volvo'=>['stock'=>'10', 'sales'=>'5', 'receipt'=>'55'],
		'BMW'=>['stock'=> '12', 'sales' =>'13'],
		'saab'=>['stock'=>'4', 'sales'=>'34']
	];



foreach ($sales  as $car => $list) {
	echo"<h1> $car</h1>";
	foreach ($list as $key => $val) {
	echo "$key is $val<br>";
	}
}
?>	

