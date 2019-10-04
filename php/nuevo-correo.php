<?php
    error_reporting(E_ALL & ~E_NOTICE);
    include ("conexion.php");
    $nombre = trim($_POST['user']);
    $msg = $_POST['msg'];
    $sqlQuery = "";
    

    if($nombre == "" ){
        echo '<div class="alert alert-danger alert-dismissible fade show">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> El correo ocupa un <strong>Destinatario</strong>.
        </div>';
    }

    else if($msg==""){
        echo '<div class="alert alert-danger alert-dismissible fade show">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> El correo esta vació, ocupa <strong>Texto en el mensaje</strong>.
        </div>';
    }

    else{
        $sqlQuery = "INSERT INTO mensajes (nombre,texto) VALUES ('$nombre', '$msg')";
        if ($conn->query($sqlQuery) === TRUE) {

            echo '<div class="alert alert-success alert-dismissible fade show">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Listo!</strong> El correo ha sido enviado correctamente a '.$nombre.'. Ahora puedes seguir enviando mensajes.
            </div>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    
    
    mysqli_close($conn);
?>