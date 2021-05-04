<?php

 include ('../crud/connectdb.php');


if(isset($_POST['submit'])) {
	$firstname = $_POST['fname'];
	$lastname  = $_POST['lname'];
	$email	   = $_POST['email'];
	$unames    = $_POST['unames'];
	$gender    = $_POST['gender'];
	$dob       = $_POST['dob'];
	$password  = $_POST['pwds'];
	$fend	   = $_POST['fend'];
	$bend	   = $_POST['bend'];
	$graph	   = $_POST['graph'];

//	echo "$firstname <br/> $lastname <br/> $email </br/> $unames <br/> $gender <br/> $dob </br> $password <br/>";

}

	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname']  = $lastname;
	$_SESSION['email']     = $email;
	$_SESSION['uname']     = $unames;
	$_SESSION['gender']    = $gender;
	$_SESSION['dob']       = $dob;
	$_SESSION['dob']       = $dob;
	$_SESSION['fend']      = $fend;
	$_SESSION['bend']      = $bend;
	$_SESSION['graph']     = $graph;


	//Array to get all the inputted values

$sql = "INSERT INTO user_info (firstname, lastname, email, username, gender, dob, password, frontend, backend, graphics)
		VALUES ('$firstname', '$lastname', '$email', '$unames', '$gender', '$dob', '$password', '$fend', '$bend', '$graph' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

?>
	<p>
	<a href="index.php">Click here to login</a>
	</p>

<?php

?>