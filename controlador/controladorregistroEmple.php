<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilo1.css">
    <title>Document</title>
</head>
<body>
<?php 
require('../vista/indexinsertarEmple.php');
require('../dao/DaoEmpleadoImpl.php');
$dao=new d();
if (isset($_GET['boton'])) {
    $id_empleado=$_GET['id_empleado'];
    $nombre1_e=$_GET['nombre1_e'];
    $nombre2_e=$_GET['nombre2_e'];
    $apellido1_e=$_GET['apellido1_e'];
    $apellido2_e=$_GET['apellido2_e'];
    $genero_e=$_GET['genero_e'];
    $direccion_e=$_GET['direccion_e'];
    $telefono_e=$_GET['telefono_e'];
    $correo_e=$_GET['correo_e'];
    $fecha_Ingreso_e=$_GET['fecha_Ingreso_e'];
    $fecha_Nacimiento_e=$_GET['fecha_Nacimiento_e'];
    $a=new empleado($id_empleado,$nombre1_e,$nombre2_e,$apellido1_e,$apellido2_e,$genero_e,$direccion_e,$telefono_e,$correo_e,$fecha_Ingreso_e,$fecha_Nacimiento_e);
    $dao->registrar($a);
    echo "REGISTRO INSERTADO CON EXITO";    
}
           
?>    
</body>
</html>
