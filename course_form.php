<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Form Registration</title>
</head>
<body>

<?php

	$fname  = $_SESSION['firstname'];
	$lname  = $_SESSION['lastname'];
	$email  = $_SESSION['email'];
	$uname  = $_SESSION['uname'];
	$dob    = $_SESSION['dob'];
	$gender = $_SESSION['gender'];

	$_SESSION['firstname'] = $fname;
	$_SESSION['lastname']  = $lname;
	$_SESSION['email']     = $email;
	$_SESSION['uname']     = $uname;
	$_SESSION['dob']       = $dob;
	$_SESSION['gender']    = $gender;
?>

<h3>Course Registration</h3>

<form action="db_update.php" method="post">

  <label for="fend">Select a Frontend course:</label> <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="html" name="fend" value="html"> 
  <label for="html">HTML</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="css" name="fend" value="css">
  <label for="css">CSS</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="javascript" name="fend" value="javascript">
  <label for="javascript">Javascript</label><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br/>
 
  <label for="bend">Select a Backend course:</label> <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="php" name="bend" value="php"> 
  <label for="php">PHP</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="nodejs" name="bend" value="nodejs">
  <label for="nodejs">NodeJs</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="python" name="bend" value="python">
  <label for="python">Python</label><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br/>

  <label for="graph">Select a Graphics course:</label> <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="corel" name="graph" value="corel"> 
  <label for="corel">CorelDraw</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="illust" name="graph" value="illust">
  <label for="illust">Illustrator</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="figma" name="graph" value="figma">
  <label for="figma">Figma</label><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br/>

  <input type="submit" name='submit' value="submit">
</form>

</body>
</html>