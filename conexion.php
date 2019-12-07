<?php 
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="registro";

$conexion=mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la base de datos");
$bd= mysqli_select_db($conexion,$basededatos) or die ("Error al conectarse a la base de datos");


?>