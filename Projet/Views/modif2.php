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
    <link rel="stylesheet" href="../Views/css/styles.css">
    <title></title>
  </head>
  <body>
    <?php require('../Views/header.php'); ?>
    <h3>Modification de la categorie</h3>
    <form action="../Modele/intermca.php" method="post"><input type="hidden" name="hidden" value="<?php echo $idd; ?>">
    <div class="">
    <div class="">
      <?php //require('../Modele/diffcate.php'); ?>
      <div class="">  <p>Categorie : </p>  <input type="text" name="categorie"  required value="<?php echo $vir; ?>">          </div>
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
