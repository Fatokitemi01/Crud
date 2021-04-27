<?php
 include_once("connection.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['name'])||empty($_POST['code']))
    {
   	echo 'Please fill in the blanks';
     }
   else{
   	$Name = $_POST['name'];
   	$Code = $_POST['code'];

   	$query = "insert into records (coursename,coursecode) values('$Name','$Code')";
   	$result =mysqli_query($con,$query);
         if($result)
         {
			header("location: view.php");
		 }
		 else{
				echo " please check your query";
			}

   }
}
else
{
	header("location:index.php");
}