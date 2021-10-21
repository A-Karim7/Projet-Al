<?php
if (isset($_SESSION['type'])) {
	if ($_SESSION['type']=="admin") {
		$bnd="admin";
	} else {
		$bnd="lambda";
	}
} else {
	$bnd="user";
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
    <div id="barre">
    </div>
    <div class="nav-holder">
      <div class="shell">
        <div id="navigation" class="left">
          <ul>
                        			<?php
            				if ($bnd=="user"){} else{echo "<li><a href=\"../Views/page_1.php\">Nouvel Article</a></li>";}
                    if ($bnd=="user") {echo "<li><a href=\"../Views/index.php\"><p>Home</a><li><li><a href=\"../Views/accueil.php\"><p>Connexion</a><li>";} else {echo "<li><a  class=\"active\" href=\"../Views/page.php\">Home</a></li>";}
            		 		if ($bnd=="user"){} else{echo "<li><a href=\"../Views/page_2.php\">Lister Articles<a></li>";}
            				if ($bnd=="user"){} else{echo "<li><a href=\"../Views/page_3.php\">Nouvelle Catégorie</a></li>";}
            				if ($bnd=="user"){} else{echo "<li><a href=\"../Views/page_4.php\">Liste Catégories</a></li>";}
            				if ($bnd=="admin"){echo "<li><a href=\"../Views/page_5.php\">Utilisateurs</a></li>";} else{}
            				if ($bnd=="user"){} else{echo "<li><a href=\"../Modele/decon.php\">Déconnexion</a></li>";} ?>
          </ul>
        </div>
      </div>
    </div>

  </body>
</html>
