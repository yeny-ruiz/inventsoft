<?php 
include "conexion.php";
include "articulos.php";

if (isset($_POST['ingresar'])) {

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $serial = $_POST['serial'];
    $observa = $_POST['observa'];
    $id = $codigo;

    $consul = "INSERT INTO especificacion (marca, modelo, observacion, serial, codigo_art) 
    values ('$marca', '$modelo', '$observa', '$serial', '$id')";

    $ejecut = mysqli_query($conexion, $consul);

    if($ejecut){
        header("Location:../ubicacion.html");
        echo "Especificación insertada correctamente";
    }else{
        header("Location:../especificacion.html");
        echo "Eror al insertar especificación";
    }
}

?>