<?php
    include ("conexion.php");
    $nombre = trim($_POST['user']);
    $msg = $_POST['msg'];
    
    $sqlQuery = "INSERT INTO mensajes VALUES ('$nombre', '$msg')";

    if ($conn->query($sqlQuery) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Listo!</strong> El correo ha sido enviado correctamente a '.$nombre.'. Ahora puedes seguir enviando mensajes.
        </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
?>