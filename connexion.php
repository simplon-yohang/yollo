<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
session_start();
$login = $_GET['login'];
$password = $_GET['password'];
$veriflog;
$verifpass;


if ($_SESSION['count']==0){
try {
  $connexion=new PDO('mysql:host=localhost;dbname=trello;charset=utf8','root','root');
}
catch (Exception $e){
  die ('erreur : '.$e->getMessage());
}
$requeteAffiche = "SELECT login,password FROM user WHERE login='$login' ";
// echo $requeteAffiche;
$resultats = $connexion->query($requeteAffiche);
while( $user = $resultats->fetch() ){
  $veriflog=$user["login"];
  $verifpass=$user["password"];
  ?>
  <li> <?php echo $user["login"].$user["password"]; ?></li>
<?php

}
  if (  $veriflog===$login ){
    echo "login ok ";
    $_SESSION['login']=$login;
    if ( $verifpass===$password){
      $_SESSION['password']=$password;
      $_SESSION['count']++;
      echo " et password ok  ";
        echo "<br/>";
      print_r($_SESSION);
      echo "<br/>";
      header("Location:http://localhost/yollo/home.php");

    }
    else  {
      echo "password pas  ok ";
      header("Location:http://localhost/yollo/index.php");

    }
  }
  else   {
    echo "<br/>";
    echo "log pas ok ";
    header("Location:http://localhost/yollo/index.php");
  }
}
else {
  echo "vous êtes déja connectez";
  echo "<br/>";
  header("Location:http://localhost/yollo/home.php");
}
?>


  </body>
</html>
