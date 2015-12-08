<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="content-language" content="es"/>
    <title>Santa:: Samsung</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css"/>
    <link href="<?= base_url('css/chimenea/app.css?refresh=' . rand(10, 1000)) ?>" rel="stylesheet">
    <link href="<?= base_url() . 'css/general/animate.min.css' ?>" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url() ?>js/chimenea/phaser.min2.4.4.js"></script>
    <style type="text/css">
        html, body {
            padding: 0;
            margin: 0;
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
        var anchoScreen = screen.width;
        var altoScreen = 650;
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
<div class="container">
    <div class="row">
        <div class="col-lg-12 pull-right">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo_samsung.png" class="pull-right"/>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row margin-70">
        <div class="col-lg-12 text-center">
            <img src="<?php echo base_url() ?>imagenes/chimenea/jugar/logo.png"/>

            <div class="clearfix"></div>
            <p class="text-center">
                Ayuda a Santa a repartir todos sus regalos antes de que llegue la Navidad. Obtén el mejor puntaje y
                participa por un gran regalo de Navidad.
            </p>
        </div>
    </div>

    <div class="row margin-20">
        <div class="col-lg-4">
            <div class="btn text-center">Ranking</div>
        </div>
        <div class="col-lg-4">
            <div class="btn text-center">Jugar</div>
        </div>
        <div class="col-lg-4">
            <div class="btn text-center">Instrucciones</div>
        </div>
    </div>

    <div class="row view-inicio">
        <div class="contenedor-game">
            <div></div>
        </div>
    </div>
    <div class="row view-inicio">
        <div class="col-lg-12 text-center">

        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?= base_url('js/general/validate.js?refresh=198926546568797915') ?>" type="text/javascript"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url() ?>js/chimenea/app.js?refresh=<?php echo rand(10, 1000) ?>" type="text/javascript"></script>
<script>
    var dis = "<?php  echo $data['dispositivo'];?>";
</script>
<script type="text/javascript" src="<?= base_url() ?>js/chimenea/fondo.js"></script>
</body>
</html>