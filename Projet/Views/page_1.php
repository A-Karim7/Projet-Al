<?php
session_start();
if (isset($_SESSION['prenom'])) {
} else {
	header('Location: ../Views/accueil.php?erreur=2');
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
		<style media="screen">
				input[type=submit] {
					position: relative;
					top: -220px;
						background-color: #696969;
						color: white;
						padding: 10px 14px;
						margin: 8px 0;
						border: none;
						cursor: pointer;
						width: 15%;
				}
				input[type=submit]:hover {
						background-color: white;
						color: #800000;
						border: 1px solid #800000;
				}
				</style>
    <title></title>
  </head>
  <body>
    <?php       require('../Views/header.php'); ?>
		<h1 style="position:relative; top:70px; margin-left:450px;">Création  Article</h1>
    <form action="../Modele/inter.php" method="post"  enctype="multipart/form-data">
		<div class="mpo" style="position:relative; top:75px; margin-left:500px;">
    	<div class="po" style="margin-left:-250px; position:relative; top:50px;">
      <div class="">  <p><i><big>Titre : <big></i></p>  <input type="text" name="titre" required>          </div>
      <div class="">  <p><i><big>Categorie : <big></i></p>  <input type="text" name="categorie"  required>          </div>
    </div>
    <div class="poi"  style="margin-left:50px; position:relative; top:-220px;">
      <div class="">  <p><i>Contenu : </i></p> <textarea name="contenu" rows="12" cols="60" required></textarea>        </div>
      <div class="">  <p><i><big>Upload Image : <big></i></p>    <input type="file" name="file" required>          </div>
    </div>
    <div class="">
      <div class="">  <input type="submit" name="submit">          </div>
    </div>
    <?php
    if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
            echo "<p style='color: #DC143C;'>Utilisateur ou mot de passe incorrect</p>";
    }
    ?>
  </div>
</form>
  </body>
</html>
