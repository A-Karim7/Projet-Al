<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php //   require('../Views/header.php'); ?>
 <div id="mini">
  <div id="minii">
    <h4 id="miini">Categories</h4>
  </div>
      <div id="miinii">
        <a href="index.php">Tout</a><br>
        <?php require ('../Views/liste.php'); ?>
      </div>
        <?php
        if (isset($_GET['cat'])) {


        } else {

        }
        require_once('../Modele/categorie.php');?>
 </div>
  </body>
</html>
