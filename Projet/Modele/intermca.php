<?php
require_once('../Modele/connect.php');
if (isset($_POST['categorie'])) {
  echo    $categorie=$_POST['categorie'];
  echo   $id=$_POST['hidden'];

     $req = $bdd->prepare('UPDATE categorie SET libelle=:nvcategorie WHERE id=:ID');
     $req->execute(array(
     'nvcategorie' => $categorie,
     'ID' => $id));
         header('Location: ../Views/page_4.php');
} else {
     header('Location: ../Views/page_4.php?erreur=1');
}


 ?>
