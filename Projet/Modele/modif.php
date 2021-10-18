<?php
require_once('../Modele/connect.php');
if(isset($_GET['idd'])){
$idd=$_GET['idd'];

$rep=$bdd->query("SELECT * FROM categorie WHERE id=\"$idd\"") or die(print_r($bdd->errorInfo()));
$donne =$rep->fetch();
$vir=$donne['libelle'];
$rep->closeCursor();
require('../Views/modif2.php');
}
else {
}
?>
