<?php
if (isset($_POST['titre']) || isset($_POST['categorie']) || isset($_POST['contenu'])) {
     $titre=$_POST['titre'];
     $categorie=$_POST['categorie'];
     $contenu=$_POST['contenu'];
     $date = date('Y-m-d h:i:s');
     $dateCreation=$date;
     $dateModif=$date;
     $dateCreation;
     $dateModif;
     if (isset($_FILES['file']) AND $_FILES['file']['error']== 0){
       if ($_FILES['file']['size'] <= 1000000){
         $infosfichier =pathinfo($_FILES['file']['name']);
         $extension_upload = $infosfichier['extension'];
         $extensions_autorisees = array('jpg', 'jpeg', 'gif','png','PNG');
         if (in_array($extension_upload,$extensions_autorisees)){
    echo       $file=$_FILES['file']['name'];
           copy($_FILES['file']['tmp_name'], '../Views/css/images/' .$_FILES['file']['name']);
           }
       }
     }
     else {
       header('Location: ../Views//page_1.php?erreur=3');
     }
     require_once('../Modele/connect.php');
     require('../Modele/test.php');

     $req=$bdd->prepare('INSERT INTO article (titre, contenu, categorie, dateCreation, dateModification, image) VALUES(?, ?, ?, ?, ?, ?)');
 		 $req->execute(array($titre, $contenu, $temp, $dateCreation, $dateModif, $file));
     header('Location: ../Views/page_2.php');
} else {
     header('Location: ../Views//page_1.php?erreur=1');
}

 ?>
