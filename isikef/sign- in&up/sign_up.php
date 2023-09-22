<?php 
include("connexion.php");
/**$username = "root";
$password = "";
$hostname = "localhost";
$base="dsbase";
$conn= mysqli_connect($hostname, $username, $password,$base);*/

$user = $_POST['user'];
$mail = $_POST['mail'];
$cin = $_POST['cin'];
$pwd = $_POST['password'];
$date = $_POST['date'];
$code = $_POST['code'];
$sql= "INSERT INTO `user` (name,mail,cin,password,date,code)VALUES ('$user', '$mail', '$cin','$pwd','$date','$code');";

if($conn){
    echo 'success';
   
    
}else{
    echo 'fail';
}

    if ( isset( $_POST['submit'] ) ) {
        mysqli_query($conn,$sql);
        echo'test';
    }
    


    






?>
