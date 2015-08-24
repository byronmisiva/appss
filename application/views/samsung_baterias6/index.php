<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="content-language" content="es"/>
<title>Carga Rápida S6 :: Samsung</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta property="og:title" content="Carga Rápida S6 :: Samsung" />
<meta property="og:description" content="Misiva Corp Quito Ecuador" />
<meta property="og:image" content="<?php echo base_url()?>imagenes/samsung_baterias6/portada.jpg" />

 <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
 <link href="<?=base_url('css/samsung_baterias6/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
 <link href="<?=base_url().'css/general/animate.min.css'?>" rel="stylesheet">
<link href="<?php echo base_url()?>fonts/samsung_regular_if/stylesheet.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>fonts/samsung_bold_if/stylesheet.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=base_url()?>js/samsung_baterias6/phaser.min.js"></script>
<style type="text/css">

html, body {
    padding: 0;
    margin: 0;
}
div#game {
    width:100%;
    height:100%;
}
</style>
<script>
			var totalPuntos=0;
			var usuarioFB;
			var idParticipante=0;
			var modoDev=false;
			if (modoDev == true)
				idParticipante="1069749513039221";

			var accion="<?php echo base_url()?>";
			var controladorApp="<?php echo $data['controlador'];?>";
			function onLogin(response) {
					    FB.api('/me', function(respuesta) {
					    	usuarioFB = respuesta;
					    	if (modoDev == true){
								idParticipante="1069749513039221";
					    	}else{
					    		idParticipante=respuesta.id;
					    		}
					    });
					};
		</script>

</head>
<body>
	<div id="fb-root"></div>
	 <div class="container">
		<div class="row view-inicio">
			<div class="logo"></div>
			<div class="contendor-actividad">

			<div class="contenedor-informacion">
				<div class="mascara">
				<div class="barra-bateria"></div>
					<div class="texto-intro animated">
						<p>
						¡Gracias a todos por jugar! 
						<!--¡La carga de batería de los <span class="acento">Samsung <br> Galaxy S6 y S6 Edge</span> es increíblemente rápida!-->
						</br></br>
						<!--Descúbrelo y ten la oportunidad</br> de ganar un <span class="acento">Galaxy S6 </span>-->
						Estamos revisando quienes fueron los más rápidos y ágiles. Pronto sabremos quién será el ninja que se llevará a casa un Galaxy S6 Edge
						</p>
					</div>
					<div class="texto-instrucciones animated">
						<p>Utiliza el puntero de tu computador para cargar
						   rápidamente la batería del <span class="acento">Samsung Galaxy S6</span>
						   seleccionando los elementos correctos. </br>
						   <span class="texto-mini">Recuerda, deberás realizar la carga en 10 minutos ( 600 segundos ): </span></p>
						<table>
							<tr>
							<td class="ico-suma"> </td>
							<td>Suma segundos para alcanzar la carga completa de la batería con las burbujas de tiempo.</td>
							</tr>

							<tr>
							<td class="ico-tiempo"> </td>
							<td>Reduce la dificultad del juego por 5 segundos.</td>
							</tr>
							<tr>
								<td class="ico-resta"> </td>
								<td>¡Cuidado! Evita las cargas negativas que irán restando 5 segundos a tu carga. </td>
							</tr>
						</table>
					</div>
					<div class="actividad-ranking animated">

					</div>

					<div class="texto-registro animated">
						<p>
						 <span class="acento">Registro</span>
						</p>
					<form id="register" name="register" method="post" role="form"
							class="form-horizontal formulario">
							<div class="registro espacio-columna">

								<div class="form-group">
									<label for="nombre" class="col-sm-2 control-label">Nombre</label>
									<div class="col-sm-10">
										<div class="form-control inputTexto">
											<input type="text" id="nombre" name="nombre"
												placeholder="Nombre" value="" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="apellido" class="col-sm-2 control-label">Apellido</label>
									<div class="col-sm-10">
										<div class="form-control inputTexto espacio-input">
											<input type="text" id="apellido" name="apellido"
												placeholder="Apellido" value="" />
										</div>
									</div>
								</div>

								<div class="form-group ">
									<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
									<div class="col-sm-10">
										<div class="form-control inputTexto espacio-input">
											<input type="text" id="telefono" name="telefono"
												placeholder="Teléfono" value="" maxlength="10" />
										</div>
									</div>
								</div>

								<div class="form-group ">
									<label for="cedula" class="col-sm-2 control-label">Cédula</label>
									<div class="col-sm-10">
										<div class="form-control inputTexto espacio-input">
											<input type="text" id="cedula" name="cedula"
												placeholder="Cédula" value="" maxlength="10" />
										</div>
									</div>
								</div>
								<input type="hidden" name="user" id="user" value=""> <input
									type="hidden" name="fbid" id="fbid" value="">

								<div class="form-group">
									<label for="mail" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<div class="form-control inputTexto espacio-input">
											<input type="text" id="mail" name="mail" placeholder="E-mail"
												value="" />
										</div>
									</div>
								</div>


								<div class="form-group">
									<label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
									<div class="col-sm-10">
										<div class="form-control inputTexto espacio-input">
											<input type="text" id="ciudad" name="ciudad"
												placeholder="Ciudad" value="" />
										</div>
									</div>
								</div>

							</div>
							<div class="form-group" style="margin-top: 10px; display: none;">
								<input id="submit" name="submit" type="submit" value=""
									class="btn-sumbit" />
							</div>
						</form>

					</div>
				</div>
				<!--<div class="btn btn-acepta">Jugar</div>
				<div class="btn btn-instruciones">Instrucciones</div>
				<div class="btn btn-continuar-registro">Continuar</div>
				<div class="btn btn-ranking" style="margin-left:320px;">Ranking</div>-->
			</div>
			</div>
		</div>

		 <div class="row view-game" >
		 	<div class="marcador-puntaje">
		 		<span class="titulo-marcador acento2">Puntaje: </span>
		 		<span class="puntaje-marcador acento2" id="puntajeUser"></span>
                <span class="titulo-marcador acento2">Tiempo: </span>
                <span class="puntaje-marcador-tiempo acento2" id="puntajeTiempoUser"></span>
		 	</div>
			<div class="col-lg-12 incio">
				<div class="contenedor-game"></div>
			</div>
		</div>


		<div class="row view-share" >
			<div class="col-lg-12 incio">
				<div class="row view-inicio-compartir">
					<div class="logo"></div>
					<div class="contendor-actividad">
						<div class="contenedor-informacion">
							<div class="mascara">
								<div class="texto-compartir">
									<p>
									<span class="acento">¡Lo Lograste! </span><br>
									</br>
										Cargaste la batería del <span class="acento">Samsung Galaxy S6</span>
										y sumaste un total de <span class="puntos-total"></span> puntos.
									</br>
										Comparte tu resultado y aumenta tus posibilidades de ganar.
									</p>
								</div>
							</div>
							<div class="btn btn-home">Inicio</div>
							<div class="btn btn-compartir" data-toggle="modal" data-target="#myModal">Compartir</div>
							<div class="btn btn-volver">Volver A Jugar</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
					    	<div class="modal-content">
						      <div class="modal-header">
						        <h4 class="modal-title" id="myModalLabel">Elige tu opción preferida.</h4>
						      </div>
						      <div class="modal-body">
									<div class="btn btn-compartir-app">Posteo</div>
									<div class="btn btn-mensaje-app">mensaje</div>

									<div data-dismiss="modal" class="btn btn-cerrar-modal" >Cerrar</div>
						      </div>
					    </div>
					  </div>
					</div>
	<div id="condiciones">
		 <strong style="color:#000;;">
		 	<?php echo $data['condiciones'];?>
		 </strong><br/>		 	
	</div>
		</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/samsung_baterias6/app.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>

	<script type="text/javascript" charset="utf-8">

	 window.fbAsyncInit = function() {
	    FB.init({
	      appId      : <?php echo $data['idApp'] ?>,
	      xfbml      : true,
	      version    : 'v2.2'
	    });

	    FB.getLoginStatus(function(response) {
			  if (response.status == 'connected') {
			    onLogin(response);
			  } else {
			    FB.login(function(response) {
			      onLogin(response);
			    }, {scope: 'email'});
			  }
			});
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/es_LA/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));

		var rules = [
					   { name: 'nombre', display: 'nombre', rules: 'required'},
					   { name: 'apellido', display: 'apellido', rules: 'required'},
		               { name: 'ciudad', display: 'ciudad', rules: 'required'},
		               { name: 'cedula', display: 'cedula', rules: 'required|numeric||max_length[10]'},
		               { name: 'telefono', display: 'telefono', rules: 'required|numeric|max_length[10]'},
		               { name: 'mail', display: 'mail', rules: 'required|valid_email'}
		            ];

		var validator = new FormValidator('register',rules, function(errors, event) {
			 if (errors.length > 0) {
			        var errorString = '';
			        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
			        	$('#'+errors[i].id).val("");
				        $('#'+errors[i].id).css({"color":"#42332a"});
				        errorString+=errors[i].id+"<br>";
			        };
			        alert("REGISTROS NO COMPLETADOS");
			    }else{
			    	$(".btn-continuar-registro").hide();
				    $("#submit").hide();
			    	enviarForma('register');
				    }
			});

		var dis ="<?php  echo $data['dispositivo'];?>";
	</script>



</body>
</html>


