<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Login to book your LuCAR now!</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>


	<div class="container">
	<form id="contact" method="post" action="login.php">

		<?php include('errors.php'); ?>
		<h3>Login</h3>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>



</body>
</html>