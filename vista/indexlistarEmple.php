<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    
    <title>Listar</title>    
</head>
<body>
<section class="section">
    <div class="div">
    <table class="table">
            <caption>LISTADO DE empelados</caption>
            <thead>
                <tr>
                    <th>PRIMER NOMBRE_e</th>
                    <th>SEGUNDO NOMBRE_e</th>
                    <th>PRIMER APELLIDO_e</th>
                    <th>SEGUNDO APELLIDO_e</th>
                    <th>GENERO_e</th>
                    <th>DIRECCION_e</th>
                    <th>TELEFONO_e</th>
                    <th>CORREO_e</th>
                    <th>FECHA INGRESO_e</th>
                    <th>FECHA NACIMIENTO_e</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($empleado as $key) {
                    
                    echo "<tr><td>". $key->getNombre1_e() . "</td>";
                    echo "<td>". $key->getNombre2_e() . "</td>";
                    echo "<td>". $key->getApellido1_e() . "</td>";
                    echo "<td>". $key->getApellido2_e() . "</td>";    
                    echo "<td>". $key->getGenero_e() . "</td>";
                    echo "<td>". $key->getDireccion_e() . "</td>";
                    echo "<td>". $key->getTelefono_e() . "</td>";
                    echo "<td>". $key->getCorreo_e() . "</td>";
                    echo "<td>". $key->getFecha_ingreso_e() . "</td>";
                    echo "<td>". $key->getFecha_Nacimiento_e() . "</td></tr>";                   
                }?>
            </tbody>
    </table>
    </div>
    <section class="section">
</body>

</html>