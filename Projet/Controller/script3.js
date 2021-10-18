
	function Confirm(va1) {
		var rettVal = confirm("Voulez vous supprimer cette categorie?");
		if (rettVal == true) {
			var va=va1;
			document.location.href="http://localhost/Projet/Modele/supprim.php?id="+va;
			return true;
		}
		else{
			return false;
		}
	}

	function Modif(va1) {
		var rettVal = confirm("Voulez vous modifier cette categorie?");
		if (rettVal == true) {
			var va=va1;
			document.location.href="http://localhost/Projet/Modele/modif.php?idd="+va;
			return true;
		}
		else{
			return false;
		}
	}
