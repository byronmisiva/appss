<div class="contendor-actividad">	
		<div class="logo"></div>
		<div class="logo-samsung"></div>
		<div class="contenedor-opciones"></div>
		<div class="telefono">
			<div class="mascara">
				<div class="texto-ranking animated" style="display: block;">
				<table>
					<tr>
						<td style="font-weight: bold;">Nombre</td><td style="font-weight: bold;text-align:center;">Puntos</td>
					</tr>					
					<?php 
					foreach( $registro as $row){?>
						<tr>
							<td><?php echo $row->completo ?> </td>
							<td style="text-align: center;"><?php echo $row->puntos ?> </td>
						</tr>			
					<?php }?>
				</table>
				</div>
			</div>
		</div>							
		<div class="btn-continuar" style="cursor:pointer;left: 334px;top: 527px;"></div>				
	</div>
<script type="text/javascript">
$('.btn-continuar').click(function() {		
	$('#content').load(accion + "pronostico/ingresoActividad", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});

$('.contendor-actividad').addClass('movimiento');
</script>



