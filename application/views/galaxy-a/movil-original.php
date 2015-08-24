<!DOCTYPE html>
<html>
<head>
	<title>Generación Galaxy A :: Samsung</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, user-scalable=no"/>    		
	<link href="<?php echo base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet" />	
	<link href="<?php echo base_url()?>css/galaxy-a/jquery.fullPage.css" rel="stylesheet" type="text/css"  />	
	<link href="<?php echo base_url()?>css/galaxy-a/movil.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/samsung_regular_if/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/samsung_bold_if/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/galaxy-a/style.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/galaxy-a/cropper/cropper.css">  
  	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/galaxy-a/cropper/docs.css">    
	<script src="<?php echo base_url()?>js/galaxy-a/app.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" charset="utf-8"></script>  
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>	
	<script src="<?php echo base_url()?>js/galaxy-a/jquery.fullPage.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/galaxy-a/jquery-scrollto.js" type="text/javascript"></script> 
	<script type="text/javascript">
	var usuarioFB;
	var idParticipante=0;
	var modoDev=false;
	if (modoDev == true)
		idParticipante=1005762036104636; 
	var birthday="03/19/1985";		
	var accion="<?php echo base_url()?>";
	var controladorApp="<?php echo $data['controlador'];?>";	
	function onLogin(response) {			  
			    FB.api('/me', function(respuesta) {
			    	usuarioFB = respuesta;
			    	if (modoDev == true){
						idParticipante="1005762036104636";
						$(".btn-entrar").show();
						$(".login-caja").hide();
			    	}else{
			    		idParticipante=respuesta.id;
			    		$(".login-caja").hide();
			    		$(".btn-entrar").show();
			    			
			    	}			    				    	
			    });
			};	

	
		$(document).ready(function() {
			$('#fullpage').fullpage({				
				anchors: ['home', 'registro', 'cierre'],
				autoScrolling: false					
			});
		});		
	</script>
</head>
<body>
<div id="fb-root"> </div> 	
<div class="contenedor">
		<ul id="menu" style="display:none;position: fixed;top:0;width: 100%;height:35px;z-index: 1000; ">
			<li data-menuanchor="home" class="active" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#uno">intro</a></li>
			<li data-menuanchor="registro" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#dos" >registro</a></li>
			<li data-menuanchor="cierre" class="tercero" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#ter">mensaje</a></li>
		</ul>
			
<div id="fullpage">
	<!-- PANTALLA 01 -->
	<div class="section " id="section0">		
				<article>
					<div class="logo-ingreso">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/logo.png" />
					</div>
					
					<div class="login-caja">
						<fb:login-button scope="email" onlogin="checkLoginState();"></fb:login-button>																
					</div>											
					<div class="bntap btn-entrar">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/boton-entrar_movil.png" />
					</div>
				</article>
	</div>
	<div class="section" id="section2">		
			<article>
					<div class="logo-peque"></div>
					<div class="franja-titular">
						REGISTRO
					</div>
					<div class="registro registro-label" >
						<form id="register" name="register" method="post" role="form" class="form-horizontal formulario" >
							<div class="form-group">		
								<div class="form-control inputTexto" >
									<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="" />				
								</div>
							</div>
							<div class="form-group">		
								<div class="form-control inputTexto espaciador-registro" >
									<input type="text" id="apellido" name="apellido" placeholder="Apellido" value="" />				
								</div>
							</div>							
							<div class="form-group">			
								<div class="form-control inputTexto espaciador-registro" >			
									<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="" />
								</div>
							</div>
							
							<div class="form-group" >			
								<div class="form-control inputTexto espaciador-registro" >					
									<input type="text" id="mail" name="mail" placeholder="E-mail" value="" />
								</div>
							</div>
							
							<div class="form-group " >			
								<div class="form-control inputTexto espaciador-registro" >
									<input type="text" id="telefono" name="telefono" placeholder="Teléfono" value="" maxlength="10" />
								</div>
							</div>
							
							<div class="form-group " >			
								<div class="form-control inputTexto espaciador-registro" >
									<input type="text" id="cedula" name="cedula" placeholder="Cédula" value="" maxlength="10" />
								</div>
							</div>		
							
							<div class="form-group " >			
								<div class="form-control inputTexto" style="margin-top: 8px;">
									<input type="text" name="fnacimiento" id="fnacimiento" value="">
								</div>
							</div>
									
							<input type="hidden" name="user" id="user" value="">
							<input type="hidden" name="fbid" id="fbid" value="">
							
							<div class="form-group" style="margin-top: 5px;margin-left: -30px;">
								<input id="submit" name="submit" type="submit" value="" class="btn btn-sumbit" />
							</div>
						</form>
						</div>
				</article>	
				<div class="franja">
				<div class="logo-samsung"></div>		
		</div>
	</div>
	<div class="section" id="section3">			
				<article>
					<div class="logo-ingreso"></div>
					<p class="texto-normal">
						¡Ups!<br>
						Parece que tu edad no entra en el rango de la Generación A.<br>
						¡Agradecemos tu entusiamo y no te pierdas las proximas 
						actividades que tenemos par ti!
					</p>															
					<div class="bntap btn-cerrar" ></div>
				</article>		
	</div>
	
	
</div>

</div>
<div id="condiciones">
		 <strong style="color:#000;;">
		 	<?php echo $data['condiciones'];?>
		 </strong><br/>			
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
      version    : 'v2.2'
    });

    FB.getLoginStatus(function(response) {		 
		  if (response.status == 'connected') {
		    onLogin(response);
		  } else {		    
		    FB.login(function(response) {
		      onLogin(response);
		    }, {scope: 'user_birthday, email,public_profile, publish_actions'});
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
	               { name: 'cedula', display: 'cedula', rules: 'required'},
	               { name: 'telefono', display: 'telefono', rules: 'required|min_length[7]'},	               
	               { name: 'mail', display: 'mail', rules: 'required|valid_email'}	               	               
	            ];     
	
	var validator = new FormValidator('register',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';		        
		        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
		        	$('#'+errors[i].id).val("");		        	
			        $('#'+errors[i].id).css({"color":"#42332a"});
			        errorString+=errors[i].id+"<br>"
		        };
		        alert("REGISTROS NO COMPLETADOS")				
		    }else{
		    	enviarForma('register'); 		    			    	
			    }
		});		


	$(".btn-entrar").hide();
	$("#section3").hide();
	$("#section2").hide();
	
	var dis ="<?php  echo $data['dispositivo'];?>";
	</script>  
<script src="<?php echo base_url()?>js/galaxy-a/complemento.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" ></script>

</body>
</html>



	




















