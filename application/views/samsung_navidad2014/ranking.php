
		<div class="luces"></div>
		<div class="logo"></div>		
		<div class="contenedor-informacion">
			<div class="mascara">
				<div class="texto-intro texto-ranking">
					<p>Top 10 Ayudantes de Santa</p>
				</div>			
				<table class="tabla-ranking">
					<tr>
						<th colspan="1"></th>
						<th colspan="1">Nombre</th>						
						<th>Total</th>
					</tr>					
					<?php
					$x=0;
					$sw=0;
						foreach ($registros as $row){
							$x++;
							if($x <= 5){
								if($x == 5)
									$sw=1;
							?>
							<tr>			
								<td colspan="1"><?php echo $x;?></td>				
								<td style="padding-left:8px;"><?php echo $row->completo?></td>							
								<td class="punto"><?php echo $row->total?></td>
							</tr>
						<?php 
							}
						}?>
						 
				</table>
				<?php if($sw == 1){?>
				<table class="tabla-ranking">
					<tr>
						<th colspan="1"></th>
						<th colspan="1">Nombre</th>						
						<th><span class="pt-total" >Total</span></th>
					</tr>					
					<?php
					$x=0;
						foreach ($registros as $row){
							$x++;
							if($x > 5){?>
							<tr>		
								<td colspan="1"><?php echo $x;?></td>					
								<td style="padding-left:8px;"><?php echo $row->completo?></td>							
								<td class="punto"><?php echo $row->total?></td>
							</tr>
						<?php 
							}
						}?>
						 
				</table>
				
				
				
				
				<?php }
				if($sw == 1){?>
				<script>
				$(".tabla-ranking").addClass("tabla-ranking-grupo");
				</script>
				<?php }?>
				
				
	</div>
	<div class="btn btn-continuar">Continuar</div>
	</div>

	
	<script>

	$(document).ready(function(){	
		$(".btn-continuar").click(function(){
			$(".actividad-ranking").fadeOut(function(){
				$(".contendor-actividad").fadeIn();
				$(".actividad-ranking").html("");
			});		
		});

		
	});
	generarLuces();
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	