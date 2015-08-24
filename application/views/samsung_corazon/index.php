<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
	<link href="<?=base_url('css/samsung_corazon/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/samsung_corazon/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/samsung_corazon/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">	
	<script type="text/javascript" src="<?=base_url().'js/general/validate.js?refresh='.rand(10, 1000)?>"></script>
	
	<style>
		input, button, select, textarea {
		   background-color: #dde7c2;
		    border: 1px solid #76855d;
		    font-family: inherit;
		    font-size: inherit;
		    height: 31px;
		    line-height: inherit;
		    margin-top: 5px;
		    width: 250px;
		     -webkit-box-shadow: 10px 5px 15px 0px rgba(50, 50, 50, 0.55);
		-moz-box-shadow:    10px 5px 15px 0px rgba(50, 50, 50, 0.55);
		  box-shadow: 10px 5px 15px 0 rgba(50, 50, 50, 0.55);
		}	
	</style>
</head>
<body>
	<?php 
			$genero = array( ''  => 'Escoger género','m'    => 'Masculino','f'   => 'Femenino');
	?>

	<div id="content" class="container" >	
		<div class="row">
			<div class="col-md-12">
				<div class="actividad-1">
					<div class="franja-1">
						<p>¡Descubre qué tipo de corazón tienes!</p>
					</div>
					<div class="franja">
						<button class="btn-ingresar"></button>
					</div>
					
				</div>
				<div class="actividad-2">
					<div class="titula-registro">REGISTRO</div>
				
				<form id="formaRegistros" name="formaRegistros">
						<table>	
							<tr>
								<td class="etiqueta">Nombre</td>
								<td class="campo"><input id="nombre" name="nombre" placeholder="Nombre *" type="text"  /></td>
							</tr>
							
							<tr>
								<td class="etiqueta">Apellido</td>
								<td class="campo"><input id="apellido" name="apellido" placeholder="Apellido *" type="text"  /></td>
							</tr>
							
							<tr>
								<td class="etiqueta">Edad</td>
								<td class="campo"><input id="edad" name="edad" placeholder="Edad *" type="text" maxlength="2"  /></td>
							</tr>
							
							<tr>
								<td class="etiqueta">Genero</td>
								<td class="campo"><?php echo form_dropdown('genero', $genero, '');?></td>
							</tr>
						
							<tr>
								<td class="etiqueta">Ciudad</td>
								<td class="campo"><input id="ciudad" name="ciudad" placeholder="Ciudad *" type="text" /></td>	
							</tr>						
							<tr>
								<td class="etiqueta">Teléfono</td>
								<td class="campo"><input id="telefono" name="telefono" placeholder="Teléfono *" type="text" maxlength="10" /></td>
							</tr>
							  <tr>							
								<td class="etiqueta">Cédula</td>
								<td class="campo">
									<input id="cedula" name="cedula" placeholder="Cedula*" type="text" maxlength="10" />
								</td>
							</tr>							
							<tr>
								<td colspan="2">
									<input id="enviar" name="enviar" value="" type="submit"/>
								</td>
							</tr>
						</table>					
					</form>
				
				</div>
				<div class="actividad-3">
						<table>	
							<tr>								
								<td class="txtcampo">
									<input id="valor" name="valor" placeholder="Pulsos" type="text"/>
								</td>
							</tr>
							<tr>
								<td class="btn-enviar">
									<div id="enviar2" name="enviar" onclick="envioPulsos()"></div>
								</td>
							</tr>
						</table>
						
						<div class="logo-corazon"></div>
						<div class="bmp"></div>
						
				</div>
				
				<div class="actividad-4">	
								
					<div class="btn-regresar" onclick="regresar()"></div>
				</div>				
			</div>
			</div>
			</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	var idParticipante;		
	var rules = [ 
				   { name: 'nombre', display: 'nombre', rules: 'required'},
				   { name: 'genero', display: 'genero', rules: 'required'},
				   { name: 'edad', display: 'edad', rules: 'required|max_length[2]|numeric'},
				   { name: 'apellido', display: 'apellido', rules: 'required'},
				   { name: 'ciudad', display: 'ciudad', rules: 'required'},
				   { name: 'cedula', display: 'Cédula', rules: 'required|numeric|min_length[10]'},
				   { name: 'telefono', display: 'Téléfono', rules: 'required|numeric|max_length[10]|min_length[7]'}				   
	            ];    
	
	var validator = new FormValidator('formaRegistros',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';
		        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
		        	$('#'+errors[i].id).val("");		        	
			        $('#'+errors[i].id).css({"color":"#42332a"});
			        //errorString+=errors[i].id+"<br>"
			       // console.log(errors[i].id);
		        };
		        alert("ingresa informacion");
		    }else{
		    	enviarForma('formaRegistros'); 		    			    	
			    }
		});
	
		function enviarForma(forma){						
		$.ajax({  
			  type: "POST",  
			  url: "<?php echo base_url('samsung_corazon/registro')?>",
			  data: $('#'+forma).serialize(),
			  success: function( response ) {
				  idParticipante=response;				  
					$('#submit').hide();
					$(".actividad-2").fadeOut( "slow", function(){
						$(".actividad-3").fadeIn( "slow" );
						$("body").addClass("ventana-3");
					});
	    		} 
			}); 
		return false;
		};

		function envioPulsos(){
			var pulsos = $("#valor").val();			
			if(pulsos!=""){
			$.ajax({  
				  type: "POST",  
				  url: "<?php echo base_url().'samsung_corazon/consultaDatos/'?>"+pulsos+"/"+idParticipante,				  
				  success: function( response ) {						
						$(".actividad-3").fadeOut( "slow", function(){
							$(".actividad-4").fadeIn( "slow" );
							if(response == "1"){
								$(".actividad-4").addClass("corazon-plata");
								$("body").addClass("fondo-2");
							}							
							else if(response == "2"){
								$(".actividad-4").addClass("corazon-bronce");
								$("body").addClass("fondo-3");
							}							
							else if(response == "3"){
								$(".actividad-4").addClass("corazon-oro");
								$("body").addClass("fondo-4");
							}							
							else if(response == "4"){
								$(".actividad-4").addClass("corazon-hierro");
								$("body").addClass("fondo-5");
							}							
						});	
		    		} 
				}); 
			return false;
			}
		};

		function regresar(){
			window.location = "<?php echo base_url('samsung_corazon')?>";
		};

		
		$(document).ready(function(){
			$(".btn-ingresar").click(function(){
				$(".actividad-1").fadeOut( "slow", function(){
					$(".actividad-2").fadeIn( "slow" );
					$("body").addClass("ventana-2");
					
				});
			});	

		});

		$("body").addClass("ventana-1");
		</script>
</body>
</html>


