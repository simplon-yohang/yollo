<?php
session_start();
$idtache = $_GET['idTache'];
$tache = $_GET['tache'];
echo $idtache.$tache;
//
// try {
//   $connect=new PDO('localhost;dbname=trello;charset=utf8','root','root');
// }
//   catch (Exception $e){
// die ('erreur : '.$e->getMessage());
// }
// $update ="UPDATE todo SET tache=:tache WHERE idtache=:idtache";
// $requete1 = $connect->prepare($update);
// $requete1->bindParam(':tache', $tache, PDO::PARAM_INT);
// $requete1->bindParam(':iduser', $idtache, PDO::PARAM_INT);
// $requete1->execute(); // renvoie TRUE || FALSE

?>
