$(document).ready(function(){
$("p").mouseenter(function(){
    $(this).css("color","yellow");
});
$("p").mouseleave(function(){
    $(this).css("color","white");
}
);
$("input").mouseenter(function(){
    $(this).css("background-color","blue");
    });
    $("input").mouseleave(function(){
        $(this).css("background-color","white");
        });


});

function getPreview(param){
    $( "#preview" ).dialog({
        autoOpen: false,
        show: {
            effect: "slide", // probar fold, puff, scale, shake, slide
            duration: 500
        },
        hide: {
            effect: "shake", //probar scale, bounce, clip, drop, explode
            duration: 1000
        }
        , modal: true
    });

    var llamada=$.get(
        '../controller/getDataCar.php', //URL
        { //Datos de envío
            placa : param
        }, 
        function(datos) { //trabajo a realizar en caso de éxito
                $('#preview').html("<img src='"+datos+"' with='200' height='200'/>");
        });
            
        

        llamada.done(function() {
            console.log( "terminado" );
            })
            .fail(function() {
                console.log( "error" );
            })
            .always(function() {
                console.log( "completado" );
            });

                $( "#preview" ).dialog( "open" );
            
}