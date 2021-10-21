<?php
  $rep=$bdd->query("SELECT * from article where categorie=\"$cat\"order by dateCreation") or die(print_r($bdd->errorInfo()));
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
        <img id="id" src="<?php echo "../Views/css/images/".$aff4?>">
        </div>
        <div id="titre">
        <p><?php echo $aff2?></p>
        </div>
        </div>
        </a>
        <p id="creation">Publié le (<?php echo $aff1; ?>)</p>
              <img name="submit" src="../Views/css/images/previous" class="gauche"  style="background: transparent; border-radius: 10px; border: 0px solid #0066CC;" onclick="plusDivs(-1)"></a>
              <img name="submit" src="../Views/css/images/next" class="droite" style="background: transparent; border-radius: 10px; border: 0px solid #0066CC;" onclick="plusDivs(+1)"></a>
        </div>
      <?php
      $ka++;
  }
  $rep->closeCursor();
?>
<script src="../Controller/script.js"></script>
