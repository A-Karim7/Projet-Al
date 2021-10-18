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
    <h3>Creation d'utilisateur</h3>
    <form action="../Modele/administrateur.php" method="post">
    <div class="">
    <div class="">
      <div class="">  <p>Login : </p>  <input type="text" name="login" required>          </div>
    </div>
    <div class="">
      <div class="">  <p>Prenom(s) : </p>  <input type="text" name="prenoms" required>          </div>
    </div>
    <div class="">
      <div class="">  <p>Nom : </p>  <input type="text" name="nom" required>          </div>
    </div>
    <div class="">
      <div class="">  <p>Mail : </p>  <input type="text" name="mail" required>          </div>
    </div>
    <div class="">
      <div class="">  <p>Mot de passe : </p>  <input type="password" name="password">          </div>
    </div>
    <div class="">
      <div class="">  <p>Répéter le mot de passe : </p>  <input type="password" name="c_password" required>          </div>
    </div>
    <div class="">
      <div class="">  <p>Compte Admin: <input type="checkbox" name="admin" value="admin">   </p>         </div>
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
