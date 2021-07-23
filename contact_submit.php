<?php

if($_POST){
	require('client.php');

	$email = trim(strip_tags($_POST['mail']));
	$message = trim(strip_tags($_POST['msg']));

	$newclass = new Client;

	$newclass->post($email, $message);

}else{
	header("location:contact_form.php");
}



?>