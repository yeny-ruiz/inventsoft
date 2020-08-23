<?php 
include "conexion.php";

if(isset($_POST['registrarse'])){
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$id= 2;

$consulta = "INSERT INTO usuarios(nombre, apellidos, telefono, correo, contraseña, id_rol)
 values ('$nombre','$apellido', '$telefono', '$correo', '$contraseña', '$id')";
$ejecutar = mysqli_query($conexion, $consulta);

if ($ejecutar){
    header("location:../rusuario.html");
    echo "Se ha registrado el usuario correctamente";
}else{
    echo "Error al registrar usuario";
}
}

if (isset($_REQUEST['editar'])){

    $id_i=$_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $ida = 1;
    
    $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellido', telefono ='$telefono', correo='$correo'
     WHERE id_usu='$id_i'";
    
    $ejecutar=mysqli_query($conexion, $sql);
    
    if($ejecutar){
        $_SESSION['mensaje'] = 'Datos del equipo han sido editados ¡EXITOSAMENTE!';
        $_SESSION['tipo_mensaje'] = 'success';
        header("location:../listai.php");
    
        }
        else{
        $_SESSION['mensaje'] = '¡Ups! hubo un error al editar datos del equipo';
        $_SESSION['tipo_mensaje'] = 'danger';
        header("Location:../listai.php");
        }
    }

    if (isset($_REQUEST['editar_art'])){

        $codigo = $_POST['id'];
        $grupo = $_POST['grupo'];
        $placa = $_POST['placa'];
        $valor_unitario = $_POST['valoru'];
        
        
        $sql="UPDATE articiculo SET codigo_art= '$codigo', grupo='$grupo', placa='$placa', valor_unitario ='$valor_unitario'
         WHERE codigo_art='$codigo'";
        
        $ejecutar=mysqli_query($conexion, $sql);
        
        if($ejecutar){
            $_SESSION['mensaje'] = 'Datos del equipo han sido editados ¡EXITOSAMENTE!';
            $_SESSION['tipo_mensaje'] = 'success';
            header("location:../inicioadmin.php");
        
            }
            else{
            $_SESSION['mensaje'] = '¡Ups! hubo un error al editar datos del equipo';
            $_SESSION['tipo_mensaje'] = 'danger';
            header("Location:../inicioadmin.php");
            }
        }

        if (isset($_REQUEST['editar_desc'])){
            $id = $_POST['id'];
            $nombre_art = $_POST['nombre'];
            $tamaño = $_POST['tamaño'];
            $tipo_elemento = $_POST['elemento'];
            
            
            $sql="UPDATE descripcion1 SET nombre_art= '$nombre_art', tamaño='$tamaño', tipo_elemento='$tipo_elemento',
             WHERE id_descripcion='$id'";
            
            $ejecutar=mysqli_query($conexion, $sql);
            
            if($ejecutar){
                $_SESSION['mensaje'] = 'Datos del equipo han sido editados ¡EXITOSAMENTE!';
                $_SESSION['tipo_mensaje'] = 'success';
                header("location:../descripcionar.php");
            
                }
                else{
                $_SESSION['mensaje'] = '¡Ups! hubo un error al editar datos del equipo';
                $_SESSION['tipo_mensaje'] = 'danger';
                header("Location:../descripcionar.php");
                }
            }

       
?>