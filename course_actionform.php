<?php
session_start();

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname  	= "zuri_class";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $uname  = $_SESSION['uname'];
 $email  = $_SESSION['email'];

//  echo "$uname...$dob";

  echo '<pre>'; 
  print_r($_SESSION); 
  echo '</pre>';

if(isset($_POST['submit'])) {
	$fend = $_POST['fend'];
	$bend = $_POST['bend'];
	$graphics = $_POST['graph'];

	echo "$fend <br/> $bend <br/> $graphics ";

	//Array to get all the inputted values

/*	$sql = "INSERT INTO user_info (firstname, lastname, email, username, gender, dob, password)
	VALUES ('$firstname', '$lastname', '$email', '$unames', '$gender', '$dob', '$password' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/



	//Saving records into a file using file system

//	file_put_contents('forms/'.$array_info['unames'].".json", json_encode($array_info));

//	echo "Registration Successful"; 

	?>

	<p>
	<a href="login.php">Click here to login</a>
	</p>

	<?php

//	echo "$firstname $lastname $unames $gender $dob $password";
	//echo file_put_contents("test.txt","Hello World. Testing!");

}

?>