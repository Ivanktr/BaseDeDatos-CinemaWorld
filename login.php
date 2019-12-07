
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/estilos_i.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
    <div class="login-box">
     <img class="avatar" src="img/icono_c.png" alt="logo">
     <h1>Iniciar Sesión</h1>
     <form action="base.php" method="POST">
         <div class="input-box">  
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ingresar usuario">

        </div>
  
     <div class="input-box">
         <label for="contraseña">Contraseña</label>
        <input type="password" id="myInput" name="contraseña" placeholder="Ingresar contraseña">
        <span class="eye" onclick="myFunction()">
            <i id="ver" class="far fa-eye"></i>
            <i id="nover"class="far fa-eye-slash"></i>
        </span>
    </div>

     <input type="submit" value="Iniciar Sesión"><br><br>
     <h6><a href="#">¿Olvidaste tu contraseña?</a></h6>
     <h6 style="color:rgb(243, 241, 241);font-family: sans-serif;">¿No tienes una cuenta? <a href="registro.php">Crea una.</a></h6>
    </form>

     </div>
     <script>
     function myFunction(){
         var x=document.getElementById("myInput");
         var y=document.getElementById("ver");
         var z=document.getElementById("nover");

         if(x.type === 'password'){
             x.type="text";
             y.style.display="block";
             z.style.display="none";
         }else{
             x.type="password";
             y.style.display="none";
             z.style.display="block";
         }
     }
     </script>
</body>
</html>