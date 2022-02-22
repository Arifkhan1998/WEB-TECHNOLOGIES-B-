<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Login</h2>
	<form action="welcome.php" method="post">
		<label>Username</label>
		<input type="text" name="username" value="<?php if(isset($_COOKIE['uname'])){ echo $_COOKIE['uname'];} ?>"><br>
		<label>Password</label>
		<input type="password" name="password" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass'];} ?>"><br>
		<input type="checkbox" name="remember"> Remember me<br><br>
		<input type="submit" name="login" value="Login">


	</form>

</body>
</html>