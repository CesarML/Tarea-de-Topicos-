<?php
    include ("conexion.php");
    session_start();

    $nombre = $_SESSION["usuario"];

    $consulta = "SELECT nombre FROM usuarios WHERE nombre <> ".$nombre;
    $resultado=mysqli_query($conn, $consulta);

    $filas=mysqli_num_rows($resultado);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value=\"".$row["nombre"]."\">".$row["nombre"]."</option>";
        }
    }
    mysqli_close($conn);
?>