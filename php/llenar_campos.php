<?php
include ("conexion.php");
                        
$nombre = $_SESSION["usuario"];

$consulta = 'SELECT nombre FROM usuarios WHERE nombre <> "'.$nombre.'"';
$resultado=mysqli_query($conn, $consulta);
echo '<select class="browser-default custom-select mb-4" name="user" id="user">';
echo '<option value="" selected disabled>Selecciona un Contacto</option>';
if (mysqli_num_rows($resultado) > 0) {
    while($row = mysqli_fetch_assoc($resultado)) {
        echo "<option value=\"".$row["nombre"]."\">".$row["nombre"]."</option>";
    }
}
mysqli_close($conn);
?>