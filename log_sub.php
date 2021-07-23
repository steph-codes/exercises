<?php
session_start();

$user=$_POST['user'];
$pass=$_POST['pass'];
$mail=$_POST['mail'];


if($user=='student' && $pass=='student'){
	$_SESSION['username'] = $user;
	$_SESSION['password'] = $pass;
	$_SESSION['email'] = $mail;

	header("location:welcome.php");
}else{
	unset($_SESSION['username']);
	header("location:login.php");
}




?>