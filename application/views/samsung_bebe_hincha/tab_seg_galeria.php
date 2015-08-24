<?php
	foreach($galeria as $row){?>
	<div style="float:left;width:178px;height:114px;border:1px solid red;overflow:hidden;margin:10px;background-image: url('<?=base_url().$row->imagen?>'); background-size:178px;cursor:pointer;"
	onclick="cargaPop('samsung_bebe_hincha/informacionBebe',<?=$row->id?>,'inf_pop');">	 		
	</div>
	<?php 
	}
?>

<div style="position:absolute;width:190px;height:50px;margin-left:17px;margin-top:280px;overflow:hidden;" 
onclick="cargar_galeria('samsung_bebe_hincha/getGaleria/'+<?=($anterior)?>,'','','galeria');">
	Anterior
</div>

<div style="position:absolute;width:190px;height:50px;margin-left:210px;margin-top:280px;overflow:hidden;" 
onclick="cargar_galeria('samsung_bebe_hincha/getGaleria/'+<?=$siguiente?>,'','','galeria');">
	Siguiente
</div>

<script>
<?
if ($id_bebe!=0){
	echo "cargaPop('samsung_bebe_hincha/informacionBebe','".$id_bebe."','inf_pop');";
}?>
</script>

