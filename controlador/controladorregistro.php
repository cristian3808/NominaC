<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">

    <title>Document</title>
</head>
<body>
    <br><br>
<?php 
require('../vista/indexinsertar.php');
require('../dao/DaoUsuarioImpl.php');
$dao=new c();
if (isset($_GET['boton'])) {
    $id_persona=$_GET['id_persona'];
    $nombre1=$_GET['nombre1'];
    $nombre2=$_GET['nombre2'];
    $apellido1=$_GET['apellido1'];
    $apellido2=$_GET['apellido2'];
    $genero=$_GET['genero'];
    $direccion=$_GET['direccion'];
    $telefono=$_GET['telefono'];
    $fechaNacimiento=$_GET['fecha_Nacimiento'];
    $a=new usuario($id_persona,$nombre1,$nombre2,$apellido1,$apellido2,$genero,$direccion,$telefono,$fechaNacimiento);
    $dao->registrar($a);
    echo "REGISTRO INSERTADO CON EXITO";    
}
           
?>    
</body>
</html>
