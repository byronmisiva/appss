<?php
	if (is_array($registro)){				
	foreach ($registro as $row){?>
		<div style="float: left;width: 105px;">
		<?php if($row->activo=="1")
								$mensaje="Aprobada";
							else
								$mensaje="No Aprobada";
								?>
							<div style="cursor: pointer;display: inline-block;float: left;height: 20px;text-align:center;width:100%;font-size: 16px;color:#fff;">
							<?php echo $mensaje;?>
							</div>
			<a title="" href="<?php echo base_url().$row->imagen; ?>" class="img-galeria" >
				<img src="<?php echo base_url().$row->thumb?>" width="100%" height="100%"/>
			</a>
			<div style="cursor: pointer;display: inline-block;float: left;height: 20px;margin-left: 5px;margin-right: 5px;width: 30px;font-size: 16px;" onclick="procesoAprobacion('<?php echo $row->id?>',1);">SI</div>
			<div style="cursor: pointer;display: inline-block;float: right;height: 20px;margin-left: 5px;margin-right: 5px;width: 30px;font-size: 16px;text-align: right;" onclick="procesoAprobacion('<?php echo $row->id?>',3);">NO</div>
		</div>	
	<?php }
	}	?>		