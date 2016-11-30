<?php
session_start();
$_SESSION['nom'] = "Ghedjati";
$_SESSION['prenom'] = "Nabil";
$_SESSION['age'] = 24;

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
      <a href="page2.php">Afficher la page 2</a>
    </div>
  </body>
</html>
