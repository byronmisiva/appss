<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>My Blue Valentine :: Samsung</title>
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>css/my_blue_valentine/app.css?frefresh=<?php echo rand(0, 1000) ?>"
          type="text/css" rel="stylesheet">
    <link href="<?php echo base_url() ?>fonts/samsung_regular_if/stylesheet.css" type="text/css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="<?php echo base_url() ?>js/my_blue_valentine/app.js?frefresh=<?php echo rand(0, 1000) ?>"
            type="text/javascript" charset="utf-8"></script>
    <!--[if IE]>
    <script type="text/javascript">
        var console = {
            log: function () {
            }
        };
    </script>
    <![endif]-->

    <script type="text/javascript">
        var usuarioFB = 0;
        var idParticipante = 0;
        var modoDev = false;
        if (modoDev == true)
            idParticipante = 676325258;
        var birthday = "03/19/1985";
        var accion = "<?php echo base_url()?>";
        var controladorApp = "<?php echo $data['controlador'];?>";


        /*var birthday="03/19/1985";*/

        function onLogin(response) {
            FB.api('/me', function (respuesta) {
                usuarioFB = respuesta;
                if (modoDev == true)
                    idParticipante = "1005762036104636";
                else
                    idParticipante = respuesta.id;
                console.log (idParticipante)
                console.log (respuesta)
            });
        };
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
<div id="fb-root"></div>
<div class="contenedor">
    <div id="fullpage">
        <!-- PANTALLA 01 bienvenida-->
        <div id="section1">
            <div class="page-header  ">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 text-center texto-samsung">
                            <div>Registra la factura de tu compra de productos de línea blanca, audio/video y participa
                                en los sorteos de 10 viajes con todos los gastos pagados
                            </div>
                        </div>
                        <div class="col-md-12 text-center texto-samsung">
                            <div class="registrar_boton"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PANTALLA 02 - REGISTRO-->
        <div id="section2">
            <div class="page-header ">
                <div class="container">
                    <div class="row ">

                        <form id="register" name="register" method="post" role="form" class="">
                            <div class="col-md-12 clearfix">
                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Nombre
                                </div>
                                <div class="col-md-8 col-xs-7">
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="" minlength="2" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">
                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Apellido
                                </div>
                                <div class="col-md-8 col-xs-7  ">
                                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="" minlength="2" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">
                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Ciudad
                                </div>
                                <div class="col-md-8 col-xs-7  ">
                                    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" value="" minlength="2" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">

                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Cédula
                                </div>
                                <div class="col-md-8 col-xs-7  ">
                                    <input type="text" id="cedula" name="cedula" placeholder="Cédula" value=""  length="2" type="text" required
la" placeholder="Cédula" value=""
                                           maxlength="10"/>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">
                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Teléfono celular
                                </div>
                                <div class="col-md-8 col-xs-7  ">
                                    <input type="text" id="telefono" name="telefono" placeholder="Teléfono" value=""
                                           maxlength="10" minlength="7" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">
                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Mail
                                </div>
                                <div class="col-md-8 col-xs-7  ">
                                    <input type="text" id="mail" name="mail" placeholder="E-mail" value="" type="email"  required>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">
                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Número de Factura
                                </div>
                                <div class="col-md-8 col-xs-7  ">
                                    <input type="text" id="factura" name="factura" placeholder="Factura" value="" minlength="2" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12 clearfix">
                                <div class="col-md-4 col-xs-5 texto-samsung">
                                    Local
                                </div>
                                <div class="col-md-8 col-xs-7  ">
                                    <input type="text" id="local" name="local" placeholder="Local" value="" minlength="2" type="text" required>
                                </div>
                            </div>

                            <input type="hidden" name="user" id="user" value="">
                            <input type="hidden" name="fbid" id="fbid" value="">
                            <input type="hidden" name="genero" id="genero" value="">
                            <input type="hidden" name="fnacimiento" id="fnacimiento" value="">

                            <div class="col-md-12 col-xs-12 text-center texto-samsung">

                                <input class="submit btn-sumbit" type="submit" value="" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- PANTALLA 03 salida-->
        <div id="section3">
            <div class="page-header  ">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 text-center texto-samsung">
                            <div>¡Tu factura ha sido registrada con éxito!</div>
                            <div>Debes estar pendiente de nuestras publicaciones para saber si eres uno de los afortunados ganadores.</div>
                        </div>
                        <div class="col-md-12 text-center texto-samsung">
                            <div class="cerrar_boton"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center texto-samsung terminos">
            *Promoción válida hasta agotar stock. Requisito indispensable presentar factura para reclamar su premio.
            <a href="http://appss.misiva.com.ec/archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-MY-BLUE-VALENTINE.pdf" target="_blank">
                Ver Términos y condiciones
            </a>
        </div>
    </div>

</div>

<!-- PANTALLA 02 - REGISTRO-->

</div>

</div>




<script type="text/javascript" src="<?php echo base_url('js/general/validate.js') ?>"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js" type="text/javascript"></script>

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
                }, {scope: 'user_birthday, email'});
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
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    var rules = [
        {name: 'nombre', display: 'nombre', rules: 'required'},
        {name: 'apellido', display: 'apellido', rules: 'required'},
        {name: 'factura', display: 'factura', rules: 'required'},
        {name: 'local', display: 'local', rules: 'required'},
        {name: 'cedula', display: 'cedula', rules: 'required'},
        {name: 'telefono', display: 'telefono', rules: 'required|min_length[7]'},
        {name: 'mail', display: 'mail', rules: 'required|valid_email'}
    ];

    var validator = new FormValidator('register', rules, function (errors, event) {
        if (errors.length > 0) {
            var errorString = '';
            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                $('#' + errors[i].id).val("");
                $('#' + errors[i].id).css({"color": "#42332a"});
                errorString += errors[i].id + "<br>"
            }
            ;
            $('#campos').html(errorString);
            /*$("#alerta").show();*/
            alert("REGISTROS NO COMPLETADOS")
            $('.fondo-registros').addClass('bounceInUp');
        } else {
            enviarForma('register');
        }
    });
</script>
<script src="<?php echo base_url() ?>js/my_blue_valentine/complemento.js?frefresh=<?php echo rand(0, 1000) ?>"
        type="text/javascript"></script>
</body>
</html>