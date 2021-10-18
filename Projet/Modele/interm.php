<?php
require_once('../Modele/connect.php');
if (isset($_POST['titre']) || isset($_POST['categorie']) || isset($_POST['contenu']) || isset($_POST['file'])) {
     $titre=$_POST['titre'];
     $categorie=$_POST['categorie'];
     $contenu=$_POST['contenu'];
     $file=$_POST['file'];
     $id=$_POST['hidden'];
     $date = date('Y-m-d h:i:s');
     $dateModif=$date;
     require('../Modele/test.php');

     $req = $bdd->prepare('UPDATE article SET titre =:nvtitre, contenu=:nvcontenu, dateModification=:nvdtmodif, categorie=:nvcategorie, image=:nvimg WHERE id = :ID');
     $req->execute(array(
     'nvtitre' => $titre,
     'nvcontenu' => $contenu,
     'nvdtmodif' => $date,
     'nvcategorie' => $temp,
     'nvimg' => $file,
     'ID' => $id));

     header('Location: ../Views/page_2.php');
} else {
     header('Location: ../Views//page_2.php?erreur=1');
}


 ?>

 ?>
