	<style>
	.opaco{
		background-color: rgba(0, 0, 0, 0.2) !important;
    	background-image: none;
	}	
	.opaco span{
	color:rgba(0, 0, 0, 0.2) !important;
	}	
	</style>
	
	<script type="text/javascript">
		var parte = "<?php echo $usuario->nivel?>";
		if (parte == 1) 
			toSecond = timer1;
		else if (parte == 2) 
			toSecond = timer2;
		else if (parte == 3) 
			toSecond = timer3;
		else if (parte == 4) 
			toSecond = timer4;		
	</script>
	<?php  if ($dispositivo == "movil" ){?>
	<div class="row">
		<div class="col-lg-12">
			<div class="condiciones">
		 			<?php echo $condiciones;?>
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
	
	<?php }?>
	
	<div class="row view-inicio">
		<div class="col-lg-12">
			<div id="logo-dinamico" class="logo-evento-registro"></div>
			
			</div> 
			<div class="fondo-seccion2">
			    <!-- INTRO APLICACION- -->
			    <div class="intro-panel animated">
			    	<p class="texto-informativo"> 
						Empieza el reto y responde correctamente las preguntas <br> según su categoría:
					</p >
					<p class="texto-informativo">Presiona aquí:</p>
					<div class="btn-fondo btn-panel hvr-bounce-in">Comenzar</div>	
			    </div>				
				<!-- PANEL -->
				<div class="seccion-panel animated">
					<div class="contenerdor-panel">
						<?php 
						for ($x=1; $x<=6;$x++){?>	
							<div class="panel opcion-<?php echo $x?>">
							<div class="panel-<?php echo $x?>"></div>
							</div>
						<?php }?>
					</div>
					<div class="obtener-categoria">
						<?php 
						for ($x=1; $x<=6;$x++){?>	
							<div class="resultado opcion-<?php echo $x?> posicion-<?php echo $x?> animated"></div>
						<?php }?>					
					</div>
					<div class="btn-empezar hvr-pulse-grow">¡ Descubre tu pregunta !</div>
				</div>		
				<!-- FIN PANEL -->		
			    <!-- intro preguntas  -->
				<div class="intro-preguntas animated">
					<?php  if ($dispositivo == "movil" ){?>
						<div class="contenedor-cabeza-seccion">
							<div class="contenedor-tiempo"></div>
						</div>
					<?php }?>
					<div class="contenerdor-panel animated" id="carusel-preguntas"></div>
					<div class="contenedor-pie-seccion">
						<?php  if ($dispositivo == "normal" ){?>
							<div class="contenedor-tiempo"></div>
						<?php }?>
						<div class="smartv"></div>
					</div>
				</div>		
				<!-- PREGUNTAS -->
				<div class="view-resultado animated">
					<div class="mensaje-normal">
							<p >Has acertado <span class="errados"></span> preguntas para completar el Nivel <span class="nivel"></span>.</p>
							<div class="logo-smart"></div>
							<div class="btn-fondo btn-volver hvr-grow">Nueva categoría</div>
					</div>
					<div class="mensaje-pasa-nivel">
						<p >¡Felicidades! Acertarte <span class="errados"></span> en el Nivel <span class="nivel"></span>. Puedes pasar al siguiente nivel.</p>
						<div class="logo-smart"></div>
						<div class="btn-fondo btn-volver hvr-grow">Seguir jugando</div>	
					</div> 
				
				<div class="mensaje-incorrecto">
					<p>¡ Respuesta incorrecta ! <br> Recuerda que debes acertar 4 preguntas para pasar de Nivel.</p>
					<div class="logo-smart"></div>
					<div class="btn-fondo btn-volver hvr-grow">Escoger nueva categoria</div>
				</div>
				
				<div class="mensaje-fin-oportunidades">
					<p>¡Lo sentimos! No lograste responder correctamente 4 preguntas para poder pasar de Nivel.</>
					<div class="logo-smart"></div>
					<div class="btn-fondo btn-volver hvr-grow">Volver a intentarlo</div>
				</div>
				
				<div class="mensaje-termino-tiempo">
					<p>¡Oops, se te acabó el tiempo!</p>
					<div class="logo-smart"></div>
					<div class="btn-fondo btn-volver hvr-grow">Escoger nueva categoria</div>
				</div>
														
				<div class="contenedor-invitar"> 
						<div class="texto-invitar">Invita a tus amigos</div>
						<div class="ico-face"></div>
						<div class="ico-twitter"></div>
					</div>
			</div>
			<div class="view-fin-app animated">
					<p>¡Felicitaciones! <br>
					Has respondio correctamente todas las preguntas. Ya estás participando por un Smart TV.</p>
					<div class="logo-smart"></div>
					<a href="https://www.facebook.com/SamsungEcuador/"><div class="btn-fondo btn-salir">Salir</div></a>
					
				</div>
								
			</div>
			</div>
			
			<div class="contenedor-aciertos">
				<div class="indicador-aciertos">
				<?php 
					for ($x=1; $x<=4;$x++){?>	
						<div class="aciertos acierto-<?php echo $x?> "></div>
				<?php }?>
				</div>
				<div class="indicador-texto">Aciertos</div>
			</div>
		
			<div class="contenedor-nivel">
				<div class="indicador">
					Nivel <span class="nivel"></span>
				</div>
			</div>
		<?php  if ($dispositivo == "normal" ){?>	
		<div class="pie-app">
			<div class="condiciones">
		 		<?php echo $condiciones;?>
			</div>	
		</div>
		<?php }?>

<script src="<?php echo base_url()?>js/bluechristmas/complemento2.js?frefresh=<?php echo rand(0,1000)?>"></script>
<script type="text/javascript" >										
	$(".espera").hide();
	$('#myCarousel').carousel({
		  interval: false
		});
			
	$(".nivel").html(parte);	
	$(".pie-app").addClass("pie-top");
	if(dis == "movil"){
		$(".contenedor-aciertos").hide();
		$(".contenedor-nivel").hide();
		}
  </script>
  

  
  
  
		











