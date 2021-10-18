<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
require_once('../Modele/connect.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
$temp="";
	$reponse=$bdd->query("DELETE FROM categorie WHERE id=\"$id\"") or die(print_r($bdd->errorInfo()));
	$req = $bdd->prepare('UPDATE article SET categorie=:nvcategorie WHERE id = :ID');
	$req->execute(array(
	'nvcategorie' => $temp,
	'ID' => $id));
	  header('Location: ../Views/page_4.php');
}
else {
header('Location: ../Views/page_4.php');
}
?>
</body>
</html>
