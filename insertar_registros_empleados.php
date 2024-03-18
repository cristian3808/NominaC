<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {
    try {
        $ndocumento = $_POST['txtNdocumento'];
        $nombre1 = $_POST['txtNombre1'];
        $nombre2 = $_POST['txtNombre2'];
        $apellido1 = $_POST['txtApellido1'];
        $apellido2 = $_POST['txtApellido2'];
        $tipodocumento = $_POST['txtTipodoc'];
        $estadocivil = $_POST['txtEstadoCivil'];
        $genero = $_POST['txtGenero'];
        $telefono = $_POST['txtTelefono'];
        $fechanacimiento = $_POST['txtFechaNacimiento'];
        $fechaexpedicion = $_POST['txtFechaExpedicion'];
        $correo = $_POST['txtCorreo'];

        $nomenclatura = $_POST['txtNomenclatura'];
        $municipio = $_POST['txtMunicipio'];
        $barrio = $_POST['txtBarrio'];
        $nitempresa = $_POST['txtNitEmpresa'];

        $sentencia = $bd->prepare("INSERT INTO empleado(ndocumento, nombre1, nombre2, apellido1, apellido2, 
        tipo_documento, estado_civil, genero, telefono, fecha_nacimiento, fecha_expedicion, correo, nomenclatura,
        municipio, barrio, nit_empresa) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
    $resultado = $sentencia->execute([$ndocumento, $nombre1, $nombre2, $apellido1, $apellido2, $tipodocumento,
        $estadocivil, $genero, $telefono, $fechanacimiento, $fechaexpedicion, $correo, $nomenclatura, $municipio,
        $barrio, $nitempresa]);
    


        if ($resultado) {
            header("Location: index1.php");
            exit();
        } else {
            echo "Hubo un error al insertar en la base de datos.";
        }
    } catch (PDOException $e) {
        echo "Error de PDO: " . $e->getMessage();
    }
}
?>


