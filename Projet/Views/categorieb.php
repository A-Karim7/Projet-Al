<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Views/css/styles2.css">
    <title></title>
  </head>
  <body>
<?php //   require('../Views/header.php'); ?>
 <div id="tet">
  <div id="tetuu">
    <h4 id="tute">Categories</h4>
  </div>
      <div id="ute">
        <a href="index.php">Tout</a><br>
        <?php require ('../Views/liste.php'); ?>
      </div>
        <?php
        if (isset($_GET['cat'])) {
          require('../Controller/control2.php');
            //require_once('../Controller/control.php');

        } else {

        }
//        require_once('../Modele/categorie.php');?>
 </div>
  </body>
</html>
