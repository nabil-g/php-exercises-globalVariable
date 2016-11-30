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
      <?php
        echo "Votre navigateur : " . $_SERVER['HTTP_USER_AGENT'] . "<br>Votre adresse IP : " . $_SERVER['REMOTE_ADDR'] . "<br>Nom du serveur : " . $_SERVER['SERVER_NAME'] ;
       ?>
    </div>
  </body>
</html>
