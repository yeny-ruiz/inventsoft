<?php
  include("conexion.php");
 
  
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios where id_usu = $id";
    $run=mysqli_query($conexion, $sql);
    while($fila=mysqli_fetch_array($run)){
      $id = $fila['0'];
      $nombre = $fila['1'];
      $apellido = $fila['2'];
      $telefono = $fila['3'];
      $correo = $fila['4'];
 
    }
  
 
  if (isset($_POST['editar'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido =$_POST['apellidos'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
 
    $ejecutar = "UPDATE usuarios set nombre ='$nombre',apellidos ='$apellido',telefono='$telefono', correo = '$correo', contraseña ='$contraseña'  where id='$id'";
    mysqli_query($conexion,$ejecutar);
    header("location:listai.php");
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
        <a href="../listai.php" style="text-decoration: none;"><h2>Editar usuario</h2></a>
        
    </div>
    <form class="formulario" action="insertusu.php" method="POST">
        <h1>Editar</h1> 
        <div class="container">
            <div class="input-cont">
                <input type="text" id="caja" name="id" value="<?php echo $id ?>" required>
            </div>
            <div class="input-cont">
                <input type="text" id="caja" name="nombre" value="<?php echo $nombre ?>" required>     
             </div> 
             <div class="input-cont">

                <input type="text" id="caja" name="apellidos" value="<?php echo $apellido ?>" required>     
             </div> 
             <div class="input-cont">
                <input type="number" id="caja" name="telefono" value="<?php echo $telefono ?>" required>          
            </div>
         <div class="input-cont">
            
            <input type="text" id="caja" name="correo" value="<?php echo $correo ?>" required>                           
        </div>
        
        <div class="input-cont">
            <input type="submit" id="botton" name="editar" value="EDITAR" >      
        </div>
        
    </div>
</form>
</div>
</body>
</html>