<div class="fondoGame" style="display: inline-block;">	
<div class="franja-superior"></div>
	<div class="contenedor-botones">
			<div class="btn btn-jugar" >JUGAR</div>			
		</div>
	
	<div class="logo-intro game2"></div>	
	<div class="cuadro">	
		<p>¡Gracias por ayudarnos a defender la Tierra!
		Ya formas parte del equipo G11.</p>
	</div>
		  
</div>

<script>
$('.btn-jugar').click(function() {		
	$('#content').load(accion + "samsung_penales/ingresoActividad", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});
</script>