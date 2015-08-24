<div class="container">
<div class="fondo-slide">
	<div class="cabecera-preguntas">
			Contesta las siguientes preguntas para poder determinar tu personalidad S5:
	 </div>
 	<div class="contenedor-opciones">
 		<div class="cabecera-opcion-seguir">
			Si estás conforme con las respuestas del test presiona “Continuar” o si prefieres editarla presiona "Editar".
		 </div>
	 	<div class="btn-cancelar" onclick="cancelarPaso()"></div>
	 	<div class="btn-continuar" onclick="nextPart()"></div>
	 </div>

	 
	 <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
		<li data-target="#carousel" data-slide-to="3"></li>
		<li data-target="#carousel" data-slide-to="4"></li>
       </ol>

      <div class="carousel-inner">
        <div class="item active">          
          <div class="carousel-caption">         	         	
          		<div class="columna1">
          			<div class="cuadroAzul">1</div>
          			<div class="cuadroNaranja"></div>
          		</div>          		
          		<div class="columna2">
          			<div class="pregunta">
          				Cuando estás en una fiesta,  tú:
          			</div>
          			<div class="comboRespuesta">
			          	<label class="btn " >
			    			<input type="radio" name="options" id="option1-1" onclick="grupo1('1-1');">  Tomas fotos.
			  			</label>
			  			<label class="btn ">
			    			<input type="radio" name="options" id="option1-2" onclick="grupo1('1-2');">  Grabas videos.
			  			</label>
					   <label class="btn ">
					     <input type="radio" name="options" id="option1-3" onclick="grupo1('1-3');">  Tratas de conocer gente nueva. 
					   </label>
					   <label class="btn ">
					     <input type="radio" name="options" id="option1-4" onclick="grupo1('1-4');">  Te gusta bailar.
					   </label>
					   <label class="btn ">
					     <input type="radio" name="options" id="option1-5" onclick="grupo1('1-5');">  Eres el que recomienda la música.
					   </label>
          			</div>
          		</div>
            
          </div>
        </div>
        <div class="item" >          
          <div class="carousel-caption">
          	<div class="columna1">
          			<div class="cuadroAzul">2</div>
          			<div class="cuadroNaranja"></div>
          	</div>          		
          	<div class="columna2">
          		<div class="pregunta">          
            		Se acerca el fin de semana y al planear tus actividades sugieres:
            	</div>            	
            	<div class="comboRespuesta">  
		             <label class="btn ">
		    			<input type="radio" name="options2" id="option2-1" onclick="grupo2('2-1');"> Ir  a una fiesta.
		  			</label>
		  			<label class="btn ">
		    			<input type="radio" name="options2" id="option2-2" onclick="grupo2('2-2');"> Realizar algún deporte extremo.
		  			</label>
				   <label class="btn ">
				     <input type="radio" name="options2" id="option2-3" onclick="grupo2('2-3');">  Salir a comer a un restaurante.
				   </label>
				   <label class="btn ">
				     <input type="radio" name="options2" id="option2-4" onclick="grupo2('2-4');" > Andar en bici o alguna actividad al aire libre.
				   </label>
				   <label class="btn ">
				     <input type="radio" name="options2" id="option2-5" onclick="grupo2('2-5');">  Realizar cualquier plan con tu familia.
				   </label>
            	</div>           
           </div>
          </div>
        </div>
        <div class="item" >          
          <div class="carousel-caption">
            <div class="columna1">
          			<div class="cuadroAzul">3</div>
          			<div class="cuadroNaranja"></div>
          	</div>          		
          	<div class="columna2">
          		<div class="pregunta">
          			Siempre encuentras tiempo para:
          		</div>
            	<div class="comboRespuesta">
		             <label class="btn ">
		    			<input type="radio" name="options3" id="option3-1" onclick="grupo3('3-1');">  Ir al gimnasio.
		  			</label>
		  			<label class="btn ">
		    			<input type="radio" name="options3" id="option3-2" onclick="grupo3('3-2');">  Organizar tu trabajo.
		  			</label>
				   <label class="btn ">
				     <input type="radio" name="options3" id="option3-3" onclick="grupo3('3-3');">  Leer un buen libro.
				   </label>
				   <label class="btn ">
				     <input type="radio" name="options3" id="option3-4" onclick="grupo3('3-4');">  Estar al tanto con las noticias.
				   </label>
				   <label class="btn ">
				     <input type="radio" name="options3" id="option3-5" onclick="grupo3('3-5');">  Jugar videojuegos.
				   </label>
            	</div>
         </div>
          </div>
        </div>
        <div class="item" >          
          <div class="carousel-caption">
            <div class="columna1">
          			<div class="cuadroAzul">4</div>
          			<div class="cuadroNaranja"></div>
          	</div>          		
          	<div class="columna2">
          		<div class="pregunta">
          			Estás siempre al tanto de las noticias sobre:
          		</div>
            	<div class="comboRespuesta">
		             <label class="btn ">
		    			<input type="radio" name="options4" id="option4-1" onclick="grupo4('4-1');">  Nuevas tendencias de moda.
		  			</label>
		  			<label class="btn ">
		    			<input type="radio" name="options4" id="option4-2" onclick="grupo4('4-2');">  Cultura y arte.
		  			</label>
				   <label class="btn ">
				     <input type="radio" name="options4" id="option4-3" onclick="grupo4('4-3');">  Actualizaciones y dispositivos tecnológicos.
				   </label>
				   <label class="btn ">
				     <input type="radio" name="options4" id="option4-4" onclick="grupo4('4-4');">  Actores y estrenos de películas.
				   </label>
				   <label class="btn ">
				     <input type="radio" name="options4" id="option4-5" onclick="grupo4('4-5');">  Deportes.
				   </label>
            	</div>
            	</div>
          </div>
        </div>
        <div class="item" >          
          <div class="carousel-caption">
          	<div class="columna1">
          			<div class="cuadroAzul">5</div>
          			<div class="cuadroNaranja"></div>
          	</div>          		
          	<div class="columna2">
          		<div class="pregunta">
          		Lo que más te gusta hacer es:
          	</div>
            <div class="comboRespuesta">
	            <label class="btn ">
	    			<input type="radio" name="options5" id="option5-1" onclick="grupo5('5-1');">  Viajar.
	  			</label>
	  			<label class="btn ">
	    			<input type="radio" name="options5" id="option5-2" onclick="grupo5('5-2');">  Dibujar, diseñar o tomar fotos.
	  			</label>
			   <label class="btn ">
			     <input type="radio" name="options5" id="option5-3" onclick="grupo5('5-3');">  Hacer algo diferente a lo que el resto haga. 
			   </label>
			   <label class="btn ">
			     <input type="radio" name="options5" id="option5-4" onclick="grupo5('5-4');">  Leer comics o adquirir un nuevo gadget tecnológico.
			   </label>
			   <label class="btn ">
			     <input type="radio" name="options5" id="option5-5" onclick="grupo5('5-5');">  Crear memes y buscar chistes en la web.
			   </label>            
            </div>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel" data-slide="prev" style="display:none;">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel" data-slide="next" style="display:none;">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
</div>  
</div>

	<form id="datosOpciones" >
    		<input type="hidden" id="grupo1" name="grupo1" />
            <input type="hidden" id="grupo2" name="grupo2" />
            <input type="hidden" id="grupo3" name="grupo3" />
            <input type="hidden" id="grupo4" name="grupo4" />
            <input type="hidden" id="grupo5" name="grupo5" />
            <input type="hidden" id="id_user" name="id_user" value="<?=$registro->id_user?>" />
            <input type="hidden" id="nombre" name="nombre" value="<?=$registro->nombre?>" />
    </form>

<script>
	$('.carousel').carousel('pause');
	$(".btn-group button").click(function () {
	    $("#buttonvalue").val($(this).text());
	});	

	
	function cancelarPaso(){
		$(".contenedor-opciones" ).fadeOut( "slow", function(){
			$( "#carousel" ).fadeIn( "slow" );
			$(".cabecera-preguntas").show();
		});
	};

	
	
	
</script>




































