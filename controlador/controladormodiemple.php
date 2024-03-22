<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilo2.css">
    <title>Document</title>
</head>
<body>
<?php 
require('../dao/DaoEmpleadoImpl.php');
$dao = new d();
if(isset($_GET['id'])) {
    $ident = $_GET['id'];
    $empleado = $dao->obtenerPordocu($ident);
    require('../vista/modificaremple.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['boton'] == "Modificar") {

    $id_empleado=$_POST['id_empleado'];
    $nombre1_e= $_POST['nombre1_e'];
    $nombre2_e=$_POST['nombre2_e'];
    $apellido1_e=$_POST['apellido1_e'];
    $apellido2_e=$_POST['apellido2_e'];
    $genero_e=$_POST['genero_e'];
    $direccion_e=$_POST['direccion_e'];
    $telefono_e=$_POST['telefono_e'];
    $correo_e=$_POST['correo_e'];
    $fecha_Ingreso_e=$_POST['fecha_Ingreso_e'];
    $fecha_Nacimiento_e=$_POST['fecha_Nacimiento_e'];

    $empleado = new empleado($id_empleado, $nombre1_e, $nombre2_e, $apellido1_e, $apellido2_e, 
    $genero_e,$direccion_e,$telefono_e,$correo_e,$fecha_Ingreso_e,$fecha_Nacimiento_e);
    $dao->modificar($empleado);
    header("location: controladorlistarEmple.php");
}
?>    
</body>
</html>