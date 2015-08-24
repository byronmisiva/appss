<img src="<?=$pop?>" />
<div style="position:absolute;left:230px;top:77%;width:107px;height:35px;" onclick="ranking('<?=$id?>');">
	<img src="<?=$boton1?>" id="des1" onmouseover="activar2(1,'des1','act1');" />
	<img src="<?=$boton2?>" id="act1" style="display:none;" onmouseout="activar2(0,'des1','act1');" />
</div>
<div style="position:absolute;left:400px;top:77%;width:107px;height:35px;" onclick="cerrarPop();">
	<img src="<?=$boton3?>" id="des2" onmouseover="activar2(1,'des2','act3');" />
	<img src="<?=$boton4?>" id="act3" style="display:none;" onmouseout="activar2(0,'des2','act3');" />
</div>

<script>
function  ranking(id){	
	$('#carga').show();
	$('#infor').hide();	
	$("#infor").load(accion+"samsung_laberinto/getTop/"+id, 
	function (responseText, textStatus, XMLHttpRequest) {
	    if (textStatus == "success") {
	        $('#carga').hide();
	        $('#infor').show();
	    }	    
	  });	
};


</script>