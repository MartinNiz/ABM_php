<?php include "header.php";

$id         = $_GET["id"];
$sql        = "SELECT id, nombre, DNI, edad  FROM clientes WHERE id = $id";
$resultado  = mysqli_query($conn,$sql);
if(!$resultado)return "Error al recueperar registro id ".$id;
$reg = mysqli_fetch_assoc($resultado);




?>

<form class="text-center border border-light p-5" action="acciones.php?accion=modificar&id=<?php echo $id;?>" method="post">
    <p class="h4 mb-4">Modificar Cliente</p>
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido" value="<?php echo $reg["nombre"];?>">
        </div>
        <div class="col">
            <input type="text" name="DNI" class="form-control" placeholder="Documento" value="<?php echo $reg["DNI"];?>">
        </div>
        <div class="col">
            <input type="text" name="edad" class="form-control" placeholder="Edad" value="<?php echo $reg["edad"];?>">
        </div>
    </div>
    <button class="btn btn-info my-4 btn-block" type="submit">Aplicar</button>
    <hr>
</form>


<? include("footer.php");?>