<div style="position:absolute;width:100%;height:100%;border:1px solid red;">
	<img src="<?=$img_fondo?>" />
	
	<div style="position:absolute;width:100px;height:50px;left:500px;top:250px;border:1px solid green;cursor:pointer;" onclick="getOpcion(1);">
	
	</div>
	
	<div style="position:absolute;width:100px;height:50px;left:660px;top:333px;border:1px solid green;cursor:pointer;" onclick="getOpcion(0,<?=$user->id?>,<?=$id_page?>);">
	</div>
</div>

<script>
<?php 
if ($id_bebe!="0"){	
	echo "$( '#content' ).load( accion+'samsung_bebe_hincha/galeriaPop/".$id_bebe."/".$user->id."/".$id_page."');";	
}
?>	
</script>
