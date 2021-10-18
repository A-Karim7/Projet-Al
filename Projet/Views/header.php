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
<div id="change_class" class="flex_container section menu_section">
	<div class="flex_item branding"><p></p></div>
	<div class="flex_item menu_item dropdown">
		<p>Menu</p>
		<div class="dropdown-content">


			<?php
				if ($bnd=="user") {echo "<div class=\"menu_item menu_item_inside\"><a href=\"../Views/index.php\"><p>Home</p></a></div>";} else {echo "<div class=\"menu_item menu_item_inside\"><a href=\"../Views/page.php\"><p>Home</p></a></div>";}
				if ($bnd=="user"){} else{echo "<a href=\"\"><div class=\"menu_item menu_item_inside\"><a href=\"../Views/page_1.php\"><p>Nouvel Article</p></a></div>";}
		 		if ($bnd=="user"){} else{echo "<a href=\"\"><div class=\"menu_item menu_item_inside\"><a href=\"../Views/page_2.php\"><p>Lister Articles</p></a></div>";}
				if ($bnd=="user"){} else{echo "<a href=\"\"><div class=\"menu_item menu_item_inside\"><a href=\"../Views/page_3.php\"><p>Nouvelle Catégorie</p></a></div>";}
				if ($bnd=="user"){} else{echo "<a href=\"\"><div class=\"menu_item menu_item_inside\"><a href=\"../Views/page_4.php\"><p>Liste Catégories</p></a></div>";}
				if ($bnd=="admin"){echo "<a href=\"\"><div class=\"menu_item menu_item_inside\"><a href=\"../Views/page_5.php\"><p>Utilisateurs</p></a></div>";} else{}
				if ($bnd=="user"){} else{echo "<a href=\"\"><div class=\"menu_item menu_item_inside\"><a href=\"../Modele/decon.php\"><p>Déconnexion</p></a></div>";} ?>
		</div>
	</div>

	<?php
				if ($bnd=="user") {echo "<div class=\"flex_item menu_item menu_item_outside\"><a href=\"../Views/index.php\"><p>Home</p></a></div>";} else {echo "<div class=\"flex_item menu_item menu_item_outside\"><a href=\"../Views/page.php\"><p>Home</p></a></div>";}
				if ($bnd=="user"){} else{echo "<div class=\"flex_item menu_item menu_item_outside\"><a href=\"../Views/page_1.php\"><p>Nouvel Article</p></a></div>";}
				if ($bnd=="user"){} else{echo "<div class=\"flex_item menu_item menu_item_outside\"><a href=\"../Views/page_2.php\"><p>Lister Articles</p></a></div>";}
				if ($bnd=="user"){} else{echo "<div class=\"flex_item menu_item menu_item_outside\"><a href=\"../Views/page_3.php\"><p>Nouvelle Catégorie</p></a></div>";}
				if ($bnd=="user"){} else{echo "<div class=\"flex_item menu_item menu_item_outside\"><a href=\"../Views/page_4.php\"><p>Lister Catégories</p></a></div>";}
				if ($bnd=="admin"){echo"<div class=\"flex_item menu_item menu_item_outside\"><a href=\"../Views/page_5.php\"><p>Utilisateurs</p></a></div>";} else{}
				if ($bnd=="user"){} else{echo "<div class=\"menu_item menu_item_outside\"><a href=\"../Modele/decon.php\"><p>Déconnexion</p></a></div>";} ?>
</div>
