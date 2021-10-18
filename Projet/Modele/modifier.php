<?php
require_once('../Modele/connect.php');
if(isset($_GET['idd'])){
$idd=$_GET['idd'];
  $rep=$bdd->query("SELECT * FROM article WHERE id=\"$idd\"") or die(print_r($bdd->errorInfo()));
  $donne=$rep->fetch();
  $vi1=$donne['titre'];
  $vi2=$donne['contenu'];
  $vi4=$donne['dateModification'];
  $vi5=$donne['categorie'];
  $vi6=$donne['image'];
  $rep->closeCursor();

$rep=$bdd->query("SELECT * FROM categorie WHERE id=\"$vi5\"") or die(print_r($bdd->errorInfo()));
$donne =$rep->fetch();
$vir=$donne['libelle'];
$rep->closeCursor();
require('../Views/modifier2.php');
}
else {
}
?>
