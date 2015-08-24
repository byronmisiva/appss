<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<style type="text/css">
	.file{			   
	    cursor: pointer;
		background-image: url("<?php echo base_url()?>imagenes/samsung_unete_galeria/subirfotos/foto.png");
    	background-repeat: no-repeat;
    	height: 311px;
	    position: absolute;
	    right: 0;
	    top: 0;
	    width: 265px;	    
	}
	
	.imagen{
		background-image: url("<?php echo base_url()?>imagenes/samsung_unete_galeria/subirfotos/foto.png");
    	background-repeat: no-repeat;
    	height: 311px;
    	width: 265px;
	    position: absolute;
	    right: 0;
	    top: 0;
	    
	}
		
	.mensaje-foto{
	   	color: #333;
	    font-family: helvetica;
	    font-size: 13px;
	    position: absolute;	    
	    top: 35px;	    
	    text-align: center;
	    width: 265px;
	    height: 35px;
	}
	
	.imagen-cargada{
		position: absolute;
	    right: 0;
	    top: 0;
		height: 311px;
    	width: 265px;
    	overflow: hidden;
	}	
</style>	


<div style="position:absolute;left:0;top:0;width:265px;">
	<form id="formaPieza" name="formaPieza" method="post" enctype="multipart/form-data" action="<?=base_url().'samsung_unete_galeria/imagenPieza'?>" >
		<div class="imagen">
			<div class="mensaje-foto" > Haz click aquí para subir tu foto.</div>
		</div>
		<div style="position:absolute;top:0px;left:0px;width:265px;height:35px;cursor:pointer;display:none;">
			<input type="file" name="image" id="image"  class="file"  onchange="enviarForma('formaPieza');" />
		</div>
	</form>	
	</div>
<script>
	function enviarForma(forma){
		$('#'+forma).submit();
	};
	
	function fotos(imagen){	
		var creacionImagen="<?php echo base_url()?>"+imagen;
		parent.$('.imagen').html("<img src='"+creacionImagen+"' />" );
		$('.imagen').html("<img src='"+creacionImagen+"' class='imagen-cargada' />");

		//<div class='mensaje-foto' >Haz click aqui para subir tu foto.</div>				
	};


</script>
<?php 
	echo $script;
?>

<script>
$( ".mensaje-foto" ).click(function() {
	$('#image').click();
});
</script>

	 
	
 