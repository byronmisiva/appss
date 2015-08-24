 <div id="juego" style="position:absolute;width:810px;height:870px;left:0px;top:0px;margin: 0px; padding: 0px;overflow:hidden;">
	 <div style="position: absolute;left:45px;top:20px;">
	 	<img src="<?=$logo?>" />
	 </div>
	 
	 <div style="position: absolute;left:50px;top:200px;">
	 	<img src="<?=$texto?>" />
	 </div>
	 
	 <div style="position: absolute;left: 0px;top:260px;">
	 	<img src="<?=$cancha?>" />
	 </div>
	<input type="hidden" id="id" name="id" value="<?=$user->id?>" />
	<input type="hidden" id="pageid" name="pageid" value="<?=$pageid?>" />
	<div style="position: absolute;left:100px;top:315px;">
		 <img src="<?=$marcador?>" />
	</div>
	
	<div style="position: absolute;left:282px ;top:384px;width:280px;height:134px;">
			<div style="float:left;margin-top:88px;margin-left:10px;width:30%;height:33px;text-align:center;line-height:33px;	"> 
				<input type="text" id="equipo2"  name="equipo2" value="0" style="margin-left:17px;" class="campos"  maxlength="2" onkeyup="verificarDato(this.id);"/> 
			</div>
			<div style="float:left;margin-top:88px;margin-left:66px;width:30%;text-align:center;line-height:33px;	"> 
				<input type="text" id="equipo1"  name="equipo1" value="0" style="margin-left:17px;" class="campos"  maxlength="2" onkeyup="verificarDato(this.id);" /> 
			</div>
		</div>
		<div id="tipoJuego" style="position: absolute;left:56px;top:594px; width:695px ;height:215px;">		
		</div>
		
		<div style="position: absolute;left:605px;top:830px;" onclick="enviarForma('formaRegistros')" >
			<img src="<?=$enviar1?>" id="des" onmouseover="activar(1);" />
			<img src="<?=$enviar2?>" id="act" style="display:none;" onmouseout="activar(0);" />
		</div>
</div>  
<script>
 	verificarJuego();

 	$(document).ready(function(){	
 		$('#equipo1').bind('keyup',verificarJuego);	
 		$('#equipo2').bind('keyup',verificarJuego);
 	});
 	
 </script>>
   
