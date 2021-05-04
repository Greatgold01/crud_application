<?php
session_start();

 include ('../crud/connectdb.php');


if(isset($_POST['unames']) && isset($_POST['email']) && isset($_POST['pwds']) ) {
	$username    = $_POST['unames'];
	$email    	 = $_POST['email'];
	$pwds    	   = $_POST['pwds'];

	// echo "username = $username and password = $pwds and email = $email <br/> ";

}

$sql = "SELECT id, firstname, lastname, email, username, gender, dob, password FROM user_info WHERE username = '$username' and email = '$email'";

$result = $conn->query($sql);

if($result != ""){
	foreach ($result as $key => $res) {
		$uname    = $res['username'];
		$db_email = $res['email'];
  	$pass     = $res['password']; 

  	//	echo "username = $uname and password = $pass and email = $db_email <br/> <br/>";
  	//	echo "username = $username and password = $pwds and email = $email ";

  	if ($uname == $username && $db_email == $email ) {
  		if ($pwds != "") {
  			$qry = "UPDATE user_info SET password = '$pwds' WHERE username = '$uname' and email = '$db_email' ";
  			//echo "UPDATE user_info SET password = '$pwds' WHERE username = '$uname' and email = '$db_email' ";

  			if ($conn->query($qry) === TRUE) {
  				echo "password updated successfully";
			} else {
 				echo "Error updating record: " . $conn->error;
	}  		}
  	}

  	}

  	
  	
  }

?>

<p>
  <a href="index.php">Click here to login</a>
</p>