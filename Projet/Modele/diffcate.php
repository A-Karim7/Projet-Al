<?php
require_once('../Modele/connect.php');
if (isset($supll)) {
} else {
$supll=$vi5;
}

$reponse = $bdd->query("SELECT libelle FROM categorie WHERE id=\"$supll\"");
		if($donnees = $reponse->fetch()){
      $lib=$donnees['libelle'];
    }
    else{
      $lib="";
    }
 ?>
