<!DOCTYPE html>
<html>
<head>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

    <script type="text/javascript" src="js/karaokegalaxya/jwplayer/jwplayer.js"></script>
    <script language="JavaScript" src="js/karaokegalaxya/scriptcam/scriptcam.js"></script>

    <script src="js/karaokegalaxya/bootstrap.min.js"></script>
    <script src="js/karaokegalaxya/ligthbox/ekko-lightbox.min.js"></script>

    <script language="JavaScript" src="js/karaokegalaxya/app.js"></script>

    <link href="fonts/Roboto-Bold/styles.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/Roboto-Light/styles.css" rel="stylesheet" type="text/css"/>
    <link href="css/karaokegalaxya/bootstrap.min.css" rel="stylesheet">
    <link href="js/karaokegalaxya/ligthbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="css/karaokegalaxya/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div id="home" class="seccion fondo-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="logo-karaoke">
                    <img src="imagenes/karaokegalaxya/home/logo_karaoke.png" class="img-responsive"/>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10">
                <div class="col-md-4 col-sm-4 col-xs-4 ">
                    <div class="btn-home-instrucciones ">
                        <img src="imagenes/karaokegalaxya/home/boton_instrucciones.png" class="img-responsive "/>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 ">
                    <div class="btn-home-subir-video">
                        <img src="imagenes/karaokegalaxya/home/boton_subirvideo.png" class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 ">
                    <div class="btn-home-galeria">
                        <img src="imagenes/karaokegalaxya/home/boton_galeria.png" class="img-responsive"/>
                    </div>
                    <div class="btn-home-registro"></div>
                </div>

            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">


            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="roboto-light texto-home text-center">
                    Canta como si nadie estuviera viendo con le <span class="roboto-bold"> #KaraokeGalaxyA.</span> Sube
                    tu video, compártelo con tus
                    amigos y revive los 90s como un verdadero A de corazón.
                </p>

            </div>

        </div>
    </div>
</div>

<div id="instrucciones" class="hidden seccion fondo-instrucciones">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="roboto-bold titulo text-center"><p>INSTRUCCIONES</p></div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class=" conten-instrucciones">
                        <div class="text-center texto20">
                            <p><span class="roboto-bold">1.- </span><span
                                    class="roboto-light">Regístrate con tus datos completos</span></p>
                        </div>
                        <div class="text-center texto20">
                            <p><span class="roboto-bold">2.- </span><span class="roboto-light">Selecciona una de tus canciones
                            favoritas de la mejor década, 1990, graba y sube tu video de maximo 15 segundos
                            directo a tu galeria. Tu canción formará parte de nuestra playlist.</span></p>
                        </div>
                        <div class="text-center texto20">

                            <p><span class="roboto-bold">3.- </span><span class="roboto-light">Comparte tus videos con
                            tus amigos usando el HT </span><span class="roboto-bold">#KaraokeGalaxyA.</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 col-xs-1">
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <div class="col-md-4 col-sm-4 col-xs-4 ">
                        <div class="btn-home-home ">
                            <img src="imagenes/karaokegalaxya/intrucciones/boton_home.png" class="img-responsive "/>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 ">
                        <div class="btn-home-subir-video">
                            <img src="imagenes/karaokegalaxya/intrucciones/boton_subirvideo.png"
                                 class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 ">
                        <div class="btn-home-galeria">
                            <img src="imagenes/karaokegalaxya/intrucciones/boton_galeria.png" class="img-responsive"/>
                        </div>
                        <div class="btn-home-registro"></div>
                    </div>

                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                </div>

            </div>
        </div>
    </div>
</div>

<div id="recorder" class="hidden seccion fondo-recorder">
    <div class="roboto-bold">WEB CAM</div>

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
    <p><span class="roboto-light">Activa tu web-cam y grábate cantando en el </span><span class="roboto-bold">#KaraokeGalaxyA.</span>
    </p>

    <div class="btn-home-home">Home</div>
    <div class="btn-home-galeria">Galería</div>
</div>

<div id="galeria" class="hidden seccion fondo-galeria">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke-galeria">
                        <img src="imagenes/karaokegalaxya/galeria/logo_karaoke.png" class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="roboto-bold titulo text-left"><p>GALERÍA</p></div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="text-right"><p>Buscar videos</p></div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="galeria-imagenes"></div>
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                        <div class="btn-home-subir-video"> Grabar Video</div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                        <div class="btn-home-home text-right ">Regresar al inicio</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="registro" class="hidden seccion fondo-registro">
    <div class="roboto-bold">REGISTRO</div>
    <form action="demo_form.asp">
        <ul class="login_wid">

            <li><input class="box-text" type="text" id="nombre" name="nombre" required="required"
                       placeholder="Nombre:">
            </li>
            <li><input class="box-text" type="text" id="telefono" name="telefono" required="required"
                       placeholder="Teléfono:"></li>
            <li><input class="box-text" type="text" id="ci" name="ci" required="required" placeholder="CI:"></li>
            <li><input class="box-text" type="email" id="email" name="email" required="required"
                       placeholder="Email:">
            </li>
            <li>
                <div><input class="btn-ingreso" name="login" type="submit" value="Enviar"></div>
            </li>
            <li>
                <div id="mensaje-envio"></div>
            </li>

        </ul>
    </form>
    <div class="btn-home-home">Home</div>
    <div class="btn-home-subir-video">Subir video</div>
</div>

<div id="comunes" class="">
    <div id="" class="logo-samsung-galaxya"></div>
    <div id="" class="logo-samsung"></div>
    <div id="" class="roboto-light terminos-condiciones"><a href="" target="_blank">Términos y condiciones</a></div>
</div>

</body>
</html>