<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>

<body>
    <h2>Eliminar Usuario</h2>
    <form action="../controlador/controladoreliminarusu.php" method="POST">
        <input type="hidden" name="id_persona" value="<?php echo $usuario->getIdPersona(); ?>">
        <p>¿Estás seguro que deseas eliminar este usuario?</p>
        <input type="submit" name="boton" value="Eliminar">
    </form>
</body>

</html>
