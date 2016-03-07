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
ul ,nav,li,li a {
display: flex;
}
nav {
background-color:#D32F2F;
}
ul {
  flex-direction: row;
}
li {
justify-content: center;
align-items: center;
width: 433.5px;
border:solid black 0.2px;
list-style-type: none;
height:100px  ;
}
ul a {
font-size: 2em  ;
text-decoration: none;
color:white;
}
#techno1 {
  display:none;
  background-color:yellow;
  width:433.5px;
}
#techno2 {
  display:none;
  background-color:green;
  width:433.5px;
  margin-left:433.5px;
}
#techno3 {
  display:none;
  background-color:orange;
  width:433.5px;
  margin-left:867px;
  margin-top: 0;
}
</style>
  </head>
  <body>
<p> <?php
session_start();
 print_r($_SESSION); ?>
 <h1>Welcome <?php echo $_SESSION['login']; ?></h1>
</p>
<nav>
<ul>
  <a href="http://localhost/yollo/home.php"><li onmouseover="test(event)"  onmouseout="dehors(event)" id="1">Home</li></a>
  <a href="http://localhost/yollo/compte.php"><li onmouseover="test(event)" onmouseout="dehors(event)" id="2">Compte</li></a>
  <a href="http://localhost/yollo/deconnexion.php"><li onmouseover="test(event)" onmouseout="dehors(event)" id="3">Déconnexion</li></a>
</ul>
</nav>
<div id="techno1">home
  </div>
<div id="techno2">
  Compte
</div>
<div id="techno3">
  fuck
</div>
<script type="text/javascript">
var fuck;
var liste
function test(ev) {
var cible =ev.target.id;
liste=document.getElementById(cible);
fuck= document.getElementById('techno'+cible);
fuck.style.display="block";
liste.style.backgroundColor="blue";
}
function dehors (ev) {
var yog  =ev.target.id;
fuck.style.display="none";
liste.style.backgroundColor="#D32F2F";
}
</script>
  </body>
</html>
