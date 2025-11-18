<?php
include("basedatos.php");
$conexionbd = conectar_bd();

if ($conexionbd->connect_error){
die("Error de conexión".$conexionbd->connect_error);
} else {
echo "Conexión exitosa";
}

$conexionbd->close();


?>

