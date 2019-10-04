<?php
    include("conexion.php");
    $usuario = $_POST["usuario"];
    $consulta = 'SELECT * FROM mensajes WHERE nombre = "'.$usuario.'"';
    $resultado=mysqli_query($conn, $consulta);
    $contador = 1;
<<<<<<< HEAD
    

    if (mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)) {
            echo '<li class="correo" id="'.$contador.'" style="text-align: center" data-value="'.$row["texto"].'"><i class="fas fa-envelope fa-5x"></i><p data-value="'.$contador.'">'.$contador.'</p></li>';
            $contador++;
        }
    }
    else{
        echo '<div class="alert alert-warning alert-dismissible fade show">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>¡No tiene mensajes por el momento, su bandeja esta vacia!</strong>.
        </div>';
    }
=======

    if (mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)) {
            echo '<li class="correo" style="text-align: center" data-value="'.$row["texto"].'"><i class="fas fa-envelope fa-5x"></i><p>'.$contador.'</p></li>';
            $contador++;
        }
    }
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9
    mysqli_close($conn);
?>