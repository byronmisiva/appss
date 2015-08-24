<div class="container">
	<div class="fondoGame" style="display: inline-block;" >
		<div class="franja-superior"></div>
		<div class="contenedor-botones">						
			<div class="btn btn-ranking" >RANKING</div>
			<!-- <div class="btn btn-jugar" >JUGAR</div> -->			
		</div>
		 <?php 
		 $valor=5-(int)$compartidos;
		 if($valor<2)
		 	$mensaje=$valor." amigo";
		 else
		 	$mensaje=$valor." amigos";
		 ?>		
		<div class="textoCompartir">							
				Invita a <span id ="contador" style="font-weight: bold;"> <?=$mensaje?> </span>  
				para que también se unan al equipo G11 y ¡Formarás parte del sorteo!
		</div>		
				
				
		<div class="contenedor-ranking">
			<div class="titular-cabecera">Conoce los mejores PUNTAJES.</div>
			<div class="titular-cabecera acento">TOP 10</div>
			<div class="lista-nombres">
				<table style="width:100%;">
					<?php 
					foreach( $registro as $row){?>
						<tr>
							<td><?php echo $row->completo ?> </td>
						</tr>			
					<?php }?>
				</table>
			</div>	
		</div>
		
		<div class="btn btn-compartir"  onclick="compartir(<?php echo $id_user ?>);">COMPARTIR</div>
	</div>		
</div>
<form id="datosOpciones">	
	<input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user?>" />
</form>
<script type="text/javascript">
$('.btn-jugar').click(function() {		
	$('#content').load(accion + "samsung_penales/ingresoActividad", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
});






compartir(<?php echo $id_user ?>);
	

</script>



