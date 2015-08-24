<div id="vista">
<? if($datos!=FALSE){?>
	<table id="idata" cellspacing=0 cellpadding=4 width="50%">
		<tr>
			<th >Local</th><th >Visitante</th><th >Fecha Inicio</th><th >Fecha Fin</th><th></th>
		</tr>
			<?		
			$band=0;
			foreach($datos as $row){	
				if($band%2==0)
					$cla='class="fila1"';
				else
					$cla='class="fila2"';					
				echo "
				<tr ".$cla.">
					<td  valign=top>".$row->local."</td>
					<td  valign=top>".$row->visitante."</td>
					<td  valign=top>".$row->fecha_inicio."</td>
					<td  valign=top>".$row->fecha_fin."</td>												
					<td  style='text-align:right;'  valign=top>
						<a href='#' onClick=\"open_vista('".base_url().$controlador."/updatePartido/".$row->id."','con','TRUE');cambio_tab('3','3')\" title='Actualizar'><img border=0 src='".base_url()."imagenes/icons/edit.png'/></a>
						".anchor($controlador.'/confirm_delete/'.$row->id, img(array('src'=>'imagenes/icons/delete.png','border'=>'0')), array('title' => 'Eliminar','onclick'=>'Modalbox.show(this.href, {title: this.title, width: 400}); return false;'))."
					</td>
				</tr>";				
				$band++;				
			}?>			
	</table>
</div>
<br/>
<center>
<?php 
}else{?>
	<center><br/><br/><br/><span style="font-size:12px; color:red;">No Existen Registros</span></center>
<?}?>
<?=$this->ajax_pagination->create_links();?>
</center>