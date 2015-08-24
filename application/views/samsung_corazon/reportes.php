<!DOCTYPE html>
<html>
<head>
	<title>Reporte | Corazón Sano</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
	<style type="text/css">	
			body{
				background-color:#313131;
				color:#fff;
				font-size: 24px;
				font-family: Helvetica;
			}		
			
			th{font-size: 16px;}	
			
			td{	font-size: 14px;}
			
			.container{
			}
			
			.table-hover > tbody > tr:hover > td,
			.table-hover > tbody > tr:hover > th {
			  background-color: transparent;
			  font-weight: bold;
			  
			}
			
			.table-responsive{
			   height: 400px;
			    margin: 5% auto 15px;
			    overflow: auto;
			    width: 90%;
			   }
				.ubicar{
				margin-left: 15%;				
				}	
				
			.titular{
			font-size: 30px;
			text-align: center;
			margin-top: 35px;
			}		
		</style>
</head>
<body>	
		<?php 
		$tipo=array("0"=>"Promedio","1"=>"Zen","2"=>"Bronce","3"=>"Oro","4"=>"Hierro");
		$genero=array("m"=>"Masculino","f"=>"Femenino",);		
		?>

	<div id="content" class="container" style="height: 745px;" >
	<div class="row">
		<div class="col-lg-12 titular"> Reporte Corazón Sano</div>
	</div>	
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive" >
				<table class="table   table-hover">
					<tr>
					<th>Nombre</th><th>Apellido</th><th>Edad</th>
					<th>Cédula</th><th>Ciudad</th><th>Teléfono</th>
					<th>Género</th><th>Tipo</th><th>Pulsos</th>
					</tr>
					<?php foreach($registro as $row){ ?>
					<tr>
						<td><?=$row->nombre?></td>
						<td><?=$row->apellido?></td>
						<td><?=$row->edad?></td>
						<td><?=$row->cedula?></td>
						<td><?=$row->ciudad?></td>
						<td><?=$row->telefono?></td>
						<td><?=$genero[$row->genero]?></td>
						<td><?=$tipo[$row->tipo]?></td>
						<td><?=$row->pulsos?></td>
					</tr>
					<?php }?>
					
				</table>
				</div>		
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-12">
			<button type="button" class="btn btn-success ubicar" id="btn-generador" >Descargar Base Completa</button>
			<button type="button" class="btn btn-success ubicar" id="btn-generadorfiltrado" >Descargar Participantes Sorteo </button>
		</div>
	</div>
	
		
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/fonts/samsung_regular_if/easytabs.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
	$('#btn-generador').click(function(){
		var accion="<?=base_url('samsung_corazon/crearReporteTotal')?>";					
		window.open(accion);				
	});

	$('#btn-generadorfiltrado').click(function(){
		var accion="<?=base_url('samsung_corazon/crearReporteFiltrado')?>";					
		window.open(accion);				
	});
	
	
	</script>
</body>
</html>






