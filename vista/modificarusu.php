<h2>Modificar Usuario</h2>
<form action="../controlador/controladormodiusu.php" method="POST">
    <div class="left-column">
        <label for="id_usuario">id usuario:</label>
        <input type="text" id="id_persona" name="id_persona" value="<?php echo $usuario->getIdPersona(); ?>"><br><br>

        <label for="nombre1">Primer Nombre:</label>
        <input type="text" id="primer_nombre" name="nombre1" value="<?php echo $usuario->getNombre1(); ?>"><br><br>

        <label for="nombre2">Segundo Nombre:</label>
        <input type="text" id="segundo_nombre" name="nombre2" value="<?php echo $usuario->getNombre2(); ?>"><br><br>

        <label for="apellido1">Apellido Paterno:</label>
        <input type="text" id="apellido1" name="apellido1" value="<?php echo $usuario->getApellido1(); ?>"><br><br>
    </div>

    <div class="right-column">
        <label for="apellido2">Apellido Materno:</label>
        <input type="text" id="apellido2" name="apellido2" value="<?php echo $usuario->getApellido2(); ?>"><br><br>

        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" value="<?php echo $usuario->getGenero(); ?>"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo $usuario->getDireccion(); ?>"><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo $usuario->getTelefono(); ?>"><br><br>

        <label for="fecha_Nacimiento">Fecha de Nacimiento:</label>
        <input type="text" id="fecha_nacimiento" name="fecha_Nacimiento" value="<?php echo $usuario->getFecha_Nacimiento(); ?>"><br><br>
    </div>

    <input type="submit" name="boton" value="Modificar">
</form>
