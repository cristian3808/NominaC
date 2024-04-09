<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilo2.css">
   
    <title>Modificar Empresa</title>
</head>
<body>
<?php 
require('../dao/DaoEmpresaImpl.php');
$dao = new c();
if(isset($_GET['id'])) {
    $ident = $_GET['id'];
    $empresa = $dao->obtenerPorNit($ident);
    require('../vista/modiempre.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['boton'] == "modificar") {

    $nit_empresa=$_POST['nit_empresa'];
    $nombre_empresa= $_POST['nombre_Empresa'];
    $propietario=$_POST['propietario'];
    $sector=$_POST['sector'];
    $fecha_fundacion=$_POST['fecha_Fundacion'];
    $tipo_entidad=$_POST['tipo_Entidad'];
   

    $empresa = new empresa($nit_empresa, $nombre_empresa, $propietario, $sector, 
    $fecha_fundacion, $tipo_entidad);
    $dao->modificar($empresa);
    header("location: ctrllistar.php");
}
?>    
</body>
</html>
