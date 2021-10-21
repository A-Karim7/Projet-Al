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
    <link rel="stylesheet" href="css/styles.css">		<style media="screen">
				input[type=submit] {
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
		<h1 style="position:relative; top:110px; margin-left:450px;">Création de la categorie</h1>
    <form action="../Modele/interca.php" method="post">
			<div class="mpo" style="position:relative; top:125px; margin-left:500px;">
	    <div class="">
			<div class=""> <big> <p>Categorie : </p> </big> <input type="text" name="categorie"  required>          </div>
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
