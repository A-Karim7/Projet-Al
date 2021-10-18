<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require_once('../Modele/connect.php');
if (isset($_POST['LOGIN']) && isset($_POST['password'])) {
	$login=$_POST['LOGIN'];
	$mdp=$_POST['password'];
$reponse = $bdd->prepare('SELECT prenoms,nom,type FROM users WHERE login=:login AND password=:password');
$reponse->execute(array('login' => $login,'password' => $mdp));
		if ($donnees = $reponse->fetch()){
			echo $_SESSION['prenom']=$donnees['prenoms'];
				echo $_SESSION['type']=$donnees['type'];
			header('Location: ../Views/page.php');
		}
		else {
			header('Location: ../Views/accueil.php?erreur=1');
		}
}
else{
	header('Location: ../Views/accueil.php?erreur=2');
}
?>
</body>
</html>
