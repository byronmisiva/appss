<?php 
$seleccion=array(""=>"Escoger Selección","0"=>"Ecuador","1"=>"Perú");
?>
<div style="position:absolute;width:100%;height:100%;left:0px;top:0px;" >
	<img src="<?=$vista?>" />
</div>
<form id="formaRegistros" method="POST">
	<div style="position:absolute;width:222px;height:212px;left:0px;top:0px;" >
		<div id="jug1" style="position:absolute;width:73px;height:38px;left:55px;top:155px ;"></div>
		<div id="jug2" style="position:absolute;width:73px;height:38px;left:149px;top:155px ;"></div>
		<div style="position:absolute;width:90px;height:126px;left:28px;top:55px;" onclick="seleccionarJugador(0);"></div>		
		<div style="position:absolute;width:90px;height:126px;left:122px;top:55px;" onclick="seleccionarJugador(1);"></div>
		
		
		<input type="hidden" id="opcion1"  name="opcion1" style="width:75px;" value="0" />
		<input type="hidden" id="opcion2"  name="opcion2" style="width:75px;" value="0" />
	</div>
	<div style="position:absolute;width:222px;height:212px;left:250px;top:0px;" >
		<div style="float:left;margin-top:157px;margin-left:25px;width:100px;height:115px;">
		  <?=form_dropdown("id_as",$jugadores,'','id="id_as" class="combo"');?>
		</div>
	</div>
	<div style="position:absolute;width:170px;height:212px;left:510px;top:0px;" >
		<div style="float:left;margin-top:157px;width:100px;">
			<?=form_dropdown("seleccion",$seleccion,'','id="seleccion" class="combo"');?>
		</div>
	</div>	
</form>