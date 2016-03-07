<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  body {
    background-color:#F44336;
  }
  div  input {
  display: block;
  border:none;
  background-color:#FFC107;
  }
  #btn {
    font-size: 20px;
  background-color:#FFC107;
  width: 300px  ;
  margin:20px;
  border:1px solid black;
  border-radius:4px;
  margin:5px;
  }

  form input {
  display: block;

  }

  </style>
  <?php
  include "header.php";
  ?>
  <body>
    <form id="formulaire" action="insertionProjet.php" method="get" >
      <fieldset>
        <legend>Ajouter projet</legend>
        <label >projet: </label>
        <input  name="projet"></input>
        <button  type="submit" >Ajouter</button>
      </fieldset>
    </form>
    <?php
    $projet;
    session_start();
    $login=$_SESSION['login'];
       try {
         $connexion=new PDO('mysql:host=localhost;dbname=trello;charset=utf8','root','root');
       }
       catch (Exception $e){
         die ('erreur : '.$e->getMessage());
       }
       $requeteAffiche = "SELECT DISTINCT projet FROM todo WHERE login='$login' ";
       $resultats = $connexion->query($requeteAffiche);
       $verifTache=$resultats->execute();
       while( $projet = $resultats->fetch() ){
         if ($projet["projet"]=="")
         {
         }
         else {
           ?>
            <div>
            <form action="http://localhost/yollo/todoList.php" method="get" >
             <button id="btn"  name="projet" value=<?php echo $projet["projet"]?>><?php echo $projet["projet"]?></button>
           </form>
         </div>
   <?php
 }
 }
    ?>
  </body>
</html>
