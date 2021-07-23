<?php
include"User.php";
$obj = new User;



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>All Users</h1>
	<?php $allusers = $obj->report()?>;
</body>
</html>

<?php



?>