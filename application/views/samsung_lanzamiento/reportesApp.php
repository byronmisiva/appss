<!DOCTYPE html>
<html>
<head>
	<title>Reporte | App Mi Personalidad S5</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />	
	<link rel="stylesheet" href="<?=base_url()?>fonts/samsung_regular_if/specimen_stylesheet.css" type="text/css" charset="utf-8">
	<style type="text/css">	
			body{
				background-color:#313131;
				color:#fff;
				font-size: 24px;
			}		
			
			th{
			font-size: 16px;
			}	
			
			td{
			font-size: 14px;
			}
			
			.container{
			background-image: url('<?=base_url()?>imagenes/samsung_s5/preview/fondo-preview.jpg');
			background-position: center top;
			background-repeat: no-repeat;
			background-size:90% 100%; 
			}
			
			.table-hover > tbody > tr:hover > td,
			.table-hover > tbody > tr:hover > th {
			  background-color: transparent;
			  font-weight: bold;
			  
			}
			
			.table-responsive{
			    height: 400px;
			    margin-left: 15%;
			    margin-top: 240px;
			    overflow: auto;
			    width: 75%;
			   }
				.ubicar{
				margin-left: 15%;				
				}		
		</style>
</head>
<body>	
	<div id="content" class="container" style="height: 745px;" >	
	<div class="table-responsive" >
	<table class="table   table-hover">
		<tr>
		<th>#</th>
		<th>Nombres</th>
		<th>Ciudad</th>
		<th>Cédula</th>
		<th>Teléfono</th>
		<th>E-mail</th>
		<th>Comp</th>
		<th>Generadas</th>
		<!-- <th>Creado</th> -->
		</tr>
		<?php 
		$x=0;
		foreach($registro as $row){ 
		$x++;		
		?>
		<tr>
			<td><?=$x?></td>
			<td><?=$row->completo?></td>
			<td><?=$row->ciudad?></td>
			<td><?=$row->cedula?></td>
			<td><?=$row->telefono?></td>
			<td><?=$row->mail?></td>
			<td style="text-align:center"><?=$row->compartidos?></td>
			<td style="text-align:center"><?=$row->generado?></td>
			<!-- <td><?=$row->creado?></td> -->
		</tr>
		<?php }?>
		
	</table>
	</div>
	<button type="button" class="btn btn-success ubicar" id="btn-generador" >Descargar Información App</button>
	</div>
	
		
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/fonts/samsung_regular_if/easytabs.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
	$('#btn-generador').click(function(){
		var accion="<?=base_url('samsung_lanzamiento/crearReporte')?>";					
		window.open(accion);				
	});
	
	
	</script>
</body>
</html>






