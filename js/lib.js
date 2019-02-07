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

Ext.require([
    'Ext.plugin.Viewport'
]);
function getPreview(param){
   
    var ventana;
    var llamada=$.get(
        '../controller/getDataCar.php', //URL
        { //Datos de envío
            placa : param
        }, 
        function(datos) { //el parámetro es el objeto que invoca a la función
            if (!ventana) {
                ventana = new Ext.Window({
                    //animateTarget : btn.el, //Elemento (nodo HTML) del botón, tiene un efecto visual
                    html : "<img src='"+datos+"' with='200' height='200'/>",
                    closeAction : 'hide',
                    height : 200,
                    width : 300,
                    modal: true, //desactiva el resto de la página
                    title: 'Dialoguito',
                    constrain : true //si se limita a su contenedor o no
                });
            }
            ventana.show(); //En este caso, sólo se crea una vez y se oculta/muestra
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

                
            
}