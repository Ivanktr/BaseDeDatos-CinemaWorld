<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$usuario1=$_POST['usuario'];
$contraseña1=$_POST['contraseña'];
//conectar
$conexion=mysqli_connect("localhost","root","","registro");

$consulta="SELECT * FROM datos WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
 
$consulta1="SELECT * FROM administrador WHERE usuario='$usuario1' and contraseña='$contraseña1'";
$resultado1=mysqli_query($conexion,$consulta1);

$filas=mysqli_num_rows($resultado);
if($filas>0){
  header("location: index.php");
}else{
    echo"Error de autentificación";
}

$filas=mysqli_num_rows($resultado1);
if($filas>0){
  header("location: indexa.php");
}else{
    echo"Error de autentificación";
}


mysqli_free_result($resultado);
mysqli_close($conexion);
mysqli_free_result($resultado1);
mysqli_close($conexion1);
?>