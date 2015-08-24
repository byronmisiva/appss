<div id="juego" style="position:absolute;width:100%;height:100%;left:0px;top:0px;" >
	<div style="position: absolute;left:0px;top:0px;">
		<img src="<?=$fondo?>" />
	</div>	
	
 	<div style="position: absolute;left:300px;top:600px;cursor:pointer;" onclick="parent.cambio('juego','samsung_chaton/juego/<?=$id?>');" >
	 	<img id="btn1" src="<?=$boton1?>" onmouseover="$('#btn1').hide();$('#btn2').show();" />
	 	<img id="btn2" src="<?=$boton2?>" style="display:none;" onmouseout="$('#btn2').hide();$('#btn1').show();" />
	</div>
</div>
