<?php 

include('connectdb.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

<!--Form Detail with inputs -->


<h1>Form Registration</h1>
<form method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br><br>
  <label for="unames">Username:</label><br>
  <input type="text" id="unames" name="unames"><br><br>
  <label for="dob">Date of Birth:</label><br>
  <input type="date" id="dob" name="dob"><br><br>
  <label for="sex">Sex:</label>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <label for="pwds">Password:</label><br>
  <input type="password" id="pwds" name="pwds"><br><br>

  <h3>Course Registration</h3>

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

<?php

if(isset($_POST['submit'])) {
  $firstname = $_POST['fname'];
  $lastname  = $_POST['lname'];
  $email     = $_POST['email'];
  $unames    = $_POST['unames'];
  $gender    = $_POST['gender'];
  $dob       = $_POST['dob'];
  $password  = $_POST['pwds'];
  $fend      = $_POST['fend'];
  $bend      = $_POST['bend'];
  $graph     = $_POST['graph'];

if ($unames== '' OR $email == '' OR $password == '' ) { 
    echo "Please fill in the neccessary information";
}
else{

$sql = "INSERT INTO user_info (firstname, lastname, email, username, gender, dob, password, frontend, backend, graphics)
    VALUES ('$firstname', '$lastname', '$email', '$unames', '$gender', '$dob', '$password', '$fend', '$bend', '$graph' )";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

} 

}

?>
  <p>
  <a href="index.php">Click here to login</a>
  </p>

</body>
</html>

