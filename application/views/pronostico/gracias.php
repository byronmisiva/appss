<div style="position:absolute;width:810px;height:758px;left:0px;top:0px;overflow: hidden;margin: 0px; padding: 0px;" >
	<img src="<?=$img_fondo?>?fbrefresh=123654" />
	
		 <div style="position:absolute;width:100%;height:100%;left:0px;top:0px;">
			<img src="<?=base_url().$partido->fondo?>" width="810" />
			<div style="position: absolute;left:180px;top:196px;" class="nombrEquipo"><?=$partido->local?></div>
			<div style="position: absolute;left:449px;top:196px;" class="nombrEquipo"><?=$partido->visitante?></div>	
		</div>
	<div style="position:absolute;left:0px;top:0px;width:100%;height:100%;" class="sombra"></div>
	<div style="position:absolute;left:13%;top:37%;">
		<img src="<?=$img_mensaje?>" />
	</div>
	<div style="position: absolute;width:355px;height: 265px; left:32%;top:400px;">
		<div style="text-align:center;width:350px;height:37px;"><img src="<?=$img_titulo?>" /></div>
		<?php
			$sub_total=0;
			$cont=0;
			foreach($registro as $row){
				$cont++;
				$promedio=($row->cantidad*100)/$total;
				$sub_total=$sub_total+$promedio;?>			
				<div class="porcentaje" >
					<?=number_format($promedio,2)?>%
				</div>
					
				<div style="float:left;width:298px;height:46px;margin-left:5px;margin-right:5px;margin-top:0px;background-image: url('<?=$img_cuadro?>?fbrefresh=468658');">
				 <div style="padding-top:14px;padding-left:27px;width:100%;height:100%; ">
				<?php for ($x=1;$x<=$promedio;$x++){?>
							<div style="float:left;padding:0px;">
								<img src="<?=$img_path.$cont.'.png?fbrefresh=123456'?>" />
							</div>
						<?php }?>					
				
						<span class="resultado"><?=$row->resultado_local." - ".$row->resultado_visitante?></span>
				</div>		
				</div>
			<?php }
			$final=number_format((100-$sub_total),2);
			$cont++;
			?>	
				<div class="porcentaje" >
					<?=$final?>%
				</div>
				<div style="float:left;width:298px;height:46px;background-image: url('<?=$img_cuadro?>?fbrefresh=468658');margin-left:5px;margin-right:5px;margin-top:0px;">
					<div style="padding-top:14px;padding-left:27px;width:100%;height:100%; ">
						<?php 
						for ($x=1;$x<=$final;$x++){?>
							<div style="float:left;margin:0px;">
								<img src="<?=$img_path.$cont.'.png?fbrefresh=468658'?>" />
							</div>
						<?php }?>
						<span class="resultado">Otros</span>
					</div>	
				</div>
	</div>
</div>
</div>
<script type='text/javascript'>
	compartir('<?=base_url()?>',<?=$id_user?>);
</script>