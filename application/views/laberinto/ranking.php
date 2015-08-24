<img src="<?=$pop?>" />
<div id="registros" style="position:absolute;left:140px;top:60px;width:430px;font-family: Arial;color:#ffffff;">
			<? if($datos!=FALSE){
				$cont=0;
				$height=55;
				$top=0;
				$valor=0;
			foreach($datos as $row){
				if($cont==0){
					$clase1="primero";
					$clase2="pts1";					
				}else{
					$clase1="normal";
					$clase2="pts2";
				}				
				?>
				<div style="position:absolute;width:100%;height:<?=$height?>px;top:<?=$top?>px;overflow:hidden;">
				 	<div style="float:left;width:20%;height:<?=$height?>px;text-align:center;">				 		
				 		<div style="width:48px;height:48px;overflow:hidden;"></span>
				 		<img src="//graph.facebook.com/<?=$row->fbid?>/picture?width=48&height=48" /></div>				 		
				 	</div>
				 	<div style="float:left;width:60%;height:<?=$height?>px;" class="<?=$clase1?>" >
				 		<span style="line-height:60px;">
				 		<?=$row->completo?>
				 		</span>
				 	</div>
 				 	<div style="float:left;width:20%;height:<?=$height?>px;margin-top:15px;" class="<?=$clase2?>" style="text-align:right;" >
				 		<span style="line-height:20px;">
				 			<?=$row->puntaje?> Pts.
				 		</span>
				 	</div>

				</div>
			<?php 
			$top=$top+62;
			$cont++;
			}			
			}
			if($registro->puntaje<0)
				$registro->puntaje=0;
			?>
			<div style="position:absolute;width:250px;height:50px;left:90px;top:320px;">
				<div style="float:left;width:140px;" class="primero">Tu puntaje es :</div>
				<div style="float:left;width:80px;" class="pts1"><?=$registro->puntaje?> Pts.</div>
			</div>
</div>

<div style="position:absolute;left:70%;top:80%;cursor:pointer;" onclick="regresar('<?=$id?>');">
	<img src="<?=$boton1?>" id="des2" onmouseover="activar(1);" />
	<img src="<?=$boton2?>" id="act3" style="display:none;" onmouseout="activar(0);" />
</div>

<script>
	function regresar(id){
		$("#infor").load(accion+"samsung_laberinto/informacion/"+id);
	};

</script>
