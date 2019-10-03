$(document).ready(function(){
    $("#inbox-btn").click(function(){
        var url = "./php/cargar_correos.php"
        $.ajax({
            type: "POST",
            async: true,
            url: url,
            timeout: 12000,
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