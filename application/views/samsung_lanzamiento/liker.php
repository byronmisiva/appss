<div class="container">
<div class="fondoHome" >
	<div class="botonEmpezar" ></div>
	<div class="botonInstrucciones" data-toggle="modal" data-target="#myModal"></div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" style="margin-top: 10%;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">INSTRUCCIONES</h4>
	      </div>
	      <div class="modal-body">
	        <ul>
		        <li>1. Completa el registro</li>
		        <li>2. Contesta las preguntas para poder definir tu personalidad S5</li>
				<li>3. Invita a 5 amigos</li>	     
			</ul>
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
	$('#content').load(accion + "samsung_lanzamiento/ingresoActividad", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});
</script>
