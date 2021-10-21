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
		<style media="screen">
				input[type=submit] {
					position: relative;
					top: -100px;
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
  </head>
  <body>
    <?php require('../Views/header.php'); ?>
		<h1 style="position:relative; top:80px; margin-left:450px;">Modification d'un article</h1>
    <form action="../Modele/interm.php" method="post"><input type="hidden" name="hidden" value="<?php echo $idd; ?>">
			<div class="mpo" style="position:relative; top:75px; margin-left:500px;">
    <div class="po" style="margin-left:-250px; position:relative; top:80px;">
      <div class="">  <i><big><p>Titre : </p> </big></i> <input type="text" name="titre" required value="<?php echo $vi1; ?>">          </div>
      <?php require('../Modele/diffcate.php'); ?>
      <div class="">  <i><big><p>Categorie : </p> </big> </i><input type="text" name="categorie"  required value="<?php echo $lib; ?>">          </div>
    </div>
    <div class="poi"  style="margin-left:50px; position:relative; top:-120px;">
      <div class="">  <i><big><p>Contenu : </p> </big></i><textarea name="contenu" rows="12" cols="60" required ><?php echo $vi2; ?></textarea>        </div>
		  <div class=""> <i><big> <p>Upload Image : </p>  </big></i>  <input type="file" name="file" required>          </div>
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
