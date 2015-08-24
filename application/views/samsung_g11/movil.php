<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link href="<?=base_url('css/samsung_g11/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/bootstrap.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>	
	<link rel="stylesheet" href="<?=base_url()?>fonts/antonio_regular/specimen_stylesheet.css" type="text/css" charset="utf-8">
	<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>
</head>
<body >	
	<div id="content" class="container-movil"  >
		<div class="fondoMovil" id="ingreso">
			<div class="logo-movil"></div>
			<div class="texto-intro-movil2">
					<div id="texto1" class="texto-movil2">
					     <p>¡Sé el representante del equipo G11 de Ecuador!</p>
				         <p>Regístrate para ser una de las duplas que participarán en el campeonato de</p>
				         <p>fútbol - tenis en Plaza Samsung (Guayaquil) y demuestra tu talento.</p>
					</div>
					<div id="texto2" class="texto-movil">
					     *Cupos limitados.
					</div>
			</div>
				<div id="boton-ingreso-movil"></div>
				<div class="jugadores-movil"></div>
				<div class="logo-samsung-movil"></div>
	  </div>
		<div class="fondoMovil" id="formulario-movil" >
			<div class="logo-movil"></div>
			<div class="formulario-movil">
				<form method="post" name="form_datos" id="form_datos">
					<div class="row fila">
						<div class="col-md-12 titulo-equipo2">
									NOMBRE DEL EQUIPO
								</div>
						<div class="col-md-12">
							<input type="text" id="nombre_equipo" name="nombre_equipo" class="input-grande-movil"></input>
						</div>
					</div>			
					<div class="row">
						<div class="col-md-6 col2-movil">
							<div class="row">
								<div class="col-md-12 titulo">
									INTEGRANTE #1
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12 align-left ">NOMBRES Y APELLIDOS</div>
								<div class="col-md-12">
									<input type="text" id="nombre_int1" name="nombre_int1" class="input-normal-movil"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">E-MAIL</div>
								<div class="col-md-12">
								<input type="text" id="mail_int1" name="mail_int1" class="input-normal-movil"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">TELÉFONO</div>
								<div class="col-md-12">
								<input type="text" id="telefono_int1" name="telefono_int1" class="input-normal-movil" maxlength="10"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">CÉDULA</div>
								<div class="col-md-12">
								<input type="text" id="cedula_int1" name="cedula_int1" class="input-normal-movil" maxlength="10"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">EDAD</div>
								<div class="col-md-12">
								<input type="text" id="edad_int1" name="edad_int1" class="input-normal-movil" maxlength="2"></input>
							</div>
							</div>
						</div>
						
						<div class="col-md-6 col2-movil margin-menos">
							<div class="row">
								<div class="col-md-12 titulo">
									INTEGRANTE #2
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12 align-left ">NOMBRES Y APELLIDOS</div>
								<div class="col-md-12">
									<input type="text" id="nombre_int2" name="nombre_int2" class="input-normal-movil"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">E-MAIL</div>
								<div class="col-md-12">
								<input type="text" id="mail_int2" name="mail_int2" class="input-normal-movil"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">TELÉFONO</div>
								<div class="col-md-12">
								<input type="text" id="telefono_int2" name="telefono_int2" class="input-normal-movil" maxlength="10"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">CÉDULA</div>
								<div class="col-md-12">
								<input type="text" id="cedula_int2" name="cedula_int2" class="input-normal-movil" maxlength="10"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 align-left">EDAD</div>
								<div class="col-md-12">
								<input type="text" id="edad_int2" name="edad_int2" class="input-normal-movil" maxlength="2" ></input>
							</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" id="btn-enviar" class="boton-enviar-movil" value="" ></input>
							
						</div>
					</div>				
				</form>
			</div>
			<div class="alerta">
			<p>
				Por favor ingresa toda la información solicitada.</p>
			</div>
			
			<div class="respuesta">
			<p>
				Tu registro ya fue realizado anteriormente.</p>
			</div>
				 
		</div>
		
	
	</div>	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/samsung_g11/app.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/fonts/antonio_regular/easytabs.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">	
	var accion="<?=base_url()?>";
	$(document).ready( function() {
	    $('#boton-ingreso-movil').click(function(){    	
	    	$("#ingreso" ).fadeOut( "slow", function(){				
				$( "#formulario-movil" ).fadeIn( "slow" );
			});
	    	
	    });

	    $('.alerta').click(function(){
	    	$(".alerta" ).fadeOut( "slow");	    
	    });

	    $('.respuesta').click(function(){
	    	$(".respuesta" ).fadeOut( "slow");	    
	    });
	    
		function mostrarFormulario(){
		 $('#boton-ingreso').click(function() {
		    $('#ingreso').css('display','none');
		    $('#formulario').css('display','block');
		 });
		 
		  $('#regresar').click(function() {
		    $('#ingreso').css('display','block');
		    $('#formulario').css('display','none');
		 });
		}
	});

	var rules = [ 
		     { name: 'nombre_int1', display: 'nombre_int1', rules: 'required'},
	             { name: 'mail_int1', display: 'mail_int1', rules: 'required|valid_email'},	               
	             { name: 'telefono_int1', display: 'telefono_int1', rules: 'required|numeric'},	               	               
	             { name: 'cedula_int1', display: 'cedula_int1', rules: 'required|numeric'},	               
	             { name: 'edad_int1', display: 'edad_int1', rules: 'required|numeric|callback_edad'},
	             { name: 'nombre_int2', display: 'nombre_int2', rules: 'required'},
	             { name: 'mail_int2', display: 'mail_int2', rules: 'required|valid_email'},	               
	             { name: 'telefono_int2', display: 'telefono_int2', rules: 'required|numeric'},	               	               
	             { name: 'cedula_int2', display: 'cedula_int2', rules: 'required|numeric'},	               
	             { name: 'edad_int2', display: 'edad_int2', rules: 'required|numeric|callback_edad'},
	             { name: 'nombre_equipo', display: 'nombre_equipo', rules: 'required'}             
	          ];    
	
	var validator = new FormValidator('form_datos',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';
		        
		        $(".alerta" ).fadeIn( "slow");	  
		    }else		    	
		    	enviarFormaMovil('form_datos'); 	    			    	
			    
		});

	validator.registerCallback('edad', function(value) {		
	    if (parseInt(value)<18){
	    	alert("* Válido solo para mayores de 18 años");
	    	return false;
	    }
	    return true;
    	
	});

	function enviarFormaMovil(forma){						
		$.ajax({  
			  type: "POST",  
			  url: accion+"samsung_g11/register_movil",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {				  
					 if (response=="1")
						 $('#content').load(accion+"samsung_g11/gracias");
					 else{
						 $(".respuesta" ).fadeIn( "slow");						 
					 }
	  		} 
			}); 
		return false;
		};
	
	</script>
</body>
</html>

	

















