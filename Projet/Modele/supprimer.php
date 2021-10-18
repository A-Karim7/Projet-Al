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
	$reponse=$bdd->query("DELETE FROM article WHERE id=\"$id\"") or die(print_r($bdd->errorInfo()));
  header('Location: ../Views/page_2.php');
}
else {
header('Location: ../Views/page_2.php');
}
?>
</body>
</html>
