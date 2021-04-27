<?php
require_once("connection.php");

if(isset($_GET['Del']))
{
	$id =$_GET['Del'];
	$query = "delete from records where id ='".$id."'";
	$result = mysqli_query($con,$query);

	if($result)
	{
		header("location:view.php");
	}
	else{
		echo "please check your query";
	}
}
else{
	header("location: view.php");
}

?> 