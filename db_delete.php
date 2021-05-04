<?php
session_start();

include('connectdb.php');
	
 echo '<pre>'; 
 print_r($_SESSION); 
 echo '</pre>';

// sql to delete a record
//$sql = "DELETE FROM user_info WHERE id=3";
$qry = "SELECT id FROM `user_info`";
$result = $conn->query($qry);

if ($result != "") {
	foreach ($result as $key => $num) {
		$id = $num['id'];
	}
}

$sql = "DELETE FROM user_info WHERE id= '$id' ";


if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>