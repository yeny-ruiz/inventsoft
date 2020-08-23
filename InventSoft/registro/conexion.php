<?php 

session_start();


$servidor = "localhost";
$usuario  = "root";
$contraseña = "";
$basededatos = "invent_soft";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $basededatos);

if($conexion){
    echo "";
}else{
    echo "Error al conectar";
}


?>