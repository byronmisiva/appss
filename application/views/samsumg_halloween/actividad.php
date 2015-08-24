<script src="<?=base_url()?>js/samsung_4g/app.js?frefresh=698797316" type="text/javascript"></script>
	<div class="contendor-actividad">
	<div style="position: absolute;left: 0;top:0;">
		
	</div>
		<div class="logo"></div>
		<div class="logo-samsung"></div>
		<div class="contenedor-opciones"></div>
		
		<div class="telefono">
			<div class="mascara">
				<div class="texto-intro animated"></div>
				<div class="texto-instrucciones animated"></div>
			</div>
		</div>	
						
		<div class="btn-acepta"></div>
		<div class="btn-instruciones"></div>
		<div class="btn-ranking"></div>		
	</div>

	<div class="actividad-0 cursor" onmouseup="singolpe();" onmousedown="golpe();">	
			<div class="logo"></div>
			<div class="logo-samsung"></div>
			<div class="tiempo">
				<div id="tiempo"></div>
			</div>
			<div class="puntos"></div>
			
			<div class="contenedor-opciones">								
				<div class="criatura1" ></div>
				<div class="op1"></div>	
				<div class="criatura2"></div>
				<div class="op2"></div>
				<div class="criatura3"></div>
				<div class="op3"></div>
				<div class="criatura4"></div>
				<div class="op4"></div>
				<div class="criatura5"></div>
				<div class="op5"></div>
				<div class="criatura6"></div>
				<div class="op6"></div>
				<div class="criatura7"></div>
				<div class="op7"></div>
				<div class="criatura8"></div>	
				<div class="op8"></div>
				<div class="criatura9"></div>
				<div class="op9"></div>			
			</div>
			<div class="cuerdas"></div>
			<div class="sombra-luces"></div>
			
			
			<div class="modo0 animated"></div>
			<div class="modo1 animated"></div>		
	</div>	
	  
<!-- bloque reto 1 -->
	  <div class="contenedorPop" id="Reto-0">
	  	<div class="sombra"></div>
	  	<!-- <div class="logo-app"></div> -->
	  	<div class="contenedorMensaje telefono animated ">	  	
	  		<div class="texto_inicio"></div>
	  		<div class="texto_modolte"></div>
	  		<div class="texto_cerrar"></div>
			<div class="btn-continuar"></div>
			<div class="btn-continuar_modo4lg"></div>						       	  	
	  	</div>
	  </div>	  
	  

<script>
totalPuntos=0;
$(".puntos").html("<span class='puntajes'>"+totalPuntos+"</span>")

<?php
if ($data["participante"]=="0"){?>
	var idParticipante="<?php echo $data["user"]->id?>";
<?php } else {?>
	var idParticipante="<?php echo $data["participante"]->id?>";
<?php }?>

$(document).ready(function(){	
	$(".btn-acepta").click(function(){
		verificarGame("<?=base_url()?>",idParticipante);
	});
	
	$(".btn-instruciones").click(function(){
			ejecucionIntrucciones();			
	});

	$(".btn-ranking").click(function(){
		ejecucionRanking();			
	});
	
	$(".btn-continuar").click(function(){
		iniciarModoNormal();			
	});
	
	$(".btn-continuar_modo4lg").click(function(){
		iniciarModo4lg();			
	});					

	$(".btn-compartir").click(function(){
			compartir(idParticipante);
	});

		$(".btn-cerrar").click(function(){
			$(window).attr('location', 'https://apps.facebook.com/golpear_personaje');			
			/*window.location.href ="https://apps.facebook.com/golpear_personaje";*/
		});
		


		$(".criatura1").click(function(){
			generarPunto();
		});
		$(".criatura2").click(function(){
			generarPunto();
		});
		$(".criatura3").click(function(){
			generarPunto();
		});
		$(".criatura4").click(function(){
			generarPunto();
		});
		$(".criatura5").click(function(){
			generarPunto();
		});
		$(".criatura6").click(function(){
			generarPunto();
		});
		$(".criatura7").click(function(){
			generarPunto();
		});
		$(".criatura8").click(function(){
			generarPunto();
		});
		$(".criatura9").click(function(){
			generarPunto();
		});
		

		$(".btn-publicar").click(function(){
			publicar("<?=base_url()?>",idParticipante);
		});	

		
		$(".puntos").html("<span class='puntajes'>"+totalPuntos+"</span>");
		
});

$('.contendor-actividad').addClass('movimiento');


<?php if ($data["participanteRegistrado"]=="1")
	echo "$('.btn-acepta').click();";
	?>





</script>
