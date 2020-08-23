<?php 

include "conexion.php";
include "articulos.php";


if (isset($_POST['ingresar'])) {
    $nombrea = $_POST['nombrea'];
    $nombreb = $_POST['nombreb'];
    $id = $codigo;

    $consu = "INSERT INTO ubicacion(ambiente, bloque, codigo_art)
    values ('$nombrea', '$nombreb', '$id')";

    $ejecu = mysqli_query($conexion, $consu);

    if($ejecu){
        header("Location:../inicioadmin.php");
        echo "Ubicación insertada correctamente";
    }else{
        header("Location:../ubicacion.html");
        echo "Eror al insertar ubicación";
    }
 }


 

?>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
