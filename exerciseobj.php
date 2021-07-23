<?php

include 'exercise.php';
//instantiate new class and object hanger
$exerciseobj = new Report;
$exerciseobj->setModel("X");
$exerciseobj->setName("iphone");
$exerciseobj->setOs("mac OS");


echo "the phone you are using is ".$exerciseobj->displayReport();


$newphone = new Report;
$newphone->setModel("A30");
$newphone->setName("samsung");
$newphone->setOs("android 10");
echo "<br>the phone you are using is ".$newphone->displayReport();

?>