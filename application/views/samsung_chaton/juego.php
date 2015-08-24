<div style="position:absolute;width:100%;height:100%;left:0px;top:0px;" >
	<div style="position: absolute;left:0px;top:0px;">
		<img src="<?=$fondo?>" />
	</div>	
	<div style="position: absolute;left:375px;top:432px;color:#FF6400;font-family: Arial;font-size:30px;font-weight: bold;">
		<?=$numeros->numero;?>
	</div>
		
 	<div style="position: absolute;left:300px;top:640px;" onclick="cambio('juego','samsung_chaton/vista_compartido/<?=$id?>/1')" >
	 	<img id="btn1" src="<?=$boton1?>" onmouseover="$('#btn1').hide();$('#btn2').show();" />
	 	<img id="btn2" src="<?=$boton2?>" style="display:none;" onmouseout="$('#btn2').hide();$('#btn1').show();" />
	 </div>
	
	</div>
