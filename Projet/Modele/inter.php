<?php
if (isset($_POST['titre']) || isset($_POST['categorie']) || isset($_POST['contenu']) || isset($_POST['file'])) {
     $titre=$_POST['titre'];
     $categorie=$_POST['categorie'];
     $contenu=$_POST['contenu'];
     $file=$_POST['file'];
     $date = date('Y-m-d h:i:s');
     $dateCreation=$date;
     $dateModif=$date;
     $dateCreation;
     $dateModif;
     require_once('../Modele/connect.php');
     require('../Modele/test.php');

     $req=$bdd->prepare('INSERT INTO article (titre, contenu, categorie, dateCreation, dateModification, image) VALUES(?, ?, ?, ?, ?, ?)');
 		 $req->execute(array($titre, $contenu, $temp, $dateCreation, $dateModif, $file));
     header('Location: ../Views/page_2.php');
} else {
     header('Location: ../Views//page_1.php?erreur=1');
}

 ?>
