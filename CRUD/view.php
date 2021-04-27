<?php
 require_once("connection.php");

 $query =" select * from records ";
 $result = mysqli_query($con,$query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>View Records</title>
</head>
<body class = "bg-dark">
    
 <div class ="container">
        <div class = "row">
            <div class ="col m-auto">
                <div class ="card mt-5">
                	<table class ="table table-bordered">
                		<tr>
                		<td>Id</td>	
                		<td>Course Name</td>	
                		<td>Course Code</td>	
                		<td>Edit</td>	
                		<td>Delete</td>	

                		</tr>

                		<?php
                		while($row=mysqli_fetch_assoc($result)){
                			$id =$row['id'];

                			$Name =$row['coursename'];
                			$Code =$row['coursecode'];
                		

                		?>
                		<tr>
                			<td><?php echo $id ?> </td>
                			<td><?php echo $Name ?> </td>
                			<td><?php echo $Code ?> </td>
                			<td><a href ="edit.php?GetID=<?php echo $id ?>">Edit</a></td>
                			<td><a href ="delete.php?Del=<?php echo $id ?>">Delete</a></td>
                               

                		</tr>
                		<?php

                            }
                		 ?>

                	</table>
                  
            </div>
      </div>

 </div>



</body>
</html>