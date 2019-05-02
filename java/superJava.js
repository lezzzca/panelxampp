

$(document).ready(function () {
    $('#main').load('secciones/lista_proyectos.php',function () {
        $('#spinner').hide();
    });
$('.default-color').on("click",function (event) {
    event.preventDefault();
    alert('hola');
});
});
