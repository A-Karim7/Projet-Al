<?php
require_once('../Modele/connect.php');
if (isset($_POST['hidden']) && isset($_POST['login']) && isset($_POST['prenoms']) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['password'])) {
      if ($_POST['password']==$_POST['c_password']) {
        $va1=$_POST['hidden'];
        $va2=$_POST['login'];
        $va3=$_POST['prenoms'];
        $va4=$_POST['nom'];
        $va5=$_POST['mail'];
        $va6=$_POST['password'];
        $va=$_POST['c_password'];
        if (isset($_POST['admin'])) {
            $va7=$_POST['admin'];
        } else {
            $va7="lambda";
        }
           $req = $bdd->prepare('UPDATE users SET login =:nvlogin, prenoms=:nvprenoms, nom=:nvnom, mail=:nvmail, type=:nvtype, password=:nvpassword WHERE ID = :ID');
           $req->execute(array(
           'nvlogin' => $va2,
           'nvprenoms' => $va3,
           'nvnom' => $va4,
           'nvmail' => $va5,
           'nvtype' => $va7,
           'nvpassword' => $va6,
           'ID' => $va1));

           header('Location: ../Views/page_5.php');
      } else {
           header('Location: ../Views/page_5.php?erreur=2');
      }
} else {
        header('Location: ../Views/page_5.php?erreur=1');
}


 ?>
