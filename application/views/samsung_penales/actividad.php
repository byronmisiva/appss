	<script src="<?=base_url()?>js/primax_bigpromo/app.js" type="text/javascript"></script>
	<div class="contendor-actividad">
		<div class="btn-instruciones btn-fondo">INSTRUCIONES</div>
		<div class="btn-registro btn-fondo">REGISTROS</div>
		<div class="btn-acepta btn-fondo2">PARTICIPAR</div>		
	</div>

	<div class="actividad-0">
		<div class="fondo-cielo-calle">
			<div class="nubes-0"></div>
			<div class="paisaje-0"></div> 
		</div>
		<div class="vehiculo"></div>
		<div class="vehiculo2"></div>	
		<div class="btn-compartir">Compartir</div>		
		<div class="logoPrimax"></div>				
	</div>

	<div class="contenedorPop" id="instrucciones">
	  	<div class="sombra"></div>
	  	<div class="contenedorMensaje fondo-registros animated ">
		  	<table class="contenidoTabla2" >
		      <tr>
			       <td class="tituloInstrucion" style="font-family: kg_beneath;font-size: 16pt;font-weight: bold;">
			   			¡Bienvenido! Estás más cerca de empezar tu <br> aventura, estos son los pasos que tienes que seguir:  
			       </td>
		       </tr>	
		             
		       <tr>
			       <td>1. Llena el formulario de registro </td>
		       </tr>	       
		       <tr>
			       <td>2. Cumple los diferentes retos:</td>
		       </tr>	       
		       <tr>
			       <td>
			       <strong>RETO 1: </strong> Desbloquea tus neumáticos Pirelli al compartir el post que te aparecerá en tu pantalla.</td>
		       </tr>
		       <tr>
			       <td>
			       <strong>RETO 2:</strong> Selecciona el tipo de viajero que eres y compártelo con todos tus amigos.</td>
		       </tr>	       
		       <tr>
			       <td>
			       <strong>RETO 3:</strong> Escoge quién te acompañará en tu nueva aventura. Recuerda, únicamente cuando tu amigo/a acepte tu
			       	   invitación, tu registro será activado.</td>
		       </tr>	       
		       <tr>
			       <td>3. Los registros activos formarán parte del sorteo.</td>
		       </tr>

		        <tr>
			       <td style="padding-top:20px;text-align:center;font-size: 20px;">¡SUERTE!</td>
		       </tr><tr>
			       <td>
			       		<button type="button" class="cerrarInstrucciones" onclick="$('#instrucciones').hide();$('.fondo-registros').removeClass('bounceInUp');"></button>
			       </td>
		       </tr>
			</table>	  	
	  	</div>
	  </div>
	  

<!-- bloque reto 1 -->
	  <div class="contenedorPop" id="registros">
	  	<div class="sombra"></div>
	  	<div class="contenedorMensaje fondo-registros animated ">
		  	<table class="contenidoTabla2" >
		       <tr>
			       <td  class="tituloInstrucion" style="font-family: kg_beneath;font-size: 24pt;font-weight: bold;">
			   			REGISTROS ACTIVOS
			       </td>		       
		       </tr>	       
		       <tr>
			       <td style="text-align: center;">
			       Tienes <span style="font-weight: bold;font-size: 20px;"> <?php echo $data["registrados"]?></span> registros activos.
	       			</td>
		       </tr>
		       <tr>
			       <td>
			       Recuerda que para activar tus registros, tus amigos 
			       deben aceptar las invitaciones que compartiste con ellos en nuestro reto #3
	       			</td>
		       </tr>   
		       <tr>
			       	<td style="text-align: center;padding-top: 10px;font-family:arial;font-size:14.95pt;font-weight: bold;">
			       		¡Entre más registros tengas, más oportunidades tienes de ganar!
			       	</td>
		       </tr>
		       <tr>
			       <td>
			       	<button type="button" class="cerrarInstrucciones" onclick="$('#registros').hide();$('.fondo-registros').removeClass('bounceInUp');"></button>
			       </td>
			    </tr> 
			</table>	  	
	  	</div>
	  </div>


<!-- bloque reto 1 -->
	  <div class="contenedorPop" id="Reto-0">
	  	<div class="sombra"></div>
	  	<div class="contenedorMensaje logo-app animated ">
		  	<table class="contenidoTabla" style="width: 400px !important;">
		       <tr>
			       <td>
			   			<strong style="font-family: kg_beneath;font-size: 24pt;font-weight: bold;">RETO <span style="font-size: 30px;font-weight: normal;font-family: serif;">#</span>1</strong>
			       </td>		       
		       </tr>	       
		       <tr >
			       <td style="padding-top: 20px !important;font-size: 15pt;">
			       ¡Estás a punto de empezar tu Aventura  <strong style="font-family: arial;">SUPER G-PRIX</strong>!  Pero primero necesitas un 
			       set de neumáticos <strong style="font-family: arial;">PIRELLI</strong>.
                       <br/>
                       ¡Comparte el siguiente post para que comience la aventura de tu vida!
                   </td>

		       </tr>   
 		       <tr>
			       <td>
			       	<button class="btn-compartir"></button>
			       </td>
			    </tr> 
			</table>	  	
	  	</div>
	  </div>
<!-- bloque reto 2 -->
	  <div class="contenedorPop" id="Reto-1">
	  	<div class="sombra"></div>
	  	<div class="contenedorMensaje2 logo-app animated">
		  	<table  class="contenidoTabla" style="width: 380px;">
		       <tr>
			       <td>

                       <strong style="font-family: kg_beneath;font-size: 24pt;font-weight: bold;">RETO <span style="font-size: 30px;font-weight: normal;font-family: serif;">#</span>2</strong>

                   </td>
		       </tr>	       
		       <tr >
			       <td style="font-size: 18pt;">
			       ¡Estás más cerca de llegar a tu Aventura <strong style="font-family: arial;">SUPER G-PRIX</strong>! 
	       			</td>
		       </tr>   
		       <tr >
			       <td style=" font-size: 18pt;">
		           Pero antes,  dinos 
			       qué tipo de viajero eres  y compártelo en tu muro.
			       </td>
			       </tr>
		       <tr>
			       <td>
			       	<button class="btn-continuar-reto2"></button>
			       </td>
			    </tr> 
			</table>	
	  	</div>
	  	<div class="fondo-tipo animated ">
			<div class="opcionesViajero animated">
					<div class="opcion op1" onclick="compartirAventura(0);"> 
						<div class="icono ico1">
							<img src="<?php echo base_url('imagenes/primax_bigpromo/iconos/cuadro1.png')?>" />
						</div>
						<div class="descripcion des-1 animated" >
						<p>Musical:</p> Eres el encargado de la música durante el viaje. Todos confían 
						en tu buen gusto musical, por eso eres indispensable para la aventura.
						</div>  
					</div>
					<div class="opcion op2" onclick="compartirAventura(1);">
						<div class="icono ico2">
							<img src="<?php echo base_url('imagenes/primax_bigpromo/iconos/cuadro2.png')?>" />
						</div>
					 
						<div class="descripcion des-2 animated" >
						<p>Fotógrafo:</p> Te gusta capturar todos los momentos del viaje. 
						Sin ti, las  redes sociales de tus amigos fueran aburridas.
						</div> 
					</div>
					<div class="opcion op3" onclick="compartirAventura(2);">
						<div class="icono ico3">
							<img src="<?php echo base_url('imagenes/primax_bigpromo/iconos/cuadro3.png')?>" />
						</div> 
						<div class="descripcion des-3 animated" >
							<p>Guía:</p> Te sabes los mejores atajos de los carreteros 
							y tus amigos creen que tienes un GPS en la cabeza. 
						</div> 
					</div>
					<div class="opcion op4" onclick="compartirAventura(3);">
						<div class="icono ico4">
							<img src="<?php echo base_url('imagenes/primax_bigpromo/iconos/cuadro4.png')?>" />
						</div> 
						<div class="descripcion des-4 animated" >
							<p>Conductor:</p> Eres el que lidera la aventura estando 
							detrás del volante. ¡El éxito del viaje depende de ti!
						</div> 
					</div>
					<div class="opcion op5" onclick="compartirAventura(4);"> 
						<div class="icono ico5">
							<img src="<?php echo base_url('imagenes/primax_bigpromo/iconos/cuadro5.png')?>" />
						</div>
						<div class="descripcion des-5 animated" onclick="compartirAventura(5);">
							<p>Mochilero:</p> No te importa dónde dormir, te acomodas 
							como puedas y donde sea. Lo importante es ser parte de la aventura.
						</div> 
					</div>
					<div class="opcion op6" onclick="compartirAventura(5);">
						<div class="icono ico6">
							<img src="<?php echo base_url('imagenes/primax_bigpromo/iconos/cuadro6.png')?>" />
						</div> 
						<div class="descripcion des-6 animated" >
							<p>Gastronómico:</p> Eres feliz probando todo lo que la 
							gastronomía local tiene para ofrecerte, tienes el paladar más aventurero de tus amigos.
						</div> 
					</div>
				</div>
		</div>	  
	  </div>	
	  
	<!-- bloque reto 3 -->
	  <div class="contenedorPop" id="Reto-2">
	  	<div class="sombra"></div>
	  	<div class="contenedorMensaje logo-app animated">
		  	<table  class="contenidoTabla" >
		       <tr>
			       <td>

                       <strong style="font-family: kg_beneath;font-size: 24pt;font-weight: bold;">RETO <span style="font-size: 30px;font-weight: normal;font-family: serif;">#</span>3</strong>

                   </td>

		       </tr>
		       <tr >
			       <td style="padding-top: 20px !important;">
			       Una aventura con <strong style="font-family: arial;">SUPER G-PRIX</strong> no está completa si no 
			       la vives con alguien. <br/>¡Invita a la persona que te gustaría
			       que te acompañe en este increíble viaje!
	       			</td>
		       </tr>
		       <tr>
			       <td>
			       	<button class="btn-invitar" ></button>
			       </td>
			    </tr> 
		</table>	  	
	  	</div>
	  </div>   
	  
	  <!-- bloque reto 4 -->
	  <div class="contenedorPop" id="Reto-3">
	  	<div class="contenedorMensaje logo-app2 animated">
		  	<table  class="contenidoTabla" style="width: 580px;">
		       <tr>
		       <td style="font-size: 22px">
		       	¡Ya falta poco para vivir tu Aventura <strong style="font-family: arial;">SUPER G-PRIX!</strong> <br/>
		       	Una vez que tu amigo acepte tu invitación tu registro se hará válido para concursar. <br/>¡Mucha suerte!
       			</td>
	      		 </tr>
	      		 <tr>
			       <td>
			       	<button class="btn-inicio" ></button>
			       </td>
			    </tr>   
		</table>	  	
	  	</div>
	  </div>

<script>

<?php

if ($data["participante"]=="0"){?>
	var idParticipante="<?php echo $data["user"]->id?>";
<?php } else {?>
	var idParticipante="<?php echo $data["participante"]->id?>";
<?php }?>

$(document).ready(function(){
		$(".btn-registro").click(function(){
			$("#registros").show();
			$('.fondo-registros').addClass('bounceInUp');
		});	

		$(".btn-inicio").click(function(){
			$('#content').load(accion + "samsung_penales/liker", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
		});
		
		$(".btn-instruciones").click(function(){
			$("#instrucciones").show();
			$('.fondo-registros').addClass('bounceInUp');
		});
	
		$(".btn-acepta").click(function(){
			verificarGame("<?=base_url()?>",idParticipante);
		});		

		$(".btn-compartir").click(function(){
			compartir(idParticipante);
		});

		$(".btn-invitar").click(function(){
			invitar();
		});

		$(".btn-continuar-reto2").click(function(){
			$('.contenedorMensaje2').addClass('zoomOut');
			$('.fondo-tipo').addClass('zoomIn');
			$('.fondo-tipo').show();
		});		

		$(".btn-publicar").click(function(){
			publicar("<?=base_url()?>",idParticipante);
		});

		$(".op1").mouseover(function(){	
			$('.des-1').addClass('fadeInUp ');
			$('.des-1').removeClass('fadeOutDown');
		});
		
		$(".op1").mouseout(function(){
			$('.des-1').addClass('fadeOutDown');
			$('.des-1').removeClass('fadeInUp');
		});	

		$(".op2").mouseover(function(){	
			$('.des-2').addClass('fadeInUp ');
			$('.des-2').removeClass('fadeOutDown');
		});
		
		$(".op2").mouseout(function(){
			$('.des-2').addClass('fadeOutDown');
			$('.des-2').removeClass('fadeInUp');
		});	

		$(".op3").mouseover(function(){	
			$('.des-3').addClass('fadeInUp ');
			$('.des-3').removeClass('fadeOutDown');
		});
		
		$(".op3").mouseout(function(){
			$('.des-3').addClass('fadeOutDown');
			$('.des-3').removeClass('fadeInUp');
		});	
		
		$(".op4").mouseover(function(){	
			$('.des-4').addClass('fadeInUp ');
			$('.des-4').removeClass('fadeOutDown');
		});
		
		$(".op4").mouseout(function(){
			$('.des-4').addClass('fadeOutDown');
			$('.des-4').removeClass('fadeInUp');
		});	

		$(".op5").mouseover(function(){	
			$('.des-5').addClass('fadeInUp ');
			$('.des-5').removeClass('fadeOutDown');
		});
		
		$(".op5").mouseout(function(){
			$('.des-5').addClass('fadeOutDown');
			$('.des-5').removeClass('fadeInUp');
		});	

		$(".op6").mouseover(function(){	
			$('.des-6').addClass('fadeInUp ');
			$('.des-6').removeClass('fadeOutDown');
		});
		
		$(".op6").mouseout(function(){
			$('.des-6').addClass('fadeOutDown');
			$('.des-6').removeClass('fadeInUp');
		});		


		
		
});

<?php if ($data["participanteRegistrado"]=="1")
	echo "$('.btn-acepta').click();";
	?>





</script>
