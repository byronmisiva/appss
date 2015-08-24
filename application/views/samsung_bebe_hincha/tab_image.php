<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<style>
.file{			   
		    cursor: pointer;
		    height: 20px;
		    width: 100px;
		    border:1px solid red;
		    background:#ffffff;
		    opacity: 0;
		    -moz-opacity: 5;
		    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
		}
</style>	
	<form id="envio_imagen" name="envio_imagen" method="post" enctype="multipart/form-data" action="<?=base_url().'samsung_bebe_hincha/uploadImage';?>">
		<div style="border:1px solid red;margin-top:50px;margin-left:255px;width:30px;cursor:pointer;">
			<input type="file" name="image" id="image"  class="file"  onchange="enviarForma('envio_imagen');" />
		</div>
	</form>	
<script type="text/javascript">
function enviarForma(forma){	
	$('#'+forma).submit();
}
</script>
<?php 
echo $script;
?>

	
	
 