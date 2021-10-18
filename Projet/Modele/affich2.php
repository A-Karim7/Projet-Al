<?php
  $rep=$bdd->query("SELECT * FROM article WHERE id=\"$art\"") or die(print_r($bdd->errorInfo()));
  $donne=$rep->fetch();
  $v1=$donne['titre'];
  $v2=$donne['contenu'];
  $v4=$donne['dateModification'];
  $v5=$donne['categorie'];
  $v6=$donne['image'];
  $rep->closeCursor();

$rep=$bdd->query("SELECT * FROM categorie WHERE id=\"$v5\"") or die(print_r($bdd->errorInfo()));
$donne =$rep->fetch();
$var=$donne['libelle'];
$rep->closeCursor();
 ?>
