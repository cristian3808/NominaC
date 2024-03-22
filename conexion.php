<?php
$contrasena="";
$usuario="root";
$nombrebd="bdnn";

try{
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombrebd,
        $usuario,
        $contrasena
    ); 
    $bd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Error de conexion ".$e->getMessage();
}
?>
 