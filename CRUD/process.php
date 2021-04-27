<?php

session_start();
$mysqli = new mysqli ('localhost', 'root','','userregistration') or die (mysqli_error($mysqli));
$code =" ";
$name ="";
if(isset($_POST['save'])){
  
    $code =$_POST['code'];
    $name = $_POST['name'];

    $_SESSION['message']= "Record has been saved";
    $_SESSON['msg_type'] = "success";
    header("location: index.php");

    $mysqli->query("INSERT INTO course(code,coursename)VALUES('$code', '$name')") or
      die($mysqli->error); 
}
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `users` WHERE `id`='$user_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}


}
