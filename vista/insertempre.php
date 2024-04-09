<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empresa</title>
    <!-- <link rel="stylesheet" href="estilos.css"> -->
</head>
<body>
    <section class="section">
    
    <div class="wrap">
    <form action="../controlador/ctrlregistrar.php" method="GET">

    <label for="">NIT Empresa</label>    
    <input type="text" name="nit_empresa" id="nit_empresa" class="form-control">
    
    <label for="">Nombre Empresa</label>    
    <input type="text" name="nombre_empresa" id="nombre_empresa" class="form-control">
    
    <label for="">Propietario</label>    
    <input type="text" name="propietario" id="propietario" class="form-control">

    <label for="">Sector</label>    
    <input type="text" name="sector" id="sector" class="form-control">

    <label for="">Fecha Fundación</label>    
    <input type="text" name="fecha_Fundacion" id="fecha_Fundacion" class="form-control">

    <label for="">Tipo Entidad</label>    
    <input type="text" name="Tipo_Entidad" id="Tipo_Entidad" class="form-control">
    
    <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary">
    </form>
    </div>
    </section>         
</body>
</html>
