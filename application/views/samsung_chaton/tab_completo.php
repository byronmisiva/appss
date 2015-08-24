  <div id="juego" style="position:absolute;width:810px;height:870px;left:0px;top:0px;margin: 0px; padding: 0px;overflow:hidden;">
	 <div style="position: absolute;left:0px;top:0px;">
	 	<img src="<?=$fondo?>" />
	 </div>
	 
	 <div style="position: absolute;left:200px;top:750px;cursor:pointer;" onclick="window.open('https://play.google.com/store/apps/details?id=com.sec.chaton');">
		<img src="<?=$gplay?>" width="70%" />
	</div>
	<div style="position: absolute;left:370px;top:750px;cursor:pointer;" onclick="window.open('https://itunes.apple.com/us/app/chaton/id486344680?mt=8')">
		<img src="<?=$itunes?>" width="70%"/>
	</div>
	 
	 <div style="position:absolute;left:30px;top:198px;">
		<img src="<?=$texto?>" />		
	</div>
	 <div style="position: absolute;left:187px;top:433px;">
		<img src="<?=$qr?>" />
	</div>
	 <div style="position: absolute;left:300px;top:600px;cursor:pointer;" onclick="cambio('juego','samsung_chaton/juego/<?=$user->id?>')" >
	 	<img id="btn1" src="<?=$boton1?>" onmouseover="$('#btn1').hide();$('#btn2').show();" />
	 	<img id="btn2" src="<?=$boton2?>" style="display:none;" onmouseout="$('#btn2').hide();$('#btn1').show();" />
	 </div>	
</div>  
<input type="hidden" id="id_user" name="id_user" value="<?=$user->id?>" />

   <<script type="text/javascript">
   function cambio(cont,dir){	
		$('#'+cont).load(accion+dir);
	};
</script>
