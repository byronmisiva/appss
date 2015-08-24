<div style="position:absolute;width:100%;height:100%;left:0px;top:0px;" >
	<img src="<?=$vista?>" />
</div>
<form id="formaRegistros" method="POST">
	<div style="position:absolute;width:222px;height:212px;left:0px;top:0px;" >
		<div style="float:left;margin-top:155px;margin-left:50px;text-align: center;width:145px;">
			<input type="text" id="minuto"  name="minuto" maxlength="3" value="0" class="campos" />
		</div>
	</div>
	<div style="position:absolute;width:222px;height:212px;left:282px;top:0px;" >
		<div style="float:left;margin-top:65px;width:160px;height:76px;">
			<input type="button" id="A"  name="a" value="" onclick="selecionArea(this.id);" class="areas" />
			<input type="button" id="B"  name="b" value="" onclick="selecionArea(this.id);" class="areas" />
			<input type="button" id="C"  name="c" value="" onclick="selecionArea(this.id);" class="areas" />
			<input type="button" id="D"  name="d" value="" onclick="selecionArea(this.id);" class="areas" />
			<input type="button" id="E"  name="e" value="" onclick="selecionArea(this.id);" class="areas" />
			<input type="button" id="F"  name="f" value="" onclick="selecionArea(this.id);" class="areas" />
		</div>
		<div style="float:left;margin-top:10px;margin-left:15px;text-align: center;width:140px;">	
			<input type="text" id="area"  name="area"  value="" class="campos"  readonly="readonly" />
		</div>	
		
	</div>
	<div style="position:absolute;width:222px;height:212px;left:507px;top:0px;" >
		<div style="float:left;margin-top:158px;text-align: center;width:140px;"> 
			<?=form_dropdown("id_jugador",$jugadores,'','id="id_jugador" class="combo"');?>
		</div>
	</div>
</form>