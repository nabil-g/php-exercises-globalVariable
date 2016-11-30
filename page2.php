<?php
session_start();
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
        <?php
        echo "Votre nom : " . $_SESSION['nom'] . "<br>Votre prénom : " . $_SESSION['prenom'] . "<br>Votre âge : " . $_SESSION['age'];
         ?>
      </p>
    </div>
  </body>
</html>
