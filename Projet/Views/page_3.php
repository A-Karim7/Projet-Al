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
    <title></title>
  </head>
  <body>
    <?php       require('../Views/header.php'); ?>
    <h3>Création d'une nouvelle categorie</h3>
    <form action="../Modele/interca.php" method="post">
    <div class="">
    <div class="">
      <div class="">  <p>Categorie : </p>  <input type="text" name="categorie"  required>          </div>
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
