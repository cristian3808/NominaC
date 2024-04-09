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
require('../vista/insertempre.php');
require('../dao/DaoEmpresaImpl.php');
$dao= new c ();
if (isset($_GET['boton'])) {
    $nit_empresa=$_GET['nit_empresa'];
    $nombre_empresa=$_GET['nombre_empresa'];
    $propietario=$_GET['propietario'];
    $sector=$_GET['sector'];
    $fecha_Fundacion=$_GET['fecha_Fundacion'];
    $Tipo_Entidad=$_GET['Tipo_Entidad'];
    $a= new empresa ($nit_empresa,$nombre_empresa,$propietario,$sector,$fecha_Fundacion,$Tipo_Entidad);
    $dao->registrar($a);
    echo "REGISTRO INSERTADO CON EXITO";    
}
?>    
</body>
</html>
