
	function Confirm(va1) {
		var rettVal = confirm("Voulez vous supprimer cet utilisateur?");
		if (rettVal == true) {
			var va=va1;
			document.location.href="http://localhost/Projet/Modele/suppression.php?id="+va;
			return true;
		}
		else{
			return false;
		}
	}

	function Modif(va1) {
		var rettVal = confirm("Voulez vous modifier cet utilisateur?");
		if (rettVal == true) {
			var va=va1;
			document.location.href="http://localhost/Projet/Modele/modification.php?idd="+va;
			return true;
		}
		else{
			return false;
		}
	}
