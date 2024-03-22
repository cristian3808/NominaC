<?php
session_start();
if (!isset($_GET['id'])) {
    header('Location: index.php');
}

include 'conexion.php';
$id = $_GET['id'];

$sentencia = $bd->prepare("SELECT * FROM empleado WHERE id = ?;");
$sentencia->execute([$id]);
$empleado = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloseditar.css">
    <title>Editar Empleado</title>
</head>
<body>
    <center>
        <h3>Editar Empleado</h3>
        <form method="POST" action="editar_empleado_proceso.php">
            <table>
                <tr>
                    <td>Número de Documento</td>
                    <td><input type="text" name="txt2Ndocumento" value="<?php echo $empleado->ndocumento; ?>" required></td>
                </tr>
                <tr>
                    <td>Nombre 1</td>
                    <td><input type="text" name="txt2Nombre1" value="<?php echo $empleado->nombre1; ?>" required></td>
                </tr>
                <tr>
                    <td>Nombre 2</td>
                    <td><input type="text" name="txt2Nombre2" value="<?php echo $empleado->nombre2; ?>"></td>
                </tr>
                <tr>
                    <td>Apellido 1</td>
                    <td><input type="text" name="txt2Apellido1" value="<?php echo $empleado->apellido1; ?>" required></td>
                </tr>
                <tr>
                    <td>Apellido 2</td>
                    <td><input type="text" name="txt2Apellido2" value="<?php echo $empleado->apellido2; ?>"></td>
                </tr>
                <tr>
                    <td>Tipo Documento</td>
                    <td>
                        <select name="txt2TipoDocumento" required>
                            <?php
                            $sentencia_tipodoc = $bd->prepare("SELECT idTipoDocumento, nombreTipoD FROM tipodocumento");
                            $sentencia_tipodoc->execute();
                            $tipos_documentos = $sentencia_tipodoc->fetchAll(PDO::FETCH_OBJ);

                            foreach ($tipos_documentos as $tipo_documento) {
                                $selected = ($tipo_documento->idTipoDocumento == $empleado->tipo_documento) ? 'selected' : '';
                                echo "<option value='{$tipo_documento->idTipoDocumento}' $selected>{$tipo_documento->nombreTipoD}</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <!-- Repite esto para otros campos -->
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $empleado->id; ?>">
                    <td colspan="2"><input type="submit" value="EDITAR EMPLEADO"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
