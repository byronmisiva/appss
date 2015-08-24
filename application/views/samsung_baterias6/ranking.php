				<div class="texto-ranking animated" style="display: block;">
				<p>
						 ranking
				</p>
				<table class="lista-ranking">
					<tr class="fila-titular">
						<td style="font-weight: bold;">Nombre</td>
						<td style="font-weight: bold;text-align:center;">Puntos</td>
						<td style="font-weight: bold;text-align:center;">Tiempo</td>
					</tr>					
					<?php 
					foreach( $registros as $row){?>
						<tr class="fila-lista">
							<td><?php echo $row->completo ?> </td>
							<td style="text-align: center;"><?php echo $row->puntos ?> </td>
							<td style="text-align: center;"><?php echo $row->tiempo ?> </td>
						</tr>			
					<?php }?>
				</table>
				</div>
			
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	