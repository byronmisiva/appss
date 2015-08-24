<!DOCTYPE html>
<html>
<head>
    <title><?php echo $app_name; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css"/>

    <link href="<?= base_url('css/samsung_ruleta/app.css?refresh=' . rand(10, 1000)) ?>" rel="stylesheet">
    <link href="<?= base_url('css/samsung_ruleta/animate.min.css?refresh=' . rand(10, 1000)) ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <style type="text/css">
        body {
            background-color: #ffffff;
            color: #024F9F;
            font-size: 24px;
        }
    </style>

    <script>
        var totalPuntos = 0;

    </script>
</head>
<body>
<div id="fb-root"></div>
<div id="content" class="container">
    <div class="contendor-actividad">
        <div class="logo"></div>
        <div class="btn-acepta"></div>
        <div class="contenedor-sesionFB" id="contenedor-redes">
            <div class="login-caja">
                <fb:login-button scope="public_profile,email,publish_actions"
                                 onlogin="checkLoginState();"></fb:login-button>
                <div id="status"></div>
            </div>
            <div class="like-face">
                <div class="fb-like" data-href="https://www.facebook.com/MovistarECU"
                     data-width="450" data-layout="button_count" data-show-faces="false"
                     data-send="false"></div>
            </div>
        </div>
        <div class="telefono"></div>


    </div>

    <div class="actividad-0">
        <div class="logo2"></div>
        <div class="telefono posactividad-0"></div>
        <div class="textocontent colorgris">
            <div class="textoact0">Escoje el equipo que actualmente tienes</div>
            <div class="smartphone"></div>
            <div class="smartphone-list  "></div>
            <div class="tablet-list"></div>
            <div class="tablet"></div>
        </div>


    </div>
    <div class="actividad-1">
        <div id="ruleta" style="display: none">
            <img id="flecha" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/flecha.png" width="160" height="20"
                 alt="Bee">
            <img id="ruletamesa" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/ruleta.png" width="532"
                 height="532"
                 alt="MesaRuleta">
            <img id="botonjugar" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/bt_jugar.png" width="160"
                 height="160"
                 alt="botonjugar">
            <img id="flechasderecha" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/flechas-derecha.png"
                 width="213"
                 height="90" alt="flechasDerecha">
            <img id="logojuego" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/logojuego.png" width="523"
                 height="212"
                 alt="logojuego">
        </div>

        <div id="gana" class="ocultar">
            <div class="logo2"></div>
            <div class="telefono posactividad-0"></div>
            <div class="imagengano">
                <div class="tgana colorgris text-center">Para poder recibir tu accesorio debes registrar tus datos.</div>
            </div>


            <img id="bt-continuar" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/bt-continuar.png" width="125"
                 height="125" alt="Bee">


        </div>

        <div class="mensajesalida  colorgris ocultar salidasinganar">
            <div class="logo2"></div>
            <div class="telefono posactividad-0"></div>
            <div class="imagencierre posactividad-0">
                <div class="textocierre colorgris">
                    Recuerda estar atento para la activación de más oportunidades de participar por premios Samsung.
                </div>
            </div>

        </div>

        <div id="pierde" class="ocultar">
            <div class="logo2"></div>
            <div class="telefono posactividad-0"></div>

            <div class="imagensigueparticipando">
                <div id="colorgris" class="tpierde colorgris"> No lograste ganarte un accesorio. Si quieres dar una vuelta
                    más a la ruleta, debes
                    invitar a <span class="amigostotal">tres </span> amigos.
                </div>
            </div>


            <img id="bt-invitar" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/sigue_participando/bt-invitar.png"
                 width="125" height="125" alt="">
            <img id="bt-continuar2" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/bt-continuar.png" width="125"
                 height="125" alt="Bee">
        </div>
    </div>

    <script>



        var base_url = "<?=base_url()?>";

    </script>

</div>

<div id="condiciones">
    <strong style="color:#000;;">
        <?= $condiciones; ?>
    </strong><br/>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    var dataFB;
    var accion = "<?php echo base_url()?>";
    var developer = false;
    var idParticipante;

    if (developer == true) {
        idParticipante = "676325258";
    }

    function generarSaludo() {
        FB.login(function () {
            FB.api('/me/feed', 'post', {message: 'Hello, ' + dataFB.name});
        }, {scope: 'publish_actions'});
    }
    ;
    var tipoganador;
    var cuentacompartidos;
    function check(response) {

        $.post(base_url + "samsung_chaton/registrarInvitados/", {
            'idParticipante': idParticipante
        }, function (data) {

            var parsedJSON = $.parseJSON(data);
            tipoganador = parsedJSON.tipoganador;
            cuentacompartidos = parsedJSON.cuentacompartidos;
            $('#contenedor-redes').hide();
            $('.btn-acepta').show();
        })


    }
</script>

<script>

    $(document).ready(function () {
        $('.btn-acepta').hide();
    })
    function statusChangeCallback(response) {
        // console.log('statusChangeCallback');
        // console.log(response);
        if (response.status === 'connected') {
            testAPI();
        } else if (response.status === 'not_authorized') {
            document.getElementById('status').innerHTML = 'Ingresar a Facebook.';
        } else {
            document.getElementById('status').innerHTML = 'Ingresar a Facebook.';
        }
    }

    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    }
    //https://appss.misiva.com.ec/navidad2014/
    window.fbAsyncInit = function () {
        FB.init({

            appId: '538407762872909',
            cookie: true,
            xfbml: true,
            version: 'v2.1'
        });

        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });

    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    function testAPI() {
        FB.api('/me', function (response) {

            dataFB = response;
            if (developer == true)
                idParticipante = "963803436967163";
            else
                idParticipante = dataFB.id;

            check(response);
            document.getElementById('status').innerHTML = 'Hola, ' + response.name + '!';
            //generarSaludo();
        });
    }
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?= base_url() ?>js/samsung_ruleta/raphael.js" type="text/javascript"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>

<script src="<?= base_url() ?>js/samsung_ruleta/appmobile.js?refresh=<?php echo rand(10, 1000) ?>" type="text/javascript"
        charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    var accion = "<?=base_url()?>";
    var base_url = "<?=base_url()?>";
</script>
</body>
</html>