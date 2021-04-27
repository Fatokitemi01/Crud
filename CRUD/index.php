<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class = "bg-dark">
    
 <div class ="container">
        <div class = "row">
            <div class ="col-lg-6 m-auto">
                <div class ="card mt-5">
                  <div class ="card-title">
                     <h3 class ="bg-success text-white text-center"> Course form</h3>

                    </di v>
                    <div class ="card-body">
                    	<form action ="insert.php" method ="POST">
                    	<input type ="text" class ="form-control" placeholder="Course Name" name ="name">

                        <input type ="text" class ="form-control" placeholder="Course Code" name ="code">
                      <button class="btn-btn-primary" name ="submit">Submit</button>
                      <a href = "view.php"> edit or delete</a>
                      <a href = "forgotpassword.php"> change password</a>
                     <a href ="login.php">Logout</a>

                        </form>
                </div>
            </div>
      </div>

 </div>



</body>
</html>