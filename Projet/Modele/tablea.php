<script src="../Controller/script4.js"></script>
<?php
if ($va1=="") {
  echo "string";
} else {
  ?>
  <tr height="30">
  <th><?php       echo $va2;?> </th>
  <th><?php       echo $va3;?> </th>
  <th><?php       echo $va4;?> </th>
  <th><?php       echo $va5;?> </th>
  <th><?php       if($va7=="admin"){echo "Admin";}else{echo "Users";}?> </th>
  <th><?php       echo $va6;?> </th>
  <th><button  onclick="Modif(<?php echo $va1;?>);" style="background-color: transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;"><i style="font-size:16px" class="fa">&#xf044;</i></button></th>
  <th><button  onclick="Confirm(<?php echo $va1;?>);" style="background-color: transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;"><i class="fa fa-trash" style="font-size:16px"></i></button></th>
  </tr>
  <tr>
<?php
}
 ?>
</tr>
