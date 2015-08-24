<div style="position:absolute;width:810px;height:615px;left:0px;top:0px;">
	<div style="position:absolute;left:100px;top:225px;">
		<img  src="<?=$compartir?>" />
	</div>	
	
	<div id="contador" style="position:absolute;left:291px;top:426px;width:25px;height:38px;cursor:pointer;font-size:27px;text-shadow: 2px 2px #ffffff;color:#4C1407;font-family:Arial;text-align: center; ">
		<?=$compartido?>
</div>
</div>

	<div style="position: absolute;left:310px;top:500px;cursor:pointer;cursor:ponter;" onclick="compartir('<?=$id_user?>','<?=$page?>');" >
			<img src="<?=$boton1?>" id="des" onmouseover="activar(1);" />
			<img src="<?=$boton2?>" id="act" style="display:none;" onmouseout="activar(0);" />
	</div>
<script type="text/javascript">
//	compartir('<?=$id_user?>','<?=$page?>');
</script>

