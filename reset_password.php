<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password Page</title>
</head>
<body>

<?php

  $uname  = $_SESSION['uname'];
  $email  = $_SESSION['email'];

//  echo "$uname...$dob";

 // echo '<pre>'; 
//  print_r($_SESSION); 
//  echo '</pre>'; 
  
  
  ?>

<!--Form to Change Password -->

<h1>Reset Password</h1>
<form action="reset_validation.php" method="post">
  <label for="unames">Username:</label><br>
  <input type="text" id="unames" name="unames"><br><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br><br>
  <label for="pwds">New Password:</label><br>
  <input type="password" id="pwds" name="pwds"><br><br>
  <input type="submit" name='submit' value="submit">
</form>

</body>
</html>