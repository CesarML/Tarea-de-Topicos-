<?php
    include ("conexion.php");
    $nombre = trim($_POST['username']);
    $password = $_POST['password'];

    $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' and password='$password'";
    $resultado=mysqli_query($conn, $consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas>0){
        header("location:../bienvenido.html");
    }

    else{
        header("location:../error.html");
    }

    mysqli_free_result($resultado);
    mysqli_close($conn);
?>