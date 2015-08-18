<!DOCTYPE html>
<html>
<head>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
    <script type="text/javascript" src="js/jwplayer/jwplayer.js"></script>
    <script language="JavaScript" src="js/scriptcam/scriptcam.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/ligthbox/ekko-lightbox.min.js"></script>
    <script type="text/javascript">

    </script>

    <script language="JavaScript" src="js/app.js"></script>

    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/Roboto-Bold/styles.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/Roboto-Light/styles.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/Roboto-Light/styles.css" rel="stylesheet" type="text/css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="js/ligthbox/ekko-lightbox.min.css" rel="stylesheet">
</head>
<body>
<div id="message" class="roboto-light">Ejemplo de texto </div>
<div id="message1" class="roboto-bold">Ejemplo de texto </div>
<div id="recorder">
    <div id="webcam">
    </div>
    <div style="clear:both"/>
			<span>
			<input type="text" id="timeLeft">
			</span>
    <button id="recordStartButton" class="btn btn-small" disabled>Grabar</button>
    <button id="recordPauseResumeButton" class="btn btn-small" disabled>Pausar
    </button>
    <button id="recordStopButton" class="btn btn-small" disabled>Detener</button>
</div>
</div>
<div id="galeria"></div>
<div id="mediaplayer" style="display:none;"></div>
</body>
</html>
