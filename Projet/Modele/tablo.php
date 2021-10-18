<script src="../Controller/script3.js"></script>
<?php
if ($var9=="") {
  echo "string";
} else {
  ?>
  <tr height="30">
  <th><?php       echo $ca;?> </th>
  <th><button  onclick="Modif(<?php echo $var9;?>);" style="background-color: transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;"<i style="font-size:16px" class="fa">&#xf044;</i></button></th>
  <th><button  onclick="Confirm(<?php echo $var9;?>);" style="background-color: transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;"><i class="fa fa-trash" style="font-size:16px"></i></button></th>
  </tr>
  <tr>
<?php
}
 ?>
</tr>
