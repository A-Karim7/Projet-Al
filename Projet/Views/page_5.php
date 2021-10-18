<?php
session_start();
if (isset($_SESSION['prenom']) && isset($_SESSION['type'])) {
  if ($_SESSION['type']!="admin") {
    header('Location: ../Views/accueil.php?erreur=3');
  } else {
  }
} else {
	header('Location: ../Views/accueil.php?erreur=2');
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
    <title></title>
  </head>
  <body>
    <?php     require('../Views/header.php'); ?>
    <h2 class="col-8 offset-md-2">Liste des Utilisateurs</h2>
    <table class="table my_table" cellpadding="10" cellspacing="2">
      <tr>
        <th>Login</th>
        <th>Prenoms</th>
        <th>Noms</th>
        <th>Mails</th>
        <th>Type Compte</th>
        <th>Mots de Passe</th>
      </tr>
        <?php    require_once('../Controller/control1.php'); ?>
  <div class="">
        <button  onclick="Hreff();" style="background-color: transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;"> <i class="fa fa-plus-square fa_custom fa-2x"> Ajouter</i></button>
  </div>
    </table>
  </body><script src="../Controller/script1.js"></script>
</html>
