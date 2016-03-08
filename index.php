
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

  </body>
  </html>
