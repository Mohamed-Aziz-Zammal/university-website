<?php
session_start();


if(isset($_SESSION['user']) && isset($_SESSION['pwd']))
{
  $var=$_SESSION['user']; $mot=$_SESSION['pwd'];
 
}

$var=$_SESSION['user'];
$mot=$_SESSION['pwd'];

echo 'TEST1';
echo $var;
echo $mot;




include("connexion.php");
$sql = "SELECT * FROM user WHERE mail='$var' AND password='$mot'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style1.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Espace étudiant</title>
</head>
<body>
<body>
<header>
  <nav>
  <ul>
    <li><a href="">Login</a></li>
    <li><a href="">Inscription</a></li>
      <?php
    if(isset($_SESSION['user']))
    {
      echo '<li><a href="logout.php">Déconnexion</a></li>';
    }
    ?>
  </ul>
  </nav>
</header>
<section>
 <h1 class="titre">Bienvenue <?php echo $row['user'];?> dans notre forum</h1> 

</section>
<section id="sect1">
<?php
  /* changer le format de la date en français*/
function changedate($dt)

{
$tab = explode("-",$dt);
$nd = $tab[2]."-".$tab[1]."-".$tab[0];
return $nd;
}

$res=mysqli_query($conn,"select * from user,message where user.cin=message.cin order by id_message DESC"); 
while($data=mysqli_fetch_assoc($res))
{
  echo '<div id="div1">';
  
  echo $row['name'];
  
  echo '<div id="div2">Posté le : '.changedate($data['date_message']);
  echo ' à '.$data['heure_message'];
  echo '<br>'.$data['texte_massage'].'</div>';
 
}

?>

<form action="" method="post">
<textarea name="message"  placeholder="Votre message" id="zmessage"></textarea>
<input type="submit" name="envoyer" value="Envoyer" class="btn2">
</form>
<?php
if(isset($_POST['envoyer']))
{

  $id=$_SESSION['pwd'];
  $msg=$_POST['message'];
  $date=date('Y-m-d');
  $heure=date('H:i');
  $req1=mysqli_query($conn,"insert into message values (NULL,'$msg','$date','$heure','$id')"); 
header("location:test1.php");
}

?>

</section>



</body>
</html>
<?php

?>



</body>
</html>