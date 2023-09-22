
<?php
include("connexion.php");
/**$username = "root";
$password = "";
$hostname = "localhost";
$base="dsbase";
$conn= mysqli_connect($hostname, $username, $password,$base);*/
session_start();

        $user1=$_POST["mail1"];
        $pwd1=$_POST["password1"];
        //$_SESSION['user'] =$user1;
        //$_SESSION['pwd'] = $pwd1;
        
        

        $sql = "SELECT * FROM user WHERE mail='$user1' AND password='$pwd1'";
        
        $result = mysqli_query($conn, $sql);
        $nbr=mysqli_num_rows($result);

        if ($nbr == 1) {
            session_start();
            $_SESSION['user'] =$user1;
            $_SESSION['pwd'] = $pwd1;
           
            
            header('Location: test1.php');
            exit;
            }else {
                // If the query returns zero rows, then the user doesn't exist or the password is wrong
                
                echo "Invalid username or password.";
                }



?>