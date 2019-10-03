$(document).ready(function() {
    $(document).tooltip();
    $( "#create" ).hide();
    $( "#inbox" ).hide();

    $("#create-btn").click(function(){
        mostrarCreate();
    });

    $("#inbox-btn").click(function(){
        mostrarInbox();
    });

    function mostrarCreate(){
        var options = {};
        $( "#inbox" ).hide();
        $( "#create" ).show( "fade", options, 500 );
    };

    function mostrarInbox(){
        var options = {};
        $( "#create" ).hide();
        $( "#inbox" ).show( "fade", options, 500 );
    };

});