<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    $projet=$_GET["projet"];
    include "header.php";
    ?>
<style media="screen">
body {
  background-color:#03A9F4;
}
div  input {
display: block;
border:none;
background-color:#FFC107;
}
input ,button {
display: inline-block;
}
.tache {
background-color:#FFC107;
width: 300px  ;
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
  border:1px solid black;
  background-color:white;
}

</style>
  </head>
  <body  >
    <form id="formulaire" action="ajouteTache.php" method="get" >
      <fieldset>
          <legend>Ajouter de tache </legend>
          <label >Titre: </label>
          <input id="titre" name="titre"></input>
          <label >Taches: </label>
          <input  id="password" name="tache"></input>
          <input  type="hidden" name="projet" value=<?php echo $projet; ?>></input>
          <button  type="submit" >Connexion</button>
      </fieldset>
        </form>

 <?php
 $login=$_SESSION['login'];
    try {
      $connexion=new PDO('mysql:host=localhost;dbname=trello;charset=utf8','root','root');
    }
    catch (Exception $e){
      die ('erreur : '.$e->getMessage());
    }
    $requeteVerif= "SELECT idTache,titre,tache,dateCreation FROM todo WHERE login='$login' AND projet='$projet'  ";
    // echo $requeteVerif;
    $resultats = $connexion->query($requeteVerif);
    while( $verifTache = $resultats->fetch() ){
    if ($verifTache["titre"]=="")
    {
    // echo "ne pas afficher ";
    }
    else {
              echo '<div class="tache" id='.$verifTache["idTache"].'  ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">'
               ?>
            <form >
                  <p><?php echo $verifTache["idTache"]?></p>
                  <input value=<?php echo $verifTache["titre"]?> >
                  <input value=<?php echo $verifTache["tache"];?> >
                  <p><?php echo $verifTache["dateCreation"];?> </p>
                  <button onclick="">Modifier</button>
                  <button onclick="">Supprimer la tache</button>
               </form>
             </div>
             <?php
    }
  }
 ?>
 <script>
 function allowDrop(ev) {
     ev.preventDefault();

 }

 function drag(ev) {
     ev.dataTransfer.setData("text", ev.target.id);
    //  console.log(ev.target.id);
 }

 function drop(ev) {
     ev.preventDefault();
     var data = ev.dataTransfer.getData("text");
     ev.target.appendChild(document.getElementById(data));
     console.log(ev.target.id);

 }
 </script>
  </body>
</html>
