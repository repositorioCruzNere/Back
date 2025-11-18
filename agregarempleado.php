<?php
include("basedatos.php");


if(!empty($_POST['empleado_nombre'])&& !empty($_POST['empleado_edad']))
{
    $conexionbd = conectar_bd();
    $query = "INSERT INTO empleado(nombre, edad) VALUES ('".$_POST['empleado_nombre']."','".$_POST['empleado_edad']."')";

    
    $exito= mysqli_query($conexionbd, $query);
    if($exito)
    {
            header('Location: listaempleados.php');
    }
    else
    {
            header('Location: nuevoempleado.php');
    }
}
else
{
    header('Location: nuevoempleado.php');
}
?>
