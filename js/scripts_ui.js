$(document).ready(function() {
    $(document).tooltip();
    $( "#create" ).hide();
    $( "#received" ).hide();

    $("#create-btn").click(function(){
        mostrarCreate();
    });

    $("#inbox-btn").click(function(){
        mostrarInbox();
    });

    function mostrarCreate(){
        var options = {};
        $( "#received" ).hide();
        $( "#create" ).show( "fade", options, 500 );
    };

    function mostrarInbox(){
        var options = {};
        $( "#create" ).hide();
        $( "#received" ).show( "fade", options, 500 );
    };

});