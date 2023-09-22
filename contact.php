<?php 
//include("connexion.php");
$username = "root";
$password = "";
$hostname = "localhost";
$base="dsbase";
$conn= mysqli_connect($hostname, $username, $password,$base);

$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];
$date=date('Y-m-d');
$heure=date('H:i');
$sql= "INSERT INTO `contact` (name,email,subject,message,date_contact_heure_cotact)VALUES ('$name', '$mail', '$subject','$Message','$date','$heure');";
 
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