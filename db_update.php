<?php
session_start();

include('connectdb.php');

//  echo '<pre>'; 
//  print_r($_SESSION); 
//  echo '</pre>';

  if(isset($_POST['submit'])) {
  	$fend   = $_POST['fend'];
	$bend   = $_POST['bend'];
	$graph  = $_POST['graph'];
  }

    $fname  = $_SESSION['firstname'];
	$uname  = $_SESSION['uname'];
	$email  = $_SESSION['email'];


$sql = "UPDATE user_info SET frontend='$fend', backend='$bend', graphics='$graph' WHERE username = '$uname' and email = '$email' ";

// echo "UPDATE user_info SET frontend='$fend', backend='$bend', graphics='$graph' WHERE username = '$uname' and email = '$email' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully"; ?>
  <p>
  <a href="index.php">Click here to login</a>
  </p>
  <?php
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>