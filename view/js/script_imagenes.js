$(document).ready(function(){
    $(".img").hide().fadeIn(5000); //retardo aparición de imgenes en body

    // Agregar borde blanco al pasar el ratón por encima de cada imagen
    $(".img").on("mouseenter", function() {
        $(this).find("img").css("border", "3px solid white");
    });

    // Borde negro cuando el ratón deja de estar encima de la imagen
    $(".img").on("mouseleave", function() {
        $(this).find("img").css("border", "3px solid black");
    });

});