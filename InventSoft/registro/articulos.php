<?php
 
 include "conexion.php";

 if (isset($_POST['ingresar'])) {
     $codigo = $_POST['codigo'];
     $grupo = $_POST['grupo'];
     $placa = $_POST['placa'];
     $valor = $_POST['valor'];
     $id = 1;

     $consulta = "INSERT INTO articiculo (codigo_art, grupo, placa, valor_unitario, id_usu) 
     values ('$codigo', '$grupo', '$placa', '$valor', '$id') ";

     $ejecutar = mysqli_query($conexion, $consulta);

     if($ejecutar){
        header("Location:../descripcion.html");
         echo "Articulo registrado correctamete";
     }else{
        header("Location:../articulo.html");
         echo "Error al insertar articulo";
     }
    }

?>