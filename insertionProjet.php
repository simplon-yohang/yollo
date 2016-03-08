
    <?php
    session_start();
    $login=$_SESSION['login'];
    $projet=$_GET["projet"];
    try
    {
      $connect = new PDO('mysql:host=localhost; dbname=trello; charset=utf8', 'root', 'root');
    }
    catch (Exception $e){
      die('Erreur : '.$e->getMessage());
    }
    $insertion = "INSERT INTO pr (`idProjet`,`projet`,`login`) VALUES (NULL,'$projet','$login')";
    echo $insertion;
    $requete = $connect->query($insertion);
    $requete ->closeCursor();
    header("Location:http://localhost/yollo/home.php?projet=$projet");

    ?>
