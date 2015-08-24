<?php	
	if(is_array($galeria)){
		foreach($galeria as $row){?>
			<div class="imagen-galeria">
			<div class="imagen">
				<img src="<?php echo base_url()?>galaxy-a/generados/<?php echo $row->imagen?>" width="100%"/>
			</div>
			<div class="imagen-compartir" id="<?php echo $row->imagen?>"></div>
		</div>							
	<?php
	}
}?>

<script type="text/javascript">
$(document).ready(function(){
	$(".imagen-compartir").click(function(){		
		var urlPostear= $(this).attr("id");
		imagenFinal=accion+"galaxy-a/generados/"+urlPostear;
		$(".imagen-postear").html("<img width='100%' src='"+accion+"galaxy-a/generados/"+urlPostear+"' />");
		$(".contenedor-postear-muro").fadeIn();
	});
});


$(".espera").hide();

</script>	
