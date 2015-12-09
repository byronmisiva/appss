<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Blu Christmas :: Samsung</title>
    <!-- fuentes -->
    <!--<link href="<?php /*echo base_url() */ ?>fonts/caprica/stylesheet.css" type="text/css" rel="stylesheet">
    <link href="<?php /*echo base_url() */ ?>fonts/caprica-italica/stylesheet.css" type="text/css" rel="stylesheet">

    <link href="<?php /*echo base_url() */ ?>fonts/samsung_regular_if/stylesheet.css" type="text/css" rel="stylesheet">
    <link href="<?php /*echo base_url() */ ?>fonts/samsung_bold_if/stylesheet.css" type="text/css" rel="stylesheet">-->
    <!-- css -->
    <link href="<?php echo base_url() ?>css/bluechristmas/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>css/bluechristmas/app.css?frefresh=<?php echo rand(0, 1000) ?>" type="text/css"
          rel="stylesheet">
    <link href="<?php echo base_url() ?>css/bluechristmas/animate.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/bluechristmas/hover.css" type="text/css" rel="stylesheet">

</head>
<body>
<div id="fb-root"></div>

<div class="container  contenedor-perfil lef">
    <div class="col-md-6 col-sm-6">
        <div class="img-perfil"></div>
        <div class="nombre-perfil"></div>
    </div>
    <div class="col-md-6 col-sm-6">
        <audio id="bgAudio" autoplay="autoplay" loop="loop"></audio>
        <div class="btn-audioOn js--triggerAudio"></div>
    </div>
</div>

<div class="container animated">
    <div class="row view-inicio">
        <div class="col-lg-12 ">
            <div class="fondo-seccion">
                <div class="logo-evento animated"></div>
                <div class="secciones intro-texto ">
                    <h2>Blue Christmas</h2>
                    <p>Texto de introduccion</p>
                    <div class="btn btn-default js--btn-intro hvr-underline-from-center">Continuar</div>
                </div>

                <div class="secciones registro animated hidden">
                    <div class="logo-evento-registro"></div>
                    <p class="titular ">Primero tienes que registrarte</p>

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
                    <div class="btn-fondo btn-registro">Enviar</div>
                </div>

                <div class="secciones instruciones hidden animated">
                    <div>
                        <p>Como ganar</p>

                        <div class="texto-instruciones">
                            <p>
                                Participa por grandes premios gratis, si no lo logras no te desanimes participa todos
                                los dias
                                Publica en tu muro la invitacion para que tengas otra oportunidad
                            </p>
                        </div>
                        <div>
                            <p>¡Suerte!</p>
                        </div>
                    </div>
                    <div class="btn btn-default js--btn-instruciones hvr-underline-from-center">Continuar</div>

                </div>

                <div class="secciones sorteo hidden animated">
                    <div>
                        <p>Actividad de sorteo</p>

                        <div class="texto-instruciones">
                            <p>
                                Texto de sorteo
                            </p>
                        </div>
                    </div>
                    <div class="btn btn-default js--btn-sorteo hvr-underline-from-center">Continuar</div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="pie-app hidden">
    <div class="condiciones">
        <?php echo $data['condiciones']; ?>
    </div>
</div>

<!-- js -->
<script src="<?php echo base_url() ?>js/general/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url() ?>js/bluechristmas/app.js?frefresh=<?php echo rand(0, 1000) ?>"
        type="text/javascript" charset="utf-8"></script>


<script src="<?php echo base_url() ?>js/general/validate.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/bluechristmas/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>js/bluechristmas/complemento.js?frefresh=<?php echo rand(0, 1000) ?>"
        type="text/javascript"></script>
<script type="text/javascript">
    var usuarioFB;
    var idParticipante = 0;
    var modoDev = true;
    if (modoDev == true)
        idParticipante = 10153022504740259;

    var accion = "<?php echo base_url()?>";
    var controladorApp = "<?php echo $data['controlador'];?>";

</script>
<script type="text/javascript" charset="utf-8">
    if (modoDev == true) {
        /*modo developer*/
        idParticipante = "10153022504740259";
        $(".img-perfil").html("Jairo Ortiz");
        $(".img-perfil").html("<img src='//graph.facebook.com/" + idParticipante + "/picture?width=75&height=75' />");
    } else {
        /*incio metodos FB*/
        window.fbAsyncInit = function () {
            FB.init({
                appId: <?php echo $data['idApp'] ?>,
                xfbml: true,
                version: 'v2.5'
            });

            FB.getLoginStatus(function (response) {
                if (response.status == 'connected') {
                    FB.api('/me?fields=id,first_name,last_name,name,email', function (data) {
                        usuarioFB = data;
                        idParticipante = data.id;
                        $(".nombre-perfil").html(usuarioFB.name);
                        $(".img-perfil").html("<img src='//graph.facebook.com/" + idParticipante + "/picture?width=75&height=75' />");
                    });
                } else {
                    FB.login(function (response) {
                        if (response.status == 'connected') {
                            FB.api('/me?fields=id,first_name,last_name,name,email', function (data) {
                                usuarioFB = data;
                                idParticipante = data.id;
                                $(".nombre-perfil").html(usuarioFB.name);
                                $(".img-perfil").html("<img src='//graph.facebook.com/" + idParticipante + "/picture?width=75&height=75' />");
                            });
                        }
                        $(".img-perfil").html("<img src='//graph.facebook.com/" + response.userid + "/picture?width=48&height=48' />");
                    }, {scope: 'email,public_profile'});
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
        /*fin metodos FB*/
    }
    /*configuracion de campos validate*/
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
        } else {
            $(".btn-registro").hide();
            $("#submit").hide();
            enviarForma('register');
        }
    });
    var dis = "<?php  echo $data['dispositivo'];?>";

</script>

</body>
</html>
























