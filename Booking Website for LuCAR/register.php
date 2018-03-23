<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up to book your LuCAR now!</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
	
	<div class="container">
	<form id="contact" method="post" action="register.php">
		<h3>Sign Up</h3>
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>