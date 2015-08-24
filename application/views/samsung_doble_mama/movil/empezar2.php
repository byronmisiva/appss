<div class="container">
<div class="fondoHome" >
	<div class="textoInicio">
	No hay nadie como Mamá y quieres que todo el mundo sepa que es Doblemente Única. Sube una foto de ella, descríbela
	con dos palabras, invita a tus amigos para que participen y gana una <span style="font-weight: bold;">refrigeradora o una lavadora</span>  Samsung.
	</div>
	<div class="botonInstrucciones" data-toggle="modal" data-target="#myModal"></div>
	<div class="botonEmpezar" ></div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" style="margin-top:0;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel"></h4>
	      </div>
	      <div class="modal-body">
	        
	      </div>
	      <div class="modal-footer">	
	      	 <div class="btn-cerrar" data-dismiss="modal"></div>  
	      </div>
	    </div>
	  </div>
	</div>
</div>
</div>
<script>
$('.botonEmpezar').click(function() {		
	$('#content').load(accion + "samsung_doble_mama/ingresoActividad", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});

$('.botonEmpezar').show();
$('.login-caja').show();

</script>
