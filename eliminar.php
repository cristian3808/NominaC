<?php
if (!isset($_GET['id'])) {
    exit();
}

$codigo = $_GET['id'];
include 'conexion.php';

// Eliminar registros relacionados en la tabla prestamo
$sentencia_prestamo = $bd->prepare("DELETE FROM empleado WHERE nidentidad = ?;");
$resultado_prestamo = $sentencia_prestamo->execute([$codigo]);

if ($resultado_prestamo === TRUE) {
    // Ahora que los registros relacionados en prestamo se han eliminado,
    // puedes eliminar el usuario
    $sentencia_usuario = $bd->prepare("DELETE FROM empleado WHERE nidentidad = ?;");
    $resultado_usuario = $sentencia_usuario->execute([$codigo]);

    if ($resultado_usuario === TRUE) {
        header('Location: index1.php');
    } else {
        echo "Error al eliminar el empleado";
    }
} else {
    echo "Error al eliminar los registros relacionados en empleado";
}
?>