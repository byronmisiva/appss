window.onload = function () {

    backgroundAudio = document.getElementById("bgAudio");
    backgroundAudio.volume = 0.2;
//    backgroundAudio.volume = 0;
    backgroundAudio.src = accion + "/audio/bluechristmas/bluechristmas.mp3";
}


////// viejo


function verificarGame(accion, participante) {
    $(".espera").show();
    $.ajax({
        type: "GET",
        url: accion + controladorApp + "/verificarParticipante/" + participante,
        data: $('#datosOpciones').serialize(),
        success: function (response) {
            if (response == "F") {
                if (modoDev == false) {
                    $("#fbid").val(participante);
                    $("#nombre").val(usuarioFB.first_name);
                    $("#apellido").val(usuarioFB.last_name);
                    $("#mail").val(usuarioFB.email);
                } else {
                    $("#fbid").val(participante);
                }


                $(".view-registro").fadeIn();

                $(".intro-texto").fadeOut();
                $(".espera").hide();
                $(".logo-evento").hide();
                $(".view-ranking").hide();
                $(".view-instruciones").hide();
            } else {
                $(".container").load(accion + controladorApp + "/ingresoActividad/" + dis, {'user': participante});
                $(".espera").hide();
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
            $('.container').load(accion + controladorApp + "/ingresoActividad/" + dis, {'user': idParticipante});
        }
    });
    return false;
};

