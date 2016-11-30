<?php
if(isset($_POST['login']) and isset($_POST['motdepasse']) and !empty($_POST['login']) and !empty($_POST['motdepasse'])) {
  $login = strip_tags($_POST['login']);
  // $mdp = strip_tags($_POST['motdepasse']);

  setcookie('login', $login, time() + 30*24*3600, null, null, false, true);

  $msg =  "Merci, cookie modifié !";

}
else{
  $msg = 'Vous n\'avez pas rempli le formulaire correctement.<br><a class="btn btn-primary" href="exercice5.php">Retour</a>';
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
    <link rel="stylesheet" href="bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
  </head>
  <body>
    <div class="jumbotron" id="maDiv">
      <p>
        <?php echo $msg; ?>
      </p>
    </div>
  </body>
</html>
