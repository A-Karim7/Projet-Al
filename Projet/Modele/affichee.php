<?php
$compa="nulll";
$rep=$bdd->query("SELECT * from categorie") or die(print_r($bdd->errorInfo()));
    while($done=$rep->fetch()){
    $compa=$compar;
    $var9=$done['id'];
    $supll=$done['libelle'];
    $ca=$done['libelle'];
    require('../Modele/tablo.php');
  }
?>
