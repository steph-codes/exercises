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

		<h1>Register today</h1>
		<form action="submit.php" method="POST">
			<br>
			<select name="gender" class="form-control" >
				<option value="">select</option>
				<option value="male">male</option>
				<option value="female">Female</option>
			</select>
			<br>
			<label>Full name</label>
			<input type="text" name="fullname" class="form-control" value="" placeholder="">
			<br>
			<button type="submit" class="btn btn-success btn-block">Register</button>
		</form>
	</div>
</body>
</html>