<?php
$host = 'localhost';
$bdname = 'mglsi_news';
$charset = 'utf8';
$login = 'root';
$password = '';
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', $login, $password, array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } catch (Exception $e) {
      die('Erreur : '.$e->getMessage());
  }
  $rep=$bdd->query("SELECT COUNT(*) as nb FROM article ") or die(print_r($bdd->errorInfo()));
  $donne =$rep->fetch();
  $nb=$donne['nb'];
  $rep->closeCursor();

  $rep=$bdd->query("SELECT COUNT(*) as noob FROM categorie ") or die(print_r($bdd->errorInfo()));
  $donne =$rep->fetch();
  $noob=$donne['noob'];
  $rep->closeCursor();
  $nombre=0;
  $compa="nulll";
  $p=1;
  while ($p <= $noob+1) {
  $rep=$bdd->query("SELECT * from categorie where id=\"$p\"") or die(print_r($bdd->errorInfo()));
    if ($donne=$rep->fetch()) {
      $compar=$donne['libelle'];
      if (strcmp($compar, $compa)!==0) {
      $compa=$compar;
      $nombre++;
      }
    }else {
    }
    $p++;
  }
  $rep->closeCursor();
 ?>
