//funciones scriptcam
$(document).ready(function () {

    //llamada para mostrar webcam en div, incluye botones
    crearBotonesInterface();
});

function crearBotonesInterface() {
    //botones home
    $('.btn-home-home').click(function () {
        ocultarTodosSeccion();
        $('#home').removeClass("hidden").show();
    })
    $('.btn-home-instrucciones').click(function () {
        ocultarTodosSeccion();
        $("#instrucciones").removeClass("hidden").show();
    })
    $('.btn-home-subir-video').click(function () {
        if (idParticipante != 0) {
            $.post(accion +   controladorApp + "/verificarParticipante", {idParticipante: idParticipante})
                .done(function (data) {
                    if (data != 'F') {
                        ocultarTodosSeccion();
                        $("#recorder").removeClass("hidden").show();
                        $('#uploadFile').hide();
                        $('#mediaplayer').hide();
                        $('#volverGrabar').hide();
                        $('#btnContinuarGraba').hide();
                        $('#recordStartButton').removeClass("hidden").show();
                        $('#recordPauseResumeButton').hide();
                        $('.btn-subir-video').hide();
                        $('#mediaplayer').removeClass("hidden").show();
                        $('#subirVideo').removeClass("hidden").show();
                        $('#webcam-container').removeClass("hidden").show();
                        $('#btnContinuarSubir').hide();
                        $('#loadergif').hide();


                        cargarWebCam();

                    } else {
                        // no esta registrado

                        //ocultarTodosSeccion();
                        $("#recorder").removeClass("hidden").show();
                        $('#uploadFile').hide();
                        $('#mediaplayer').hide();
                        $('#volverGrabar').hide();
                        $('#btnContinuarGraba').hide();
                        $('#recordStartButton').removeClass("hidden").show();
                        $('#recordPauseResumeButton').hide();
                        $('#mediaplayer').removeClass("hidden").show();
                        $('#subirVideo').removeClass("hidden").show();
                        $('.btn-subir-video').hide();
                        $('#btnContinuarSubir').hide();
                        $('#loadergif').hide();
                        $('#webcam-container').removeClass("hidden").show();


                        $('#fbid').val(idParticipante);

                        //cargarWebCam();
                        ocultarTodosSeccion();
                        $("#registro").removeClass("hidden").show();
                    }
                });
        }
    })
    $('.btn-home-galeria').click(function () {
        ocultarTodosSeccion();
        $("#galeria").removeClass("hidden").show();
        cargarGaleria();
    })
    $('.btn-home-registro').click(function () {
        ocultarTodosSeccion();
        $("#registro").removeClass("hidden").show();
    })

    $('#volverGrabar').click(function () {
        $('#webcam-container').removeClass("hidden").show();
        $('#mediaplayer-container').hide();
        $('#volverGrabar').hide();
        $('#btnContinuarGraba').hide();
        $('#recordStartButton').removeClass("hidden").show();
        $('#recordPauseResumeButton').hide();
        $('#subirVideo').removeClass("hidden").show();
    })
    $('#btnContinuarGraba').click(function () {
        $('#webcam-container').removeClass("hidden").show();
        $('#mediaplayer-container').hide();
        $('#volverGrabar').hide();
        $('#btnContinuarGraba').hide();
        $('#recordStartButton').removeClass("hidden").show();
        $('#recordPauseResumeButton').hide();
        $('#subirVideo').removeClass("hidden").show();
        $('#recorder').hide();
        $('#galeria').removeClass("hidden").show();
        grabarBaseDatosVideo(fileNameSolo);
        cargarGaleria();

    })
    $('#btnContinuarSubir').click(function () {
        $('#webcam-container').removeClass("hidden").show();
        $('#mediaplayer-container').hide();
        $('#volverGrabar').hide();
        $('#btnContinuarGraba').hide();
        $('#recordStartButton').removeClass("hidden").show();
        $('#recordPauseResumeButton').hide();
        $('#subirVideo').removeClass("hidden").show();
        $('#recorder').hide();
        $('#galeria').removeClass("hidden").show();
        grabarImagen();
    })

    $("input[type=file]").on('change', function () {
        $('.btn-subir-video').removeClass("hidden").show();
    });

    if (vervideo > 0 )
    {
        ocultarTodosSeccion();
        $("#galeria").removeClass("hidden").show();
        cargarGaleria();
       // box-buscar-video
        $("#box-buscar-video").val(nombreUsuarioVideo);
        $("#boton-buscar-video").click();



    };
}

function ocultarTodosSeccion() {
    $('.seccion').hide();
}
function cargarWebCam() {
    $('#webcam-container').removeClass("hidden").show();
    $("#webcam").scriptcam({
        fileReady: fileReady,
        cornerRadius: 20,
        cornerColor: 'e3e5e2',
        onError: onError,
        promptWillShow: promptWillShow,
        showMicrophoneErrors: false,
        onWebcamReady: onWebcamReady,
        //setVolume: setVolume,
        setVolume: 80,
        timeLeft: timeLeft,
        fileName: 'demofilename',
        connected: showRecord,
        maximumTime: 15,
        videoRoomThumbnails: true,
        path: accion + 'js/karaokegalaxya/scriptcam/',
        showDebug: false,
        width: 480,
        height: 360
    });
    recordStartButton
    $('#recordStartButton').click(function () {
        $('#subirVideo').hide();
        $('#recordPauseResumeButton').removeClass("hidden").show();
        $('#recordStopButton').removeClass("hidden").show();
        startRecording()
    })
    $('#subirVideo').click(function () {
        $('#recordStartButton').hide();
        $('#recordPauseResumeButton').hide();
        $('#webcam-container').hide();
        $('#uploadFile').removeClass("hidden").show();
        $('#subirVideo').hide();
    })

    $('#recordPauseResumeButton').click(function () {
        pauseResumeCamera()
    })

    $('#recordStopButton').click(function () {
        closeCamera()
    })

    // evento de la ventana alert
    window.alert = function (al, $) {
        return function (msg) {
            al.call(window, msg);
            $(window).trigger("okbuttonclicked");
        };
    }(window.alert, window.jQuery);

    $(window).on("okbuttonclicked", function () {
        $('#recordStopButton').click()
    });

    $("#formuploadvideo").submit(function (event) {
        var url = accion + controladorApp + "/uploadvideo";

        $.ajax({
            url: url,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                nombreArchivoSubido = data;
                var nuevovideo = '<video id="videoSubido" width="100%" controls="" autoplay="">' +
                    '<source src="' + accion + 'videos/' + nombreArchivoSubido + '" type="video/mp4">' +
                    'Su navegador no soporta video HTML5.' +
                    '</video>';
                $('.videoSubido').html(nuevovideo);
                setTimeout(callbackFunction, 3000);
                $('#btnContinuarSubir').removeClass("hidden").show();
                $('.btn-subir-video').hide();
            }
        });
        event.preventDefault();
    });

    $("#registro_form").submit(function (event) {
        var url = accion + controladorApp + "/register";
        $.ajax({
            url: url,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                ocultarTodosSeccion();
                $("#recorder").removeClass("hidden").show();
                $('#uploadFile').hide();
                $('#mediaplayer').hide();
                $('#volverGrabar').hide();
                $('#btnContinuarGraba').hide();
                $('#recordStartButton').removeClass("hidden").show();
                $('#recordPauseResumeButton').hide();
                $('.btn-subir-video').hide();
                $('#mediaplayer').removeClass("hidden").show();
                $('#subirVideo').removeClass("hidden").show();
                $('#btnContinuarSubir').hide();
                cargarWebCam();
            }
        });
        event.preventDefault();
    });
}
function callbackFunction() {
    var canvas = document.getElementById('canvas');
    var video = document.getElementById('videoSubido');
    canvas.getContext('2d').drawImage(video, 0, 0, 300, 200);
}
function grabarImagen() {
    // Generate the image data
    var Pic = document.getElementById("canvas").toDataURL("image/png");
    Pic = Pic.replace(/^data:image\/(png|jpg);base64,/, "")

    $.post(accion + controladorApp + "/uploadimagen", {imageData: Pic, nombreArchivoSubido: nombreArchivoSubido})
        .done(function (data) {
            archivoSubidoSolo = data;
            grabarBaseDatosVideo(archivoSubidoSolo);
            cargarGaleria();
        });
}

var nombreArchivoSubido = "";

function cargarLigthbox() {

    // delegate calls to data-toggle="lightbox"
    $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function (event) {
        event.preventDefault();
        return $(this).ekkoLightbox({
            onShown: function () {
                if (window.console) {
                    return console.log('Checking our the events huh?');
                }
            },
            onNavigate: function (direction, itemIndex) {
                if (window.console) {
                    return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                }
            }
        });
    });
}


function cargarGaleria() {
    $.post(accion + controladorApp + "/listadojson", {filtro:nombreUsuarioVideo})
        .done(function (data) {
            // Cargamos la informacion de la galeria
            // en caso que data regrese como str convertimos en objeto json
            if ("object" != typeof data)
                var data = JSON.parse(data);

            generaGaleria(data);
            cargarLigthbox();
            eventoBuscarVideo();
        });
}


function eventoBuscarVideo() {
    $(".boton-buscar-video").click(function () {
        filtro = $("#box-buscar-video").val();
        $.post(accion + controladorApp + "/listadojson", {filtro: filtro })
            .done(function (data) {
                // Cargamos la informacion de la galeria
                // en caso que data regrese como str convertimos en objeto json
                if ("object" != typeof data)
                    var data = JSON.parse(data);

                generaGaleria(data);
                cargarLigthbox();
                eventoBuscarVideo();
            });
    })

}
// en base al array data generamos la galeria de imagenes
function generaGaleria(data) {
    //todo link archivo
    var cabeceraGaleria = '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">' +
        '<div class="carousel-inner" role="listbox">';

    var finGaleria = '</div>' +
        '<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">' +
        '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> ' +
        '<span class="sr-only">Previous</span></a>' +
        ' <a class="right carousel-control" href="#carousel-example-generic" role="button"  data-slide="next">' +
        '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>' +
        '<span class="sr-only">Next</span></a>' +
        '</div>';

    var htmlGaleria = "";
    var iteraciones = Math.ceil(data.length / 6);

    for (j = 0; j < iteraciones; j++) {
        var divimagen = "";
        for (i = 0 + (j * 6); i < 6 + (j * 6); i++) {
            if (typeof data[i] != 'undefined') {
                nombreimagen = data[i]["filename"];
                idimagen = data[i]["id"];
                imagen = '<img src="http://appss.misiva.com.ec/videos/' + nombreimagen + '.gif" class="imagen-galeria img-responsive">';
                link = '<div class="col-md-4 col-sm-4 col-xs-6"><a href="' + accion + controladorApp + '/video/' + nombreimagen + '/' + idimagen + '" data-title="" data-toggle="lightbox" data-parent="" data-gallery="remoteload">' + imagen + '</a></div>';
                divimagen = divimagen + link;
            }
        }
        // pegamos item
        if (j == 0) primero = "active";
        else
            primero = "";
        htmlGaleria = cabeceraGaleria + htmlGaleria + '<div class="item ' + primero + '">' + divimagen + '</div> ' + finGaleria;
    }
    $("#galeria-imagenes").html(htmlGaleria);
    //  $('.carousel').carousel();
};

function grabarBaseDatosVideo(filenameOriginal) {
    $.post(accion + controladorApp + "/grabavideo", {
        filename: filenameOriginal,
        id_user: 2000,
        fbid: idParticipante,
        nombre: nombreParticipante
    })
}

function showRecord() {
    $("#recordStartButton").attr("disabled", false);
}

function startRecording() {
    $("#recordStartButton").attr("disabled", true);
    $("#recordStopButton").attr("disabled", false);
    $("#recordPauseResumeButton").attr("disabled", false);
    $.scriptcam.startRecording();
}
function closeCamera() {

    $("#recordStartButton").hide();
    $("#recordPauseResumeButton").hide();
    $("#recordStopButton").hide();
    $.scriptcam.closeCamera();
    $('#loadergif').removeClass('hidden').show();
    $('#message').html('Un momento conversión del vídeo en proceso...');
}
function pauseResumeCamera() {
    if ($("#recordPauseResumeButton").html() == 'Pausa') {
        $("#recordPauseResumeButton").html("Continuar");
        $.scriptcam.pauseRecording();
    }
    else {
        $("#recordPauseResumeButton").html("Pausa");
        $.scriptcam.resumeRecording();
    }
}
// cuando termina de convertir el archivo
var fileNameSolo = "";
var fileName = "";
function fileReady(fileName) {
    //$('#recorder').hide();
    $('#webcam-container').hide();
    var filenameOriginal = fileName;
    fileName = fileName.replace("http://europe.www.scriptcam.com/dwnld/", "http://appss.misiva.com.ec/videos/");
    fileName = fileName.replace("http://usa.www.scriptcam.com/dwnld/", "http://appss.misiva.com.ec/videos/");
    //$('#message').html('This file is now dowloadable for five minutes over <a href="'+fileName+'">here</a>.');
    $('#message').html('');
    var fileNameNoExtension = fileName.replace(".mp4", "");

    fileNameSolo = fileNameNoExtension.replace("http://appss.misiva.com.ec/videos/", "");

    muestraJwplayer('mediaplayer', fileName, fileNameNoExtension);

    //luego que se sube el video mostramos
    //$('#webcam-container').hide();
    //$('#mediaplayer').removeClass("hidden").show()
    $('#volverGrabar').removeClass("hidden").show();
    $('#btnContinuarGraba').removeClass("hidden").show();
    $('#recordStartButton').hide();
    $('#recordPauseResumeButton').hide();
    $('#subirVideo').hide();

}

function muestraJwplayer(divContent, filename, fileNameNoExtension) {
    jwplayer(divContent).setup({
        width: 480,
        height: 360,
        file: filename,
        image: fileNameNoExtension + ".gif"
    });
    $('#' + divContent).show();
}

function onError(errorId, errorMsg) {
    alert(errorMsg);
}

function onWebcamReady(cameraNames, camera, microphoneNames, microphone, volume) {
    $.each(cameraNames, function (index, text) {
        $('#cameraNames').append($('<option></option>').val(index).html(text))
    });
    $('#cameraNames').val(camera);
    $.each(microphoneNames, function (index, text) {
        $('#microphoneNames').append($('<option></option>').val(index).html(text))
    });
    $('#microphoneNames').val(microphone);
}

function promptWillShow() {
    alert('Se mostrará un cuadro de diálogo de seguridad. Por favor, haga clic en PERMITIR.');
}

function timeLeft(value) {
    $('#message').html("Grabando " + value + " seg.");
}
function changeCamera() {
    $.scriptcam.changeCamera($('#cameraNames').val());
}
function changeMicrophone() {
    $.scriptcam.changeMicrophone($('#microphoneNames').val());
}
//fin funciones scriptcam