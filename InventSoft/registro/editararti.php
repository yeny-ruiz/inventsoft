<?php
  include("conexion.php");
 
  
    $id = $_GET['id'];
    $sql = "SELECT * FROM articiculo where codigo_art = $id";
    $run=mysqli_query($conexion, $sql);
    while($fila=mysqli_fetch_array($run)){
      $id = $fila['0'];
      $grupo = $fila['1'];
      $placa = $fila['2'];
      $valor_unitario = $fila['3'];
 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="css/registrar.css">
</head>
<body>
<div class="containe" style="overflow-x: hidden; height: 740px;">
    <div class="menu">
        <a href="../inicioadmin
        .php" style="text-decoration: none;"><h2>Editar Articulo</h2></a>
        
    </div>
    <form class="formulario" action="insertusu.php" method="POST">
        <h1>Editar</h1> 
        <div class="container">
            <div class="input-cont">
                <input type="text" id="caja" name="id" value="<?php echo $id ?>" required>
            </div>
            <div class="input-cont">
                <input type="text" id="caja" name="grupo" value="<?php echo $grupo ?>" required>     
             </div> 
             <div class="input-cont">

                <input type="text" id="caja" name="placa" value="<?php echo $placa ?>" required>     
             </div> 
             <div class="input-cont">
                <input type="number" id="caja" name="valoru" value="<?php echo $valor_unitario ?>" required>          
</div>
        
        <div class="input-cont">
            <input type="submit" id="botton" name="editar_art" value="EDITAR" >      
        </div>
        
    </div>
</form>
</div>
</body>
</html>