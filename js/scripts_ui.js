$(document).ready(function() {
    $(document).tooltip();
<<<<<<< HEAD
    $("#create").hide();
    $("#inbox").hide();
    $("#eliminar").hide();
=======
    $( "#create" ).hide();
    $( "#inbox" ).hide();
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9

    $("#create-btn").click(function() {
        mostrarCreate();
    });

    $("#inbox-btn").click(function() {
        mostrarInbox();
    });

    function mostrarCreate() {
        var options = {};
<<<<<<< HEAD
        $("#inbox").hide();
        $("#create").show("fade", options, 500);
=======
        $( "#inbox" ).hide();
        $( "#create" ).show( "fade", options, 500 );
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9
    };

    function mostrarInbox() {
        var options = {};
<<<<<<< HEAD
        $("#create").hide();
        $("#inbox").show("fade", options, 500);
=======
        $( "#create" ).hide();
        $( "#inbox" ).show( "fade", options, 500 );
>>>>>>> 23d4518fc7a7d4dd3f09de57bc86598f0c1032b9
    };

});