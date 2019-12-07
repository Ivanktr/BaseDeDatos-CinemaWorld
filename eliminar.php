<?php
include("conexion.php");
$idpelicula=$_REQUEST['id'];

$sql="DELETE FROM peliculas WHERE idpelicula='$idpelicula'";
$ejecutar=mysqli_query($conexion,$sql);

if(!$ejecutar){
    echo"No se elimino";
}else{
    header("location: vista.php");
}

?>