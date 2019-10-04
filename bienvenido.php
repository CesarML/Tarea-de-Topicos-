<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensajes AJAX</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="jquery-ui-1.10.2.sunny.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
</head>

<body>
    <header>
        <div class="barra">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#"><img src="./img/logo.png" width="95"></img></a>
                
                <div class="username">
                    <?php
                    echo '<h1>Bienvenido '.$_SESSION["usuario"].'</h1>';                
                    ?>
                </div>
                <!-- Links -->

                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" title="Cerrar Sesión" id="logout-btn" href="index.html"><i class="fas fa-sign-out-alt logout"></i></a>
                  </li>
                </ul>
              </nav>
        </div>
    </header>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-sm-3 control_panel">
                <div class="btn_control_panel">
                    <button class="btn btn-outline-primary" id="create-btn"><i class="fas fa-envelope" id="new-icon"></i><br>Nuevo Correo</button>
                </div>
                <div class="btn_control_panel">
                    <button class="btn btn-outline-primary" id="inbox-btn"><i class="fas fa-inbox" id="new-icon"></i><br>Bandeja</button>
                </div>  
            </div>
            <div class="col-sm-9" id="create">
                <div id="respuesta"></div>
                <form id="nuevo-correo" class="form-group" method="post">
                    <label for="name">Destinatario</label>
                        <?php
                            include ("./php/llenar_campos.php");
                        ?>
                    <label for="msg">Mensaje</label>
                    <textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Escriba su mensaje aqui"></textarea>
                    <button class="btn btn-outline-success" id="btn-enviar" type="submit"><i class="far fa-paper-plane" id="new-icon"></i><br>Enviar Correo</button>
                </form>
            </div>
            <?php
                echo '<input type="hidden" id="current_user" value="'.$_SESSION["usuario"].'">';
            ?>
            <div class="col-sm-9" id="inbox">
<<<<<<< HEAD
                <div id="respuesta2"></div>
                <div class="table" id="tabla_inbox">
                    <ul id="respuesta_inbox">
                    </ul>                                    
                    
                </div>
                <button class="btn btn-outline-danger" id="btn-eliminar"><i class="fa fa-trash" id="delete-icon"></i><br>Eliminar Correo</button>
                <button class="btn btn-outline-warning" id="btn-eliminar2"><i class="fa fa-exclamation-circle" id="delete-icon2"></i><br>No eliminar Correo</button>
                <br>

                <div id="eliminar">
                    <img src="img/bote.png" id="bote">                
                </div>
                
                <!-- <div id="contenedor">

                    <div id="eliminar">
                        
                        <img src="img/bote.png" id="bote">
                    </div>                    
                </div> -->
=======
                <div class="table" id="tabla_inbox">
                    <ul id="respuesta_inbox">
                    </ul>
                </div>
                <div id="contenedor"></div>
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9
            </div>
            
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="jQuery-jQuery-UI-Dialog-Enhancement-Plugin-dialogextend/build/jquery.dialogextend.js"></script>
<script src="./js/scripts_ui.js"></script>
<script src="./js/new_mail.js"></script>
<script src="./js/cargar_inbox.js"></script>
<<<<<<< HEAD
<script src="./js/delete_correos.js"></script>
=======
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9
</html>