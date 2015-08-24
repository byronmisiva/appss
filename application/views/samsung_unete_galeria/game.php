<div class="fondoGame-dentro" style="display: inline-block;">
	<ul class="nav nav-tabs menuSuperior" role="tablist">
	  <li class="active"><a href="#intrucciones" role="tab" data-toggle="tab">Instrucciones</a></li>
	  <li><a href="#subefoto" role="tab" data-toggle="tab">Sube tu foto</a></li>
	  <li><a href="#galeria" role="tab" data-toggle="tab" id="galeria-opcion">Galería de fotos</a></li>	  
	</ul>
	
	<div class="linea"></div>
	
	<div class="tab-content">
	  <div class="tab-pane active" id="intrucciones">
	  		<div class="titulo-opcion">Instrucciones</div>
		  	<div class="instruciones"></div>		  	
	  </div>
	  <div class="tab-pane" id="subefoto">
	  <div class="titulo-opcion">Sube tu foto</div>	  
	  	<div class="fondoCuadrado">
	  		<div class="texto-mensaje"></div>
	  	</div>
	  	<div class="btn-aceptar"></div>	  	
			<iframe class="recuador-foto" 
					src ="<?php echo base_url().'samsung_unete_galeria/imagenPieza'?>" 
					scrolling="no" frameborder="0"  
					height="311px" marginheight="0" marginwidth="0" >
			</iframe>	  	
	  		
	  <form id="forma-imagen">
	  	<input type="hidden" id="thumb" name="thumb" value="" />		
	   	<input type="hidden" id="archivo" name="archivo" value="" />
	   	<input type="hidden" id="id_user" name="id_user" value="<?php echo $registro->id_user?>" />		
	  </form>		
	  		
	  </div>
	  <div class="tab-pane" id="galeria">
	  		<div class="titulo-opcion">Galería de fotos</div>
		  	<div class="fondoCuadrado2">
		  		<div class="contenedor-galeria"></div>
			  	<div class="opcines-thumb-sidebar historia izq" >			  		
					<div class="center-block flechaSidebar flecha-izq" id="anterior" onclick="anterior();" ></div>
				</div>						
				<div class="opcines-thumb-sidebar historia der" >
					<div class="center-block flechaSidebar second flecha-der" id="siguiente" onclick="siguiente();"></div>
				</div> 
		  	</div>	  
		  	<div class="btn-compartir" onclick="compartir(<?php echo $registro->id_user ?>);">
		  	<?php 
		  	$valor=(int)$registro->compartidos;
		  	$valor=5-($valor%5);
		  	?>
				<div id ="contador" > <?php echo $valor?> </div> 
			</div>
	  </div>
	</div>			
</div>
<div class="fondoMensajes" >
	<div class="cargacompleta"></div>	
	
</div>
<script>
$( ".btn-aceptar" ).click(function() {
	if($('#archivo').val()!=""){
		$.ajax({  
			  type: "POST",  
			  url: "<?php echo base_url()?>"+"samsung_unete_galeria/ingresoRegistro",  
			  data: $('#forma-imagen').serialize(),
			  success: function( response ) {
				  $('.fondoMensajes').show( );				  		  				  
				  $('#subefoto').load("<?php echo base_url()?>"+"samsung_unete_galeria/ajaxCarga/"+<?php echo $registro->id_user?>);
				  inicio();
				  
	  			} 
			}); 
		return false;
	}else{
		alert("Por favor ingresa una foto.");
	}	
});

$( "#galeria-opcion" ).click(function() {
	$('.contenedor-galeria').load("<?php echo base_url()?>"+"samsung_unete_galeria/getGaleria/");
	compartir(<?php echo $registro->id_user ?>);
});

var myVar;

function inicio() {myVar = setTimeout(saltarIntro, 1500);};

function limpiarSettime() {clearTimeout(myVar);};


function saltarIntro(){
	$( ".fondoMensajes" ).fadeOut( "slow" );
	$('#galeria-opcion').click();	
	limpiarSettime();
};


</script>
















