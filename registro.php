<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos_r.css">
</head>
<body>
    <div class="contenedor">
    <form action="conn.php" method="POST" class="form">
        <div class="form-header">
        <h1 class="form-title">R<span>egistro</span></h1>
    </div>
    <label for="nombre" class="form-label" >Nombres:</label>
    <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Nombres">
    
    <label for="apellido" class="form-label" >Apellidos:</label>
    <input type="text" id="apellido" name="apellido" class="form-input" placeholder="Apellidos">

    <label for="correo" class="form-label" >Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" class="form-input" placeholder="Email">
    
    <label for="usuario" class="form-label" >Nombre de usuario:</label>
    <input type="text" id="usuario" name="usuario" class="form-input" placeholder="Username"> 

    <label for="contraseña" class="form-label" >Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña" class="form-input" placeholder="Password">
    
    <input type="submit" class="btn-submit" value="Registrar">
    
 </form>
</div>
</body>
</html>