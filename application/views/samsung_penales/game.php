<div class="container">	
	<div class="fondoGame" style="display: inline-block;">		
		<div class="seccion-superior">
			<form id="datosOpciones">
				<div class="marcador">
					<div class="titula">GOLES</div>
					<div class="gol">
					<input id="gol" name="gol" class="input-gol" value="0" readonly="readonly"/>
					</div>
				</div>
				<div class="logo-intro game"></div>
				<div class="tiempo">
					<div class="titula">TIEMPO</div>
					<div class="gol">
						<input id="tiempo" name="tiempo" class="input-tiempo" readonly="readonly" />
					</div>
				</div>
				<input type="hidden" id="id_user" name="id_user" value="<?php echo $registro->id_user?>" />
			</form>
		</div>
	
		<div class="seccion-game">		
			<div class="arquero" ></div>		
					
		</div>
		<div class="pelota"></div>
		<div class="mensajeGol">
			<p>¡Gooool!</p>
		</div>
		
		<div class="mensajeTapo">
			<p>¡Fallaste!</p>
		</div>
		
		<div class="opciones-arquero">
			<div class="cuadrante fila uno"></div>
			<div class="cuadrante dos"></div>
			<div class="cuadrante tres"></div>
			<div class="cuadrante fila cuatro"></div>
			<div class="cuadrante cinco"></div>
			<div class="cuadrante seis"></div>
		</div>	
	</div>
</div>

<script>	
	var $arquero = $('.arquero'),
    	$pelota = $('.pelota'),
    	$arqueroPos, $pelotaPos;
	
		setInterval(function(){
		    	$arqueroPos = $arquero.offset();
		    	$pelotaPos = $pelota.offset();
		}, 250);		
			
		var lanzar_der = function(){				 
				$arquero.addClass('tapar-derecha');   			
				setTimeout(function() { $arquero.removeClass('tapar-derecha'); }, 500);
				aleatorio();
		};

		var lanzar_izquierda = function(){				 
				$arquero.addClass('tapar-izquierda'); 			
				setTimeout(function() { $arquero.removeClass('tapar-izquierda'); }, 500);
				aleatorio();
		};


			var lanzar_superior_izq =function(){				 
					$arquero.addClass('tapar-superior-izquierda');
					setTimeout(function() { $arquero.removeClass('tapar-superior-izquierda'); }, 500);
					aleatorio();
			};

			var lanzar_superior_centro = function(){				 
				$arquero.addClass('tapar-superior-centro');
				setTimeout(function() { $arquero.removeClass('tapar-superior-centro'); }, 500);
				aleatorio();
			};	

			var lanzar_centro = function(){				 
				$arquero.addClass('tapar-centro');
				setTimeout(function() { $arquero.removeClass('tapar-centro'); }, 500);
				aleatorio();
			};

			var zoomPelota =function(){				 
				$arquero.addClass('zoom-pelota');
				setTimeout(function() { $arquero.removeClass('zoom-pelota'); }, 500);
				aleatorio();
			};

			var lanzar_superior_der = function(){				 
					$arquero.addClass('tapar-superior-derecha');
					setTimeout(function() { $arquero.removeClass('tapar-superior-derecha'); }, 500);
					aleatorio();
			};		

			var espera = function(){
				$arquero.addClass('espera');
				};			
		espera();
		
	var offsetBall = $('.pelota').offset();
	var relativeXBall = (offsetBall.left);
	var relativeYBall = (offsetBall.top);
	var minx=292;
	var miny=225;
	
	var ancho=234;
	var alto=154;
	
	var maxx=parseInt(minx)+ancho;
	var maxy=parseInt(miny)+alto;
	var sw=0;
	$(document).bind( "click",function(event) {
		
		y = event.clientY;
		x = event.clientX;
		if (sw==0){
			if ((x>minx && x<maxx)&&(y>miny && y<maxy)){
				sw=1;
				var recX=parseInt(x)-30;
				var recY=parseInt(y)-30;		
				$(".pelota").animate({'left': recX + 'px', 'top':recY +'px','width':'35px'},
						{duration:200,
						complete: function() {
							$(".pelota").animate({'left': recX + 'px', 'top':recY+115+'px'},
							{duration:500,
								complete: function() {
									resetear();	
							}
							});
				}});
			}
		}
	});

	
	var turno=0;	
	$(document).ready(function(){
		$(".uno").bind( "click", function(){verificar(1);});
		$(".dos").bind( "click", function(){verificar(2);});		
		$(".tres").bind( "click", function(){verificar(3);});
		$(".cuatro").bind( "click",function(){verificar(4);});
		$(".cinco").bind( "click",function(){verificar(5);});
		$(".seis").bind( "click", function(){verificar(6);});		
	});
	
	
	aleatorio();
	countDown();


	
</script>


















