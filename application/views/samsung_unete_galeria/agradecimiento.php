<div class="fondoGame-dentro" style="display: inline-block;">
	<div class="fin"></div>
</div>

<script>
$('.btn-jugar').click(function() {		
	$('#content').load(accion + "samsung_unete_galeria/ingresoActividad", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});
</script>