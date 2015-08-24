<img src="<?=base_url()?>imagenes/modo_futbol/pantalla-final-ranking-fondo.jpg" />
<div id="registros" style="position:absolute;left:101px;top:513px;width:348px;height:275px;font-family: Arial;color:#ffffff;">

<? if($registro!=FALSE){
	$cont=0;
	$height=52;
	$top=0;
	$ntop=0;
	$ptop=15;
	$valor=0;
	foreach($registro as $row){?>
		<div style="float:left;width:350px;height:<?=$height?>px;margin-top:0;">
		 		<div style="float:left;width:20%;height:<?=$height?>px;margin-top:<?=$top?>px;">				 		
		 			<div style="width:39px;height:39px;overflow:hidden;margin-top:0;">
		 				<img src="//graph.facebook.com/<?=$row->fbid?>/picture?width=48&height=48" />
		 			</div>				 		
		 		</div>
			 	<div style="float:left;width:55%;height:<?=$height?>px;margin-top:<?=$ntop;?>px;overflow:hidden;"  >
			 		<span style="line-height:50px;">
				 		<?=$row->completo?>
					</span>
				</div>
	 			<div style="float:left;width:20%;height:<?=$height?>px;margin-top:<?=$ptop;?>px;"  style="text-align:right;" >
			 		<span style="line-height:20px;">
			 			<?=$row->puntaje?> Pts.
			 		</span>
			 	</div>
		</div>
		<?php
		$cont++;
		switch ($cont){
			case 1 :
				$top=$top+8;
				$ntop=$ntop+8;
				$ptop=$ptop+8;
				break;
			case 2 :
					$top=$top+6;
					$ntop=$ntop+8;
					$ptop=$ptop+6;
					break;
			case 3 :
					$top=$top+5;
					$ntop=$ntop+2;
					$ptop=$ptop+2;
				break;
			case 4 :
				$top=$top+7;
				$ntop=$ntop+2;
				$ptop=$ptop+6;
				break;
		}
		}			
	}?>
</div>
<div id="invitarfin"></div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#invitarfin").click(function () {
            compartir('<?=$id_user?>', "liker");
        });
    });
</script>
