<script src="../Controller/script2.js"></script>
<?php
if ($var6=="") {
} else {
  ?>
  <tr height="30">
  <th><?php echo $var1; ?></th>
  <th><?php     require('../Modele/diffcate.php'); echo $lib;?> </th>
  <th><?php echo $supl; ?></th>
  <th><button  onclick="Modif(<?php echo $var9;?>);" style="background-color: transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;"<i style="font-size:16px" class="fa">&#xf044;</i></button></th>
  <th><button  onclick="Confirm(<?php echo $var9;?>);" style="background-color: transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;"><i class="fa fa-trash" style="font-size:16px"></i></button></th>
  </tr>
  <tr>
<?php
}
 ?>
</tr>
