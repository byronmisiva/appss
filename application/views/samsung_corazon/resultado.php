<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
	<link href="<?=base_url('css/samsung_corazon/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/samsung_corazon/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/samsung_corazon/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">	
	<script type="text/javascript" src="<?=base_url().'js/general/validate.js?refresh='.rand(10, 1000)?>"></script>
</head>
<body>	
	<div id="content" class="container" style="border:1px solid red;">
	
		<div class="row">
			<div class="col-md-12">				
			<?php 
			$tipo_corazon=array(
				"0"=>"Pulso Promedio",
				"1"=>"Corazón de Zen",
				"2"=>"Corazón de Bronce",
				"3"=>"Corazón de Oro",
				"4"=>"Corazón de Hierro",
				);
			?>
				<div>					
				<table>
					<tr>
						<td><?php //echo $participante?></td>
						<td><?php echo $tipo_corazon[$resultado]?></td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	
	
	</div>
	
	
	
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	
	
</body>
</html>


