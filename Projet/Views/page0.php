<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Views/css/styles2.css">
    <title></title>
  </head>
  <body>
<div class="todos">
  <?php
  require('../Views/headers.php');
  require_once('../Views/categorieb.php');
  require_once('../Controller/controll.php');
  ?>
  <div class="tout">
    <div class="defiler">
      <h1 style="position: relative;top: 7px;margin-left:10px;"><a href="index.php"></a> <?php echo $v1; ?></h1>
        <div id="categorie">
          <div id="categ">
            <p id="ca">Categorie: <?php echo $var; ?></p>
          </div>
          <div id="MAJ">
            <p> Mis à jour le <?php echo $v4; ?></p>
          </div>
        </div>
        <div id="contenu">
          <p id="ima"><img id="id" src="<?php echo "../Views/css/images/".$v6;?>" style="width: 180px;height: 110px"></p>
          <p><?php echo $v2; ?></p>
        </div>
      </div>
    </div>
    <h3 style="position: relative; top: -1050px; margin-left:230px; color:#696969;">Master GLSI News</h3>

</div>


  </body>
</html>
