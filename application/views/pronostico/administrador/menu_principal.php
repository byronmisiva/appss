<h2><?=$titulo?></h2> 
<ul id='tabs'>
	<li id='taba1' class="seleccionado" onClick="open_vista('<?=base_url().$controlador."/partido"?>','contenido','FALSE'); cambio_tab_m('1','3','a')";>Partido</li>
	<li id='taba3' class="normal" onClick="open_vista('<?=base_url().$controlador."/reportes"?>','contenido','FALSE'); cambio_tab_m('3','3','a')">Reportes</li>
</ul>

<div id="contenido" style="margin-left:0px;margin-top:10px;text-align:left;"></div>

<script>
 	open_vista('<?=base_url().$controlador."/partido"?>','contenido');
</script>