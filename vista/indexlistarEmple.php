<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilolistarusuario.css"> <!-- <link rel="stylesheet" href="estilos.css"> -->
    
    <title>Listar</title>    
</head>
<body>
<section class="section">
    <div class="div">
    <table class="table">
            <caption>LISTADO DE EMPLEADOS</caption>
            <thead>
                <tr>
                    <th>DOCUMENTO </th>
                    <th>PRIMER NOMBRE</th>
                    <th>SEGUNDO NOMBRE</th>
                    <th>PRIMER APELLIDO</th>
                    <th>SEGUNDO APELLIDO</th>
                    <th>GENERO</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>CORREO</th>
                    <th>FECHA INGRESO</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($empleado as $key) {
                    echo "<tr>";
                    echo "<td>". $key->getIdEmpleado() . "</td>";
                    echo "<td>". $key->getNombre1_e() . "</td>";
                    echo "<td>". $key->getNombre2_e() . "</td>";
                    echo "<td>". $key->getApellido1_e() . "</td>";
                    echo "<td>". $key->getApellido2_e() . "</td>";    
                    echo "<td>". $key->getGenero_e() . "</td>";
                    echo "<td>". $key->getDireccion_e() . "</td>";
                    echo "<td>". $key->getTelefono_e() . "</td>";
                    echo "<td>". $key->getCorreo_e() . "</td>";
                    echo "<td>". $key->getFecha_Ingreso_e() . "</td>";
                    echo "<td>". $key->getFecha_Nacimiento_e() . "</td>";
                    echo '<td><a href="controladormodiemple.php?id=' . $key->getIdEmpleado() . '">Editar</a></td>';
                    echo '<td><a href="controladoreliminaremple.php?id=' . $key->getIdEmpleado() .'">Borrar</a></td>'; 
                    echo "</tr>";                    
                }
            ?>
            </tbody>
        </table>
    </div>
    <section >
</body>

</html>