<?php
  include("conexion.php");
 
  
    $id = $_GET['id'];
    $sql = "SELECT * FROM descripcion1 where id_descripcion = $id";
    $run=mysqli_query($conexion, $sql);
    while($fila=mysqli_fetch_array($run)){
      $id = $fila['0'];
      $nombre_art = $fila['1'];
      $tamaño = $fila['2'];
      $tipo_elemento = $fila['3']; 
    }?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción Articulo</title>
    <link rel="stylesheet" href="../css/articulo.css">
</head>
<body>
    <div class="containe">
        <div class="menu">
            <a href="articulo.html" style="text-decoration: none;"><h2>Descripcion Articulo</h2></a>
        </div>
        <form action="insertusu.php" method="POST">
            <div class="descrip">
                <h1>Descripción</h1>

                <div class="input-cont">
                    <input type="text" name="id" id="input"  value="<?php echo $id ?>" required>      
                </div>
                <div class="input-cont">
                    <input type="text" name="nombre" id="input"  value="<?php echo $nombre_art ?>" required>      
                </div>
                <div class="input-cont">
                    <input type="number" name="tamaño"  id="input"  value="<?php echo $tamaño ?>" required>      
                </div>
                <div class="input-cont">
                    <input type="text" name="elemento" id="input"  value="<?php echo $tipo_elemento ?>" required>      
                </div>
                <div class="input-cont">
                    <input type="submit" id="botton" name="editar_desc" value="EDITAR" id="input">      
                </div>
            </div>
        </form>
</body>
</html>