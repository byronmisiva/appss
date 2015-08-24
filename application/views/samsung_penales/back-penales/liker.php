<div class="container">	
	<div class="fondoIntro" ></div>
	<div class="fondoGame" >
		<div class="franja-superior"></div>
		<div class="contenedor-botones">						
			<div class="btn btn-ranking">RANKING</div>
			<div class="btn btn-intruccion" >CÓMO JUGAR</div>
			<div class="btn btn-jugar" >JUGAR</div>
		</div>
		
		<div class="logo-intro"></div>
		<div class="contenedor-mensajes intro">
			<p>Forma parte del equipo G11.</p>
			<p>Anota la mayor cantidad de goles, ayuda a proteger a la Tierra y participa por un GALAXY S5.</p>
			
		</div>
		
		<div class="contenedor-mensajes reglas">
			<p>1. Con tu mouse da click en el área del arco donde quieras hacer gol.</p>
			<p>2. Anota la mayor cantidad de goles en 1 minuto.</p>
			<p>3. Invita a 5 amigos para que también se unan al equipo G11 y ¡Formarás parte del sorteo!</p>
		</div>
	</div>		
</div>
<script>
var myVar;
	
$('.btn-jugar').click(function() {		
	$('#content').load(accion + "samsung_penales/ingresoActividad", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});

$('.btn-intruccion').click(function() {$(".intro" ).fadeOut( "slow", function(){$( ".reglas" ).fadeIn( "slow" );});});

$('.btn-ranking').click(function() {
	$('#content').load(accion + "samsung_penales/viewRanking", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});
	inicio();
</script>


