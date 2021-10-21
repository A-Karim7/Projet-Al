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
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
    <title></title>
  </head>
  <body>
    <?php      require('../Views/header.php'); ?>
    <h2 class="coloff">Liste des categories d'articles</h2>
  <table class="table" cellpadding="10" cellspacing="2">
      <tr>
        <th colspan="3">Categories</th>
      </tr>
        <?php    require_once('../Controller/control4.php'); ?>

    </table>

  </body>
</html>
