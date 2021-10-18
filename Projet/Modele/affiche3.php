<?php

$rep=$bdd->query("SELECT COUNT(*) as nb FROM article where categorie=\"$cat\"") or die(print_r($bdd->errorInfo()));
$donne =$rep->fetch();
$nb=$donne['nb'];
$rep->closeCursor();

  $rep=$bdd->query("SELECT * from article where categorie=\"$cat\" order by dateCreation") or die(print_r($bdd->errorInfo()));
  $ka=1;
  while($done=$rep->fetch()){
      $aff1=$done['dateCreation'];
      $aff2=$done['titre'];
      $aff3=$done['id'];
      $aff4=$done['image'];
      ?>
      <div class="defiler">
        <a href="page0.php?art=<?php echo $aff3;?>">
        <div id="ens">
        <div id="image">
        <img id="id" src="<?php echo $aff4?>">
        </div>
        <div id="titre">
        <p><?php echo $aff2?></p>
        </div>
        </div>
        </a>
        <p id="creation">(<?php echo $aff1; ?>)</p>
              <input type="submit" name="submit" value="Precedent" class="gauche" id="<?php if($ka==1) echo "caché";?>" style="background: transparent; border-radius: 10px; border: 2px solid #0066CC;" onclick="plusDivs(-1)"></a>
              <input type="submit" name="submit" value="Suivant" class="droite" id="<?php  if($ka==$nb) echo "caché";?>" style="background: transparent; border-radius: 10px; border: 2px solid #0066CC;" onclick="plusDivs(+1)"></a>
        </div>
      <?php
      $ka++;
  }
  $rep->closeCursor();
?>
<script src="../Controller/script.js"></script>
