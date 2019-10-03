<?php
    include("conexion.php");
    $usuario = $_POST["usuario"];
    $consulta = 'SELECT * FROM mensajes WHERE nombre = "'.$usuario.'"';
    $resultado=mysqli_query($conn, $consulta);
    $contador = 1;

    if (mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)) {
            echo '<li class="correo" style="text-align: center" data-value="'.$row["texto"].'"><i class="fas fa-envelope fa-5x"></i><p>'.$contador.'</p></li>';
            $contador++;
        }
    }
    mysqli_close($conn);
?>