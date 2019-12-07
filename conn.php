<?php
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="registro";

$conexion=mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la base de datos");
$bd= mysqli_select_db($conexion,$basededatos) or die ("Error al conectarse a la base de datos");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$sql="INSERT INTO datos VALUES('$nombre','$apellido','$correo','$usuario','$contraseña')";

$ejecutar=mysqli_query($conexion,$sql);

if(!$ejecutar){
    echo"Hubo un error";
}else{
    header("location: login.php");
}
mysqli_close($conexion);
?>