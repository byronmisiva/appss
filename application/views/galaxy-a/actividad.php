
<?php if($data['dispositivo']=="movil"){
		 echo $data["menu"];
	}?>
	
	<style>	
	.opaco{
		background-color: rgba(0, 0, 0, 0.2) !important;
	    	background-image: none;
	}
	
	.opaco span{
		color:rgba(0, 0, 0, 0.2) !important;
	}
	</style>
<div id="fullcontenedor">		
	<div id="manifiesto" class="section manifiesto">
		<article class="<?php echo $data['dispositivo']?>">
		<?php if($data['dispositivo']!="movil"){
			 echo $data["menu"];
		}?>			
			<div class="franja-titular">MANIFIESTO</div>					
			 <div class="manifiestos-posteados">
			 	<div id="mensajes">
				<?php 				
				foreach($data["manifiesto"] as $row){
					if( $row->id_user != "8"){?>
						<div class="posteo usuario">
							<?php echo '" '.$row->mensaje.'" <br> <span class="nom-usuario">'. $row->completo.'<span>'?>
						</div>
				<?php }else{?>
					<div class="posteo">
							<?php echo $row->mensaje?>
					</div>
				<?php }
				}
				?>
				</div>
				<div class="contenedor-nuevo-manifiesto">				
					<textarea class="ingreso-texto" id="text-manifiesto" name="text-manifiesto"></textarea><br/>				
					<input class="bnt-ingreso-manifiesto" />	
				</div>
			</div>	 
		</article>	
		<?php if($data['dispositivo']!="movil"){?>
		<div  class="franja-actividad">
					<div class="franja-izq"></div>
					<div class="franja-der">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/logo_Samsung.png" style="float: right;margin-right: 15px;"/>
					</div>
		</div>
		<?php }?>
	</div>
	
	<!-- SECCION 2 -->
	<div id="fondo-selfie" class="section"  >	
		<div class="slide" id="slide1" data-anchor="slide1">
			<article class="<?php echo $data['dispositivo']?>">	
			<?php if($data['dispositivo']!="movil"){
			 echo $data["menu"];
			}?>
			<div class="franja-titular">SELFIE</div>					
			<div class="selfie-info texto-movil">				
					<div class="posteo">
						¡Demuestra que eres un experto de las selfies! Cada semana tendremos un tema distinto para tus selfies. Solo debes revisar este listado aquí en nuestra APP, tomarte tu selfie según el tema que corresponda y compartirlo. Cumple todos los temas y podrás participar por audífonos <span class="color-acento">Samsung Level Over</span> 
					</div>
			</div>	
			<div class="contenedor-opciones-selfie">
				<div class="contenedor-opciones">
					<a href="#pageSelfie/slide2"  >
						<div class="bnt ico-tematica"></div>
					</a>
					<a href="#pageSelfie/slide3" >
						<div class="bnt ico-selfie"></div>
					</a>
					<a href="#pageSelfie/slide6" >
						<div class="bnt ico-galeria"></div>			
					</a>	
				</div>
				<ul id="menu3">
					<li class="li-primero">
						<a href="#pageSelfie/slide2" class="bnt" id="ir-tematica">
							<img src="<?php echo base_url()?>imagenes/galaxy-a/04/BT_1.png" />
						</a>
						</li>
					<li>
						<a href="#pageSelfie/slide3" class="bnt ">
							<img src="<?php echo base_url()?>imagenes/galaxy-a/04/BT_2.png" />
						</a>
					</li>
					<li class="ir-galeria">
						<a href="#pageSelfie/slide6" class="bnt ">
							<img src="<?php echo base_url()?>imagenes/galaxy-a/04/BT_3.png" />
						</a>
					</li>
				</ul>
			</div>		
		</article>
		</div>

	    <div class="slide" id="slide2" data-anchor="slide2">
			<article class="<?php echo $data['dispositivo']?>">		
			<?php if($data['dispositivo']!="movil"){
			 echo $data["menu"];
			}?>	
			<div class="franja-titular">TEMÁTICAS</div>					
			<div class="selfie-info">				
					<div class="posteo hidden-xs">
						Revisa esta lista de temáticas semanales para subir tus selfies en esta APP ¡y no te saltes ninguno! 

					</div>	
				<div class="contenedor-opciones-tematica">
					<div class="contenedor-tematica">
						<?php 
						$pos=1;
						for($x=0; $x<6;$x++){?>
							<div class="opcion-tematica <?php echo ($pos !=6 )?"opaco":"";?>">
								<span class="color-acento"> Semana <?php echo $pos?>: </span>
								<?php echo $data["tematica"][$x]?> 	
							</div>
						<?php 
							$pos=$pos+1;
							}?>
					</div>					
				</div>
			</div>	
			<div class="contenedor-opciones-selfie">	
					<ul id="menu3">
						<li class="li-primero">
							<a href="#pageSelfie/slide2" class="" >
								<img src="<?php echo base_url()?>imagenes/galaxy-a/04/BT_1.png" />
							</a>
							</li>
						<li>
							<a href="#pageSelfie/slide3" class="bnt ">
								<img src="<?php echo base_url()?>imagenes/galaxy-a/04/BT_2.png" />
							</a>
						</li>
						<li class="ir-galeria">
							<a href="#pageSelfie/slide6" class="bnt ">
								<img src="<?php echo base_url()?>imagenes/galaxy-a/04/BT_3.png" />
							</a>
						</li>
					</ul>
				</div>	
		</article>	
		
		</div>
		
		<div class="slide" id="slide3" data-anchor="slide3">
			<article class="<?php echo $data['dispositivo']?>">
			<?php if($data['dispositivo']!="movil"){
			 echo $data["menu"];
			}?>						
			<div class="franja-titular">SELFIE</div>
			<div class="selfie-info contenedor-tomar-foto">			
					<div class="posteo">
							Sube tu selfie adjuntando el archivo en nuestra APP. Puedes añadirle un sticker o un marco para personalizarla según tu estilo  y luego compartirlo.
					</div>	
							
					<div class="marco-foto selecion-foto">
						<div class="resultado-Corte"></div>						
					</div>
															
			</div>
			<div class="contenedor-opciones-selfie">
					<ul id="menu4">
							<li  id="instrucion-corte" class="subir-li-primero">
								<div class="bnt boton-instruccion" id="instrucion-selfie">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/06/bt_instruciones.png" />
								</div>
							</li>	
							<li id="carga-corte">						
								<div class="bnt" id="carga-imagen" >		
									<input type="hidden" id="archivo1" value="" name="archivo1" />									
									<iframe src ="<?php echo base_url().'samsung_galaxy_a/imagenPieza'?>" scrolling="no" frameborder="0" height="35px" marginheight="0" marginwidth="0" style="width:100%;overflow:hidden;" ></iframe>									
								 </div>
							</li>
							<?php if($data['dispositivo']=="movil"){?>
							 <li id="tomar-corte">
								<div class="bnt" id="tomar-imagen">
									<iframe src ="<?php echo base_url().'samsung_galaxy_a/imagenMobile'?>" scrolling="no" frameborder="0" height="35px" marginheight="0" marginwidth="0" style="width:100%;overflow:hidden;"></iframe>
								</div>
							 </li> 
							<?php }?>
							<li id="galeria-corte" class="ir-galeria">
								<a href="#pageSelfie/slide6" class="bnt" >
									<img src="<?php echo base_url()?>imagenes/galaxy-a/06/bt_galeria.png" />
								</a>
							</li>
							<li id="atras-corte" data-method="reset">
								<div class="bnt">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/08/bt_1.png" />
								</div>
							</li>
							<li id="continuar-efecto" class="izq">
								<a href="#pageSelfie/slide4" class="bnt">
										<img src="<?php echo base_url()?>imagenes/galaxy-a/07/bt_2.png" />
								</a>
							</li>
					</ul>
					</div>					
		</article>		
		</div>

	    <div class="slide" id="slide4" data-anchor="slide4">
			<article class="<?php echo $data['dispositivo']?>">
			<?php if($data['dispositivo']!="movil"){
				 echo $data["menu"];
			}?>			
				<div class="franja-titular">SELFIE</div>
				<div class="contenedor-foto-cargada">
					<div class="imagen-muestra">					
						<div class="imagen-cargada"></div>
						<div class="contenedor-drag">
							<div id="drag-me" class="draggable">
							   <img src="<?php echo base_url()?>galaxy-a/objetos/marcos/0.png" style="width:100%;"/>							   
							</div>
						</div>	
						<div class="controles">
							<div class="boton-acion mas-zoom mas" ></div>
							<div class="boton-acion menos-zoom menos"></div>
						</div>
						<div class="posicion" style="display: none;">
							<div id="xPos"></div>
							<div id="yPos"></div>
							<div id="ancho"></div>	
						</div>
						<div class="efectos"></div>
						<div class="contenedor-opciones-selfie-marcos hidden-xs aparecer">
						<ul id="menu4">
							<li class="subir-li-primero subir-mobile">
								<div class="bnt boton-instruccion" id="instrucion-selfie">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/06/bt_instruciones.png" />
								</div>
							</li>
							<li class="izq" id="guardar-imagen">
								<a href="#pageSelfie/slide5" class="bnt">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/07/bt_2.png" />
								</a>									
							</li>							
							 <li class="izq" id="continuar-compartir">
								<img src="<?php echo base_url()?>imagenes/galaxy-a/07/bt_2.png" />
							</li> 
						</ul>
						</div>
					</div>					
					<div class="opciones-imagen">
						<div role="tabpanel">						  
						  <ul class="nav nav-tabs" role="tablist">
						    <li role="presentation" class="active" onclick="modoSticker(0);">
							    <a href="#marco" aria-controls="marco" role="tab" data-toggle="tab">
							    <img src="<?php echo base_url()?>imagenes/galaxy-a/01/MARCOS.png" />
							    </a>
						    </li>
						    <li role="presentation"><a href="#sticker" onclick="modoSticker(1);"aria-controls="sticker" role="tab" data-toggle="tab">
						    	<img src="<?php echo base_url()?>imagenes/galaxy-a/01/STICKERS.png" />
						    </a></li>
						  </ul>						
						  <div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="marco">
						    	<?php 
								$pos=1;
								for($x=0;$x<=17;$x++){?>
									<div class="objeto-muestra marco" ref="<?php echo $pos?>">
										<img src="<?php echo base_url().'galaxy-a/objetos/marcos/'.$pos.'.png'?>" ></img>
									</div>
								<?php
									$pos++; 
									}?>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="sticker">
						    	<?php 
								$pos=1;
								for($x=0;$x<=90;$x++){?>
									<div class="objeto-muestra" id="<?php echo $pos?>">
										<img src="<?php echo base_url().'galaxy-a/objetos/sticker/'.$pos.'.png'?>?refresh=564654645" />
									 </div>
								<?php
									$pos++; 
									}?>
						    </div>
						  </div>						
						</div>
					</div>
					<div class="flecha-abajo"></div>
					
				</div>
				<div class="contenedor-opciones-selfie-marcos visible-xs">
						<ul id="menu4">
							<li class="subir-li-primero subir-mobile">
								<div class="bnt boton-instruccion" id="instrucion-selfie">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/06/bt_instruciones.png" />
								</div>
							</li>
							<li class="izq" id="" onclick="guarImagen()">
								<a href="#pageSelfie/slide5" class="bnt">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/07/bt_2.png" />
								</a>									
							</li>							
							 <li class="izq" id="continuar-compartir">
								<img src="<?php echo base_url()?>imagenes/galaxy-a/07/bt_2.png" />
							</li> 
						</ul>
						</div>
			</article>	
			
		</div>
		<div id="fondo-galeria" class="slide" data-anchor="slide5">
			<article class="<?php echo $data['dispositivo']?>">			
			<?php if($data['dispositivo']!="movil"){
				 echo $data["menu"];
			}?>
			<div class="franja-titular">SELFIE</div>
			<div class="selfie-info">			
					<div class="posteo texto-foto-lista"> 
							¡Está lista tu foto!<br>Dale <span style="font-style:italic;" >compartir</span> si quieres continuar o <span style="font-style:italic;" >atrás</span> si
							quieres hacer algún cambio.							
					</div>					
					<div class="marco-foto final"></div>					
			</div>	
			<div class="contenedor-opciones-selfie">
						<ul id="menu4">
							<li   class="subir-li-primero subir-mobile2">								
								<a href="#pageSelfie/slide4" class="bnt">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/08/bt_1.png" />
								</a>									
							<li><!-- id="compartir-aplicacion"-->
								<div class="bnt" id="compartir">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/08/bt_2.png" />
								</div>
							</li>
							
							<li class="ir-galeria">
								<a href="#pageSelfie/slide6" class="bnt">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/06/bt_galeria.png" />
								</a>
							</li>
						</ul>
					</div>		 	
		</article>		
		</div>
		<div id="fondo-galeria" class="slide" data-anchor="slide6">
			<article class="<?php echo $data['dispositivo']?>">
			<?php if($data['dispositivo']!="movil"){
				 echo $data["menu"];
			}?>			
			<div class="franja-titular">GALERÍA</div>
				<div class="selfie-info">			
					<div class="posteo texto-galeria">
						Recuerda que compartir con tus amigos, esto te ayudarà a acumular más
						puntos para ser el ganador. <span style="">Puedes escoger la opción de VIDEO
						para que se genere tu propio slide de fotos con las que tengas hasta ahora.</span>								
					</div>
					<div class="contenedor-galeria"></div>						
				</div>	
				<div class="contenedor-opciones-selfie">
						<ul id="menu4">
							<li class="subir-li-primero subir-mobile">
								<a href="#pageSelfie/slide1" class="bnt ">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/08/bt_1.png" />
								</a>
							</li>
							<li style="margin-right:0;"><!-- id="compartir-aplicacion"-->
								<div class="bnt" id="compartir-aplicacion">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/08/bt_2.png" />
								</div>
							</li>
							<li class="izq" style="margin-right:0;">
								<div class="bnt" id="video-generar">
									<img src="<?php echo base_url()?>imagenes/galaxy-a/09/bt_1.png" />
								</div>
							</li>
						</ul>
						</div>		 	
			</article>
			
		</div>
		
		<?php if($data['dispositivo']!="movil"){?>
		<div  class="franja-actividad">
					<div class="franja-izq"></div>
					<div class="franja-der">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/logo_Samsung.png" style="float: right;margin-right: 15px;"/>
					</div>
			</div>
			<?php }?>
	</div>
	
	<!-- SECCION 3 -->
	<div id="fondo-galaxy-info" class="section galaxy" style="display:none;">
		<article class="<?php echo $data['dispositivo']?>">
		<?php if($data['dispositivo']!="movil"){
			 echo $data["menu"];
		}?>		
			<div class="franja-titular">GALAXY A</div>
	<!-- 		<div class="video-galaxy">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/m1uzXBo_VPQ" frameborder="0" allowfullscreen></iframe>
			</div> -->					
			<div class="galaxy-texto">
					<div class="imagen-galaxy-info"></div>				
					<div class="texto-galaxy-info">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						Duis aute irure dolor in reprehenderit in .<br>
						<div class="btn-leer-mas"></div>
					</div>	
			</div>					
		</article>	
		<?php if($data['dispositivo']!="movil"){?>
		<div  class="franja-actividad">
					<div class="franja-izq"></div>
					<div class="franja-der">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/logo_Samsung.png" style="float: right;margin-right: 15px;"/>
					</div>
					
		</div>
		<?php }?>
	</div>	
</div>
			<div class="contenedor-postear-muro">
		 		<div class="fondo-posteo">
		 		<div class="titulo-posteo">Postear en el Muro</div>
					<div class="cuadrotexto-ingreso">
						<textarea class="caja-texto" maxlength="250" placeholder="Escribe aqui un mensaje para tu amigo"></textarea>
					</div>
					<div class="imagen-postear"></div>					
					<div class="btn-postear"></div>
					<div class="btn-cancelar-postear"></div>
		 		</div>	
		 	</div>
	 	
	 	<div type="button" class="btn btn-primary btn-lg" data-toggle="modal" 
	 		 data-target="#myModal" style="display: none;" id="accion-alerta"></div>	 			
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
			        <span class="sr-only">Cerrar</span></button>
			        <h4 class="modal-title" id="myModalLabel" style="color:#646466;">Alerta</h4>
			      </div>
			      <div class="modal-body" style="color:#646466;">
			      	Recuerda que debes seleccionar.</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>      
			      </div>
			    </div>
			  </div>
			</div>
			<!-- ------------------------ -->
			<div type="button" class="btn btn-primary btn-lg" data-toggle="modal" 
	 		 data-target="#InstrucionesModal" style="display: none;" id="accion-alerta-instruciones"></div>	 			
			<div class="modal fade" id="InstrucionesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header color-titular">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
			        <span class="sr-only">Cerrar</span></button>
			        <h4 class="modal-title" id="myModalLabel" style="font-family:samsung_interfacebold;">¿Cómo participar?</h4>
			      </div>
			      <div class="modal-body" style="color:#646466;font-size: 12pt;font-family:samsung_interfacebold; ">
			        1. Revisa las temáticas semanales dentro de la aplicación. Estas serán la guía para saber qué tipo de selfie debes subir. <br>
					2. Tómate tu selfie de acuerdo a la temática semanal y súbelo en la aplicación. <br>
 					3. Personaliza tu selfie usando nuestros marcos y stickers. ¡Haz tu selfie más memorable!<br>
					4 .¡Ya estás participando para ganarte unos audífonos Samsung Level Over! <br>
			      
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>      
			      </div>
			    </div>
			  </div>
			</div>
			
			
			
			<!-- ------------------------- -->
			
			<div type="button" class="btn btn-primary btn-lg" data-toggle="modal" 
	 		 data-target="#mensaje-alerta" style="display: none;" id="accion-alerta-mensaje"></div>
	 			
			<div class="modal fade" id="mensaje-alerta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header color-titular">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
			        <span class="sr-only">Cerrar</span></button>
			        <h4 class="modal-title" id="myModalLabel" style="color:#646466;">Alerta</h4>
			      </div>
			      <div class="modal-body" style="color:#646466;">
			      	No te olvides de ingresar un mensaje para compartirlo con tus amigos.</div>			      
			    </div>
			  </div>
			</div>	


	<button type="button" id="cargaModal" style="display:none;" data-toggle="modal" data-target="#cropImagen"></button>			
<!-- Modal Cortar Imagen-->
	<div class="modal fade" id="cropImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header color-titular">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Corte Imagen</h4>
	      </div>
	      <div class="modal-body contenedor-carga-imagen">     
	      
	      </div>      
	    </div>
	  </div>
	</div>
	
	<button type="button" id="cargaVideo" style="display:none;" data-toggle="modal" data-target="#crearVideo"></button>			
<!-- Modal Crear Video-->
	<div class="modal fade" id="crearVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header color-titular">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Vìdeo generado</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="verVideo"></div>
	      	<div >
	      		<a id="download" href="" target="_blank">Descargar</a>
	      	</div>	
	      </div>      
	    </div>
	  </div>
	</div>

	<button type="button" id="posteoGenerado" style="display:none;" data-toggle="modal" data-target="#mensajePosteo"></button>			
<!-- Modal Crear Video-->
	<div class="modal fade" id="mensajePosteo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header color-titular">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      </div>
	      <div class="modal-body">	      	
	      	<div style="color:#6a5e60;">
	      		Tu imagen fue posteada con éxito.
	      	</div>	
	      </div>      
	    </div>
	  </div>
	</div>

  <div class="docs-alert"><span class="warning message"></span></div>
			
  <script type="text/javascript" src="<?php echo base_url()?>js/galaxy-a/croper/cropper.js?frefresh=<?php echo rand(0,1000)?>"></script>
 <script type="text/javascript" src="<?php echo base_url()?>js/galaxy-a/croper/docs.js"></script>
<script src="<?php echo base_url()?>js/galaxy-a/complemento2.js?frefresh=<?php echo rand(0,1000)?>"></script>
<script src="<?php echo base_url()?>js/galaxy-a/interact-1.2.3.min.js"></script>
<script type="text/javascript" >
	$(".espera").hide();	
	if(screen.width < 481){
		$("#condiciones").hide();
		$(".hidden-xs").html("");
	}else{
		$(".visible-xs").html("");
		}
	
	var urlImagenCreada;
	var urlImagenCargada;
	var dragX=0;
	var dragY=0;
	var dragW=0; 
	var filesarr = [];
$(document).ready(function(){
/**********frag*****************/
	interact('.draggable').draggable({ 
 		inertia: true,		 
		 restrict: {
		   restriction: "parent",
		   endOnly: true,
		   elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
		 },	
		 
		 onmove: function (event) {
		   var target = event.target,
		       // keep the dragged position in the data-x/data-y attributes
		       x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
		       y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;
		   dragX=x;
		   dragY=y;
		   target.style.webkitTransform =
		   target.style.transform =
		     'translate(' + x + 'px, ' + y + 'px)';
		     
		   target.setAttribute('data-x', x);
		   target.setAttribute('data-y', y);   
		 },
		
		 onend: function (event) {   
		 }
		});
});
  </script>











