$(document).ready(function() {
    $("#eliminar").hide();
    $("#btn-eliminar2").hide();

    $("#btn-eliminar").click(function() {
        var url = "./php/borrar_correos.php";
        $("#eliminar").show();
        $("#btn-eliminar").hide();
        $("#btn-eliminar2").show();

        $("#eliminar").droppable({

            drop: function(event, ui) {
                var item_id = $(ui.draggable).attr('id');
                // var idlocation = $(this).attr("id");
                var user = $("#current_user").val();
                console.log("usuario " + user + " location " + item_id);
                var parametros = {
                    "usuario": user,
                    "location": item_id
                };
                $.ajax({
                    type: "POST",
                    async: true,
                    url: url,
                    timeout: 12000,
                    data: parametros,
                    dataType: "html",
                    success: function(response) {
                        $("#respuesta2").html(response);
                        ui.draggable.remove();
                    }
                });


            },


        });




    });

    $("#btn-eliminar2").click(function() {
        $("#btn-eliminar2").hide();
        $("#btn-eliminar").show();
        $("#eliminar").hide();
    });

});