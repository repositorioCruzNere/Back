<?php
include("basedatos.php");
$conexionbd = conectar_bd(); // función retorna la conexión a la base de datos.
$query = "SELECT id_Empleado, nombre, edad FROM empleado;";
$resultado = mysqli_query($conexionbd, $query); // conexión, consulta.
mysqli_close($conexionbd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Empleados</title>
    <link rel="stylesheet" href="css/estiloTutoria.css">
    <!-- https://www.fpdf.org/ -->
</head>
<body>
<div class="header_superior">
        <div class="titulo">
            <h1>Lista de Empleados</h1>

        </div>
        <div class="search">
            <input type="search" placeholder="¿Qué deseas buscar?">

        </div>
    </div>
   
    
    <!--<a href="reporteempleado.php" class="btn-pdf">Descargar PDF</a>-->
      <div class="lis"> 
        <div class="rep">
    <a href="reporte_empleados.php" > Descargar Reporte PDF</a>
    <br><br>
</div>
    <ul>
        <?php
        while($registro = mysqli_fetch_assoc($resultado))
        {
         
       
        echo '<li>'.$registro['nombre'].'('.$registro['edad'].' años  )   ';  
        
        echo '<a href="modificarempleado.php?empleado_id='.$registro['id_Empleado'].'"> Modificar</a>';
       
        echo '<a href="eliminarempleado.php?empleado_id='.$registro['id_Empleado'].'"> Eliminar</a></li> <br>';
     

         
        }
        
       ?> 
       </ul> 
       </div>  
  
       
            
</body>
</html>