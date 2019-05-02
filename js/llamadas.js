$(document).ready(function () {

    $('#proyecto_form').focus(function () {
        $('.fa-folder').addClass('text-primary');
    });

    $('#proyecto_form').blur(function () {
        $('.fa-folder').removeClass('text-primary');
    });

    $('#descript_form').focus(function () {
        $('.fa-file-alt').addClass('text-primary');
    });

    $('#descript_form').blur(function () {
        $('.fa-file-alt').removeClass('text-primary');
    });

    $('#descript_form').focus(function () {
        $('.fa-file-alt').addClass('text-primary');
    });

    $('#descript_form').blur(function () {
        $('.fa-file-alt').removeClass('text-primary');
    });

});