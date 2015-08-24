

<div style='position: absolute; width: 787px; height: 399px; overflow: hidden; background-image: url("<?=$palco?>"); background-repeat: no-repeat; top: 180px; left: 10px;'>
	
	<div style="position: absolute; width: 496px; height: 278px; overflow: hidden; background-repeat: no-repeat; background-image: url('<?=$sillas?>'); background-repeat: no-repeat; top: 70px; left: 160px;">		
		<div id="amigo_1" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 0px; left: 51px; cursor: pointer; overflow: hidden;" >
			<div id="foto_1" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[1] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[1];?>/picture?type=normal" alt="" width="101%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_2" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 1px; left: 207px; overflow: hidden;" >
			<div id="foto_2" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[2] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[2];?>/picture?type=normal" alt="" width="100%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_3" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 0px; left: 369px; overflow: hidden;" >
			<div id="foto_3" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[3] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[3];?>/picture?type=normal" alt="" width="100%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_4" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 147px; left: 0px; overflow: hidden;" >
			<div id="foto_4" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[4] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[4];?>/picture?type=normal" alt="" width="100%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_5" style="position: absolute; width: 80px; height: 80px; top: 146px; left: 194px;" >
			<div id="foto_5" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[5] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[5];?>/picture?type=normal" alt="" width="100%" />
				<?}?>
			</div>
		</div>		
	</div>

</div>
<div style='position: absolute; width: 419px; height: 109px; overflow: hidden; background-image: url("<?=$info?>"); background-repeat: no-repeat; top: 650px; left: 60px;'></div>
<div style='position: absolute; width: 123px; height: 290px; overflow: hidden; background-image: url("<?=$celu?>"); background-repeat: no-repeat; top: 650px; left: 590px;'></div>

<div style='position: absolute; width: 810px; height: 1004px; overflow: hidden; background-image: url("<?=$final?>"); background-repeat: no-repeat; top: 0px; left: 0px;'></div>
