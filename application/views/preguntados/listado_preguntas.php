<?php $categoria = array("1"=>"series","2"=>"musica","3"=>"comics","4"=>"deportes","5"=>"ciencia","6"=>"peliculas");?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">					  
	 <div class="carousel-inner" role="listbox">
	<?php
		$contador=0; 
		foreach($preguntas as $row){?>
			<div class="item col-lg-12 <?php echo ($contador==0)?"active" : " ";?> " id="opcion-<?php echo $contador?>" >
				<p class="pregunta fondo-<?php echo $categoria[$row->categoria]?>">
				<span class="<?php echo $categoria[$row->categoria]?>"></span>
					<?php  echo $row->texto ?>
	      		</p>
	      		<div style="width:100%;">
	      		<?php	      			      		
	      		shuffle($respuestas);	      		
	      		 foreach($respuestas as $row2){
						if($row2->padre == $row->id){?>	
	      			<div class="respuesta " ref="<?php echo $row2->respuesta ?>" pos="<?php echo $contador?>">
	      				<?php  echo $row2->texto ?> 
					</div>
		      		<?php } 
					}?>
	      		</div>
	    	</div>						  	
			  	<?php 
					$contador++;
			}?> 
	</div>  
</div>
<script type="text/javascript">
	$(".seccion-panel").hide();
	$(".intro-preguntas").show();
	var oportunidades=0;
	$(document).ready(function(){
		$(".respuesta").click(function(){	
			clearInterval(tiempo);	
			contador++;
			if($(this).attr("ref")==1)
				totalrespuestas++;			
			
		if( ( totalrespuestas == 4 ) && (parte == 4) ){
			$("#logo-dinamico").removeClass("logo-evento-registro");
			$("#logo-dinamico").addClass("logo-evento");

			$("#carusel-preguntas").removeClass("zoomInUp");
			$("#carusel-preguntas").addClass("zoomOutDown");
			
			setTimeout(function(){ 
				$(".intro-preguntas").hide(); 
				$(".view-fin-app").show();
				$(".view-fin-app").addClass("bounceIn");
				$("#carusel-preguntas").removeClass("zoomOutDown");
			}, 600);

			var segundos = 0;						
			if (parte == 1) 
				segundos = timer1-toSecond;
			else if (parte == 2)
				segundos = timer2-toSecond;
			else if (parte == 3) 
				segundos = timer3-toSecond;
			else if (parte == 4) 
				segundos = timer4-toSecond;
			
			$.post( accion+controladorApp+"/saveUser",{
				participante:idParticipante,
				tiempo: segundos
			},	    	    		
		    function( resultadoParte ) {
				parte = resultadoParte;	
				totalrespuestas = 0;
			});
			
		}else{				
			$("#logo-dinamico").removeClass("logo-evento-registro");
			$("#logo-dinamico").addClass("logo-evento");			
  			/*caso el usuario falla*/  			
				if($(this).attr("ref")==0){
					if( contaforError == 4){
						viewFinal(".mensaje-fin-oportunidades");
						totalrespuestas = 0;   
						contaforError = 0;
						/*setTimeout(function(){ 	
							$.post( accion+controladorApp+"/negativoUser",{
								participante:idParticipante
							},	    	    		
						    function( resultadoParte ) {
								parte = resultadoParte;	
								totalrespuestas = 0;   
								contaforError = 0;
							});
						}, 1000);*/
						
					}else{
						contaforError++;
						viewFinal(".mensaje-incorrecto");
					}		  			
				}
	
				/*caso el usuario acierta*/
				if($(this).attr("ref")==1){
					if (totalrespuestas==4){
						var segundos = 0;						
						if (parte == 1) 
							segundos = timer1-toSecond;
						else if (parte == 2)
							segundos = timer2-toSecond;
						else if (parte == 3) 
							segundos = timer3-toSecond;
						else if (parte == 4) 
							segundos = timer4-toSecond;
						
						$(".errados").html(totalrespuestas+" de 4");
						$(".nivel").html(parte);
						actualizarAciertos();
						viewFinal(".mensaje-pasa-nivel");
						$.post( accion+controladorApp+"/saveUser",{
							participante:idParticipante,
							tiempo: segundos
						},	    	    		
					    function( resultadoParte ) {
							parte = resultadoParte;	
							totalrespuestas = 0;   
							contador = 0;							
						});
					}else{
						$(".errados").html(totalrespuestas+" de 4");
						$(".nivel").html(parte);
						viewFinal(".mensaje-normal");
						actualizarAciertos();
					}
				}
		
			if (parte == 1) 
				toSecond = timer1;
			else if (parte == 2) 
				toSecond = timer2;
			else if (parte == 3) 
				toSecond = timer3;
			else if (parte == 4) 
				toSecond = timer4;
		  }				
		});
	});
				
	countDown();
	
</script>