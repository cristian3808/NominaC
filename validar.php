<?php
session_start();
include 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $usuario = $_POST['Usuario_sistema'];
    $contrasena = $_POST['Password_usuario'];
    
    $consulta = $bd->prepare("SELECT * FROM login_usua WHERE username = ? AND password = ?");
    $consulta->execute([$usuario, $contrasena]);
    $usuarioValido = $consulta->fetch(PDO::FETCH_OBJ);

    if ($usuarioValido) {

        $_SESSION['usuario'] = $usuarioValido->usuario; 
        header("location: indexv1.php"); 
    } else {
        echo "Usuario o contraseña incorrectos";
    }
} else {
    header("location: inicio_sesion.php");
}
?>
