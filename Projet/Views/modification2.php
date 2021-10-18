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
    <h3>Modification d'un utilisateur</h3>
    <form action="../Modele/intermediare.php" method="post"><input type="hidden" name="hidden" value="<?php echo $va1; ?>">
    <div class="">
    <div class="">
      <div class="">  <p>Login : </p>  <input type="text" name="login" required value="<?php echo $va2; ?>">          </div>
    </div>
    <div class="">
      <div class="">  <p>Prenom(s) : </p>  <input type="text" name="prenoms" required value="<?php echo $va3; ?>">          </div>
    </div>
    <div class="">
      <div class="">  <p>Nom : </p>  <input type="text" name="nom" required value="<?php echo $va4; ?>">          </div>
    </div>
    <div class="">
      <div class="">  <p>Mail : </p>  <input type="text" name="mail" required value="<?php echo $va5; ?>">          </div>
    </div>
    <div class="">
      <div class="">  <p>Mot de passe : </p>  <input type="password" name="password" required value="<?php echo $va6; ?>">          </div>
    </div>
    <div class="">
      <div class="">  <p>Répéter le mot de passe : </p>  <input type="password" name="c_password" required value="<?php echo $va6; ?>">          </div>
    </div>
    <div class="">
      <div class="">  <p>Compte Admin: <input type="checkbox" name="admin" value="admin" <?php if($va7=="admin"){echo "checked";} else{}?>>   </p>         </div>
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
