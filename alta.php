<?php include("header.php");?>


<form class="text-center border border-light p-5" action="acciones.php?accion=alta" method="post">
    <p class="h4 mb-4">Agregar Cliente</p>
    <div class="form-row mb-4">
        <div class="col">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido">
        </div>
        <div class="col">
            <input type="text" name="DNI" class="form-control" placeholder="Documento">
        </div>
        <div class="col">
            <input type="text" name="edad" class="form-control" placeholder="Edad">
        </div>
    </div>
    <button class="btn btn-info my-4 btn-block" type="submit">Crear</button>
    <hr>
</form>


<?php include("footer.php");?>