<!DOCTYPE html>
<html>
<head>
	<title>Basic Crud Application</title>
</head>
<body>

	<h3> Welcome to CRUD </h3>
	<p>Enter your login details</p>

	<form action="validatelogin.php" method="post">
		<label>Username:</label><br>
		<input type="text" name="username"> <br><br>
		<label> Password:</label><br>
		<input type="password" name="password"> <br><br>
		<input type="submit" name="submit" value="Login">
	</form>

	<!--Creating a link to Reset Password for old accounts -->

	<p> Can't remember your password?
	<a href="reset_password.php">Reset Password here</a>
	</p>

	<!--Creating a link to Signup page for new accounts -->

	<p> Don't have an account yet?
	<a href="userform.php">Register here</a>
	</p>

</body>
</html>