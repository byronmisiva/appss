<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<style>
	.file{			   
	     cursor: pointer;
	     height: 75px;
	     opacity: 0;
	     width: 300px;		
		 filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
	}
</style>	
<div style="position:absolute;left:0;top:0px;width:100%;">
	<form id="formaPieza" name="formaPieza" method="post" enctype="multipart/form-data" action="<?=base_url().'samsung_doble_mama/imagenPieza'?>" >
		<div style="position:absolute;top:0;left:0;width:309px;height:77px;cursor:pointer; ">
				<img src="<?=base_url().'imagenes/samsung_doble_mama/grupos/botonsubirof.png'?>" />
		</div>
		<div style="position:absolute;top:0px;left:0px;width:309px;height:77px;cursor:pointer;">
			<input type="file" name="image" id="image"  class="file"  onchange="enviarForma('formaPieza');" />
		</div>
	</form>	
	</div>
<script>
function enviarForma(forma){	
	parent.$('#carga').show();
	$('#'+forma).submit();
}
</script>
<?php 
	echo $script;
?>

	 
	
 