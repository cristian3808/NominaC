<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Eliminar Empleado</title>
</head>
<body>
<?php 
require('../dao/DaoEmpleadoImpl.php');
$dao = new d();

if(isset($_GET['id'])) {
    $ident = $_GET['id'];
    $empleado = $dao->obtenerPordocu($ident);
    
    if($empleado) {
        $dao->eliminar($empleado);
        
        echo "<p>Empleado eliminado exitosamente.</p>";
    } else {
        echo "<p>Error: Empleado no encontrado.</p>";
    }
}

?> 
</body>
</html>
