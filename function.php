<?php
session_start();

class connection {

public $host ="localhost";
public $user ="root";
public $password ="";
public $db_name ="oop_data
";
public $conn;




public function __construct(){
$this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->db_name);

}

}
class Rejister extends connection{

public function registration($name, $username, $email, $password,$confirmpassword ){

$duplicate = mysqli_query($this->conn, "SELECT* FROM  tb_user WHERE  username ='$username' OR  email = '$email' ");
if(mysqli_num_rows($duplicate) > 0  ){

return 10;


}else{
if($password == $confirmpassword){
$query =" INSERT INTO tb_user VALUES('','$name','$username','$email','$password') ";
mysqli_query($this->conn, $query);
return 1;

}else{
    return 100;

}


}



}



}









?>