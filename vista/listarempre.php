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
                <caption>LISTADO DE EMPRESAS</caption>
                <thead>
                    <tr>
                        <th>NIT Empresa</th>
                        <th>Nombre Empresa</th>
                        <th>Propietario</th>
                        <th>Sector</th>
                        <th>Fecha Fundación</th>
                        <th>Tipo Entidad</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // Verificar si $empresa está definido y no es null
                     
                    if(isset($empresa) && $empresa !== null) {
                        foreach ($empresa as $key) {
                            echo "<tr>";
                            echo "<td>". $key->getNitEmpresa() . "</td>";
                            echo "<td>". $key->getNombreEmpresa() . "</td>";
                            echo "<td>". $key->getPropietario() . "</td>";
                            echo "<td>". $key->getSector() . "</td>";
                            echo "<td>". $key->getFechaFundacion() . "</td>";    
                            echo "<td>". $key->getTipoEntidad() . "</td>";
                            echo '<td><a href="ctrlmodi.php?id=' . $key->getNitEmpresa() . '">Editar</a></td>';
                            echo '<td><a href="ctrleliminar.php?id=' . $key->getNitEmpresa() .'">Borrar</a></td>'; 
                            echo "</tr>";                 
                        }
                    } else {
                        echo "<tr><td colspan='8'>No hay empresas registradas.</td></tr>";
                    }
                    
                ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>

