<?php 
include "registro/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Inscritos</title>
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="menu">
            <a href="rusuario.html" style="text-decoration:none; font-size:30px;"><h2>Lista inscritos</h2></a>
        </div>
        <div class="usuarios">
        <table class="table table-border ">
                <thead>
                    <tr>
                        <th>Id usuario</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Editar/Eliminar</th>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM usuarios";
                            $q = mysqli_query($conexion, $query);

                            while($fila=mysqli_fetch_array($q)){ ?>
                            <tr>
                                <td><?php echo $fila['id_usu'] ?></td>
                                <td><?php echo $fila['nombre'] ?></td>
                                <td><?php echo $fila['apellidos'] ?></td>
                                <td><?php echo $fila['telefono'] ?></td>
                                <td><?php echo $fila['correo'] ?></td>
                                <td>
                                    <a href=" registro/editarusuario.php?id=<?php echo $fila['id_usu']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href=" registro/eliminarusuario.php?id=<?php echo $fila['id_usu']?>" class="btn btn-danger" onclick="return ConfirmDelete()">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </tr>
                </thead>

            </table>
        </div>

    </div>
</body>
</html>