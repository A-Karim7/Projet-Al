<?php
  require_once('../Modele/connect.php');
  if (isset($_GET['cat'])) {
    $cat=$_GET['cat'];
           require('../Modele/affiche3.php');
         require('../Views/indexe.php');
  } else {

  }
?>
