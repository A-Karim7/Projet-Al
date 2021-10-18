<?php
$compa="nulll";
$rep=$bdd->query("SELECT * from users") or die(print_r($bdd->errorInfo()));
    while($done=$rep->fetch()){
    $va1=$done['ID'];
    $va2=$done['login'];
    $va3=$done['prenoms'];
    $va4=$done['nom'];
    $va5=$done['mail'];
    $va6=$done['password'];
    $va7=$done['type'];
    require('../Modele/tablea.php');
  }
?>
