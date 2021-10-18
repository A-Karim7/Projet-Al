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
		    <style media="screen">
		    #caché{
		      display: none;
		    }
		    </style>
    <link rel="stylesheet" href="css/styles.css">
    <title></title>
  </head>
  <body>
    <?php       require('../Views/header.php'); ?>
	    <h4>Bonjour M.<?php echo $_SESSION['prenom']; ?></h4>
		<?php
		  require_once('../Views/categorie.php');
		  require_once('../Controller/control.php');
		  ?>
  </body>
</html>
