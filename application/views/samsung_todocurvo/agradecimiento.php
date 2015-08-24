

<div class="fondo-agradecimiento" >
<div class="texto-fin">

</div>
<div class="btn-cerrar" ></div></div>

<script>
$('.btn-cerrar').click(function() {		
	$('#content').load(accion + "pronostico/liker", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});
</script>