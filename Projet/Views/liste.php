<?php
require_once('../Modele/connect.php');
$ak=1;
$rep=$bdd->query("SELECT * from categorie") or die(print_r($bdd->errorInfo()));
    while($done=$rep->fetch()){
    $c1=$done['libelle'];
    $c2=$done['id'];?>
    <a href="index.php?cat=<?php echo $c2; ?>"><?php echo $c1; ?></a><br>
    <?php
    $ak++;
    }
?>
