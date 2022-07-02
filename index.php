<?php include "header.php" ;?>

  <?php
  $sql = "SELECT id, nombre, edad, DNI FROM clientes";
  $resultado = mysqli_query($conn,$sql);

  
  ?>








<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Nombre
      </th>
      <th class="th-sm">DNI
      </th>
      <th class="th-sm">Edad
      </th>
      <th class="th-sm">Opciones
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($reg = mysqli_fetch_assoc($resultado)):
      ?>


    <tr>
      <td><?php echo $reg["nombre"];?></td>
      <td><?php echo $reg["DNI"];?></td>
      <td><?php echo $reg["edad"];?></td>
      <td><a href="modificar.php?id=<?php echo $reg["id"];?>&accion=modificar">Modificar</a> | <a href="acciones.php?id=<?php echo $reg["id"];?>&accion=borrar">Baja</a></td>
    </tr>



   <?php
    endwhile;
   ?>
    
  </tbody>
  
</table>

<?php include("footer.php");?>