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
                <caption>LISTADO DE USUARIOS</caption>
                <thead>
                    <tr>
                        <th>Documento o Id</th>
                        <th>PRIMER NOMBRE</th>
                        <th>SEGUNDO NOMBRE</th>
                        <th>PRIMER APELLIDO</th>
                        <th>SEGUNDO APELLIDO</th>
                        <th>GÉNERO</th>
                        <th>DIRECCIÓN</th>
                        <th>TELÉFONO</th>
                        <th>FECHA NACIMIENTO</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($usuario as $key) {
                        echo "<tr>";
                        echo "<td>". $key->getIdPersona() . "</td>";
                        echo "<td>". $key->getNombre1() . "</td>";
                        echo "<td>". $key->getNombre2() . "</td>";
                        echo "<td>". $key->getApellido1() . "</td>";
                        echo "<td>". $key->getApellido2() . "</td>";    
                        echo "<td>". $key->getGenero() . "</td>";
                        echo "<td>". $key->getDireccion() . "</td>";
                        echo "<td>". $key->getTelefono() . "</td>";
                        echo "<td>". $key->getFecha_Nacimiento() . "</td>";
                        echo '<td><a href="controladormodiusu.php?id=' . $key->getIdPersona() . '">Editar</a></td>';
                        echo '<td><a href="controladoreliminarusu.php?id=' . $key->getIdPersona() .'">Borrar</a></td>'; 
                        echo "</tr>";                 
                    }
                ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
