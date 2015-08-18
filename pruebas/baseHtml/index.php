<!DOCTYPE html>
<html>
<head>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

    <script type="text/javascript" src="js/jwplayer/jwplayer.js"></script>
    <script language="JavaScript" src="js/scriptcam/scriptcam.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/ligthbox/ekko-lightbox.min.js"></script>

    <script language="JavaScript" src="js/app.js"></script>

    <link href="fonts/Roboto-Bold/styles.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/Roboto-Light/styles.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/ligthbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div id="home" class="">
    <div class="roboto-light">Home</div>
    <div class="btn-home-instrucciones">Instrucciones</div>
    <div class="btn-home-subir-video">Subir video</div>
    <div class="btn-home-galeria">Galería</div>
</div>

<div id="instrucciones" class="hidden">
    <div class="roboto-bold">instrucciones</div>
</div>

<div id="registro" class="hidden">
    registro
</div>

<div id="recorder" class="hidden">
    webcam
    <div id="message" class="roboto-light"></div>

    <div id="webcam"></div>
    <div style="clear:both">
        <span><input type="text" id="timeLeft"></span>
        <button id="recordStartButton" class="btn btn-small" disabled>Grabar</button>
        <button id="recordPauseResumeButton" class="btn btn-small" disabled>Pausar
        </button>
        <button id="recordStopButton" class="btn btn-small" disabled>Detener</button>
    </div>
    <div id="mediaplayer" class></div>
</div>

<div id="galeria" class="hidden">
    Galeria
</div>

</body>
</html>