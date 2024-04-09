<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilo2.css">
    <title>Eliminar Empresa</title>
</head>
<body>
<?php 
require('../dao/DaoEmpresaImpl.php');
$dao = new c (); // Cambiado a DaoEmpresaImpl para eliminar empresas

if(isset($_GET['id'])) {
    $identificador = $_GET['id']; // Cambiado a identificador para eliminar empresas
    $empresa = $dao->obtenerPorNit($identificador); // Cambiado a obtenerPorId para eliminar empresas
    
    if($empresa) {
        $dao->eliminar($empresa); // Cambiado a eliminar para eliminar empresas
        
        echo "<p>Empresa eliminada exitosamente.</p>";
    } else {
        echo "<p>Error: Empresa no encontrada.</p>";
    }
}

?> 
</body>
</html>
