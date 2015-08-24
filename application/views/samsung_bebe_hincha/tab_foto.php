<div style="position:absolute;width:100%;height:100%;">
	<img src="<?=$img_fondo?>" />
	<div id="foto" style="position:absolute;width:386px;height:218px;left:35px;top:249px;overflow:hidden;">	</div>
	<div id="mascara" style="position:absolute;width:386px;height:218px;left:35px;top:249px;overflow:hidden;">
	<input type="hidden" id="newBebe" name="newBebe" />
	</div>
	
	<div id="carga" style="position:absolute;width:356px;height:100px ;left:431px;top:249px;">
		<iframe id="fr_imagen"width="100%" height="100%" style="cursor:pointer;" frameborder="0" scrolling="no" src="<?=base_url()?>/samsung_bebe_hincha/uploadImage"></iframe>
	</div>	
	<div id="subir" style="position:absolute;width:356px;height:20px ;left:431px;top:375px;cursor:pointer;" onclick="enviar_bebe('datos_bebe');"></div>
		
	<div id="siguiente" style="position:absolute;width:356px;height:100px ;left:440px;top:320px;display:none;curso:pointer;" onclick="regresarGaleria();">
		<img src="<?=$siguiente?>" />
		Galeria
	</div>
	<div style="position:absolute;left:445px;top:300px;width:150px;height:80px;">
		<form id="datos_bebe" name="datos_bebe" method="POST" >
				<input type="hidden" name="id" id="id" value="<?=$id_user?>" >
				<input type="hidden" name="id_page" id="id_page" value="<?=$id_page?>" >
				<input type="text" name="imagen" id="imagen" value=""  style="width:23
				0px;background-color: transparent;color:#074EA0;border:none;"/>
		</form>
	</div>	
</div>