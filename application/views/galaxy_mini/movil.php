<!DOCTYPE html>
<html>
<head>
	<title>Registro Factura :: Samsung</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">        
    <meta name="viewport" content="width=device-width, user-scalable=no"/>	
	<link href="<?php echo base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet" />	
	<link href="<?php echo base_url()?>css/galaxy_mini/jquery.fullPage.css" rel="stylesheet" type="text/css"  />	
	<link href="<?php echo base_url()?>css/galaxy_mini/app-movil.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/imagination/stylesheet.css" type="text/css" rel="stylesheet">
	<script src="<?php echo base_url()?>js/galaxy_mini/app.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" charset="utf-8"></script>		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo base_url()?>js/galaxy_mini/jquery.fullPage.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	var usuarioFB=0;
	var idParticipante=0;
	var modoDev=false;
	if (modoDev == true)
		idParticipante=1005762036104636; 
		
	var accion="<?php echo base_url()?>";
	var controladorApp="<?php echo $data['controlador'];?>";	
	function onLogin(response) {		  
			    FB.api('/me', function(respuesta) {
			    	usuarioFB = respuesta;
			    	if (modoDev == true)
						idParticipante="1005762036104636";
			    	else{
			    		idParticipante=respuesta.id;
						$("#nombre").val(respuesta.first_name);
						$("#apellido").val(respuesta.last_name);
						$("#mail").val(respuesta.email);
						$("#fbid").val(respuesta.id);	
						$(".login-caja").hide();						
			    	}			    				    	
			    });
				
			};	
		$(document).ready(function() {
			$('#fullpage').fullpage({				
				anchors: ['home', 'registro', 'ganadores','cierre'],
				autoScrolling: false,
				scrollingSpeed: 1500	
			});
		});		
	</script>
</head>
<body>
<div id="fb-root"> </div>
<div class="contenedor">		
		<ul id="menu" style="display:none;top:0;width: 100%;height:35px;">
			<li data-menuanchor="home" class="active" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#uno">intro</a></li>
			<li data-menuanchor="registro" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#dos" >registro</a></li>
			<li data-menuanchor="ganadores" class="ercero" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#ter">mensaje</a></li>
			<li data-menuanchor="cierre" class="tercero" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#ter">mensaje</a></li>
		</ul>
				
<div id="fullpage">
	<!-- PANTALLA 01 -->
	<div class="section " id="section0">
			<div class="franja">
					<div class="login-caja">
						<fb:login-button scope="email" onlogin="checkLoginState();"></fb:login-button>																
					</div>	
					<div class="logo-samsung"></div>		
				</div>		
				<article>
					<div class="imagen-central"></div>
					<div class="texto-central">
						<div class="cuadro_izq"></div>
						<div class="linea-superior"></div>
						<div class="texto-home">
							Registra tu Galaxy S5 mini con tu número de factura y <br> 
							participa por los sorteos de un GEAR FIT o un SAMSUNG LEVEL BOX.
						</div>	
						<div class="linea-inferior"></div>					
					</div>															
					<div class="bntap btn-registrar primero">Registrar</div>
					<div class="bntap btn-ganadores">Ganadores</div>					
				</article>	
				<div class="condiciones">
					 Promoción valida hasta agotar stock. Requisito indespensable presentar factura para reclamar su premio.<br>		  
					 <?php echo $data['condiciones']?>			
				</div>			
	</div>
	
	
	<!-- PANTALLA 02 - REGISTRO-->
	<div class="section" id="section2">	
				<div class="franja">				
					<div class="icono-izq"></div>
					<div class="logo-samsung"></div>		
				</div>			
				<div class="titular-seccion">					
					<div class="franja-titular-registro"></div>
				</div>
				<div class="fondo-registro">
				<div class="registro registro-label">					
						<form id="register" name="register" method="post" role="form" class="form-horizontal formulario" >
							<div class="form-group">
							<div class="label-input">Nombres </div>		
								<div class="form-control inputTexto" >
									<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="" />				
								</div>
							</div>
							<div class="form-group">
							<div class="label-input">Apellidos </div>		
								<div class="form-control inputTexto" style="margin-top: 2px;">
									<input type="text" id="apellido" name="apellido" placeholder="Apellido" value="" />				
								</div>
							</div>
							<!-- <?php //echo (isset( $data['user']->location )) ? $data['user']->location->name : '';?> -->
							<div class="form-group">
							<div class="label-input">Ciudad </div>			
								<div class="form-control inputTexto" style="margin-top: 2px;">			
									<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="" />
								</div>
							</div>
							
							<div class="form-group" >
								<div class="label-input">E-mail </div>			
								<div class="form-control inputTexto" style="margin-top: 2px;">					
									<input type="text" id="mail" name="mail" placeholder="E-mail" value="" />
								</div>
							</div>
							
							<div class="form-group ">
								<div class="label-input">Teléfono</div>			
								<div class="form-control inputTexto" style="margin-top: 2px;">
									<input type="text" id="telefono" name="telefono" placeholder="Teléfono" value="" maxlength="10" />
								</div>
							</div>
							
							<div class="form-group " >		
								<div class="label-input">Cédula </div>	
								<div class="form-control inputTexto" style="margin-top: 2px;">
									<input type="text" id="cedula" name="cedula" placeholder="Cédula" value="" maxlength="10" />
								</div>
							</div>
							<div class="form-group " >	
								<div class="label-input">N° Factura </div>		
								<div class="form-control inputTexto" style="margin-top: 2px;">
									<input type="text" id="factura" name="factura" placeholder="Factura" value="" />
								</div>
							</div>
							<div class="form-group " >	
								<div class="label-input">Local </div>		
								<div class="form-control inputTexto" style="margin-top: 2px;">
									<input type="text" id="local" name="local" placeholder="Local" value="" />
								</div>
							</div>				
							<input type="hidden" name="user" id="user" value="">
							<input type="hidden" name="fbid" id="fbid" value="">
							<input type="hidden" name="fnacimiento" id="fnacimiento" value="">
							<div class="form-group" style="margin-top: 10px;">
								<input id="submit" name="submit" type="submit" value="" class="btn btn-sumbit" />
							</div>
						</form>
						</div>
				</div>	
				
				<div class="bntap btn-enviar segundo">Enviar</div>
				<div class="fondo-telefonos"></div>
				<div class="condiciones">
					 Promoción valida hasta agotar stock. Requisito indespensable presentar factura para reclamar su premio.<br>		  
					 <?php echo $data['condiciones']?>			
				</div>
	</div>
	
	<!-- PANTALLA 02.1 MENSAJE INVALIDO REGISTRO -->
	<div class="section" id="section3">			
				<div class="franja">
					<div class="icono-izq"></div>
					<div class="logo-samsung"></div>		
				</div>		
				<div class="row seccion-ganadores">
					<div class="franja-titular-ganadores"></div>
					<div class="texto-ganadores hidden-xs">
					Conoce a los ganadores de los premios Samsung.
					</div>
					<div class="linea-ganador hidden-xs"></div>
				</div>
				
				<div class="row">
					<div class="contenedor-ganadores-titulos">
						<div class="col-semana hidden-xs">						
							<div class="titula-semana"></div>							
						</div>
						<div class="col-nombres">						
							<div class="titula-nombre"></div>						
						</div>
						<div class="col-premio">						
							<div class="titula-premio"></div>						
						</div>
					
					</div>
				
				</div>
				
				<div class="row fondo-registro">
					<div class="contenedor-ganadores">
						<div class="col-semana hidden-xs">
							<?php for($x=0;$x<=7;$x++){?>
							<div class="fondo-campo semana"></div>
						<?php }?>
						</div>
						<div class="col-nombres">
							<?php for($x=0;$x<=7;$x++){?>
							<div class="fondo-campo nombre"></div>
						<?php }?>
						</div>
						<div class="col-premio">
							<?php for($x=0;$x<=7;$x++){?>
							<div class="fondo-campo premio"></div>
						<?php }?>
						</div>					
					</div>
				</div>
				<div class="bntap btn-continuar segundo">Continuar</div>
				<div class="fondo-facturas"></div>
	</div>
	
	<!-- PANTALLA 02.1 MENSAJE INVALIDO REGISTRO -->
	<div class="section" id="section4">		
				<div class="franja">
					<div class="logo-samsung"></div>		
				</div>			
				<div class="row">
					<div class="contenedor-cerrar">
						<div class="texto-central-cerrar">						
							<div class="linea-superior"></div>
							<div class="texto-home">
								¡Tu Galaxy S5 mini ha sido registrado! Debes estar 
								pendiente a los anuncions de ganadores semanales.
							</div>	
							<div class="linea-inferior"></div>					
						</div>
																				
						<div class="bntap btn-cerrar">Cerrar</div>
						<div class="imagen-central-cerrar"></div>
					</div>		
				</div>	
		<div class="condiciones">
			 Promoción valida hasta agotar stock. Requisito indespensable presentar factura para reclamar su premio.<br>
			 <?php echo $data['condiciones']?> 			
		</div>
	</div>
</div>

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
		    }, {scope: 'email'});
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
	
	var rules = [ 
				   { name: 'nombre', display: 'nombre', rules: 'required'},
				   { name: 'apellido', display: 'apellido', rules: 'required'},
	               { name: 'ciudad', display: 'ciudad', rules: 'required'},
	               { name: 'cedula', display: 'cedula', rules: 'required'},
	               { name: 'local', display: 'local', rules: 'required'},
	               { name: 'factura', display: 'factura', rules: 'required'},
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
		    	$('.btn-enviar').hide();
		    	$('.btn-sumbit').hide();
		    	enviarForma('register'); 		    			    	
			    }
		});		
	</script>  
<script src="<?php echo base_url()?>js/galaxy_mini/complemento.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" ></script>
</body>
</html>
























