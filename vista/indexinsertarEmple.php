<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="estilos.css"> -->
</head>
<body>
    <section class="section">
    
    <div class="wrap">
    <form action="../controlador/controladorregistroEmple.php", method="GET">
    <label for="">Primer Nombre</label>    
    <input type="text" name="nombre1_e" id="nombre1" class="form-control">
    
    <label for="">Segundo Nombre</label>    
    <input type="text" name="nombre2_e" id="nombre2" class="form-control">
    
    <label for="">Primer Apellido</label>    
    <input type="text" name="apellido1_e" id="apellido1" class="form-control">

    <label for="">Segundo Apellido</label>    
    <input type="text" name="apellido2_e" id="apellido2" class="form-control">

    <label for="">Genero</label>    
    <input type="text" name="genero_e" id="forma" class="form-control">
    
    <label for="">Direccion</label>    
    <input type="text" name="direccion_e" id="forma" class="form-control">

    <label for="">Telefono</label>    
    <input type="text" name="telefono_e" id="forma" class="form-control">

    <label for="">Correo</label>    
    <input type="text" name="correo_e" id="forma" class="form-control">

    <label for="">Fecha Ingreso</label>    
    <input type="text" name="fecha_ingreso_e" id="forma" class="form-control">

    <label for="">Fecha Nacimiento</label>    
    <input type="text" name="fecha_Nacimiento_e" id="forma" class="form-control">
    
    <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary">
    </form>
    </div>
    </section>         
</body>
</html>
