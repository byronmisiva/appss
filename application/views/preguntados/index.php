<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge-ON :: Samsung</title>
	<!-- fuentes -->
	<link href="<?php echo base_url()?>fonts/caprica/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/caprica-italica/stylesheet.css" type="text/css" rel="stylesheet">
	
	<link href="<?php echo base_url()?>fonts/samsung_regular_if/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/samsung_bold_if/stylesheet.css" type="text/css" rel="stylesheet">
	<!-- css -->
	<link href="<?php echo base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/preguntados/app.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/animate.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/preguntados/hover.css" type="text/css" rel="stylesheet">	
	<!-- js -->
	<script src="<?php echo base_url()?>js/preguntados/app.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" charset="utf-8"></script>
  	<script src="<?php echo base_url()?>js/general/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
	var usuarioFB;
	var idParticipante=0;
	var modoDev=false;
	if (modoDev == true)
		idParticipante=1005762036104636; 
	
	var accion="<?php echo base_url()?>";
	var controladorApp="<?php echo $data['controlador'];?>";
								
	</script>
</head>
<body>
<div id="fb-root"> </div> 
	<div class="contenedor-perfil">
	<div class="peril-espacio">
				<div class="img-perfil"></div>
				<div class="nombre-perfil"></div>
	</div>
	<div class="contenedor-control-audio">
	<!-- autoplay-->
	<audio id="player" src="<?php echo base_url()?>audio/preguntados/579767_Sprots---Animated-Fantasy.mp3" ></audio>
    <div class="play" onclick="document.getElementById('player').pause();"></div>
    <div class="stop" onclick="document.getElementById('player').play();"></div>
</div>
</div>
<div class="container animated">
	<div class="row view-inicio">
		<div class="col-lg-12 " >			
			<div class="fondo-seccion">
				<div class="logo-evento animated"></div>
				<div>
					<div class="intro-texto">										
						<p class="texto-informativo">¡Acepta el reto!<br> 
						Responde correctamente todas las preguntas, diviértete y participa por un Smart TV.</p>
						<div class="btn-fondo btn-ranking hvr-underline-from-center">Ranking</div>
						<div class="btn-fondo btn-jugar hvr-underline-from-center"><img src="<?php echo base_url()?>imagenes/preguntados/btn-jugar.jpg" /></div>
						<div class="btn-fondo btn-instrucion hvr-underline-from-center">Instruciones</div>
					</div>  
					<div class="view-registro animated">
					<div class="logo-evento-registro"></div>
					<p class="titular ">¡Antes de jugar debes registrarte!</p>	
					<form id="register" name="register" method="post" role="form" class="form-horizontal formulario" >
						<div class="registro espacio-columna" >							
									<div class="form-group">
	    								<div class="col-lg-12">      
											<div class="form-control inputTexto" >
												<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="" required />				
											</div>
										</div>
									</div>
									<div class="form-group">	
	    								<div class="col-lg-12">	
											<div class="form-control inputTexto espacio-input" >
												<input type="text" id="apellido" name="apellido" placeholder="Apellido" value="" required />				
											</div>
										</div>
									</div>								
									
									<div class="form-group " >
	    								<div class="col-lg-12">			
										<div class="form-control inputTexto espacio-input" >
											<input type="text" id="telefono" name="telefono" placeholder="Teléfono" value="" maxlength="10" required />
										</div>
										</div>
									</div>
																							
									<div class="form-group " >								
	    								<div class="col-lg-12">				
										<div class="form-control inputTexto espacio-input" >
											<input type="text" id="cedula" name="cedula" placeholder="Cédula" value="" maxlength="10" required />
										</div>
										</div>
									</div>																				
									<input type="hidden" name="user" id="user" value="">
									<input type="hidden" name="fbid" id="fbid" value="">															
								
									<div class="form-group" >
	    								<div class="col-lg-12">				
										<div class="form-control inputTexto espacio-input" >					
											<input type="text" id="mail" name="mail" placeholder="E-mail" value="" required />
										</div>
										</div>
									</div>						
																
									<div class="form-group">
	    								<div class="col-lg-12">			
											<div class="form-control inputTexto espacio-input" >			
												<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="" required />
											</div>
										</div>
									</div>							
								</div>
								 <div class="form-group" style="margin:10px auto;display: none;width:150px;">
										<input id="submit" name="submit" type="submit" value="" class="btn-sumbit" />
									</div>
								</form>
							<div class="btn-fondo btn-registro">Enviar</div>
						</div>
						
						<div class="view-instruciones animated">						
							<div>
							<p class="titular">¿Cómo jugar?</p>
							<div class="texto-instruciones">
								<p>
										Challenge-On by Samsung cuenta con 4 niveles y 6 categorías de preguntas: 
										Series, Películas, Música, Deportes, Comic’s y Ciencia. <br>
										Para superar un nivel debes responder correctamente 4 preguntas. <br>
		
										Solo avanzará al siguiente nivel el participante que respondan correctamente 
										las 4 preguntas Cada nivel está determinado por un límite de tiempo. 
										A medida que avances de nivel, el tiempo se reducirá:
								</p>
							</div>
							<div class="niveles">
								<p>Nivel 1: 25 segundos</p>
								<p>Nivel 2: 20 segundos</p>
								<p>Nivel 3: 15 segundos</p>
								<p>Nivel 4: 10 segundos</p> 
							</div>
							<div >
								<p>¡Suerte!</p>
							</div>							
							</div>
							<div class="btn-fondo btn-jugar btn-centrar">Jugar</div>
						</div>
						<!-- ranking -->
						<div class="view-ranking animated">						
							<div class="contenedor-etiquetas-ranking">
								<div class="etiqueta cab-nombre">Usuario</div>
								<div class="etiqueta cab-nivel">Nivel</div>
								<div class="etiqueta cab-tiempo">Tiempo</div>
								<div class="etiqueta cab-ciudad">Ciudad</div>
							</div>
							<div class="contenedor-ranking"></div>
							
							<div class="btn-fondo btn-jugar btn-centrar">Jugar</div>
						</div>
						
					</div>
				</div>			
			</div>
		</div>
		 <div class="pie-app">
			<div class="condiciones">
		 			<?php echo $data['condiciones'];?>
			</div>	
		</div>
	</div>
	<div class="view-nivel">
				 <div class="mensaje-nivel animated">
				 	Pasaste al Nivel <span class="mensaje nivel"></span>
				 </div>
			</div>
	<div class="espera">
		<div class="cargando"></div>		
	</div>
	<script type="text/javascript" src="<?php echo base_url('js/general/validate.js')?>"></script>
	<script src="<?php echo base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8">
		if (modoDev == true){
			/*modo developer*/
			idParticipante="1005762036104636";
			$(".img-perfil").html("Jairo Ortiz");
		   	$(".img-perfil").html("<img src='//graph.facebook.com/"+idParticipante+"/picture?width=75&height=75' />");						
		}else{
			/*incio metodos FB*/
			window.fbAsyncInit = function() {
		          FB.init({
		          appId      : <?php echo $data['idApp'] ?>,
		          xfbml      : true,
		          version    : 'v2.5'
		       });
			       	    	
		    FB.getLoginStatus(function(response) {		  
		    	if (response.status == 'connected') {
					FB.api('/me?fields=id,first_name,last_name,name,email', function(data) {
					   	usuarioFB = data;
					   	idParticipante=data.id;					   	
					   	$(".nombre-perfil").html(usuarioFB.name);
					   	$(".img-perfil").html("<img src='//graph.facebook.com/"+idParticipante+"/picture?width=75&height=75' />");
					});
		    	 } else {		    	
		    		   FB.login(function(response) {
		    			   if (response.status == 'connected') {
		    			   FB.api('/me?fields=id,first_name,last_name,name,email', function(data) {
							   	usuarioFB = data;
							   	idParticipante=data.id;					   	
							   	$(".nombre-perfil").html(usuarioFB.name);
							   	$(".img-perfil").html("<img src='//graph.facebook.com/"+idParticipante+"/picture?width=75&height=75' />");
							});
		    			   }
		    			   $(".img-perfil").html("<img src='//graph.facebook.com/"+response.userid+"/picture?width=48&height=48' />");
		    			}, {scope: 'email,public_profile'});
		    			  }
		    			});	    	
		    	 };

		    	  (function(d, s, id){
		    	    var js, fjs = d.getElementsByTagName(s)[0];
		    	     if (d.getElementById(id)) {return;}
		    	     js = d.createElement(s); js.id = id;
		    	     js.src = "//connect.facebook.net/en_US/sdk.js";
		    	     fjs.parentNode.insertBefore(js, fjs);
		    	   }(document, 'script', 'facebook-jssdk'));
		    	  /*fin metodos FB*/
		    	}
		/*configuracion de campos validate*/
		var rules = [ 
					   { name: 'nombre', display: 'nombre', rules: 'required'},
					   { name: 'apellido', display: 'apellido', rules: 'required'},
		               { name: 'ciudad', display: 'ciudad', rules: 'required'},
		               { name: 'cedula', display: 'cedula', rules: 'required|numeric||max_length[10]'},
		               { name: 'telefono', display: 'telefono', rules: 'required|numeric|max_length[10]'},	               	               
		               { name: 'mail', display: 'mail' , rules: 'required|valid_email'}	               	               
		            ];    
		
		var validator = new FormValidator('register',rules, function(errors, event) {		
			 if (errors.length > 0) {
			        var errorString = '';
			    }else{
			    	$(".btn-registro").hide();
				    $("#submit").hide();				    
			    	enviarForma('register'); 		    			    	
				    }
			});	  
		var dis ="<?php  echo $data['dispositivo'];?>";		
		
	</script>  
   <script src="<?php echo base_url()?>js/preguntados/complemento.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" ></script> 
</body>
</html>
























