<?php 
include "registro/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripcion Articulo</title>
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="menu">
            <a href="inicioadmin.php" style="text-decoration:none; font-size:30px;"><h2>Descripcion Articulo</h2></a>
        </div>
        <div class="descrip">
        <table class="table table-border ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre articulo</th>
                        <th>tamaño</th>
                        <th>Tipo elemento</th>
                        <th>Editar/Eliminar</th>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM descripcion1 ";
                            $q = mysqli_query($conexion, $query);

                            while($fila=mysqli_fetch_array($q)){ ?>
                            <tr>
                                <td><?php echo $fila['id_descripcion'] ?></td>
                                <td><?php echo $fila['nombre_art'] ?></td>
                                <td><?php echo $fila['tamaño'] ?></td>
                                <td><?php echo $fila['tipo_elemento'] ?></td>
                                <td>
                                    <a href=" registro/editardescripcion.php?id=<?php echo $fila['id_descripcion']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href=" crud/eliminarinfo.php?id=<?php echo $fila['idinfo']?>" class="btn btn-danger" onclick="return ConfirmDelete()">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </tr>
                </thead>

            </table>

            <a href="inicioadmin.php" style="text-decoration:none; font-size:30px;"><h2>Especificación Articulo</h2></a>
            <table class="table table-border ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Observación</th>
                        <th>Serial</th>
                        <th>Fecha ingreso</th>
                        <th>Editar/Eliminar</th>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM especificacion ";
                            $q = mysqli_query($conexion, $query);

                            while($fila=mysqli_fetch_array($q)){ ?>
                            <tr>
                                <td><?php echo $fila['id_e'] ?></td>
                                <td><?php echo $fila['marca'] ?></td>
                                <td><?php echo $fila['modelo'] ?></td>
                                <td><?php echo $fila['observacion'] ?></td>
                                <td><?php echo $fila['serial'] ?></td>
                                <td><?php echo $fila['fecha_re'] ?></td>
                                <td>
                                    <a href=" crud/editar.php?id=<?php echo $fila['idinfo']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href=" crud/eliminarinfo.php?id=<?php echo $fila['idinfo']?>" class="btn btn-danger" onclick="return ConfirmDelete()">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </tr>
                </thead>

            </table>


            <a href="inicioadmin.php" style="text-decoration:none; font-size:30px;"><h2>Ubicación Articulo</h2></a>
            <table class="table table-border ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Ambiente</th>
                        <th>Bloque</th>
                        <th>Editar/Eliminar</th>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM ubicacion";
                            $q = mysqli_query($conexion, $query);

                            while($fila=mysqli_fetch_array($q)){ ?>
                            <tr>
                                <td><?php echo $fila['id_u'] ?></td>
                                <td><?php echo $fila['ambiente'] ?></td>
                                <td><?php echo $fila['bloque'] ?></td>
                                
                                <td>
                                    <a href=" crud/editar.php?id=<?php echo $fila['idinfo']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href=" crud/eliminarinfo.php?id=<?php echo $fila['idinfo']?>" class="btn btn-danger" onclick="return ConfirmDelete()">
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
</body>
</html>