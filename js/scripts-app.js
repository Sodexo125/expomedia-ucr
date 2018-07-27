
$('document').ready(function(){
        var myNav = document.getElementById('mynav');
        window.onscroll = function () { 
        "use strict";
        if (document.body.scrollTop >= 200 ) {
            myNav.classList.add("nav-colored");
            myNav.classList.remove("nav-transparent");
        } 
        else {
            myNav.classList.add("nav-transparent");
            myNav.classList.remove("nav-colored");
        }
        };
});

// ESTO HAY QUE METERLO EN UN JS EN ASSETS
$('#boton-menu').click(cambiarClaseVideo); //verificamos el elemento btn menu y llamamos una funcion

function cambiarClaseVideo() {
        // añadir clase si no existía; eliminarla si ya existía
        document.getElementById("videoITM").classList.toggle('efectoBluirVideo');
        document.getElementById("contenido").classList.toggle('efectoBluirVideo');
        document.getElementById("titulo-expomedia").classList.toggle('efectoBluirVideo');
        
}
