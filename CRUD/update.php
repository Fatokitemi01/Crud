<?php
require_once("connection.php");

if(isset($_POST['update']))
{
    $id= $_GET['ID'];
    $Name= $_POST['name'];
    $Code= $_POST['code'];

    $query ="update records set coursename='".$Name."', coursecode ='".$Code."' where id='".$id."'";

    $result = mysqli_query($con,$query);

    if($result)
    {
    	header("location:view.php");
    }
    else
    {
    	echo 'please check your query';
    }


}
else
{
	 header("location:view.php");
}



?>