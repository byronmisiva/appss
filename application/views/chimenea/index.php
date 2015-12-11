<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="content-language" content="es"/>
    <title>Santa :: Samsung</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="<?= base_url() . 'fonts/samsung_sharp/styles.css' ?>" rel="stylesheet">


    <link href="<?= base_url('css/chimenea/app.css?refresh=') . rand(1, 1000) ?>" type="text/css" rel="stylesheet"/>
    <link href="<?= base_url() . 'css/general/animate.min.css' ?>" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url() ?>js/chimenea/phaser.min2.4.4.js"></script>
    <style type="text/css">
        html, body {
            padding: 0;
            margin: 0;
            background-color: #1d2d5c;
        }

        div#game {
            width: 100%;
            height: 100%;
        }

        #gameDiv {
            height: 600px;
            width: 100%;
        }

        .contenedor-game {
            display: none;
        }
    </style>
    <script type="text/javascript">
        var totalPuntos = 0;
        var usuarioFB;
        var idParticipante = 0;
        var modoDev = true;
        if (modoDev == true)
            idParticipante = "1069749513039221";

        var accion = "<?php echo base_url()?>";
        var controladorApp = "<?php echo $data['controlador'];?>";
        function onLogin(response) {
            FB.api('/me', function (respuesta) {
                usuarioFB = respuesta;
                if (modoDev == true) {
                    idParticipante = "1069749513039221";
                } else {
                    idParticipante = respuesta.id;
                }
            });
        }
        ;
    </script>
</head>
<body>
<div id="fondo-nieve" style="margin-top: 0;"></div>
<div id="fb-root"></div>

<div class="container secciones registro   ">
    <div class="row">
        <div class="col-lg-6 col-xs-6 col-sm-6">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo.png" class="img-responsive"/>
        </div>
        <div class="col-lg-6 col-xs-6 col-sm-6 pull-right">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png"
                 class="pull-right img-responsive"/>
        </div>
    </div>

    <div class="row margin-70">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">

                <p class="text-center h2">Completa tus datos y juega el Santa´s Christmas Tour.</p>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                <form id="register" name="register" method="post" role="form"
                      class="form-horizontal formulario">
                    <div class="registro espacio-columna">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="form-control inputTexto">
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" value=""
                                           required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="form-control inputTexto espacio-input">
                                    <input type="text" id="apellido" name="apellido" placeholder="Apellido"
                                           value="" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-lg-12">
                                <div class="form-control inputTexto espacio-input">
                                    <input type="text" id="telefono" name="telefono" placeholder="Teléfono"
                                           value="" maxlength="10" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-lg-12">
                                <div class="form-control inputTexto espacio-input">
                                    <input type="text" id="cedula" name="cedula" placeholder="Cédula" value=""
                                           maxlength="10" required/>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="user" id="user" value="">
                        <input type="hidden" name="fbid" id="fbid" value="">

                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="form-control inputTexto espacio-input">
                                    <input type="text" id="mail" name="mail" placeholder="E-mail" value=""
                                           required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="form-control inputTexto espacio-input">
                                    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" value=""
                                           required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin:10px auto;display: none;width:150px;">
                        <input id="submit" name="submit" type="submit" value="" class="btn-sumbit"/>
                    </div>
                </form>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            <div class="col-sm-4 col-md-4 col-lg-4  ">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12  ">
                <div class="btn text-center js--btn-registro center-block">Enviar</div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4  ">

            </div>


        </div>
        <div class="clearfix"></div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center terminoscondiciones">
            <a href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-SAMSUNG-CHIMENEA.pdf"
               target="_blank">Términos y condiciones</a>
        </div>
    </div>
</div>

<div class="container secciones home hidden ">
    <div class="row">
        <div class="col-lg-12 pull-right">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png"
                 class="pull-right img-responsive"/>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="vertical-center">
        <div class="row cuadro-ranking">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center padding-20 ">
                <img src="<?php echo base_url() ?>imagenes/chimenea/home/logo_christmastour_home.png" class="img-responsive"/>
            </div>
            <div class="clearfix"></div>

            <div class="col-sm-2 col-md-2 col-lg-2  text-center">
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12 text-center">
                <p class="text-center h2">
                    Ayuda a Santa a repartir todos sus regalos antes de que llegue la Navidad. Obtén el mejor puntaje y
                    participa por un gran regalo de Navidad.
                </p>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2  text-center">
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                <div class="btn text-center js--btn-ranking center-block">Ranking</div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                <div class="btn text-center js--btn-jugar center-block">Jugar</div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12 ">
                <div class="btn text-center js--btn-instrucciones center-block">Instrucciones</div>
            </div>
            <div class="clearfix padding-20"></div>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center terminoscondiciones">
                <a href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-SAMSUNG-CHIMENEA.pdf"
                   target="_blank">Términos y condiciones</a>
            </div>
        </div>
    </div>
</div>

<div class="container secciones instrucciones  hidden ">
    <div class="row">
        <div class="col-lg-6 col-xs-6 col-sm-6">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo.png" class="img-responsive"/>
        </div>
        <div class="col-lg-6 col-xs-6 col-sm-6 pull-right">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png"
                 class="pull-right img-responsive"/>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="vertical-center">
        <div class="row  ">
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12 h2">
                <p class="text-center ">¡Prepárate para ayudar a Santa en su tour navideño y reparte la mayor cantidad
                    posible de regalos!</p>
                <ol class="instrucciones">
                    <li>Entrega regalos con un clic del mouse. <img
                            src="<?= base_url() ?>imagenes/chimenea/instrucciones/click.png">
                    </li>
                    <li>Tienes 3 vidas. Perderás una vida si fallas una entrega. <img
                            src="<?= base_url() ?>imagenes/chimenea/instrucciones/vidas.png"></li>
                    <li>Si entregas un regalo en la casa Grinch, pierdes un (1) punto. <img
                            src="<?= base_url() ?>imagenes/chimenea/instrucciones/perderpunto.png"></li>
                    <li>Completa la entrega y participa por un increíble regalo de Navidad Samsung.<img
                            src="<?= base_url() ?>imagenes/chimenea/instrucciones/completar.png"></li>
                </ol>

            </div>
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
            <div class="clearfix"></div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="btn text-center js--btn-jugar center-block">Jugar</div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</div>

<div class="container secciones ranking hidden ">
    <div class="row">
        <div class="col-lg-6 col-xs-6 col-sm-6">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo.png" class="img-responsive"/>
        </div>
        <div class="col-lg-6 col-xs-6 col-sm-6 pull-right">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png"
                 class="pull-right img-responsive"/>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="vertical-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  margin-10 cuadro-ranking">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 h2">
                <p class="text-center">Ranking</p>
            </div>
            <div class="col-lg-10 col-sm-10  col-xs-10   h3">
                Nombre
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2    text-right h3">
                Puntos
            </div>

            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro ">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro ">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-10 col-sm-10  col-xs-10 colorcuadro">
                Gabriela
            </div>
            <div class="col-lg-2 col-sm-2  col-xs-2  colorcuadro text-right">
                20
            </div>
            <div class="clearfix h2"></div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <div class="btn text-center js--btn-jugar  center-block">Jugar</div>
            </div>
        </div>
    </div>
</div>

<div class="container secciones resultados hidden">
    <div class="row">
        <div class="col-lg-12 pull-right">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png" class="pull-right"/>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="vertical-center">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center padding-20 ">
                <img src="<?php echo base_url() ?>imagenes/chimenea/home/logo_christmastour_home.png" class="img-responsive"/>
            </div>
            <div class="clearfix"></div>

            <div class="col-sm-2 col-md-2 col-lg-2  text-center">
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12 text-center">
                <p class="text-center h2">
                    Lograste obtener X puntos! Recuerda compartir la aplicación con tus amigos para poder obtener 1
                    punto extra.
                </p>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2  text-center">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="btn text-center js--btn-jugar pull-right">Volver a Jugar</div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="btn text-center js--btn-ranking pull-left">Ranking</div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 h3">
                <div class="text-center">Compartir con amigos <a href=""> <img
                            src="<?= base_url() ?>imagenes/chimenea/cierre/boton_facebook.png"></a> <a href=""><img
                            src="<?= base_url() ?>imagenes/chimenea/cierre/boton_twitter.png"></a></div>
            </div>


            <div class="clearfix padding-20"></div>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center terminoscondiciones">
                <a href="archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-SAMSUNG-CHIMENEA.pdf"
                   target="_blank">Términos y condiciones</a>
            </div>
        </div>
    </div>

</div>

<div class="container secciones jugar  hidden ">
    <div class="juego-vertical  ">
        <div class="row">
            <div class="col-lg-6 col-xs-6 col-sm-6">
                <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo.png" class="img-responsive"/>
            </div>
            <div class="col-lg-6 col-xs-6 col-sm-6 pull-right">
                <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png"
                     class="pull-right img-responsive"/>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="vertical-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12  margin-10 cuadro-ranking">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 h2">
                    <p class="text-center ">Voltea tu dispositivo horizontalmente para jugar</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center center-block">
                    <img src="<?= base_url() ?>imagenes/chimenea/samsung_voltear.png" class="center-block">
                </div>
            </div>
        </div>


    </div>

    <div class="juego-horizontal">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo.png"/>
            </div>
            <div class="col-lg-6 pull-right">
                <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png" class="pull-right"/>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row margin-70">
            <div class="col-lg-12">
                <p class="text-center">Juego </p>

                <p class="text-left">
                    aca va el juego
                </p>
            </div>
        </div>
        <div class="row margin-20">
            <div class="col-lg-6">
                <div class="btn text-center js--btn-resultados">Resultados</div>
            </div>

        </div>
    </div>


</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?= base_url('js/general/validate.js?refresh=198926546568797915') ?>" type="text/javascript"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url() ?>js/chimenea/app.js?refresh=<?php echo rand(10, 1000) ?>"
        type="text/javascript"></script>
<script>
    var dis = "<?php  echo $data['dispositivo'];?>";
</script>

<script type="text/javascript" src="<?= base_url('js/chimenea/fondo.js?refresh=') . rand(1, 1000) ?>"></script>


</body>
</html>