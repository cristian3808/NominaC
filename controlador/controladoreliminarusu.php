<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Eliminar Usuario</title>
</head>
<body>
<?php 
require('../dao/DaoUsuarioImpl.php');
$dao = new c();

if(isset($_GET['id'])) {
    $ident = $_GET['id'];
    $usuario = $dao->obtenerPordocu($ident);
    
    if($usuario) {
        $dao->eliminar($usuario);
        
        echo "<p>Usuario eliminado exitosamente.</p>";
    } else {
        echo "<p>Error: Usuario no encontrado.</p>";
    }
}

?> 
</body>
</html>
