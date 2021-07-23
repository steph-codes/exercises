u<?php

require "User.php";
$shw = new User;

if($_POST){



$user = trim(strip_tags($_POST['user']));
$pass = trim(strip_tags($_POST['pass']));

echo $user. " ". $pass;
}else{
	header("location:dayfour_login.php");
}

echo $shw->login($user, $pass);
?>