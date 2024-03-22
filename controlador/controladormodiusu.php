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
require('../dao/DaoUsuarioImpl.php');
$dao = new c();
if(isset($_GET['id'])) {
    $ident = $_GET['id'];
    $usuario = $dao->obtenerPordocu($ident);
    require('../vista/modificarusu.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['boton'] == "Modificar") {

    $id_persona=$_POST['id_persona'];
    $nombre1= $_POST['nombre1'];
    $nombre2=$_POST['nombre2'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $genero=$_POST['genero'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $fecha_Nacimiento=$_POST['fecha_Nacimiento'];

    $usuario = new usuario($id_persona, $nombre1, $nombre2, $apellido1, $apellido2, 
    $genero,$direccion,$telefono,$fecha_Nacimiento);
    $dao->modificar($usuario);
    header("location: controladorlistar.php");
}
?>    
</body>
</html>