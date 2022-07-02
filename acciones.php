<?php
include("header.php");

/*
functions borrar(){
	$id = $_GET["id"];
	$sql = "DELETE FROM alumnos WHERE id=".$id;
	$resultado = mysqli_query($conn,$sql);
	if($resultado){
		return "Registro eliminado";
	}else{
		return "Error al eliminar";
	}
}
*/

function borrar($conn){
	
	$id 		= $_GET["id"];
	$sql 		= "DELETE FROM clientes WHERE id=".$id;
	$resultado 	= mysqli_query($conn,$sql);
	if(!$resultado)return "Error al eliminar";
	return "Registro eliminado";
	
}
function alta($conn){
	$nombre 	= $_POST["nombre"];
	$DNI 		= $_POST["DNI"];
	$edad 		= $_POST["edad"];
	$sql 		= "INSERT INTO clientes (nombre, edad, DNI) VALUES ('$nombre', '$DNI', '$edad')";
	$resultado 	= mysqli_query($conn,$sql);
	if(!$resultado)return "Error al ingresar registro";
	return "Registro ingresado";
}

function modificar($conn){
	$nombre 	= $_POST["nombre"];
	$DNI 		= $_POST["DNI"];
	$edad 		= $_POST["edad"];
	$id 		= $_GET["id"];
	$sql		= "UPDATE clientes SET nombre = '$nombre', DNI = $DNI , edad = $edad WHERE id = $id";
	$resultado 	= mysqli_query($conn,$sql);
	if(!$resultado)return "Error al modificar registro";
	return "Registro modificado";
}






$accion = $_GET["accion"];

switch($accion){
	case "borrar":
		//borrar
		echo borrar($conn);
	break;
	case "modificar":
		//modificar
		echo modificar($conn);
	break;
	case "alta":
		//modificar
		echo alta($conn);
	break;
}










?>
<br>
<div align="center">
	<a href="index.php" class="btn btn-success btn-rounded">Volver al listado</a>
<div>


<?php
include("footer.php");
?>