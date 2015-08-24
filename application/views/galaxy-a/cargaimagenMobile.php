<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<style>
	.file{			   
	    cursor: pointer;
		height: 35px;	
		width: 200px;		
		opacity: 0;
		-moz-opacity: 5;		
		filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
	}
	
	.contenedor-principal{
		position:absolute;
		left:0;top:0;width:100%;
		height: 35px;
	}
	
	.contenedor-principal form{
	    height: 28px;
	    margin: 0;
	    padding: 0;
	    width: 96%;
	}
	
	.imagen-mascara{
		cursor: pointer;
	    left: 0;
	    margin: 0;
	    padding: 0;
	    position: absolute;
	    top: 0;
	    width: 100%;
	}
	
	.imagen-mascara img{
		width: 100%;
	}
	
	.cont-imagen{
		position:absolute;top:0px;left:0px;width:100%;height:35px;cursor:pointer;
	}
</style>	
<div class="contenedor-principal">
	<form id="formaPieza" name="formaPieza" method="post" enctype="multipart/form-data" action="<?php echo base_url().'samsung_galaxy_a/imagenMobile'?>" >
		<div class="imagen-mascara">
			<img src="<?php echo base_url()?>imagenes/galaxy-a/06/bt_tomar.png" />
		</div>
		<div class="cont-imagen">
			<input type="file" class="file"  id="image" name="image" accept="image/*" capture="camera" onchange="enviarForma('formaPieza');" />
		</div>
	</form>	
	</div>
<script>
function enviarForma(forma){	
	parent.$('.espera').show();		
	$('#'+forma).submit();
}
</script>
<?php 
	echo $script;
?>

	 
	
 