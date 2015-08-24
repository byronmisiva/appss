<script>
	var idParticipante="<?php echo $user->id?>";
	var elemento1="<?php echo $elemento1?>";
	var elemento2="<?php echo $elemento2?>";
</script>
	<!-- --------PANTALLA INICIO------------- -->
	<div class="contendor-actividad">		
		<div class="logo"></div>
		<div class="logo-samsung"></div>				
		<div class="telefono">
			<div class="mascara">
				<div class="texto-intro animated">
				<p class="texto-intro">
					<!--Ingresa y descubre como todo lo Curvo puede ser mejor; 
					PARTICIPA Y GANA ¡UN TELEVISOR CURVO FULL HD!
-->
					¡Hemos finalizado el concurso! Pronto anunciaremos al ganador del Televisor Curvo Full HD
					</p>
					
				
					
				</div>
				<div class="texto-instrucciones animated">
					<p class="titulo-instrucciones">INSTRUCCIONES</p>
					<p class="titulo-como">¿CÓMO JUGAR?</p>
					<table style="color:#10218b;font-size: 14px;margin-top: 10px;font-style: italic;">
					<tr>
						<td>
							1. Ingresa y acepta los permisos de la aplicación.
						</td>
					</tr>
					<tr>
						<td>
							2. Llena tus datos en el registro.
						</td>
					</tr>
					<tr>
						<td>
							3. Descubre cómo mejoran las cosas siendo curvas, dando click en "MEJORAR"
						</td>
					</tr>
					<tr>
						<td>
							4. Comparte con tus amigos el post generado en la aplicación y ¡Ya estás
                			   participando para ganarte un Televisor CURVO FULL HD!
						</td>
					</tr>					
					</table>					
				</div>
			</div>
		</div>							
		<!--<div class="btn-acepta ">JUGAR</div>
		<div class="btn-instruciones">INSTRUCCIONES</div>-->
	</div>
	
	<!-- ---------PANTALLA ACTIVIDAD----------------- -->
	<div class="actividad-0" >	
			<div class="logo"></div>
			<div class="contenedor-animaciones">
				<div class="opcion1">
				<div class="nombre-elemento elem1anteior"><?php echo $elementos[$elemento1]?></div>
				<div class="nombre-mejorado elem1"><?php echo $mejorados[$elemento1]?></div>
				
					<div class="contenedor-elemento">
						<div class="elemento<?php echo $elemento1; ?>"></div>
					</div>
					
					<div class="btn btn-empezar-elemento1">MEJORAR</div>
					<div class="btn-siguiente next" title="Mejorar otro"  data-toggle="tooltip" data-placement="left"></div>
					<div class="mensaje-mejorar">Mejora otro ítem</div>
				</div>	
				<div class="opcion2">
					<div class="nombre-elemento elem2anteior"><?php echo $elementos[$elemento2]?></div>
					<div class="nombre-mejorado elem2"><?php echo $mejorados[$elemento2]?></div>
					<div class="contenedor-elemento">
						<div class="elemento<?php echo $elemento2?>"></div>
					</div>	
					<div class="btn btn-empezar-elemento2">MEJORAR</div>
					<div class="btn-siguiente compartir">CONTINUAR</div>
				</div>	
			</div>		
	</div>
	<DIV class="actividad-compartir">
		<div class="contenedor-compartir">
			<p class="texto-intro">
			    ¡GRACIAS POR PARTICIPAR!<BR>
   				Ahora ya conoces como ¡todo lo CURVO es mejor!
			</p>
			<div class="btn-cerrar">CERRAR</div>
		</div>
	
	</DIV>
<script src="<?php echo base_url()?>js/samsung_todocurvo/complemento.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
	<script>

<?php if ($participanteRegistrado=="1")
	echo "$('.btn-acepta').click();";
	?>

	$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
</script>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
