<?php
$rep=$bdd->query("SELECT COUNT(*) as nob FROM article where categorie=\"$cat\"") or die(print_r($bdd->errorInfo()));
$donne =$rep->fetch();
$nob=$donne['nob'];
$rep->closeCursor();
 ?>
