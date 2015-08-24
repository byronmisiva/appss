<div style="position:absolute;width:810px;height:615px;left:0px;top:0px;">
	<div style="position:absolute;left:0px;top:0px;">
		<img  src="<?=$fondo?>" />
	</div>	
	
	 <div id="contador" style="position:absolute;left:200px;top:418px;width:25px;height:38px;cursor:pointer;font-size:30px;font-weight:bold;color:#ffffff;font-family:Arial;text-align: center; ">
		<?=$compartido?>
	</div>
</div>

	 <div style="position: absolute;left:310px;top:500px;cursor:pointer;cursor:ponter;" onclick="compartir('<?=$id_user?>');" >
			<img src="<?=$boton1?>" id="btn1" onmouseover="$('#btn1').hide();$('#btn2').show();" />
			<img src="<?=$boton2?>" id="btn2" style="display:none;" onmouseout="$('#btn2').hide();$('#btn1').show();" />
	</div>
<script type="text/javascript">
		posteo('<?=$id_user?>');	
</script>

