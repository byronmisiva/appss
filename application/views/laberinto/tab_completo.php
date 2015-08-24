
<div id="juego" style="position:absolute;width:810px;height:870px;left:0px;top:0px;margin: 0px; padding: 0px;overflow:hidden;">
	 <div style="position: absolute;left:0px;top:0px;">
	 	<img src="<?=$fondo?>" />
	 </div>
	<input id="id_user" name="id_user" value="<?=$user->id?>" type="hidden" />
	<div id="pop" style="position:absolute;width:100%;height:100%;cursor:pointer;" >
	<div style="position:absolute;width:100%;height:100%;" class="sombra"></div>		
		<div id="infor" style="position:absolute;left:20px;top:20%;width:730px;height:482px;"></div>
		<div id="carga" style="position:absolute;left:46%;top:50%;width:730px;height:482px;display:none;">
			<img src="<?=base_url().'imagenes/laberinto/loading.gif'?>" />
		</div>
	</div>	
</div>
<script>
$('#infor').load(accion+"samsung_laberinto/informacion/<?=$user->id?>");
function cerrarPop(){
	$('#pop').hide();
	$('#mazesmith').show();
	submitFunc();	
	};
 </script>
