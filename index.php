<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>
    <link rel="stylesheet" href="css/estiloTutoria.css"> 
    
</head>
<body>
<div class="header_superior">
        <div class="titulo">
            <h1>REGISTRO</h1>

        </div>
        <div class="search">
            <input type="search" placeholder="¿Qué deseas buscar?">

        </div>
    </div>
    <form action="agregarempleado.php" method = "post" name = "nuevoempleado">

   <h4>Registrate aquí</h4>
    <label for="nom"> Nombre del empleado:</label>
        <br><br>
        <input type = "text" name="empleado_nombre">
        <br><br>
        <label for="edad"> Edad del empleado:</label>
        
        <select name="empleado_edad">
        <option value = "18">18</option>
        <option value = "25">25</option>
        <option value = "30">30</option>
        <option value = "35">35</option>
        <option value = "40">40</option>
</select>
      <!-- <input type = "number" name ="empleado_edad">-->
        <br>
        
        <input type = "submit" name = "Agregar_empleado">
    </form>
    
</body>
</html>