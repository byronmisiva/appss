<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Karaoke GalaxiA :: Samsung</title>
    <meta http-equiv="content-language" content="es"/>
    <meta name="robots" content="follow,index,nocache"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="SAMSUNG :: Karaoke"/>
    <meta name="author" content="Misiva Corp"/>

    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>js/karaokegalaxya/jwplayer/jwplayer.js"></script>
    <script language="JavaScript" src="<?php echo base_url() ?>js/karaokegalaxya/scriptcam/scriptcam.js"></script>
    <script type="text/javascript" src="<?php echo base_url('js/general/validate.js') ?>"></script>
    <script src="<?php echo base_url() ?>js/karaokegalaxya/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/karaokegalaxya/ligthbox/ekko-lightbox.min.js"></script>

    <script language="JavaScript" src="<?php echo base_url() ?>js/karaokegalaxya/app.js"></script>

    <link href="<?php echo base_url() ?>fonts/Roboto-Bold/styles.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>fonts/Roboto-Light/styles.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>css/karaokegalaxya/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>js/karaokegalaxya/ligthbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/karaokegalaxya/style.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script type="text/javascript">
        var usuarioFB;
        var idParticipante = 0;
        var nombreParticipante = "";
        var modoDev = false;
        if (modoDev == true) {
            idParticipante = "1069749513039222";
            nombreParticipante = "Usuario prueba";
        }

        var accion = "<?php echo base_url()?>";
        var controladorApp = "<?php echo $data['controlador'];?>";
        <?php if (isset ($data['vervideo'] )) { ?>
        var vervideo = "<?php echo $data['vervideo'];?>";
        var nombreUsuarioVideo = "<?php echo $data['nombrevideo'];?>";
        <?php } else { ?>
        var vervideo = "0";
        var nombreUsuarioVideo = "";
        <?php } ?>
        function onLogin(response) {
            FB.api('/me', function (respuesta) {
                usuarioFB = respuesta;
                if (modoDev == true) {
                    idParticipante = "1069749513039222";
                    nombreParticipante = "Usuario prueba";
                } else {
                    idParticipante = respuesta.id;
                    nombreParticipante = respuesta.name;
                    usuarioFB = respuesta;
                }
            });
        }
        ;

    </script>
</head>

<body>

<div id="home" class=" seccion fondo-home">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="logo-karaoke">
                    <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_karaoke.png"
                         class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10  ">
                <div class="col-md-4 col-sm-4 col-xs-12  margen-0-md">
                    <div class="row">
                        <div class="col-xs-1 margen-0"></div>
                        <div class="col-xs-10 margen-0-md">
                            <div class="btn-home-instrucciones ">
                                <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/boton_instrucciones.png"
                                     class="img-responsive "/>
                            </div>
                        </div>
                        <div class="col-xs-1 margen-0"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                    <div class="row">
                        <div class="col-xs-1 margen-0"></div>
                        <div class="col-xs-10 margen-0-md">
                            <div class="btn-home-subir-video">
                                <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/boton_subirvideo.png"
                                     class="img-responsive"/>
                            </div>
                        </div>
                        <div class="col-xs-1"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                    <div class="row">
                        <div class="col-xs-1 margen-0"></div>
                        <div class="col-xs-10 margen-0-md">
                            <div class="btn-home-galeria">
                                <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/boton_galeria.png"
                                     class="img-responsive"/>
                            </div>
                        </div>
                        <div class="col-xs-1 margen-0"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="roboto-light texto-home text-center">
                    Canta como si nadie estuviera viendo con el <span class="roboto-bold"> #KaraokeGalaxyA.</span> Sube
                    tu video, compártelo con tus
                    amigos y revive los 90s como un verdadero A de corazón.
                </p>

            </div>

        </div>
        <div id="comunes-movil" class="hidden-md hidden-sm hidden-lg">
            <div class="col-xs-12">
                <div class="logo-samsung-galaxya "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_galaxya.png"
                        class="img-responsive"></div>
            </div>

            <div class="col-xs-12">
                <div class="logo-samsung "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_samsung.png"
                        class="img-responsive"></div>
            </div>
            <div class="col-xs-12">
                <div class="roboto-light text-center terminos-condiciones "><a
                        href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf"
                        target="_blank">Términos y
                        condiciones</a></div>
            </div>
        </div>

    </div>
</div>

<div id="instrucciones" class="hidden seccion fondo-instrucciones">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke-galeria">
                        <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/intrucciones/logo_karaoke.png"
                             class="img-responsive"/>
                    </div>
                </div>
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
                            favoritas de la mejor década, 1990, graba y sube tu video de máximo 15 segundos
                            directo a tu galería. Tu canción formará parte de nuestra playlist.</span></p>
                        </div>
                        <div class="text-center texto20">

                            <p><span class="roboto-bold">3.- </span><span class="roboto-light">Comparte tus videos con
                            tus amigos usando el HT </span><span class="roboto-bold">#KaraokeGalaxyA.</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10  ">
                    <div class="col-md-4 col-sm-4 col-xs-12  margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-home ">
                                    <img
                                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/intrucciones/boton_home.png"
                                        class="img-responsive "/>
                                </div>
                            </div>
                            <div class="col-xs-1 margen-0"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-subir-video">
                                    <img
                                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/intrucciones/boton_subirvideo.png"
                                        class="img-responsive"/>
                                </div>
                            </div>
                            <div class="col-xs-1"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-galeria">
                                    <img
                                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/intrucciones/boton_galeria.png"
                                        class="img-responsive"/>
                                </div>
                            </div>
                            <div class="col-xs-1 margen-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
                </div>
            </div>
        </div>
        <div id="comunes-movil" class="hidden-md hidden-sm hidden-lg">
            <div class="col-xs-12">
                <div class="logo-samsung-galaxya "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_galaxya.png"
                        class="img-responsive"></div>
            </div>

            <div class="col-xs-12">
                <div class="logo-samsung "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_samsung.png"
                        class="img-responsive"></div>
            </div>
            <div class="col-xs-12">
                <div class="roboto-light text-center terminos-condiciones "><a
                        href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf"
                        target="_blank">Términos y
                        condiciones</a></div>
            </div>
        </div>
    </div>
</div>

<div id="recorder" class="hidden seccion fondo-recorder">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke-galeria">
                        <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/web-cam/logo_karaoke.png"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12  ">
                    <div class="hidden roboto-bold titulo text-center"><p>WEB CAM</p></div>
                    <div id="message" class="roboto-light text-center"></div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 center-block text-center">
                    <div id="webcam-container" class="center-block">
                        <div id="loadergif" class="hidden"><img
                                src="<?php echo base_url() ?>imagenes/karaokegalaxya/loader.gif"></div>
                        <div id="webcam"></div>
                    </div>
                    <div id="mediaplayer-container" class="center-block">

                        <div id="mediaplayer" class="center-block"></div>
                    </div>
                    <div id="uploadFileContainer" class="center-block ">
                        <div id="uploadFile" class="center-block hidden">
                            <div class="col-md-6 col-sm-6 col-xs-6  center-block text-center">
                                <div class="margen100">
                                    <form id="formuploadvideo"
                                          action="<?php echo base_url() ?>samsung_karaoke_galaxia/uploadvideo"
                                          method="post"
                                          enctype="multipart/form-data">
                                        <p class="texto-interno">
                                            <span class="roboto-light text-center">Selecciona un video tuyo cantando las canciones del </span><span
                                                class="roboto-bold">#KaraokeGalaxyA</span><span>, súbelo y guárdalo en tu Galería</span>
                                        </p>

                                        <p class="texto-interno">
                                            <input type="file" name="fileToUpload" id="fileToUpload"
                                                   accept=".mp4, .mov, .mpg" class="center-block carga-archivo">
                                        </p>

                                        <div><input type="submit" value="Subir video" name="submit"
                                                    class="btn-subir-video botontexto hidden"></div>
                                        <div id="btnContinuarSubir" class="botontexto center-block hidden">Enviar</div>


                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6  center-block text-center">
                                <div class="videoSubido">
                                    <img
                                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/web-cam/fotoejemplocarga.png"
                                        class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="portabotones center-block">
                        <class id="recordStartButton" class="botontexto">Grabar</class>
                        <class id="recordPauseResumeButton" class="botontexto hidden">Pausar</class>
                        <class id="recordStopButton" class="botontexto hidden">Detener</class>

                        <class id="subirVideo" class="botontexto">Subir archivo</class>

                        <class id="volverGrabar" class="botontexto hidden">Volver a grabar</class>
                        <class id="btnContinuarGraba" class="botontexto hidden">Continuar</class>

                    </div>
                    <!--<button id="recordStartButton" class="btn btn-small" disabled>Grabar</button>
                    <button id="recordPauseResumeButton" class="btn btn-small hidden" disabled>Pausar</button>
                    <button id="recordStopButton" class="btn btn-small hidden" disabled>Detener</button>-->
                    <span><input type="text" id="timeLeft" class="hidden"></span>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center"><p class="texto-interno"><span
                            class="roboto-light">Activa tu web-cam y grábate cantando en el </span><span
                            class="roboto-bold">#KaraokeGalaxyA.</span>
                    </p></div>
                <canvas id="canvas" class="hidden" style="width: 480px; height: 386px"></canvas>
            </div>

            <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10  ">
                <div class="col-md-4 col-sm-4 col-xs-12  margen-0-md">
                    <div class="row">
                        <div class="col-xs-1 margen-0"></div>
                        <div class="col-xs-10 margen-0-md">
                            <div class="btn-home-home botontexto">
                                Inicio
                            </div>
                        </div>
                        <div class="col-xs-1 margen-0"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                    <div class="row">
                        <div class="col-xs-1 margen-0"></div>
                        <div class="col-xs-10 margen-0-md">

                        </div>
                        <div class="col-xs-1"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                    <div class="row">
                        <div class="col-xs-1 margen-0"></div>
                        <div class="col-xs-10 margen-0-md">
                            <div class="btn-home-galeria botontextoazul">
                                Galería
                            </div>
                        </div>
                        <div class="col-xs-1 margen-0"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
            </div>

        </div>
    </div>
</div>

<div id="galeria" class="hidden seccion fondo-galeria">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke-galeria">
                        <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/galeria/logo_karaoke.png"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="roboto-bold titulo text-left"><p>GALERÍA</p></div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 ">
                    <div class="fondo-video pull-right">
                        <div class="col-md-10 col-sm-10 col-xs-10 margen-0 ">
                            <div class="pull-left div-buscar-video"><input class="" type="text" id="box-buscar-video"
                                                                           name="box-buscar-video"
                                                                           placeholder="Buscar video"></div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 margen-0">
                            <div class="pull-right boton-buscar-video"><p><img
                                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/galeria/icono_buscar.png">
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div id="galeria-imagenes" class="col-md-12 col-sm-12 col-xs-12"></div>

                </div>

                <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10  ">
                    <div class="col-md-4 col-sm-4 col-xs-12  margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-home botontexto">
                                    Inicio
                                </div>
                            </div>
                            <div class="col-xs-1 margen-0"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">

                            </div>
                            <div class="col-xs-1 margen-0"></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 margen-0-md">
                        <div class="row">
                            <div class="col-xs-1 margen-0"></div>
                            <div class="col-xs-10 margen-0-md">
                                <div class="btn-home-subir-video botontexto">Subir video</div>
                            </div>
                            <div class="col-xs-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 margen-0">
                </div>


            </div>
        </div>
        <div id="comunes-movil" class="hidden-md hidden-sm hidden-lg">
            <div class="col-xs-12">
                <div class="logo-samsung-galaxya "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_galaxya.png"
                        class="img-responsive"></div>
            </div>

            <div class="col-xs-12">
                <div class="logo-samsung "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_samsung.png"
                        class="img-responsive"></div>
            </div>
            <div class="col-xs-12">
                <div class="roboto-light text-center terminos-condiciones "><a
                        href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf"
                        target="_blank">Términos y
                        condiciones</a></div>
            </div>
        </div>

    </div>
</div>

<div id="registro" class="hidden   seccion fondo-registro">
    <div class="container vertical-center">
        <div class="cien ">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                    <div class="logo-karaoke">
                        <img src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_karaoke.png"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="roboto-bold titulo text-center"><p>REGISTRO</p></div>
                </div>
                <div class="col-md-2 col-sm-2">
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">
                    <form action="demo_form" id="registro_form">
                        <ul class="login_wid">

                            <li><input class="box-text" type="text" id="nombre" name="nombre" required="required"
                                       placeholder="Nombre:">
                            </li>
                            <li><input class="box-text" type="text" id="apellido" name="apellido" required="required"
                                       placeholder="Apellido:">
                            </li>
                            <li><input class="box-text" type="text" id="ciudad" name="ciudad" required="required"
                                       placeholder="Ciudad:">
                            </li>
                            <li><input class="box-text" type="text" id="telefono" name="telefono" required="required"
                                       placeholder="Teléfono:"></li>
                            <li><input class="box-text" type="text" id="cedula" name="cedula" required="required"
                                       placeholder="Cédula:"></li>
                            <li><input class="box-text" type="email" id="mail" name="mail" required="required"
                                       placeholder="Email:">
                            </li>
                            <li class="text-center">
                                <input class="btn-ingreso" name="login" type="submit" value="">
                            </li>
                            <li class="text-center">
                                <div id="mensaje-envio"></div>
                            </li>
                        </ul>
                        <input type="text" id="fbid" name="fbid" class="hidden">
                    </form>
                </div>
                <div class="col-md-2 col-sm-2">
                </div>
            </div>
        </div>


        <div id="comunes-movil" class="hidden-md hidden-sm hidden-lg">
            <div class="col-xs-12">
                <div class="logo-samsung-galaxya "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_galaxya.png"
                        class="img-responsive"></div>
            </div>

            <div class="col-xs-12">
                <div class="logo-samsung "><img
                        src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_samsung.png"
                        class="img-responsive"></div>
            </div>
            <div class="col-xs-12">
                <div class="roboto-light text-center terminos-condiciones "><a
                        href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf"
                        target="_blank">Términos y
                        condiciones</a></div>
            </div>
        </div>
    </div>

</div>

<div id="comunes" class="hidden-xs">
    <div class="col-md-4 col-sm-4 col-xs-5">
        <div class="logo-samsung-galaxya "><img
                src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_galaxya.png"
                class="img-responsive"></div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-2">
    </div>
    <div class="col-md-4 col-sm-4 col-xs-5">
        <div class="logo-samsung pull-right "><img
                src="<?php echo base_url() ?>imagenes/karaokegalaxya/home/logo_samsung.png"
                class="img-responsive"></div>
    </div>

    <div id="" class="roboto-light terminos-condiciones"><a
            href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf" target="_blank">Términos y
            condiciones</a></div>
</div>
<script type="text/javascript" charset="utf-8">
    window.fbAsyncInit = function () {
        FB.init({
            appId: <?php echo $data['idApp'] ?>,
            xfbml: true,
            version: 'v2.2'
        });

        FB.getLoginStatus(function (response) {
            if (response.status == 'connected') {
                onLogin(response);
            } else {
                FB.login(function (response) {
                    onLogin(response);
                }, {scope: 'email'});
            }
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    var rules = [
        {name: 'nombre', display: 'nombre', rules: 'required'},
        {name: 'apellido', display: 'apellido', rules: 'required'},
        {name: 'ciudad', display: 'ciudad', rules: 'required'},
        {name: 'cedula', display: 'cedula', rules: 'required|numeric||max_length[10]'},
        {name: 'telefono', display: 'telefono', rules: 'required|numeric|max_length[10]'},
        {name: 'mail', display: 'mail', rules: 'required|valid_email'}
    ];

    var validator = new FormValidator('register', rules, function (errors, event) {
        if (errors.length > 0) {
            var errorString = '';
            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                $('#' + errors[i].id).val("");
                $('#' + errors[i].id).css({"color": "#42332a"});
                errorString += errors[i].id + "<br>";
            }
            ;
            alert("REGISTROS NO COMPLETADOS");
        } else {
            $(".btn-continuar-registro").hide();
            $("#submit").hide();
            enviarForma('register');
        }
    });

    //var dis ="<?php  echo $data['dispositivo'];?>";
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-2423727-39', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>