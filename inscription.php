
<?php
$login = $_GET['login'];
$password = $_GET['password'];

try
{
    $connect = new PDO('mysql:host=localhost; dbname=trello; charset=utf8', 'root', 'root');
}
catch (Exception $e){
    die('Erreur : '.$e->getMessage());
}
$insertion = "INSERT INTO user (`iduser`, `login`,`password`) VALUES (NULL,:login,:password)";
$requete = $connect->prepare($insertion);
$requete->bindParam(':login', $login, PDO::PARAM_STR);
$requete->bindParam(':password', $password, PDO::PARAM_STR);
$result = $requete->execute(); // renvoie TRUE || FALSE
echo $login.$password ;
?>
