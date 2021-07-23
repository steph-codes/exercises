<?php
session_start();

if(!isset($_SESSION['username'])){
	header("location:login.php");
}else{
	//unset($_SESSION['username']);

}

echo"your email is" . $_SESSION['email'] . "and your username ". $_SESSION['username'];

?>