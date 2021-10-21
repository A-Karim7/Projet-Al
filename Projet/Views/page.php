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
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php
       require('../Views/header.php'); ?>
	 			<div class="tout">
  <h4 style="position:relative; top:140px; margin-left:40px;">Bonjour M.<?php echo $_SESSION['prenom']; ?></h4>
		<?php
			  require_once('../Views/categorie.php');
		  require_once('../Controller/control.php');
		  ?>
		</div>      <h3 style="position: relative; top: -745px; margin-left:230px; color:#696969;">Master GLSI	 News</h3>
  </body>
</html>
