<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilolistarusuario.css">
    <title>lista</title>
</head>
<body>
<?php 

require('../dao/DaoEmpresaImpl.php');
$dao=new c();
$empresa=$dao->listar();
require('../vista/listarempre.php');
?>    
</body>
</html>
