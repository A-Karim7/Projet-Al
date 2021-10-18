<?php
require_once('../Modele/connect.php');
if (isset($_POST['login']) && isset($_POST['prenoms']) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['c_password'])) {
      if ($_POST['password']==$_POST['c_password']) {
        $va2=$_POST['login'];
        $va3=$_POST['prenoms'];
        $va4=$_POST['nom'];
        $va5=$_POST['mail'];
        $va6=$_POST['password'];
        if (isset($_POST['admin'])) {
            $va7=$_POST['admin'];
        } else {
            $va7="lambda";
        }
           $req = $bdd->prepare('INSERT INTO users (login, nom, prenoms, password, mail, type) VALUES(?, ?, ?, ?, ?, ?)');
           $req->execute(array($va2, $va4, $va3, $va6, $va5, $va7));
          header('Location: ../Views/page_5.php');
      } else {
           header('Location: ../Views/page_5.php?erreur=2');
      }
} else {
        header('Location: ../Views/page_5.php?erreur=1');
}


 ?>
