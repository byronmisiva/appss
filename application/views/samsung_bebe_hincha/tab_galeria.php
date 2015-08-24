<div style="position:absolute;width:100%;height:100%;border:1px solid red;">
	<img src="<?=$img_fondo?>" />
	
	<div id="galeria" style="position:absolute;width:420px;height:311px;left:27px;top:210px;border:1px solid red;">
	
	</div>
</div>
<div style="position:absolute;left:0px;top:0px;border:1px solid red;">
	<input type="text" id="id_user" name="id_user" value="<?=$id_user?>"/>
	<input type="text" id="id_page" name="id_page" value="<?=$id_page?>"  />
</div>

<div style="position:absolute;left:560px;top:310px;width:120px;height:70px;border:1px solid red;cursor:pointer;" onclick="compartir();">
</div>

<div id='pop' style='position:absolute;top:0px;left:0px;width:810px;height:810px;display:none;'>
	<div style='position:fixed;width:100%;height:100%;top:0px;left:0px;' class='sombra' onclick="$('#pop').hide();"></div>	
	<div id="inf_pop" style="position:absolute;left:115px;top:150px;width:580px;height:450px;" ></div>						
</div>
<script>
<?php 
if (isset($id_bebe)){
   echo	"cargar_galeria('samsung_bebe_hincha/getGaleria/0','".$id_bebe."','galeria');";
}else{
	echo "cargar_galeria('samsung_bebe_hincha/getGaleria/0','0','galeria');";
}?>		
</script>
