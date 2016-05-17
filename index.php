
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
body {
background-color:#03A9F4;
}
  input {
    display: block;
  }
  button{
    margin-top:10px;
  }
  </style>
</head>
<body>
  <form id="formulaire" action="inscription.php"  method="get" >
<fieldset>
    <legend>Inscription</legend>
    <label >Login: </label>
    <input name="log"></input>
    <label >Mot de passe: </label>
    <input  name="pwd"></input>
    <button  type="submit" >Inscription</button>
</fieldset>
  </form>
<form id="formulaire" action="connexion.php" method="get" >
  <fieldset>
      <legend>Connexion</legend>
      <label >Login: </label>
      <input id="login" name="login"></input>
      <label >Mot de passe: </label>
      <input  id="password" name="password"></input>
      <button  type="submit" >Connexion</button>
  </fieldset>
    </form>
<!-- <script type="text/javascript">
  function inscription () {
    var log =document.getElementById("log").value;
    var pwd =document.getElementById("pwd").value;
    console.log(log + pwd);
    var requete =new XMLHttpRequest();
    requete.onload=ajax;
    requete.open("get","inscription.php?login="+log+"&password="+pwd,true);
    requete.send();
    function ajax (){
      var tableau =this.responseText;
      console.log(tableau);
      var rep = document.createElement('p');
      document.body.appendChild(rep);
      rep.innerHTML="inscription validée :"+tableau ;
      }
    }

</script> -->
  </body>
  </html>
