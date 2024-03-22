<?php
include 'conexion.php';

// Obtener todos los registros de la tabla 'empleado'
$sentencia = $bd->query("SELECT * FROM empleado;");
$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos3.css">
</head>
<body>
    <center>
        <h1>SISTEMA DE PRESTAMOS</h1>
        <table class="menu">
            <tr>
                <td><a href="index.php">Inicio de Sesión</a></td>
                <td><a href="ista_registros.php.php">Lista de Registros</a></td>
                <td><a href="indexv1.php">DAO PRINCIPAL</a></td>
            </tr>
        </table>
          
        <h3>Usuarios Registrados</h3>
        
        <!-- Tabla para mostrar los usuarios -->
        <table>
            <tr>
                <td>N° Documento</td>
                <td>Nombre 1</td>
                <td>Nombre 2</td>
                <td>Apellido 1</td>
                <td>Apellido 2</td>
                <td>Tipo Documento</td>
                <td>Estado Civil</td>
                <td>Genero</td>
                <td>Telefono</td>
                <td>Fecha Nacimiento</td>
                <td>Fecha Expedicion</td>
                <td>Correo</td>
                <td>Nomenclatura</td>
                <td>Municipio</td>
                <td>Nit Empresa</td>
                <td>Acciones</td> 
            </tr>
            
            <?php
            // Establecer la conexión a la base de datos
            $conn = new mysqli("localhost", "root", "", "bdnn");

            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            // Consulta para seleccionar todos los registros de empleado con detalles
            $sql = "SELECT a.ndocumento, a.nombre1, a.nombre2, a.apellido1, a.apellido2, a.tipo_documento,
            a.estado_civil, a.genero, a.telefono, a.fecha_nacimiento, a.fecha_expedicion, a.correo,
            a.nomenclatura, a.municipio, a.barrio, a.nit_empresa  
            FROM empleado a 
            INNER JOIN empresa b ON a.nit_empresa = b.nit_empresa
            WHERE a.nit_empresa = b.nit_empresa;";


            $result = $conn->query($sql);

            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ndocumento"] . "</td>";
                        echo "<td>" . $row["nombre1"] . "</td>";
                        echo "<td>" . $row["nombre2"] . "</td>";
                        echo "<td>" . $row["apellido1"] . "</td>";
                        echo "<td>" . $row["apellido2"] . "</td>";
                        echo "<td>" . $row["tipo_documento"] . "</td>";
                        echo "<td>" . $row["estado_civil"] . "</td>";
                        echo "<td>" . $row["genero"] . "</td>";
                        echo "<td>" . $row["telefono"] . "</td>";
                        echo "<td>" . $row["fecha_nacimiento"] . "</td>";
                        echo "<td>" . $row["fecha_expedicion"] . "</td>";
                        echo "<td>" . $row["correo"] . "</td>";
                        echo "<td>" . $row["nomenclatura"] . "</td>";
                        echo "<td>" . $row["municipio"] . "</td>";
                        echo "<td>" . $row["nit_empresa"] . "</td>";
                        echo "<td><a href='editar_empleado.php?id=" . $row['ndocumento'] . "'>Editar</a></td>"; 
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='16'>No se encontraron registros</td></tr>";
                }
            } else {
                echo "Error en la consulta: " . $conn->error;
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </table>
        
        <form action="editar_empleado.php" method="POST" enctype="multipart/form-data">
        </form>
    </center>
</body>
</html>


