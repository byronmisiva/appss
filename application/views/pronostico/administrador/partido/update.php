<center>
	<h1><?=$datos->local." Vs ".$datos->visitante?></h1>
	<br/>
	<form action='#' id='vistas_update' method='post'>
		<?=form_hidden('id', $datos->id);?>
		<input type="hidden" id="imagen_local" name="imagen_local" value="<?=$datos->imagen_local?>"/>
		<input type="hidden" id="imagen_visitante" name="imagen_visitante" value="<?=$datos->imagen_visitante?>"/>
		<input type="hidden" id="fondo" name="fondo" value="<?=$datos->fondo?>"/>
		<table>
			<tr><td colspan=3 align="center"><span style="font-size:12px; color:red;"><?=$mensaje?></span></td></tr>
			<tr><td colspan=3 align="left"><span style="font-size:12px; color:red;"><?=validation_errors();?></span></td></tr>
			<tr>
				<td valign=top>Local:</td><td><?=form_input('local', $datos->local);?></td>
				<td>
					<iframe src ="<?=base_url().$controlador.'/imagen'?>" frameborder=0 height=38px marginheight=0 marginwidth=0 width=350"></iframe>
				</td>
				<td valign=top>	
					<?="
					<a style='text:decoration:none;' href='".base_url().$datos->imagen_local."' rel='lightbox[inoticia]' title='Local' 
					onClick='myLightbox.start(this); return false;'>
					<img border=0 src='".base_url()."imagenes/icons/foto.png' title='Local'/></a>"?>
				</td>
			</tr>
			<tr>
				<td valign=top>Visitante:</td><td><?=form_input('visitante', $datos->visitante);?></td>
				<td>
					<iframe src ="<?=base_url().$controlador.'/imagen1'?>" frameborder=0 height=38px marginheight=0 marginwidth=0 width=350" ></iframe>
				</td>
				<td valign=top>	
					<?="<a style='text:decoration:none;' href='".base_url().$datos->imagen_visitante."' rel='lightbox[inoticia]' title='Visitante' 
						onClick='myLightbox.start(this); return false;'>
						<img border=0 src='".base_url()."imagenes/icons/foto.png' title='Visitante'/>
						</a>
					"?>
				</td>
			</tr>			
			<tr>
				<td></td>
				<td style="text-align:right;">Fondo:</td>
				<td>
					<iframe src ="<?=base_url().$controlador.'/imagen2'?>" frameborder=0 height=38px marginheight=0 marginwidth=0 width=350 ></iframe>
				</td>			
				<td valign=top>	
					<?="<a style='text:decoration:none;' href='".base_url().$datos->fondo."' rel='lightbox[inoticia]' title='Fondo' 
						onClick='myLightbox.start(this); return false;'>
						<img border=0 src='".base_url()."imagenes/icons/foto.png' title='Fondo'/>
					</a>
					"?>
				</td>
			</tr>
			<tr>
				<td valign=top>Inicio :</td><td><?=form_input('fecha_inicio', $datos->fecha_inicio);?></td>
			</tr>
			<tr>
				<td valign=top>Fin:</td><td><?=form_input('fecha_fin', $datos->fecha_fin);?></td>
			</tr>
			<tr>
				<td valign=top>Resultado Local:</td><td><?=form_input('resultado_local', $datos->resultado_local);?></td>
			</tr>
			<tr>
				<td valign=top>Resultado Visitante:</td><td><?=form_input('resultado_visitante', $datos->resultado_visitante);?></td>
			</tr>
				
			<tr>
				<td colspan=3 align="center">
					<input type='button' name="submit" value="Actualizar" onClick=" enviar_forma('vistas_update','<?=base_url().$controlador."/updatePartido/".$datos->id?>','con','FALSE')"/>
				</td>
			</tr>
		</table>
	</form>	
</center>