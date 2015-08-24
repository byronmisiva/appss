<div class="fondoGenerador">
	<div class="textoPrincipal">
		¡Esta es tu personalidad S5!
	</div>
	<div class="textoSubtexto">
		Recuerda que debes subir esta imagen como foto de 
		portada en tu perfil personal una vez que se haya 
		publicado en tu muro.	
	</div>
	<div class="contenedorImagen" >
		<img class="imagenApp primero" src="<?=base_url()."imagenes/samsung_s5/grupos/".$registro->grupo1.".jpg"?>" width="86px" />
		<img class="imagenApp" src="<?=base_url()."imagenes/samsung_s5/grupos/".$registro->grupo2.".jpg"?>" width="86px" />
		<img class="imagenApp" src="<?=base_url()."imagenes/samsung_s5/grupos/".$registro->grupo3.".jpg"?>" width="86px" />
		<img class="imagenApp" src="<?=base_url()."imagenes/samsung_s5/grupos/".$registro->grupo4.".jpg"?>" width="86px" />
		<img class="imagenApp" src="<?=base_url()."imagenes/samsung_s5/grupos/".$registro->grupo5.".jpg"?>" width="86px" />
		<img class="imagenAppfooter" src="<?=base_url()?>imagenes/samsung_s5/preview/barraparacollage2.jpg" />
	</div>
	<div class="textoFooter">
		¿Quieres editar tu nombre? Puedes darle click a la imagen para hacerlo.
	</div>
	<div class="nombreUser">
		<input name="nombreUser" id="nombreUser" type="text" class="inputGenerador" maxlength="21" value=""/> 
	</div>

	<div class="botonContinuar"></div>
	
	<form id="datosOpciones" >
    		<input type="hidden" id="grupo1" name="grupo1" value="<?=$registro->grupo1?>" />
            <input type="hidden" id="grupo2" name="grupo2" value="<?=$registro->grupo2?>"/>
            <input type="hidden" id="grupo3" name="grupo3" value="<?=$registro->grupo3?>"/>
            <input type="hidden" id="grupo4" name="grupo4" value="<?=$registro->grupo4?>"/>
            <input type="hidden" id="grupo5" name="grupo5" value="<?=$registro->grupo5?>"/>
            <input type="hidden" id="id_user" name="id_user" value="<?=$registro->id_user?>" />
            <input type="hidden" id="nombre" name="nombre" value="<?=$registro->nombre?>" />
    </form>	
</div>

<script>

 var nombre="<?=$registro->nombre?>";
 $('#nombreUser').val(nombre+"⁵");

 $( "#nombreUser" ).keyup(function() {	 
	if( this.value.charAt(this.value.length-1) != "⁵" ){		
		 $( "#nombreUser" ).val( this.value + "⁵");		 	
	}
	$("#nombre").val( this.value ); 	 
	});

 $( ".botonContinuar" ).click(function() {	
	 $.ajax({  
		  type: "POST",  
		  url: accion+"samsung_doble_mama/registroOpciones",  
		  data: $('#datosOpciones').serialize(),
		  success: function( response ) {
			  
		  }

	 
	var nom=$('#nombreUser').val();
	nom = nom.substring(0,nom.length-1);
	$("#nombre").val(nom);	
	 $.ajax({  
		  type: "POST",  
		  url: accion+"generador/generaS5.php",  
		  data: $('#datosOpciones').serialize(),
		  success: function( response ) {
			  var imgURL = 'https://appss.misiva.com.ec/imagenes/samsung_s5/portadas/' + response ;

			     FB.api('/photos', 'post', {
			         message:  'Esta es #MiPersonalidadS5 , ya estoy participando para ganarme un GALAXY S5',
			         url:imgURL
			     }, function(response){
			     });
			     			  
			$('.container').load(accion+"samsung_lanzamiento/compartir/"+<?=$registro->id_user?>);
		  }
		
		}); 
	return false;
	
 });
</script>