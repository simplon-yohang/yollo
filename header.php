<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<style media="screen">
*{
  margin:0;
  padding:0;
}
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
ul ,nav,li,li a ,p{
display: flex;
}
nav {
background-color:#212121;
}
ul {
  flex-direction: row;
}
li {
justify-content: center;
align-items: center;
width: 325px;
border:solid black 0.2px;
list-style-type: none;
height:100px  ;
}
ul a {
font-size: 2em  ;
text-decoration: none;
color:white;
}
#menu1 {
  display:none;
  background-color:white;
  width:325px;
  justify-content: center;
  align-items: center;
}
#menu2 {
  display:none;
  background-color:white;
  width:325px;
  margin-left:325px;
  justify-content:center;
}
#menu3 {
  display:none;
  background-color:white;
  width:325px;
  margin-left:650px;
  margin-top: 0;
}
#menu4 {
  display:none;
  background-color:white;
  width:325px;
  margin-left:975px;
  margin-top: 0;
}
</style>
  </head>
  <body>
 <?php
session_start();
 // print_r($_SESSION);
  ?>
<nav>
<ul>
  <a href="http://localhost/yollo/home.php"><li onmouseover="avant(event)"  onmouseout="apres(event)" id="1">Home</li></a>
  <a href="http://localhost/yollo/compte.php"><li onmouseover="avant(event)" onmouseout="apres(event)" id="2">Compte</li></a>
  <a href=""><li onmouseover="avant(event)" onmouseout="apres(event)" id="3">Welcome <?php echo $_SESSION['login']; ?></li></a>
  <a href="http://localhost/yollo/deconnexion.php"><li onmouseover="avant(event)" onmouseout="apres(event)" id="4">Déconnexion</li></a>
</ul>
</nav>
<div id="menu1">
<p>Récupération des projets</p>
</div>
<div id="menu2">
<p>Paramètres du compte</p>
</div>
<div id="menu3">
<p>Notification</p>
</div>
<div id="menu4">
<p>Se déconnecter</p>
</div>
<script type="text/javascript">
var div;
var liste
function avant(ev) {
var cible =ev.target.id;
liste=document.getElementById(cible);
div= document.getElementById('menu'+cible);
div.style.display="block";
liste.style.backgroundColor="lightgrey";
}
function apres (ev) {
var yog  =ev.target.id;
div.style.display="none";
liste.style.backgroundColor="#212121";
}
</script>
  </body>
</html>
