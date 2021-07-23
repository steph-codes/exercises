<?php

$name = $_POST['fname'];
$mail = $_POST['mail'];

//declaring cookie name, no need to declare variable cos we just assigned the arguments into the parameters.
$cookie_name ='news_subscription';

setcookie('news_subscription',$mail . $name, time() + 3600, '/');
// to expire cookie time setcookie('news_subscription',$mail . $name, time() -3600, '/');
header("location:news.php");
?>