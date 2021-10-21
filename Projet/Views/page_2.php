<?php
session_start();
if (isset($_SESSION['prenom'])) {
} else {
	header('Location: ../Views/accueil.php?erreur=2');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
    <title></title>
  </head>
  <body>
    <?php       require('../Views/header.php'); ?>
		<h1 style="position:relative; top:80px; margin-left:450px;">Liste articles</h1>
  <table class="table" cellpadding="10" cellspacing="2" style="margin-left:300px;">
      <tr>
        <th>Titre</th>
        <th>Categorie</th>
        <th>Dernière Mis à Jour</th>
        <th></th>
        <th></th>
      </tr>
        <?php    require_once('../Controller/control3.php'); ?>

    </table>
  </div>
  </body>
</html>
