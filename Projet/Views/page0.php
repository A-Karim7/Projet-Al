<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <title></title>
  </head>
  <body>
<?php
require('../Views/header.php');
require_once('../Controller/control.php');
?>

<div id="glob">
  <div id="entour">
    <h1><a href="index.php"><img id="Home" src="img/homee.png" width="45" height="45"></a>> <?php echo $v1; ?></h1>
      <div id="categorie">
        <div id="categ">
          <p id="ca">Categorie: <?php echo $var; ?></p>
        </div>
        <div id="MAJ">
          <p> Mis à jour le <?php echo $v4; ?></p>
        </div>
      </div>
      <div id="contenu">
        <p id="ima"><img id="id" src="<?php echo $v6?>"></p>
        <p><?php echo $v2; ?></p>
      </div>
    </div>
  </div>
  </body>
</html>
