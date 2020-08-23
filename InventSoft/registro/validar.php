<?php 
 include "conexion.php";

 if (isset($_POST['registrarse'])){
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $rol = 1;

$consult="SELECT COUNT(*) as contar from usuarios where correo='$correo' and contraseña='$contraseña' and id_rol='$rol'";
$consulta= mysqli_query($conexion, $consult);
$array=mysqli_fetch_array($consulta);

  if($array['contar']>0){
	$_SESSION['correo1'] = $correo; 
	header("location:inicioadmin.php");

  }else{
	echo "Correo o Contraseña incorrectos";
  }
 }

 if (isset($_POST['registrarse'])){
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $rol = 2;

$consult="SELECT COUNT(*) as contar from usuarios where correo='$correo' and contraseña='$contraseña' and id_rol='$rol'";
$consulta= mysqli_query($conexion, $consult);
$array=mysqli_fetch_array($consulta);

  if($array['contar']>0){
	$_SESSION['correo1'] = $correo; 
	header("location:iniciousu.php");

  }else{
	echo "Correo o Contraseña incorrectos";
  }
 }


?>