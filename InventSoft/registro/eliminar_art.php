<?php
          
          include ("conexion.php");

          if (isset($_GET['codigo_art'])){
                $id = $_GET['id'];
                $query = "DELETE FROM articiculo WHERE codigo_art =$id";
                $resultado = mysqli_query($conexion, $query);

                if (!$resultado) {
                    die("Query Failed");
                }

                $_SESSION['message'] = 'Articulo Eliminado';
                $_SESSION['message_type'] = 'danger';
                header("Location: inicioadmin.php");

          }
  
?>