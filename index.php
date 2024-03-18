<?php
    include 'conexion.php';
    $sentencia = $bd->query("SELECT * FROM empleado;");
    $usuarios=$sentencia->fetchALL(PDO::FETCH_OBJ);
    //print_r($usuarios); 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilosindex.css"> 
    <link rel="stylesheet" href="styles/style.css"> 
</head>
<body>
    <center>
    
    <h1>SISTEMA DE NOMINA</h1>  
        <table class="menu">
            <tr>
                <td><a href="index.php">Inicio de Sesión</a></td>
                <td><a href="indexv1.php">DAO PRINCIPAL</a></td>
            </tr>
        </table>

        <br><br><br><br><br><br><br>
        <br><br>
    <h2>Iniciar Sesión</h2>
    <form action="validar.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="Usuario_sistema" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="Password_usuario" required><br><br>
        <input type="submit" value="Iniciar Sesión">
        
        <p>¿No tienes cuenta? <a href="registrar_usuario.php">Registrate Aqui</a></p>
    </form>
</body>
</html>