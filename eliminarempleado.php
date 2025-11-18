<?php
include("basedatos.php");



if(!empty($_GET['empleado_id']))

{
   $conexionbd = conectar_bd();
  
   $query = "DELETE FROM empleado WHERE id_Empleado =".$_GET['empleado_id'];
   $exito = mysqli_query($conexionbd, $query);
   mysqli_close($conexionbd);
    
    if($exito)
   {
    $alerta="Se eliminó";  
       header('Location: listaempleados.php');
    }
   else

    {
       $alerta="ocurrio un error"; 
        
           header('Location: listaempleados.php');
 }
}



?>