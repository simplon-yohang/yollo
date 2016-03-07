
<?php
session_start();
$titre = $_GET['titre'];
$tache = $_GET['tache'];
$date=date(' j/m/y   H:i ');
$login=$_SESSION['login'];
$projet=$_GET["projet"];
try
{
   $connect = new PDO('mysql:host=localhost; dbname=trello; charset=utf8', 'root', 'root');
}
catch (Exception $e){
    die('Erreur : '.$e->getMessage());
}
$insertion = "INSERT INTO todo (`idTache`, `titre`,`tache`,`dateCreation`,`login`,`projet`) VALUES (NULL,'$titre' ,'$tache','$date','$login','$projet')";
echo $insertion;
$requete = $connect->query($insertion);
$requete ->closeCursor();
header("Location:http://localhost/yollo/todoList.php?projet=$projet");
echo "test";
?>
