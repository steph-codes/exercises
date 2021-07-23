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

		<h1>Contact us today</h1>
		<form action="log_sub.php" method="POST">
			<br>
			<label>Username</label>
			<input type="text" name="user"  class="form-control" value="" placeholder="">
			<br>
			<label>Email</label>
			<input type="email" name="mail"  class="form-control"value="" placeholder="">
			<br>
			<label>password</label>
			<input type="password" class="form-control" name="pass" value="" placeholder="">
			<br>
			<button type="submit" class="btn btn-warning btn-block">Login</button>
		</form>
	</div>
</body>
</html>