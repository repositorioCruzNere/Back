<?php
include("basedatos.php");

if(!empty($_POST['empleado_nombre'])&& !empty($_POST['empleado_edad'])&& !empty($_POST['empleado_id']))
{
    $conexionbd = conectar_bd();
    $query = "UPDATE empleado SET nombre='".$_POST['empleado_nombre']."', edad='".$_POST['empleado_edad']."' WHERE id_Empleado=".$_POST['empleado_id'];

   
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