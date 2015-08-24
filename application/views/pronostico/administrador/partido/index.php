<h2><?=$titulo?></h2> 
<ul id='tabs'>
	<li id='taba1' class="seleccionado" onClick="open_vista('<?=base_url().$controlador."/getAllPartido"?>','con','FALSE'); cambio_tab_m('1','3','a')";>Registrados</li>
	<li id='taba2' class="normal" onClick="open_vista('<?=base_url().$controlador."/insertPartido"?>','con','FALSE');  cambio_tab_m('2','3','a')">Insertar</li>
</ul>
<center>
<div id="con" style="margin-left:-20px;margin-top:10px;"></div>
</center>
<script>
 	open_vista('<?=base_url().$controlador."/getAllPartido"?>','con');
</script>