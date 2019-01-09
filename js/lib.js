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
$("#imagen").mouseenter(function(){
$(this).css("background-color","green");
});
$("#imagen").mouseleave(function(){
    $(this).css("background-color","transparent");
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

    var llamada=$.getJSON(
        '../controller/getDataCar.php', //URL
        { //Datos de envío
            placa : param
        }, 
        function(datos) { //trabajo a realizar en caso de éxito
           
                $('#preview').append("<img src='data:image/jpg;base64,"+datos+"'/>");
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