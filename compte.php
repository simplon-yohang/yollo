
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body {
      background-color:#03A9F4;
    }
    div  input {
    display: block;
    border:none;
      background-color:#FFC107;
    }
    input ,button {
    display: inline-block;;
    }
    .compte {
    background-color:#FFC107;
    width: 300px;
    margin:20px;
    border:1px solid black;
    border-radius:4px;
    }

    form input {
    display: block;

    }
    button {
      margin:5px;
      border-radius:4px;
    }
      </style>
    <?php
    include "header.php";
    ?>
  </head>
  <body>

  <?php
  $login=$_SESSION['login'];
    try {
      $connexion=new PDO('mysql:host=localhost;dbname=trello;charset=utf8','root','root');
    }
    catch (Exception $e){
      die ('erreur : '.$e->getMessage());
    }
    $requeteAffiche = "SELECT iduser,login,password FROM user WHERE login='$login' ";
    // echo $requeteAffiche;
    $resultats = $connexion->query($requeteAffiche);
    while( $user = $resultats->fetch() ){
      ?>
       <div class="compte"> <input value=<?php echo $user["iduser"]?> >
          <input value=<?php echo $user["login"]?> >
          <input value=<?php echo $user["password"]?> >
          <button onclick="">Modifier</button>
          <button onclick="">Supprimer compte</button>
      </div>
      <?php
      }
       ?>
  </body>
</html>
