<?php 
include "conexion.php";
include "articulos.php";

if (isset($_POST['ingresar'])) {

    $nombre = $_POST['nombre'];
    $tamaño = $_POST['tamaño'];
    $elemento = $_POST['elemento'];
    $id = $codigo;

    $consult = "INSERT INTO descripcion1 (nombre_art, tamaño, tipo_elemento, codigo_art)
    values ('$nombre', '$tamaño', '$elemento', '$id')";
    $ejecuta = mysqli_query($conexion, $consult);

    if($ejecuta){
       header("Location:../especificacion.html");
       echo "Descipcion insertada correctamente";
   }else{
    header("Location:../descripcion.html");
       echo "Eror al insertar descripcion";
   }
}
?>
