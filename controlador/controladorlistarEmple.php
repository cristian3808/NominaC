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
$dao=new d();
$empleado=$dao->listar();
require('../vista/indexlistarEmple.php');
?>    
</body>
</html>

