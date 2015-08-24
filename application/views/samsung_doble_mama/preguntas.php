<div class="container">
<div class="fondo-slide">
	<div class="seccion1" >		
		<div class="imagenMensaje"></div>	
	 	<div class="cargaImage">
	 		<div class="textoForma">Sube una foto de tu mamá.</div>
		 	<iframe class="frameImagen" src ="<?=base_url().'samsung_doble_mama/imagenPieza'?>" scrolling="no" frameborder="0" height="100px" marginheight="0" marginwidth="0" ></iframe>
	 	</div>
	 	
	 	<div class="contenedor-datos-forma" >
	 		<div class="textoForma"> Describe a tu mamá en dos palabras.</div>
		 	<form id="datosOpciones" >
	    		<input type="text" id="palabra1" name="palabra1" required placeholder="palabra" class="inputpalabra" />
	            <input type="text" id="palabra2" name="palabra2" required placeholder="palabra" class="inputpalabra" />
	            <input type="hidden" id="archivo" name="archivo" />
	            <input type="hidden" id="id_user" name="id_user" value="<?=$registro->id_user?>" />            
	    	</form>
	 	</div>	 	
	 	
	 	<div class="botonContinuar"></div>
	 	<div id="carga" class="espera" >
			<div class="sombra"></div>
			<div style="position:absolute;left:45%;top:45%;">
				<img src="<?=base_url().'imagenes/samsung_doble_mama/grupos/ajax-loader.gif'?>" />
			</div>
		</div>
		
		<div id="llenarCampos" class="espera"  onclick="$('#llenarCampos').hide();">
			<div class="sombra"></div>
			<div class="mensajepop">
				¡Atención! Recuerda que debes ingresar dos palabras para continuar.
			</div>
		</div>
		
		<div id="llenarImagen" class="espera"  onclick="$('#llenarImagen').hide();">
			<div class="sombra"></div>
			<div class="mensajepop" >				
				¡Atención! Recuerda que debes ingresar una foto para continuar.
			</div>
		</div>
		
		<div id="imagenCargada" class="espera" onclick="$('#imagenCargada').hide();" >
			<div class="sombra"></div>
			<div class="mensajepop">
				El archivo se ha cargado correctamente.
			</div>
		</div>
		
	</div>
		
	<div class="seccion2" >
	  	<div class="fondoMarco">
		   	<img src="" class="imagen-Archivo" />
		   	<div class="mascara"></div>
	  	</div>
	  	
	  	<div class="btn-cancelar"></div>
	  	<div class="botonContinuar2"></div>
	</div>
</div>

</div>
<script>	
	$(".botonContinuar").click(function () {		 
		if($('#palabra1').val()=='' || $('#palabra2').val()=='')
			$('#llenarCampos').show();
			else if ($('#archivo').val()=='')
				$('#llenarImagen').show();
			else{
				$(".seccion1" ).fadeOut( "slow", function(){			
					$(".seccion2").fadeIn( "slow" );
			});
		}
			
	});

	$(".btn-cancelar").click(function () {	
		$(".seccion2" ).fadeOut( "slow", function(){			
			$(".seccion1").fadeIn( "slow" );
		});
		
	});

	$(".botonContinuar2").click(function () {
		$.ajax({  
			  type: "POST",  
			  url: accion+"samsung_doble_mama/registroOpciones",  
			  data: $('#datosOpciones').serialize(),
			  success: function( response ) {
				 $.ajax({  
					  type: "POST",  
					  url: accion+"generadormama/generaMama.php",  
					  data: $('#datosOpciones').serialize(),
					  success: function( response ) {						  
						  var imgURL = 'https://appss.misiva.com.ec/imagenes/samsung_doble_mama/creadas/' + response ;
							
						     FB.api('/photos', 'post', {
						         message:  'Mi #MamáDoblementeÚnica porque es '+$('#palabra1').val()+' y '+$('#palabra2').val()+', por eso la nomino para participar por una refrigeradora o lavadora Samsung. ',
						         url:imgURL
						     }, function(response){
						     });						     			  
						$('.container').load(accion+"samsung_doble_mama/compartir/"+$('#id_user').val());
					  }					
					}); 
			  }
		});
			
		
		return false;
	});

	
/*
	$( "#palabra1" ).keyup(function() {	 
	  if( this.value.charAt(this.value.length-1) != " " ){		
		 $( "#palabra1" ).val( this.value + " ");		 	
	  }	   	 
	});
		

	$( "#palabra2" ).keyup(function() {	 
	  if( this.value.charAt(this.value.length-1) != " " ){		
		 $( "#palabra2" ).val( this.value + " ");		 	
	  }	   	 
	});*/	

	function cambioImagen(){		
		var newImagen= $('#archivo').val();
		$('.imagen-Archivo').attr("src", accion+newImagen);
	}
			
	
</script>




































