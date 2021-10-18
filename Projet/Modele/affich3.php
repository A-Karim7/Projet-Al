<?php
$ty=1;
$tt=0;
while ($ty <= $nb) {
  $rep=$bdd->query("SELECT * from article where id=\"$ty\"") or die(print_r($bdd->errorInfo()));
  $done=$rep->fetch();
  $va=$done['categorie'];
  if ($tt<$va) {
    $tt=$va;
  } else {
    $va=$tt;
  }
$ty++;
}
  $rep->closeCursor();
?>
