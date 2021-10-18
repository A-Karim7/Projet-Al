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
    <h3>Modification d'un nouvel article</h3>
    <form action="../Modele/interm.php" method="post"><input type="hidden" name="hidden" value="<?php echo $idd; ?>">
    <div class="">
    <div class="">
      <div class="">  <p>Titre : </p>  <input type="text" name="titre" required value="<?php echo $vi1; ?>">          </div>
    </div>
    <div class="">
      <?php require('../Modele/diffcate.php'); ?>
      <div class="">  <p>Categorie : </p>  <input type="text" name="categorie"  required value="<?php echo $lib; ?>">          </div>
    </div>
    <div class="">
      <div class="">  <p>Contenu : </p> <textarea name="contenu" rows="12" cols="60" required ><?php echo $vi2; ?></textarea>        </div>
    </div>
    <div class="">
      <div class="">  <p>Upload Image : </p>    <input type="file" name="file" required>          </div>
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
