//funciones scriptcam
$(document).ready(function () {
    $("#webcam").scriptcam({
        fileReady: fileReady,
        cornerRadius: 20,
        cornerColor: 'e3e5e2',
        onError: onError,
        promptWillShow: promptWillShow,
        showMicrophoneErrors: false,
        onWebcamReady: onWebcamReady,
        //setVolume: setVolume,
        setVolume: 50,
        timeLeft: timeLeft,
        fileName: 'demofilename',
        connected: showRecord,
        maximumTime: 15,
        videoRoomThumbnails: true,
        path: 'js/scriptcam/',
        showDebug: false,
        width: 480,
        height: 360
    });

    setVolume(10);


    $('#recordStartButton').click(function () {
        startRecording()
    })

    $('#recordPauseResumeButton').click(function () {
        pauseResumeCamera()
    })

    $('#recordStopButton').click(function () {
        closeCamera()
    })

    window.alert = function (al, $) {
        return function (msg) {
            al.call(window, msg);
            $(window).trigger("okbuttonclicked");
        };
    }(window.alert, window.jQuery);

    $(window).on("okbuttonclicked", function () {
        $('#recordStopButton').click()
    });

    cargarGaleria();
//    cargarLigthbox ();

});


function cargarLigthbox () {

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
    $.post("listado.json")
        .done(function (data) {
            // Cargamos la informacion de la galeria
            // en caso que data regrese como str convertimos en objeto json
            if ("object" != typeof data)
                var data = JSON.parse(data);
            generaGaleria(data);

            cargarLigthbox ();

        });
}

// en base al array data generamos la galeria de imagenes
function generaGaleria(data) {
    //todo link archivo
    var htmlGaleria = "";
    for (i = 0; i < data.length; i++) {
        nombreimagen = data[i]["filename"];
        imagen = '<img src="http://appss.misiva.com.ec/videos/' + nombreimagen + '.gif">';
        link = '<a href="'+ nombreimagen +'.html" data-title="Page 1" data-toggle="lightbox" data-parent="" data-gallery="remoteload">' + imagen + '</a>';
        htmlGaleria = htmlGaleria + link;
    }
    $("#galeria").html(htmlGaleria);
};

function grabarBaseDatosVideo(filename, fileNameNoExtension) {
    $.post("test.php", {filename: filename, fileNameNoExtension: fileNameNoExtension})
        .done(function (data) {
            console.log("Data Loaded: " + data);
        });
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
    //$("#slider").slider("option", "disabled", true);
    $("#recordPauseResumeButton").attr("disabled", true);
    $("#recordStopButton").attr("disabled", true);
    $.scriptcam.closeCamera();
    $('#message').html('Un momento conversión del vídeo en proceso..');
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
function fileReady(fileName) {
    $('#recorder').hide();
    var fileName = fileName.replace("http://europe.www.scriptcam.com/dwnld/", "http://appss.misiva.com.ec/videos/");
    //$('#message').html('This file is now dowloadable for five minutes over <a href="'+fileName+'">here</a>.');
    $('#message').html('');
    var fileNameNoExtension = fileName.replace(".mp4", "");
    muestraJwplayer(mediaplayer, filename, fileNameNoExtension)
    grabarBaseDatosVideo(filename, fileNameNoExtension);
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
    //$("#slider").slider("option", "disabled", false);
    //$("#slider").slider("option", "value", volume);
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
    alert('A security dialog will be shown. Please click on ALLOW.');
}
function setVolume(value) {
    value = parseInt(32 * value / 100) + 1;
    for (var i = 1; i < value; i++) {
        $('#LedBar' + i).css('visibility', 'visible');
    }
    for (i = value; i < 33; i++) {
        $('#LedBar' + i).css('visibility', 'hidden');
    }
}
function timeLeft(value) {
    $('#timeLeft').val(value);
}
function changeCamera() {
    $.scriptcam.changeCamera($('#cameraNames').val());
}
function changeMicrophone() {
    $.scriptcam.changeMicrophone($('#microphoneNames').val());
}
//fin funciones scriptcam