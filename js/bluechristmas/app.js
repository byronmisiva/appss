audioOnOff = 1;

window.onload = function () {
    backgroundAudio = document.getElementById("bgAudio");
//    backgroundAudio.volume = 0.1;
    backgroundAudio.volume = 0;
    backgroundAudio.src = accion + "/audio/bluechristmas/bluechristmas.mp3";

}

$(document).ready(function () {
    $('.js--triggerAudio').click(function () {
        if (audioOnOff == 1) {
            audioOnOff = 0
            backgroundAudio.volume = 0;
            $('.js--triggerAudio').addClass('btn-audioOff').removeClass('btn-audioOn')
        } else {
            audioOnOff = 1
            backgroundAudio.volume = 0.1;
            $('.js--triggerAudio').addClass('btn-audioOn').removeClass('btn-audioOff')
        }
    });
    $('.js--btn-intro').click(function () {

        verificarGame(accion, idParticipante);
    });
})

function mostrarSeccion(seccion) {
    $('.secciones').hide();
    $(seccion).removeClass('hidden').show();
}

function verificarGame(accion, participante) {
    $.ajax({
        type: "GET",
        url: accion + controladorApp + "/verificarParticipante/" + participante,
        data: $('#datosOpciones').serialize(),
        success: function (response) {
            if (response == "F") {
                // si no existe el usuario en el formularios cargamos la info de FB
                if (modoDev == false) {
                    $("#fbid").val(participante);
                    $("#nombre").val(usuarioFB.first_name);
                    $("#apellido").val(usuarioFB.last_name);
                    $("#mail").val(usuarioFB.email);
                } else {
                    $("#fbid").val(participante);
                }
                console.log ("xxxx");
                mostrarSeccion('.registro');
            } else {
                console.log ("yyy");
                mostrarSeccion('.registro');
            }
        }
    });
};

function enviarForma(forma) {
    $.ajax({
        type: "POST",
        url: accion + controladorApp + "/register",
        data: $('#' + forma).serialize(),
        success: function (respuesta2) {
            //$('.container').load(accion + controladorApp + "/ingresoActividad/" + dis, {'user': idParticipante});
        }
    });
    return false;
};

