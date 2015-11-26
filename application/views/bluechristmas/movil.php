<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    
    <title>Challenge-ON :: Samsung</title>
	<!-- fuentes -->
	<link href="<?php echo base_url()?>fonts/caprica/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/caprica-italica/stylesheet.css" type="text/css" rel="stylesheet">
	
	<link href="<?php echo base_url()?>fonts/samsung_regular_if/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/samsung_bold_if/stylesheet.css" type="text/css" rel="stylesheet">
    
    
	<link href="<?php echo base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/bluechristmas/app.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/bluechristmas/movil.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">	
	<link href="<?php echo base_url()?>css/animate.min.css" type="text/css" rel="stylesheet">		
				    
	<script src="<?php echo base_url()?>js/bluechristmas/app.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" charset="utf-8"></script>
  	<script src="<?php echo base_url()?>js/general/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
	var usuarioFB;
	var idParticipante=0;
	var modoDev=false;
	if (modoDev == true)
		idParticipante=1005762036104636; 
	
	var accion="<?php echo base_url()?>";
	var controladorApp="<?php echo $data['controlador'];?>";	
	function onLogin(response) {	  
			    FB.api('/me?fields=id,first_name,last_name,email', function(respuesta) {				    
			    	
			    	if (modoDev == true){
						idParticipante="1005762036104636";	
						$(".login-caja").hide();
			    		/*$(".btn-entrar").show();	*/
                        $(".btn-rankingr").show();	
                        $(".btn-jugar").show();	
                        $(".btn-instrucion").show();	                          
			    	}else{
			    		idParticipante=respuesta.id;
			    		console.debug(respuesta);
                        usuarioFB = respuesta;	
                        $(".nombre-perfil").html(usuarioFB.name);	
					   	
					   	$(".img-perfil").html("<img src='//graph.facebook.com/"+idParticipante+"/picture?width=45&height=45' />");
                        
			    		$(".login-caja").hide();
			    		$(".btn-ranking").show();	
                        $(".btn-jugar").show();	
                        $(".btn-instrucion").show();	                          
			    	}			    				    	
			    });
			};			
	</script>
</head>
<body>

<div id="fb-root"> </div> 

   
<div class="container animated">
<div class="row">
		<div class="col-lg-12">
			<div class="condiciones">
		 			<?php echo $data['condiciones'];?>
		 	</div>	
		</div>
	</div>
	<div class="row">
	<div class="col-lg-12">
		<div class="peril-espacio">
				<div class="img-perfil"></div>
				<div class="nombre-perfil"></div>
	</div>
	</div>
	</div>	

	<div class="row view-inicio">
		<div class="col-lg-12 " >
		<div class="fondo-seccion">
				<div class="logo-evento animated"></div>
            		
				<div class="intro-texto">
					<p class="texto-informativo">¡Acepta el reto! <br> Responde correctamente todas las preguntas, diviértete y participa por un Smart TV.</p>
					
					<div class="login-caja">
						<fb:login-button scope="email, public_profile" onlogin="checkLoginState();"></fb:login-button>		
					</div>		
                    
					<div class="btn-fondo btn-ranking">Ranking</div>
				    <div class="btn-fondo btn-jugar">
                        <img src="<?php echo base_url()?>imagenes/bluechristmas/btn-jugar.jpg" />
                    </div>
						<div class="btn-fondo btn-instrucion ">Instruciones</div>
				</div>
				<div class="view-registro animated">
                    <div class="logo-evento-registro"></div>
				    <p class="titular ">Registro</p>
				<form id="register" name="register" method="post" role="form" class="form-horizontal formulario" >
					<div class="registro" >							
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
							 <div class="form-group" style="display: none">
										<input id="submit" name="submit" type="submit" value="" class="btn-sumbit" />
									</div>
							</form>
						<div class="btn-fondo btn-registro">Enviar</div>
					</div>
            <!-- bloque instruciones-->
            <div class="view-instruciones animated">						
							<div>
							<p class="titular">¿Cómo jugar?</p>
							<div class="texto-instruciones">
								<p>
										Challenge-On by Samsung cuenta con 4 niveles y 6 categorías de preguntas: 
										Series, Películas, Música, Deportes, Comic’s y Ciencia. <br><br>
										Para superar un nivel debes responder correctamente 12 preguntas, 2 para cada categoría. <br><br>
		
										Solo avanzará al siguiente nivel el participante que respondan correctamente 
										las 12 preguntas Cada nivel está determinado por un límite de tiempo. 
										A medida que avances de nivel, el tiempo se reducirá: <br>
								</p>
							</div>
							<div class="niveles">
								<p>Nivel 1: 25 segundos</p>
								<p>Nivel 2: 20 segundos</p>
								<p>Nivel 3: 15 segundos</p>
								<p>Nivel 4: 10 segundos</p> 
                                <br>
							</div>
							<div class="texto-instruciones">
								<p>¡Suerte!</p>
							</div>							
							</div>
							<div class="btn-fondo btn-jugar btn-centrar">Jugar</div>
						</div>
            <!-- fin de bloque instrucion-->
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
						
            <!-- fin ranking -->
            
				</div>
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
	function statusChangeCallback(response) {
	    if (response.status === 'connected') {      
	    	onLogin();
	    }else{
	    	$(".login-caja").show();            
            $(".btn-rankingr").hide();	
            $(".btn-jugar").hide();	
            $(".btn-instrucion").hide();
	    } 
	  };
	  
		  function checkLoginState() {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }
	
		
	window.fbAsyncInit = function() {
	    FB.init({
	      appId      : <?php echo $data['idApp'] ?>,
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	
	    FB.getLoginStatus(function(response) {		 
			  if (response.status == 'connected') {
			    onLogin(response);
			  } else {		    
			    FB.login(function(response) {
			      onLogin(response);
			    }, {scope: 'email, public_profile'});
			    $(".login-caja").show();
				 $(".btn-rankingr").hide();	
                $(".btn-jugar").hide();	
                $(".btn-instrucion").hide();
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
	    $(".login-caja").show();
		$(".btn-entrar").hide();	
	  
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
<script src="<?php echo base_url()?>js/bluechristmas/complemento.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" ></script>

</body>
</html>



	




















