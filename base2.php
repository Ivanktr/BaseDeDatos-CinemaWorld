<?php
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="registro";

$conexion=mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la base de datos");
$bd= mysqli_select_db($conexion,$basededatos) or die ("Error al conectarse a la base de datos");


$idpelicula=$_POST['idpelicula'];
$tipo=$_POST['tipo'];
$pelicula=$_POST['pelicula'];
$fecha=$_POST['fecha'];
$duracion=$_POST['duracion'];
$descripcion=$_POST['descripcion'];
$foto_s=addslashes(file_get_contents($_FILES['foto_s']['tmp_name']));
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$proveedor=$_POST['proveedor'];
$trailer=$_POST['trailer'];
$sql="INSERT INTO peliculas VALUES('$idpelicula','$tipo','$pelicula','$fecha','$duracion','$descripcion','$foto_s','$foto','$proveedor','$trailer')";
$ejecutar=mysqli_query($conexion,$sql);

if(!$ejecutar){
    echo"Hubo un error";
}else{
    header("location: admin.php");
}
mysqli_close($conexion);
?>