<?php
  $rep=$bdd->query("SELECT * from article") or die(print_r($bdd->errorInfo()));
  while($done=$rep->fetch()){
      $va1=$done['dateCreation'];
      $var1=$done['titre'];
      $var9=$done['id'];
      $var3=$done['dateCreation'];
      $supl=$done['dateModification'];
      $supll=$done['categorie'];
      $ca=$done['categorie'];
      $var6=$done['image'];
      require('../Modele/tableau.php');
  }
  $rep->closeCursor();
?>
