<?php
session_start();

if(!isset ($_SESSION['username'])&& ($_SESSION['password'])){
	header("location:login.php");
}

echo"Dear ". $_SESSION['email'] ." we are glad to see you <br>
<a href='greeting.php'>Let us greet you</a>";

?>