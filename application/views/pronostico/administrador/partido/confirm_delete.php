<div>
	<p>Seguro que desea borrar este Usuario?</p>
	<form action='' id='clientes_delete' method='post'>
	<?=form_hidden('id',$this->uri->segment(3));?>
	<input type='button' name="submit" value="Borrar" onClick='enviar_forma("clientes_delete","<?=base_url().'smusic/artistas_delete'?>","con","FALSE","<?=base_url()."smusic/artistas_all"?>","con");Modalbox.hide();cambio_tab("1","3");'/>
	<?
	echo form_input(array('type' => 'button','value' => 'Cancelar','onclick' => 'Modalbox.hide();'));
	echo form_close();
	?>
</div>