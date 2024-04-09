<h2>Modificar Empresa</h2>
<form action="../controlador/ctrlmodi.php" method="POST">
    <div class="left-column">
        <label for="id_empresa">ID Empresa:</label>
        <input type="text" id="id_empresa" name="id_empresa" value="<?php echo $empresa->getNitEmpresa(); ?>"><br><br>

        <label for="nombre_empresa">Nombre Empresa:</label>
        <input type="text" id="nombre_empresa" name="nombre_empresa" value="<?php echo $empresa->getNombreEmpresa(); ?>"><br><br>

        <label for="propietario">Propietario:</label>
        <input type="text" id="propietario" name="propietario" value="<?php echo $empresa->getPropietario(); ?>"><br><br>

        <label for="sector">Sector:</label>
        <input type="text" id="sector" name="sector" value="<?php echo $empresa->getSector(); ?>"><br><br>
    </div>

    <div class="right-column">
        <label for="fecha_fundacion">Fecha de Fundación:</label>
        <input type="text" id="fecha_fundacion" name="fecha_fundacion" value="<?php echo $empresa->getFechaFundacion(); ?>"><br><br>

        <label for="tipo_entidad">Tipo de Entidad:</label>
        <input type="text" id="tipo_entidad" name="tipo_entidad" value="<?php echo $empresa->getTipoEntidad(); ?>"><br><br>
    </div>

    <input type="submit" name="boton" value="Modificar">
</form>
