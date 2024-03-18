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
    <form action="../controlador/controladorregistro.php", method="GET">

    
    <label for="">IDENTIDAD </label>    
    <input type="text" name="id_persona" id="id_persona" class="form-control">

    <label for="">PRIMER NOMBRE</label>    
    <input type="text" name="nombre1" id="nombre1" class="form-control">
    
    <label for="">SEGUNDO NOMBRE</label>    
    <input type="text" name="nombre2" id="nombre2" class="form-control">
    
    <label for="">PRIMER APELLIDO</label>    
    <input type="text" name="apellido1" id="apellido1" class="form-control">

    <label for="">SEGUNDO APELLIDO</label>    
    <input type="text" name="apellido2" id="apellido2" class="form-control">

    <label for="">Genero</label>    
    <input type="text" name="genero" id="genero" class="form-control">
    
    <label for="">DIRECCION</label>    
    <input type="text" name="direccion" id="direccion" class="form-control">

    <label for="">TELEFONO</label>    
    <input type="text" name="telefono" id="telefono" class="form-control">

    <label for="">FECHA NACIMIENTO</label>    
    <input type="text" name="fecha_Nacimiento" id="fecha_Nacimiento" class="form-control">
    
    <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary">
    </form>
    </div>
    </section>         
</body>
</html>