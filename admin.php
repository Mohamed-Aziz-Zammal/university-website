<?php

//include("connexion.php");
$username = "root";
$password = "";
$hostname = "localhost";
$base="dsbase";
$conn= mysqli_connect($hostname, $username, $password,$base);
session_start();

        $user1=$_POST["mail"];
        $pwd1=$_POST["pwd"];
        //$_SESSION['user'] =$user1;
        //$_SESSION['pwd'] = $pwd1;
        
        

        $sql = "SELECT * FROM administrateur WHERE mail='$user1' AND pwd='$pwd1'";
        
        $result = mysqli_query($conn, $sql);
        $nbr=mysqli_num_rows($result);

        if ($nbr == 1) {
            session_start();
            $_SESSION['user'] =$user1;
            $_SESSION['pwd'] = $pwd1;
           
            
            header('Location:admin1.php');
            exit;
            }else {
                // If the query returns zero rows, then the user doesn't exist or the password is wrong
                
                echo "Invalid username or password.";
                }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
   mail: <input type="email" name="mail" id="">
   <br>
   pwd: <input type="password" name="pwd" id="">
   <br>
   <input type="submit" name="submit" value="sign in">
</form>
</body>
</html>