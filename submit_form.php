<?php
// retrieve
//sanitize input with trim and strip tags

/*echo $username. " " .  $password;
//1 .add the data into a file.
//$check = file_put_contents('customers.txt', $username. $password);
//or 
$datastore = $username . " " . $password;
file_put_contents('customer.txt', $datastore, FILE_APPEND);

echo file_get_contents('customer.txt');*/


if($_POST){
	require('user.php');


	$username = trim(strip_tags($_POST['user']));
	$password = trim(strip_tags($_POST['pass']));


	$profile = new User;

	//$profile->setdetails($username, $password) set to username on user.php;
	$profile->register($username, $password);

}else{
	//echo"you think say you dey wise";
	header("location:register.php");
}

?>