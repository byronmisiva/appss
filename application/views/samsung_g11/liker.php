  <div class="fondoHome" id="ingreso">
	<div class="logo"></div>
	<div class="texto-intro">
		<div id="texto1" class="texto">
		     <h1>¡SE EL REPRESENTANTE DEL EQUIPO G11 DE ECUADOR!</h1>
	         <p>Regístrate para ser una de las duplas que participarán en el campeonato de</p>
	         <p>fútbol - tenis en Plaza Samsung (Guayaquil) y demuestra tu talento.</p>
		</div>
		<div id="texto2" class="texto">
		     *Cupos limitados.
		</div>
	</div>
	<div id="boton-ingreso"></div>
	<div class="jugadores"></div>
	<div class="logo-samsung"></div>
</div>

<div class="fondoHome" id="formulario" >
	<div class="logo-form"></div>
	<div class="formulario">
		<form id="form_datos">
			<div class="row fila">
				<div class="col-md-12 titulo-equipo">
									NOMBRE DEL EQUIPO
				</div>
				<div class="col-md-12">
					<input type="text" id="nombre_equipo" name="nombre_equipo" class="input-grande"></input>
				</div>
			</div>			
			<div class="row fila-row">
				<div class="col-md-6 col2">
					<div class="row">
						<div class="col-md-12 titulo">
							INTEGRANTE #1
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-12 align-left ">NOMBRES Y APELLIDOS</div>
						<div class="col-md-12">
							<input type="text" id="nombre_int1" name="nombre_int1" class="input-normal" value="<?php ?>"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">E-MAIL</div>
						<div class="col-md-12">
						<input type="text" id="mail_int1" name="mail_int1" class="input-normal"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">TELÉFONO</div>
						<div class="col-md-12">
						<input type="text" id="telefono_int1" name="telefono_int1" class="input-normal" maxlength="10"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">CÉDULA</div>
						<div class="col-md-12">
						<input type="text" id="cedula_int1" name="cedula_int1" class="input-normal" maxlength="10"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">EDAD</div>
						<div class="col-md-12">
						<input type="text" id="edad_int1" name="edad_int1" class="input-normal" maxlength="2"></input>
					</div>
					</div>
				</div>
				
				<div class="col-md-6 col2">
					<div class="row">
						<div class="col-md-12 titulo">
							INTEGRANTE #2
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-12 align-left ">NOMBRES Y APELLIDOS</div>
						<div class="col-md-12">
							<input type="text" id="nombre_int2" name="nombre_int2" class="input-normal"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">E-MAIL</div>
						<div class="col-md-12">
						<input type="text" id="mail_int2" name="mail_int2" class="input-normal"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">TELÉFONO</div>
						<div class="col-md-12">
						<input type="text" id="telefono_int2" name="telefono_int2" class="input-normal" maxlength="10"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">CÉDULA</div>
						<div class="col-md-12">
						<input type="text" id="cedula_int2" name="cedula_int2" class="input-normal" maxlength="10"></input>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 align-left">EDAD</div>
						<div class="col-md-12">
						<input type="text" id="edad_int2" name="edad_int2" class="input-normal" maxlength="2"></input>
					</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">					
					<input type="hidden" name="user" id="user" value='<?php echo json_encode($user)?>'>
					<input type="hidden" name="fb_page" id="fb_page" value='<?php echo json_encode($fb_page)?>'>
					<input type="submit" id="btn-enviar" class="input-normal boton-enviar" value="" />
				</div>
			</div>				
		</form>
		<div class="alerta">
			<p>Verifica que la información ingresada sea la correcta.</p>
			</div>	 
	</div>	 
</div>
<script>
	$(document).ready( function() {
	    $('#boton-ingreso').click(function(){    	
	    	$("#formulario" ).fadeOut( "slow", function(){
				$("#ingreso").hide();
				$( "#formulario" ).fadeIn( "slow" );
			});    	
	    });
	
	    $('.alerta').click(function(){
	    	$(".alerta" ).fadeOut( "slow");	    
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
		    	enviarForma('form_datos'); 	    			    	
			    
		});

	validator.registerCallback('edad', function(value) {		
	    if (parseInt(value)<18){
	    	alert("* Válido solo para mayores de 18 años.");
	    	return false;
	    }
	    return true;
    	
	});
</script>



















