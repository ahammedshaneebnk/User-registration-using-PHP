<!DOCTYPE html>
<html>
<head>
	<title>User registration using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>E-mail</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already registered? <a href="login.php">Login</a>
		</p>
	</form>

</body>
</html>