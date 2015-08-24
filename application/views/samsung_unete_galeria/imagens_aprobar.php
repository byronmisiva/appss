<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
	<link href="<?=base_url('css/samsung_unete_galeria/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">	
	<link rel="stylesheet" href="<?php echo base_url('js/colorbox/colorbox.css'); ?>"/>		
	<link rel="stylesheet" href="<?=base_url()?>fonts/samsung_regular_if/specimen_stylesheet.css" type="text/css" charset="utf-8" />	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url('js/carouFredSel/jquery.carouFredSel-6.2.1-packed.js') ?>"></script>
	<script	type="text/javascript" src="<?php echo base_url('js/colorbox/jquery.colorbox-min.js');?>"></script>
	<script src="<?=base_url()?>js/samsung_unete_galeria/app.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
	<style type="text/css">	
			body{
				background-color:#ffffff;
				color:#024F9F;
				font-size: 24px;
			}			
		</style>
</head>
<body style="background-color: #000;">
<div id="content" class="container" style="overflow: hidden;height: 650px;width:810px;">
	<div class="fondoGame-dentro" style="display: inline-block;">
		<ul class="nav nav-tabs menuSuperior" role="tablist">
		  <li class="active"><a href="#galeria" role="tab" data-toggle="tab">Administracion Imagenes</a></li>	  	  
		</ul>	
		<div class="linea"></div>	
		<div class="tab-content">	  
		  <div class="tab-pane active" id="galeria">
		  		<div class="titulo-opcion">Galería de fotos</div>
			  	<div class="fondoCuadrado2">
			  		<div class="contenedor-galeria" style="overflow: auto">
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
					}	
					?>			  		
			  		</div>
			  	</div>		
		  </div>
		</div>			
	</div>
</div>	
<script>
$(document).ready(function() {	
	$(".img-galeria").colorbox({rel:'img-galeria'});	
});

function procesoAprobacion(id,parametro){
	$.ajax({  
		  type: "GET",  
		  url: "<?php echo base_url()?>"+"samsung_unete_galeria/procesoActualizar/"+id+"/"+parametro,
		  success: function( response ) {			  
			  $('.contenedor-galeria').load("<?php echo base_url()?>"+"samsung_unete_galeria/actualizarAdmin");
			  inicio();	
			} 
		}); 
}


</script>

</body>
</html>
















