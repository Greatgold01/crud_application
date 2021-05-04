<?php
session_start();

 include ('../crud/connectdb.php');


if(isset($_POST['submit'])) {
	$username    = $_POST['username'];
	$password    = $_POST['password'];

	//	echo "username = $username and password = $password ";

	}

$sql = "SELECT id, firstname, lastname, email, username, gender, dob, password, frontend, backend, graphics FROM user_info WHERE username = '$username' ";

$result = $conn->query($sql);

if($result != ""){
	foreach ($result as $key => $res) {
		$fname  = $res['firstname'];
		$lname  = $res['lastname'];
		$email  = $res['email'];
		$uname  = $res['username'];
		$gender = $res['gender'];
		$dob    = $res['dob'];
  		$pass   = $res['password'];
  		$fend   = $res['frontend'];
  		$bend   = $res['backend'];
  		$graph  = $res['graphics'];

  	$_SESSION['firstname'] = $fname;
	$_SESSION['lastname']  = $lname;
	$_SESSION['email']     = $email;
	$_SESSION['uname']     = $uname;
	$_SESSION['gender']    = $gender;
	$_SESSION['dob']       = $dob;
	$_SESSION['fend']      = $fend;
	$_SESSION['bend']      = $bend;
	$_SESSION['graph']      = $graph;

//	echo '<pre>'; 
 //   print_r($_SESSION); 
 //   echo '</pre>';

  	//	echo "<br/> uname == $uname <br/> pass == $pass <br/> DOB == $dob";
  	//	echo "<br/> username == $username <br/> password == $password <br/> ";

if($uname == $username && $pass == $password){
	header("Location: /zuri/crud/dashboard.php");
	}
	elseif ($uname == $username && $pass != $password ) {
		echo "Wrong Password Entry";
	}
	elseif ($uname != $username) {
		echo "username not found";
	}
	else{
		echo "Invalid entry";
	}
}


}





?>