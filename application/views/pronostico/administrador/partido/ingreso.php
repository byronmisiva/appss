<center>
	<form action='#' id='vistas_insert' method='post'>		
		<input type="hidden" id="imagen_local" name="imagen_local" value=""/>
		<input type="hidden" id="imagen_visitante" name="imagen_visitante" value=""/>
		<input type="hidden" id="fondo" name="fondo" value=""/>
		<table>
			<tr><td colspan=2 align="center"><span style="font-size:12px; color:red;"><?=$mensaje?></span></td></tr>
			<tr><td colspan=2 align="left"><div style="font-size:12px; color:red; padding-left:30px;"><?=validation_errors('<li>','</li>');?></div><br/></td></tr>
			<tr>
				<td valign=top>Local</td><td><?=form_input('local', set_value('local'));?>*</td>
				<td>
					<iframe src ="<?=base_url().$controlador.'/imagen'?>" frameborder=0 height=30px marginheight=0 marginwidth=0 width=320"></iframe>
				</td>
			</tr>	
			<tr>
				<td valign=top>Visitante</td><td><?=form_input('visitante', set_value('visitante'));?>*</td>	
				<td>
					<iframe src ="<?=base_url().$controlador.'/imagen1'?>" frameborder=0 height=30px marginheight=0 marginwidth=0 width=320"></iframe>
				</td>
			</tr>			
			<tr>
				<td ></td>
				<td style="text-align:right;">Fondo:</td>	
				<td>
					<iframe src ="<?=base_url().$controlador.'/imagen2'?>" frameborder=0 height=30px marginheight=0 marginwidth=0 width=320"></iframe>
				</td>				
			</tr>
			
			<tr>
				<td valign=top>Inicio</td>
				<td><?=form_input('fecha_inicio', set_value('fecha_inicio'));?>*</td>				
			</tr>
			<tr>
				<td valign=top>Final</td><td><?=form_input('fecha_fin', set_value('fecha_fin'));?>*</td>				
			</tr>
			
			<tr>				
				<td colspan=3 align="center">
					<input type='button' name="submit" value="Ingresar" 
					onClick="enviar_forma('vistas_insert','<?=base_url().$controlador."/insertPartido/"?>','con','FALSE')"/>
				</td>
			</tr>
		</table>
		
	</form>
</center>
