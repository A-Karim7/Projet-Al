<?php
if (isset($_POST['categorie'])) {
     $categorie=$_POST['categorie'];
        require_once('../Modele/connect.php');
   $reponse = $bdd->prepare('SELECT id,libelle FROM categorie WHERE libelle=:libelle');
   $reponse->execute(array('libelle' => $categorie));
   		if ($donnees = $reponse->fetch()){
           header('Location: ../Views/page_3.php?erreur=2');
      }
      else{
     $req=$bdd->prepare('INSERT INTO categorie (libelle) VALUES(?)');
     $req->execute(array($categorie));
     header('Location: ../Views/page_4.php');
     }
} else {
     header('Location: ../Views/page_3.php?erreur=1');
}

 ?>
