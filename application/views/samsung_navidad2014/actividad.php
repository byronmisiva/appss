<script>
	<?php if(isset($user->id) ){?>
		var idParticipante="<?php echo $user->id?>";
	<?php }?>
</script>
  	<!-- CONTENEDOR INTRO E INSTRUCCIONES -->
  	
  	<div class="contendor-actividad">	
		<div class="luces"></div>
		<div class="logo"></div>		
		<div class="contenedor-informacion">
			<div class="mascara">
				<div class="texto-intro animated">
					<!--Ingresa y ayuda a Santa a repartir regalos en esta Navidad. 
					Demuestra tus habilidades y podrás ganarte unos audífonos Samsung Level Over.-->
					Jo Jo Jo<br>
					Santa agradece a todos por su ayuda. Pronto anunciaremos al ganador de los audífonos Samsung LEVEL Over
				</div>
				<div class="texto-instrucciones animated">
					<p>¿CÓMO JUGAR?</p>	
					<table>
						<tr>
							<td>1. Ingresa y acepta los permisos de la aplicación. </td>
						</tr>
						
						<tr>
							<td>2. Llena tus datos en el registro. </td>
						</tr>
						
						<tr>
							<td>3. Da click en la pantalla de juego y lleva a Santa a través de las chimeneas. Cada chimenea que pases, te dará 1 pt. 
							¡No topes ninguna de ellas o se acabará el juego! . </td>
						</tr>
						
						<tr>
							<td>4. Invita a 3 amigos para que ayuden a Santa y ¡ya estás participando!. </td>
						</tr>
					</table>
				</div>
			</div>
			<!--<div class="btn btn-acepta">Jugar</div>
			<div class="btn btn-instruciones">Instruciones</div>
			<div class="btn btn-ranking">Ranking</div>	-->	
		</div>	
		</div>	
		<!-- CONTENEDOR JUEGO -->
			<div class="actividad"></div>
			
			
		<!-- CONTENEDOR RANKING -->
			<div class="actividad-ranking"></div>
		
		<!-- CONTENEDOR FIN ACTIVIDAD -->
		
		<div class="fin-actividad">	
				<div class="luces"></div>
				<div class="logo"></div>		
				<div class="contenedor-informacion">
					<div class="texto-intro titulo-compartir">
						<p class="titulo-fin">¡Fin del Juego!</p>
						<p class="titulo-fin">Gana +1 pt adicional por invitar a tus amigos.</p>
						<p class="titulo-fin">Gana +2 pts adicionales por compartir un post.</p>
					</div>
					<div id= "contenedor-compartir" >
						<div class="normal">
							<div class="btn btn-invitar">Invitar</div>
							<div class="btn btn-compartir">Compartir</div>
							<div class="btn btn-jugar">Jugar</div>
						</div>
						<div class="mobile">
							<div class="btn btn-facebook" data-toggle="modal" data-target="#myModal">Facebook</div>
					
							<a class="btn btn-wapp" 
	   						data-action='share/whatsapp/share' 
	   						href="whatsapp://send?text= Ingresa aquí y ayuda a Santa a repartir regalos a través de las chimeneas de la ciudad. ¡Demuestra tus habilidades y participa por unos audífonos Samsung Level Over! https://apps.facebook.com/samsung_trineosanta">
	   							Whatsapp
	   						</a>	 
							
							<div class="btn btn-jugar">Jugar</div>
						</div>
					</div>					
					
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
					    	<div class="modal-content">
						      <div class="modal-header">						        
						        <h4 class="modal-title" id="myModalLabel">Compartir en Facebook</h4>
						      </div>
						      <div class="modal-body">
									<div class="btn btn-invitar">Invitar</div>
									<div class="btn btn-compartir">Compartir</div>	        
									
									<div data-dismiss="modal" class="btn btn-cerrar-modal" >Cerrar</div>
						      </div>
						      
					    </div>
					  </div>
					</div>
					
						
				</div>				
		</div>
		<div class="cierre-actividad">	
				<div class="luces"></div>
				<div class="logo"></div>		
				<div class="contenedor-informacion">
					<div class="texto-intro">
						<p class="titulo-fin">Jo Jo Jo</p>
						<p class="titulo-fin">¡Gracias por ayudar a Santa!</p>
					</div>
					<div id= "contenedor-compartir" >
					<a href="https://www.facebook.com"></a><div class="btn btn-cerrar">Salir</div></a>
				</div>	
				</div>				
		</div>		
		<div class="logo-samsung"></div>
	<script src="<?php echo base_url()?>js/samsung_flappy_santa/complemento.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
	
	
	
<script>
	generarLuces();

<?php if ($participanteRegistrado=="1")
	echo "$('.btn-acepta').click();";
	?>
</script>










