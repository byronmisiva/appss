<div id="vista">
<? if($datos!=FALSE){?>
	<table id="idata" cellspacing=0 cellpadding=4 width="50%">
		<tr>
			<th >Gráfico</th><th >Nombre</th><th >Opciones</th>
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
				<td  valign=top>".
							"<center>
								<a style='text:decoration:none;' 
								href='".base_url().$row->imagen."' rel='lightbox[inoticia".$row->id."]' 
								title='Imagen' onClick='myLightbox.start(this); return false;'>
									<img border=0 src='".base_url()."imagenes/icons/foto.png' title='Vista de Opción'/>
								</a>
								 <div style='display:none;'>
									<a href='".base_url().$row->imagen."' rel='lightbox[inoticia".$row->id."]' title='Grande' />'
									<a href='".base_url().$row->imagen1."' rel='lightbox[inoticia".$row->id."]' title='Activa' />'
									<a href='".base_url().$row->imagen2."' rel='lightbox[inoticia".$row->id."]' title='Desactiva' />'
								 </div>
								 
								 "
						   ."</center>
					</td>	
					<td  valign=top>".$row->nombre."</td>												
					<td  style='text-align:right;'  valign=top>
						<a href='#' onClick=\"open_vista('".base_url()."smusic/artistas_modificar/".$row->id."','con','TRUE');cambio_tab('3','3')\" title='Actualizar'><img border=0 src='".base_url()."imagenes/icons/edit.png'/></a>
						".anchor('smusic/confirm_delete/'.$row->id, img(array('src'=>'imagenes/icons/delete.png','border'=>'0')), array('title' => 'Eliminar','onclick'=>'Modalbox.show(this.href, {title: this.title, width: 400}); return false;'))."
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
</center>