<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'abm-php';
$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn){
echo "error de conexión";
}else{
//echo "conexión realizada";
}
?>