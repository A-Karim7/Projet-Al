<?php
$rep=$bdd->query("SELECT dateCreation from article order by dateCreation desc") or die(print_r($bdd->errorInfo()));
$done=$rep->fetch();
$va1=$done['dateCreation'];
$rep->closeCursor();
?>
