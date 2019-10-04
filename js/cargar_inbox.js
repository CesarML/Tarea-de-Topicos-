<<<<<<< HEAD
$(document).ready(function() {
    $("#inbox-btn").click(function() {
        var url = "./php/cargar_correos.php";

=======
$(document).ready(function(){
    $("#inbox-btn").click(function(){
        var url = "./php/cargar_correos.php"
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9
        $.ajax({
            type: "POST",
            async: true,
            url: url,
            timeout: 12000,
<<<<<<< HEAD
            data: "usuario=" + $("#current_user").val(),
            dataType: "html",
            success: function(response) {
                $("#respuesta_inbox").html(response);
                $(".correo").draggable({
                    revert: true
                });

                $("li").dblclick(function() {

                    var location = $(this).attr("id");
                    var value = $(this).closest('li').data('value');
                    var mensaje = '<div><p>' + value + '</p></div>';

                    $("#contenedor").add(mensaje).dialog({
                        title: "Mensaje No. " + location,
                        closeText: ""
=======
            data: "usuario="+$("#current_user").val(),
            dataType: "html",
            success: function(response)
            {
                $("#respuesta_inbox").html(response);
                $(".correo").draggable();
                $("li").dblclick(function(){
                    var value = $(this).closest('li').data('value');
                    var mensaje = '<div><p>'+ value +'</p></div>';
                    $("#conteneder").add(mensaje).dialog({
                        title: "mensaje",
                        closeText: "" 
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9
                    }).dialogExtend({
                        "closable": true,
                        "collapsable": true,
                        "titlebar": "transparent",
                        "minimizeLocation": "right",
                        "icons": {
                            "close": "ui-icon-circle-close",
                            "collapse": "ui-icon-triangle-1-s",
                            "restore": "ui-icon-bullet"
                        }
                    });
                });
            }
        });
    });
});