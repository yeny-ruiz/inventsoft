<?php
if(isset($_POST['submit'])) {
    $correo= $_POST['correo'];
    $contraseña=$_POST['contraseña'];
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
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
        <div class="general">
            
            <div class="menu">
            </div>
            <form class="formulario" method="post">
                <img src="images/inventsoft.PNG" width="150px" height="150px" style="margin-left: 170px;">
                    <h1>Iniciar Sesión</h1> 
                  
                <div class="container">
                     <div class="input-cont">
                        <i class="fas fa-envelope"></i>
                        <input type="text" id="caja" name="correo" placeholder="Correo electrónico" required>                           
                    </div>
                    <div class="input-cont">
                        <i class="fas fa-key"></i>
                        <input type="password" id="caja" name="contraseña" placeholder="Contraseña" required>          
                    </div>
                    <div class="input-cont">
                        <input type="submit" id="botton" name="registrarse" value="Ingresar" >      
                    </div>
                </div>
                <?php 
                include "registro/validar.php";
                ?>
            </form>
        </div>

</body>
</html>
