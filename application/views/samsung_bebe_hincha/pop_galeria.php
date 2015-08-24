<div style="position: absolute;left: 0px;top: 0px; width: 100%;height: 100%;border:1px solid blue;">
	<img src="<?=base_url().$registro->imagen?>" width="100%"/>
		<form>
			<input type="text" id="user" value="<?=$registro->id_user?>" style="width:45px;" />
			<input type="text" id="total_<?=$registro->id?>" value="<?=$registro->puntos?>" style="width:25px;" />
			<input type="button" id="votar" value="votar" onclick="realizarVoto(<?=$registro->id?>);" />
			<input type="button" id="compartir" value="compartir" onclick="metodoCompartir(<?=$registro->id?>);" />
		</form>

</div>