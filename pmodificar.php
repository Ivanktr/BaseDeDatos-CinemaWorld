<?php
include("conexion.php");
$idpelicula=$_REQUEST['id'];

$tipo=$_POST['tipo'];
$pelicula=$_POST['pelicula'];
$fecha=$_POST['fecha'];
$duracion=$_POST['duracion'];
$descripcion=$_POST['descripcion'];
$foto_s=addslashes(file_get_contents($_FILES['foto_s']['tmp_name']));
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$proveedor=$_POST['proveedor'];
$trailer=$_POST['trailer'];
$sql="UPDATE peliculas SET tipo='$tipo',pelicula='$pelicula', fecha='$fecha', duracion='$duracion', descripcion='$descripcion',foto_s='$foto_s',foto='$foto',proveedor='$proveedor',trailer='$trailer' WHERE idpelicula='$idpelicula' ";
$ejecutar=mysqli_query($conexion,$sql);

if(!$ejecutar){
    echo"Hubo un error";
}else{
    header("location: vista.php");
}

?>