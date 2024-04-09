<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Empleado</title>
</head>

<body>
    <h2>Modificar Empleado</h2>
    <form action="../controlador/controladormodiemple.php" method="POST">
        
    <div class="left-column">
        <label for="id_empleado">id empleado:</label>
        <input type="text" id="id_empleado" name="id_empleado" value="<?php echo $empleado->getIdEmpleado(); ?>"><br><br>

        <label for="nombre1_e">Primer Nombre:</label>
        <input type="text" id="nombre1_e" name="nombre1_e" value="<?php echo $empleado->getNombre1_e(); ?>"><br><br>

        <label for="nombre2_e">Segundo Nombre:</label>
        <input type="text" id="nombre2_e" name="nombre2_e" value="<?php echo $empleado->getNombre2_e(); ?>"><br><br>

        <label for="apellido1_e">Apellido Paterno:</label>
        <input type="text" id="apellido1_e" name="apellido1_e" value="<?php echo $empleado->getApellido1_e(); ?>"><br><br>

        <label for="apellido2_e">Apellido Materno:</label>
        <input type="text" id="apellido2_e" name="apellido2_e" value="<?php echo $empleado->getApellido2_e(); ?>"><br><br>
    
        <label for="genero_e">Género:</label>
        <input type="text" id="genero_e" name="genero_e" value="<?php echo $empleado->getGenero_e(); ?>"><br><br>
    
    </div>
    <div class="right-column">
        <label for="direccion_e">Dirección:</label>
        <input type="text" id="direccion_e" name="direccion_e" value="<?php echo $empleado->getDireccion_e(); ?>"><br><br>

        <label for="telefono_e">Teléfono:</label>
        <input type="text" id="telefono_e" name="telefono_e" value="<?php echo $empleado->getTelefono_e(); ?>"><br><br>

        <label for="correo_e">Correo:</label>
        <input type="text" id="correo_e" name="correo_e" value="<?php echo $empleado->getCorreo_e(); ?>"><br><br>

        <label for="fecha_Ingreso_e">Fecha de Ingreso:</label>
        <input type="text" id="fecha_Ingreso_e" name="fecha_Ingreso_e" value="<?php echo $empleado->getFecha_Ingreso_e(); ?>"><br><br>

        <label for="fecha_Nacimiento_e">Fecha de Nacimiento:</label>
        <input type="text" id="fecha_Nacimiento_e" name="fecha_Nacimiento_e" value="<?php echo $empleado->getFecha_Nacimiento_e(); ?>"><br><br>
    </div>
        <input type="submit" name="boton" value="Modificar">
    </form>
</body>

</html>
