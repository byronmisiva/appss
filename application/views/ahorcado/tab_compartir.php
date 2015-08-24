<div style="position:absolute;width:810px;height:615px;left:0px;top:0px;">
	<div style="position:absolute;left:0;top:0;">
		<img  src="<?=$compartir?>" />
	</div>		
	<div id="contador" style="position:absolute;left:440px;top:435px;width:25px;height:38px;cursor:pointer;font-size:27px;color:#ffffff;font-family:Arial;text-align: center; ">
		<?=$compartido?>
	</div>
</div>

	<div style="position: absolute;left:555px;top:575px;cursor:pointer;cursor:ponter;" onclick="compartir('<?=$id_user?>');" >
		<img src="<?=$boton1?>" id="des" onmouseover="activar(1);" />
		<img src="<?=$boton2?>" id="act" style="display:none;" onmouseout="activar(0);" />
	</div>
<script type="text/javascript">
	compartir('<?=$id_user?>');
</script>

