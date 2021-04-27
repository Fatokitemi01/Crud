<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <link rel ="stylesheet" type ="text/css"
    href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<!-- Login page -->
<h2> Login Here</h2>
<form action ="validation.php" method ="POST">

<label>Email</label>
<input type ="text" name ="user" required>
<br><br>
<label>Password</label>
<input type ="password" name ="password" required>


<button type ="submit">Login</button>
<a href ="forgotpassword.php"> Forgot Password </a>

<br><br>
</form>


<!-- Register page -->

<h2>Register here</h2>
<form action ="registration.php" method ="POST">

<label>Email</label>
<input type ="text" name ="user" required>
<br><br>
<label>Password</label>
<input type ="password" name ="password" required>


<button type ="submit">Register</button>
<br><br>


</form>


</body>
</html>