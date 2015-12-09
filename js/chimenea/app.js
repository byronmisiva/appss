var audioOnOff = 1;
var backgroundAudio;

window.onload = function () {
	backgroundAudio = document.getElementById("bgAudio");
//    backgroundAudio.volume = 0.1;
//	backgroundAudio.volume = 0;
//	backgroundAudio.src = accion + "/audio/audio.mp3";

};

$(document).ready(function () {
	$('.js--btn-registro').click(function () {
		mostrarSeccion('.home');

		/*$.post(accion + controladorApp + "/validarCodigo", {
			nombre: $('#nombre').val(),
			apellido: $('#apellido').val(),
			telefono: $('#telefono').val(),
			cedula: $('#cedula').val(),
			mail: $('#mail').val(),
			ciudad: $('#ciudad').val(),
			user: $('#user').val(),
			fbid: $('#fbid').val()
		})
			.done(function (data) {
				if (data == 'F') {
					// todo : implementar function
					// mostrarCodigoErrado()
				} else {

				}
			});*/
	});

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

	$('.js--btn-ranking').click(function () {
		mostrarSeccion('.ranking')
	});

	$('.js--btn-jugar').click(function () {
		mostrarSeccion('.jugar')
	});
	$('.js--btn-instrucciones').click(function () {
		mostrarSeccion('.instrucciones')
	});
	$('.js--btn-resultados').click(function () {
		mostrarSeccion('.resultados')
	});
});

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
				mostrarSeccion('.registro');
			} else {
				mostrarSeccion('.registro');
			}
		}
	});
}

function enviarForma(forma) {
	$.ajax({
		type: "POST",
		url: accion + controladorApp + "/register",
		data: $('#' + forma).serialize(),
		success: function (respuesta2) {
			mostrarSeccion('.instruciones')
		}
	});
	return false;
}