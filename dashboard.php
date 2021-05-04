<?php
session_start();

 include ('../crud/myfunctions.php');
?>


<!DOCTYPE html>
<html>
<head>
</head>
	<title>Dashboard</title>
</head>
<body>

<!--Form Detail with inputs -->


<h2>My Dashboard</h2>

<?php

//  echo '<pre>'; 
 // print_r($_SESSION); 
 // echo '</pre>';

  $fname  = $_SESSION['firstname'];
  $lname  = $_SESSION['lastname'];
  $email  = $_SESSION['email']; 
  $uname  = $_SESSION['uname'];
  $gender = $_SESSION['gender'];
  $dob    = $_SESSION['dob'];
  $fend   = $_SESSION['fend'];
  $bend   = $_SESSION['bend'];
  $graph   = $_SESSION['graph'];

?>

<h3>It's Nice having you here</h3>

  <h4>Personal Information</h4>

  <p><b>Full Name:</b>    <?php echo "$fname"." ". "$lname" ?> </p>
  <p><b>Username:</b>      <?php echo "$uname" ?> </p>
  <p><b>Date of Birth:</b> <?php echo "$dob" ?> </p>
  <p><b>Sex: </b>          <?php echo "$gender" ?> </p>
  <p><b>Front-end course: </b>   <?php echo "$fend" ?>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="course_form.php" value="a">edit</a> &nbsp;&nbsp;&nbsp;
    <a href="db_delete.php">delete</a>
  </p>
  <p><b>Back-end course: </b>          <?php echo "$bend" ?> &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="course_form.php" value="b">edit</a> &nbsp;&nbsp;&nbsp;
    <a href="db_delete.php">delete</a> 
  </p>
  <p><b>Graphics course: </b>          <?php echo "$graph" ?> &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="course_form.php" value="c">edit</a> &nbsp;&nbsp;&nbsp;
    <a href="db_delete.php">delete</a> 
  </p>

</form>

<form action="index.php" method="post">
  <input type="submit" name='submit' value="Logout">
</form>

</body>
</html>

