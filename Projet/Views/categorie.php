<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <title></title>
  </head>
  <body>
<?php  require('../Views/header.php'); ?>
 <div id="Kategorie">
  <div id="Kategori">
    <h4 id="Kate">Categorie</h4>
      <div id="ate">
        <a href="index.php">Tout</a><br>
        <?php require ('../Views/liste.php'); ?>
      </div>
        <?php
        if (isset($_GET['cat'])) {
          require('../Controller/control2.php');
        } else {

        }
        require_once('../Modele/categorie.php');?>
  </div>
 </div>
  </body>
</html>
