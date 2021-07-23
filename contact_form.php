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
		<form action="contact_submit.php" method="POST">
			<br>
			<label>Email</label>
			<input type="email" name="mail"  class="form-control"value="" placeholder="">
			<br>
			<label>Send us a message</label>
			<textarea name="msg" class="form-control"></textarea>
			<br>
			<button type="submit" class="btn btn-warning btn-block">POST</button>
		</form>
	</div>
</body>
</html>