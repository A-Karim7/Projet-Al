<?php
require_once('../Modele/connect.php');
if (isset($_GET['art'])) {
  $art=$_GET['art'];
  require('../Modele/affich2.php');
}
   else {
      require('../Modele/affichage.php');
   }
?>
