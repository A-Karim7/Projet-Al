<?php
require_once('../Modele/connect.php');
if(isset($_GET['idd'])){
$idd=$_GET['idd'];

$rep=$bdd->query("SELECT * FROM users WHERE id=\"$idd\"") or die(print_r($bdd->errorInfo()));
$donne =$rep->fetch();
$va1=$donne['ID'];
$va2=$donne['login'];
$va3=$donne['prenoms'];
$va4=$donne['nom'];
$va5=$donne['mail'];
$va6=$donne['password'];
$va7=$donne['type'];
$rep->closeCursor();
require('../Views/modification2.php');
}
else {
}
?>
