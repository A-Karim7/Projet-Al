<?php
require_once('../Modele/connect.php');
$reponse = $bdd->prepare('SELECT id FROM categorie WHERE libelle=:libelle');
$reponse->execute(array('libelle' => $categorie));
		if ($donnees = $reponse->fetch()){
			$temp=$donnees['id'];
    }
    else{
$req=$bdd->prepare('INSERT INTO categorie (libelle) VALUES(?)');
$req->execute(array($categorie));

$rep=$bdd->query("SELECT * from categorie where libelle=\"$categorie\"") or die(print_r($bdd->errorInfo()));
$done=$rep->fetch();
$temp=$done['id'];
$rep->closeCursor();
    }
 ?>
