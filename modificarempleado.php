<?php
include("basedatos.php");
$conexionbd = conectar_bd();
$query = "SELECT id_Empleado, nombre, edad FROM empleado WHERE id_Empleado=".$_GET['empleado_id']." LIMIT 1";
$resultado = mysqli_query($conexionbd, $query);
mysqli_close($conexionbd);
$registro = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Empleado</title>
    <link rel="stylesheet" href="css/estiloTutoria.css">
    
</head>
<body>

    <form action="actualizarempleado.php" method = "post" name = "nuevoempleado">
        <input type = "text" name="empleado_nombre" value ="<?php echo $registro['nombre'] ?>">
        <br>
        <br><br>
        <label for="edad"> Edad del empleado:</label>
        
        <select name="empleado_edad">
        <option value = "18">18</option>
        <option value = "25">25</option>
        <option value = "30">30</option>
        <option value = "35">35</option>
        <option value = "40">40</option>
</select>
        <br>
        <input type="hidden" name="empleado_id" value="<?php echo $registro['id_Empleado']?>">
            <br>
            <input type ="submit" name="Actualizar empleado">
       
    </form>
    
</body>
</html>