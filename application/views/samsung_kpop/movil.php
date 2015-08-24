<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link href="<?php echo base_url('css/samsung_kpop/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	<link rel="stylesheet" href="<?=base_url()?>fonts/regular/specimen_stylesheet.css" type="text/css" charset="utf-8">	
	<style type="text/css">
			@font-face {
			    font-family: 'samsung_imagination_condensRg';
			    src: url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.eot');
			    src: url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.eot?#iefix') format('embedded-opentype'),
			         url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.woff') format('woff'),
			         url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.ttf') format('truetype'),
			         url('samsungimaginationcondensedregular-webfont.svg#samsung_imagination_condensRg') format('svg');
			    font-weight: normal;
			    font-style: normal;
			}
		
							
			body{
				background-color:#ffffff;
				font-family: 'samsung_imagination_condensRg';
				color:#024F9F;
				font-size: 18px;
			}
			
			.imagenRegistrar{
				background-image: url('<?=base_url('imagenes/samsung_kpop/registrarme-home-of.png')?>');
				background-repeat:no-repeat;
				width: 173px;
				height:79px;
				margin: 0 auto;
				cursor:pointer;
			}
			
			.logofooter{
				background-image: url('<?=base_url('imagenes/samsung_kpop/auspicio-samsung-todaslaspantallas.png')?>');
				width:240px;
				height: 50px;
				float: right;
				margin-top: 20px;
			}
			
			.imagenRegistrar:hover{
				background-image: url('<?=base_url('imagenes/samsung_kpop/registrarme-home-on.png')?>');
			}
			
			.inputClase1{
				
				background-color:#034DA2;							
			}
			
			input{
				border:none;
				color:#ffffff;
				height: 30px;
			}
			
			.inputClase2{
				background-color:#00B5F1;
				
			}
			
			.formularioimagen{
				background-image: url("http://localhost/appss/imagenes/samsung_kpop/formulario.jpg");
			    background-repeat: no-repeat;
			    background-size: 100% auto;
			    display: inline-table;
			    height: 278px;
			    margin-left: 30px;
			    margin-top: 25px;
			    width: 90%;				
			}
			
			.btn-sumbit{			
				width:159px;
				height:64px;
				background-image: url('<?=base_url('imagenes/samsung_kpop/boton-registro-enviar-of.png')?>');
				background-repeat: no-repeat;
				border: none;
				background-color: transparent;
				cursor:pointer;
				margin-left: 25%;
				margin-top: 2%;
				display: inline-block; 
			
			}
			
			.btn-sumbit:hover{
				background-image: url('<?=base_url('imagenes/samsung_kpop/boton-registro-enviar- on.png')?>');
			}
			
			#gracias{
				float: left;
			    font-size: 35px;
			    font-weight: bold;
			    margin-left: 17%;
			    margin-top: 30%;
			    text-align: center;
			    width: 70%;
				display:none;
			}
							
			.fondo{
				height:auto;
				background-image: url('<?=base_url('imagenes/samsung_kpop/fondo.jpg')?>');
				background-repeat:no-repeat; 				
				background-size:100%; 
				background-position: 0 top; 
				display: inline-block;
			}				
			
			.registro{
				background-image: url('<?=base_url('imagenes/samsung_kpop/contenedor.png');?>');
				background-repeat: no-repeat;
			    background-size: 110% 100%;
			    height: 350px;
			    margin: 45% -30px auto;
			    position: inherit;
			    width: 110%;
			}
			
			#introMensaje{
			 	display: inline-table;
			    height: 250px;
			    margin-left: 12%;
			    margin-top: 12%;
			    text-align: left;
			    width: 80%;
			}
			
			
			body{
				background-color: #034DA2;
				width: 100%;height: auto;margin: 0;
			}
			
			.linkCondiciones{
				position:absolute;
				top:82%;
				left:2%;
				color:#ffffff;
				font-size: 18px;
				width:25%;
			}
			
			.linkCondiciones:hover{
			color: #DC2784;
			}	
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?=base_url()?>js/fonts/bold/easytabs.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>js/fonts/regular/easytabs.js" type="text/javascript" charset="utf-8"></script>
		
</head>
<body >	
	<div id="content" class="container fondo"  >
		
	<div class="registro" >
	<div id="introMensaje" >
	<table width="100%">
		<tr style="height:35px;">
			<td style="font-weight: bold;text-align: center;font-family: samsung_imagination_condensRg;font-size: 20px;">
				Forma parte de esta experiencia innolvidable.
			</td>
		</tr>		
		<tr style="height:35px;" >
			<td style="font-weight: normal;"  >
			Inscríbete en nuestro concurso de baile y podrás ser parte de las 15 agrupaciones que se 
			presenten el próximo <span style="font-weight: bold;"> 3 de abril </span> en <span style="font-weight: bold;">Plaza Samsung</span> (junto a Mall del Sol).</td>
		</tr>
		
		<tr style="height:35px;">
			<td style="font-weight: normal;">
			La mejor agrupación recibirá un GALAXY S4 Zoom para cada integrante.
			</td>
		</tr>
		
		<tr style="height:35px;">
			<td >
				<div class="imagenRegistrar" onclick="$('#introMensaje').hide();$('#register').show();"></div>
			</td>
		</tr>
		
	</table>	
	</div>
	
	<div  id="gracias" >
		Tu registro fue enviado.	
	</div>
	
	<form id ="register" method="post" role="form" class="form-horizontal formulario formularioimagen" action="<?php echo base_url('piaggio_formulario/register')?>" style="display:none;">
			<div style="float:left;width:90%;display:block;height: auto;margin-left:25px;margin-top:35px; ">
				<table style="width: 98%;height:240px ;">
					<tr>
						<td style="color:#00B5F1;" colspan="2">Nombre de la agrupación</td>						
					</tr>
					<tr>
						<td colspan="2">
							<input type="text" id="nombre_grupo" class="inputClase2" style="width: 100%;"	name="nombre_grupo" placeholder="Nombre Agrupación" value="" />
						</td>
					</tr>
					<tr>
						<td style="color:#00B5F1;" colspan="2">Cantidad integrantes</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="number" id="cantidad" class="inputClase1" style="width: 100%;"	name="cantidad" placeholder="Número de integrantes" value="" />
						</td>
					</tr>
					<tr>
						<td style="color:#00B5F1;" colspan="2">Cover con el que participarán</td>
					</tr>
					<tr>
						<td colspan="2">
						<input type="text" id="cover" class="inputClase2" style="width: 100%;"	name="cover" placeholder="Cover con el que participan" value="" />
						</td>
					</tr>
					
					<tr>
						<td style="color:#00B5F1;">Teléfono</td><td style="color:#00B5F1;">E-mail</td>
					</tr>
					
					<tr>
						<td>
							<input type="tel" id="telefono"  style="width:95%;" name="telefono" class="inputClase1" placeholder="Teléfono" value=""  />					
						</td>
						<td>
							<input type="email" id="mail" name="mail" class="inputClase2"  style="width: 100%;" placeholder="E-mail" value=""  />
						</td>
					</tr>				
				</table>				
				<input type="hidden" name="user" id="user" value='movil'>				
				<div style="margin-top: -10px;">
					<input id="submit" name="submit" type="submit" value="" class="btn-sumbit" />
				</div>
			</div>
		</form>	
	</div>
	<div>
	<a href="<?=base_url('archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-KPOP.pdf')?>" class="linkCondiciones" target='_blank' >Términos y Condiciones</a>
	</div>
		<div class="logofooter"></div>
	
	</div>
	<div id="condiciones">
		<!-- <strong>T&eacute;rminos y Condiciones:</strong><br/> 
		<?=$condiciones;?> -->
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">	
	<script type="text/javascript" src="<?=base_url('js/general/library_facebook.js?refresh=19898797915')?>"></script>
	<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>	

	 <script type="text/javascript">	
		var rules = [ 					   
		               
		               { name: 'nombre_grupo', display: 'nombre_grupo', rules: 'required'},
		               { name: 'cantidad', display: 'cantidad', rules: 'required|numeric'},
		               { name: 'cover', display: 'cover', rules: 'required'},	               
		               { name: 'telefono', display: 'telefono', rules: 'required|min_length[10]'},	               
		               { name: 'mail', display: 'mail', rules: 'required|valid_email'}	               
		            ];    
		
		var validator = new FormValidator('register',rules, function(errors, event) {		
			 if (errors.length > 0) {
			        var errorString = '';
			        alert("Verifica que la información ingresada sea la correcta.");  
			    }else{
			    	enviarForma('<?=base_url()?>','register'); 		    			    	
				    }
			});
		
		
			function enviarForma(accion,forma){						
			$.ajax({  
				  type: "POST",  
				  url: accion+"samsung_kpop/register_movil",  
				  data: $('#'+forma).serialize(),
				  success: function( response ) {
					  if (response=="1"){					  
						$('#submit').hide();
					    $('#gracias').show();
					    $('#'+forma).hide();
					  }
		    		} 
				}); 
			return false;
			};	 	
		</script>
</body>
</html>

	

















