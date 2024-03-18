<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["Usuario_sistema"];
    $contrasena = $_POST["Password_usuario"];

    // Conecta a la base de datos
    $contrasena_db = "";
    $usuario_db = "root";
    $nombrebd = "bdnn";
    try {
        $bd = new PDO(
            'mysql:host=localhost;dbname=' . $nombrebd,
            $usuario_db,
            $contrasena_db
        );
    
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error de conexión " . $e->getMessage();
    }
    
}


?>

