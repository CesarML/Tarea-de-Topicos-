$(document).ready(function(){
    $("#nuevo-correo").submit(function(e){
        e.preventDefault();
        var url = './php/nuevo-correo.php';
            $.ajax({
                type: "POST",
                async: true,
                url: url,
                timeout: 12000,
                data: $("#nuevo-correo").serialize(),
                dataType: "html",
                success: function(response)
                {
                    $("#respuesta").html(response);
                    $("#msg").val("");
                    $("#user").val("");
                }
            });
    });
});