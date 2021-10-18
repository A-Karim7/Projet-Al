<?php
  require_once('../Modele/dateinit.php');
  $rep=$bdd->query("SELECT * from categorie ") or die(print_r($bdd->errorInfo()));
  $done=$rep->fetch();
  $libe=$done['libelle'];
  $idi=$done['id'];
  $rep->closeCursor();
?>
