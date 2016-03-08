<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  body {
    background-color:#03A9F4;
  }
form {
  margin:20px 0;
}
form button {
  margin:5px;
  border-radius:4px;
  border:1px solid black;
  background-color:white;
}
  form input {
  display: block;

  }

  div  input {
    display: block;
    border:none;
    background-color:#FFC107;
  }
  .btn {
    font-size: 20px;
    background-color:#FFC107;
    width: 300px  ;
    margin:20px;
    border:1px solid black;
    border-radius:3px;
    margin:5px;
  }
.btn:hover {
  background-color:lightgrey;
}

  </style>
  <?php
  include "header.php";
  ?>
  <body>
    <form id="formulaire" action="insertionProjet.php" method="get" >
        <label >Projet: </label>
        <input  name="projet"></input>
        <button  type="submit" >Ajouter</button>
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
       $requeteAffiche = "SELECT  projet FROM pr WHERE login='$login' ";
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
             <button class="btn"  name="projet" value=<?php echo $projet["projet"]?>><?php echo $projet["projet"]?></button>
           </form>
         </div>
   <?php
 }
 }
    ?>
  </body>
</html>
