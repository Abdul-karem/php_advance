<?php  
require 'function.php';
$register = new Rejister();
if(isset($_POST["submit"])){

$result =$register->registration($n);

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
</head>
<body>
<h2>Registeration</h2>
<form action=""  class=""  method="post"  >
<label for="">Name :</label>
<input type="text" name="name"  value="" >
<label for="">Username :</label>
<input type="text" name="username"  value="" >

<label for="">Email :</label>
<input type="email" name="email"  value="" >
<label for="">Password :</label>
<input type="password" name="password"  value="" >
<label for="">Confirm password :</label>
<input type="password" name="confirmpassword"  value="" >
<button type="submit" name="submit"  >register </button>
<br>
<a href="login.php">login</a>
</form>
    
</body>
</html>