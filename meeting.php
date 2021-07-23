<?php


require('User.php');
$obj = new User;

if(!isset($_SESSION['login'])){
	header('location:dayfour_login.php');
}

echo"<pre>";
	print_r($result);
echo"</pre>";
$obj->details($_SESSION['login']);
//store the return statement so we can print it out
$deets = $obj->details($_SESSION['login']);

echo strtotime(date('Y-m-d'));//seconds

//date format/ check php.net for date functions, use diff alphabets to get it.
/*$formated_date = date('F' strtotime($deets['user_date']));
echo $formated_date;*/
//timezone
//date('F J Y, g:i a', string to time);convert database time to string
//date_default_timezone_set('Africa/accra');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">


		<h1>Past meeting</h1>
		<p>Welcome <?php echo $_SESSION['login']?> logged in at <?php echo $deets['user_date'];?></p>

		<p>date function</p>
		<p>Designed by me &copy; 2020-<?php echo date('Y');?></p>
		<p>Meeting with buhari</p>
		<p>Meeting with Sunday ighoho</p>

		<p><a href="dayfour_login.php">Logout</a></p>

























	</div>
</body>
</html>