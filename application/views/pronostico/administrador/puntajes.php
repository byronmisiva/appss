<h2><?=$titulo?></h2> 
<div id="registros">
		<table width="40%" cellspacing=0>
			<tr class="cabecera">
				<td>Posición</td><td>fbid</td><td>Nombre</td><td>Puntaje</td>
			</tr>
		<? if($datos!=FALSE){
			$cont=0;
			foreach($datos as $row){
				$cont++;
				if($cont%2==0)
					$clase="fila1";
				else 
					$clase="fila2";
				?>
				<tr class="<?=$clase?>">
					<td style="text-align:center;"><?=$cont?></td><td style="text-align:center;"><?=$row->id?></td>
					<td><?=$row->completo?></td><td><?=$row->top_puntaje?></td>
				</tr>
			<?}?>
		</table>
<?}?>		
</div>
