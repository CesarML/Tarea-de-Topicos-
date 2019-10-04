<?php 
    include("conexion.php");
    $usuario = $_POST["usuario"];
    $location = $_POST["location"];
    $limit = $location - 1;
    $results = 1;
    $consulta= 'SELECT id FROM mensajes WHERE nombre = "'.$usuario.'" LIMIT '.$limit. "," .$results;
    $resultado=mysqli_query($conn, $consulta);    
    $rows = mysqli_num_rows($resultado);

    if (mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)) {
            $id = $row["id"];
        }

        $sql = "DELETE FROM mensajes WHERE id = ".$id;

        if(mysqli_query($conn,$sql)){
            echo '<div class="alert alert-danger alert-dismissible fade show">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>El correo '.$location.' de '.$usuario.' ha sido eliminado correctamente.</strong>
            </div>';
        }else{
            "Error al eliminar " .mysqli_error($conn);
        }
        
    }

        
       


?>