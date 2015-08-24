<div class="fondo" style="height:800px;background-repeat:no-repeat; background-image: url('<?php echo $data['fondo']?>');">
	<div class="registro" style="width:592px;height:393px; background-image: url('<?=base_url('imagenes/samsung_kpop/contenedor.png')?>');position:absolute;left:110px ;top:350px;background-repeat: no-repeat;">
	<div  id="introMensaje" >
	<table style="width:80%;text-align: left;margin: 10% auto;height: 200px; border="1">
		<tr style="height:45px;">
			<td style="font-weight: bold;text-align: center;font-family: samsung_imagination_condensRg;font-size: 22px;line-height:23px; ">
				Forma parte de esta experiencia innolvidable.
			</td>
		</tr>		
		<tr style="height:35px;" >
			<td style="font-weight: normal;line-height:25px;font-size: 21px;"  >
			Inscríbete en nuestro concurso de baile y podrás ser parte de las 15 agrupaciones que se 
			presenten el próximo <span style="font-weight: bold;"> 3 de abril </span> en <span style="font-weight: bold;">Plaza Samsung</span> (junto a Mall del Sol).</td>
		</tr>
		
		<tr style="height:35px;">
			<td style="font-weight: normal;line-height:25px;font-size: 21px;">
			La mejor agrupación recibirá un GALAXY S4 Zoom para cada integrante.
			</td>
		</tr>
		
		<tr style="height:55px;">
			<td >
				<div class="imagenRegistrar" onclick="$('#introMensaje').hide();$('#register').show();"></div>
			</td>
		</tr>
		
	</table>	
	</div>
	
	<div  id="gracias" >
		Tu registro fue enviado.	
	</div>
	
	<form id ="register" method="post" role="form" class="form-horizontal formulario formularioimagen" action="<?php echo base_url('samsung_kpop/register')?>" style="display:none;">
	<?php 
	$cantidad=array(""=>"Integrantes","3"=>"3","4"=>"4","5"=>"5");
	?>
			<div style="float:left;width:90%;display:block;height: auto;margin-left:25px;margin-top:65px; ">
				<table style="width: 100%;height:200px ;">
					<tr>
						<td style="color:#00B5F1;" colspan="2">Nombre de la agrupación</td>						
					</tr>
					<tr>
						<td colspan="2">
							<input type="text" id="nombre_grupo" class="inputClase2" style="width: 100%;"	name="nombre_grupo" placeholder="Nombre Agrupación" value="" />
						</td>
					</tr>
					<tr>
						<td style="color:#00B5F1;" colspan="2">Cantidad integrantes</td>
					</tr>
					<tr>
						<td colspan="2">
							<?=form_dropdown('cantidad',$cantidad,"","id='cantidad' class='selector'")?>						
							
						</td>
					</tr>
					<tr>
						<td style="color:#00B5F1;" colspan="2">Cover con el que participarán</td>
					</tr>
					<tr>
						<td colspan="2">
						<input type="text" id="cover" class="inputClase2" style="width: 100%;"	name="cover" placeholder="Cover con el que participan" value="" />
						</td>
					</tr>
					
					<tr>
						<td style="color:#00B5F1;">Teléfono</td><td style="color:#00B5F1;">E-mail</td>
					</tr>
					
					<tr>
						<td>
							<input type="text" id="telefono"  style="width:95%;" name="telefono" class="inputClase1" placeholder="Teléfono" value="<?php echo $data['user']->telefono?>"  />					
						</td>
						<td>
							<input type="text" id="mail" name="mail" class="inputClase2"  style="width: 100%;" placeholder="E-mail" value="<?php echo $data['user']->email?>"  />
						</td>
					</tr>
				
				</table>		
							
				<input type="hidden"  id="ciudad" name="ciudad" placeholder="Ciudad" value="<?php echo (isset( $data['user']->location )) ? $data['user']->location->name : '';?>" />
				<input type="hidden" id="nombre"	name="nombre" placeholder="Nombre" value="<?php echo $data['user']->name;?>" />
				<input type="hidden" name="user" id="user" value='<?php echo json_encode($data['user'])?>'>
				<input type="hidden" name="fb_page" id="fb_page" value='<?php echo json_encode($data['fb_page'])?>'>
				
				<div style="margin-top: -10px;">
					<input id="submit" name="submit" type="submit" onclick="$('#submit').hide();" value="" class="btn-sumbit" />
				</div>
			</div>
		</form>
		<?php foreach ( $data['errors'] as $key => $value ){?>
			<?php if( $value ){?>
				<script type="text/javascript">
					Tab.showErrors('<?php echo $key;?>');
				</script>		
			<?php }?>		
		<?php }?>
		
	</div>
	<div>
	<a href="<?=base_url('archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-KPOP.pdf')?>" class="linkCondiciones" target='_blank' >Términos y Condiciones</a>
	</div>
	
	 <script type="text/javascript">	
	var rules = [ 
		   { name: 'nombre', display: 'nombre', rules: 'required'},
	           //    { name: 'ciudad', display: 'ciudad', rules: 'required'},
	               { name: 'nombre_grupo', display: 'nombre_grupo', rules: 'required'},
	               { name: 'cantidad', display: 'cantidad', rules: 'required|numeric'},
	               { name: 'cover', display: 'cover', rules: 'required'},	               
	               { name: 'telefono', display: 'telefono', rules: 'required|min_length[9]'},	               
	               { name: 'mail', display: 'mail', rules: 'required|valid_email'}	               
	            ];    
	
	var validator = new FormValidator('register',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';
		        alert("Verifica que la información ingresada sea la correcta.");  
		    }else{
		    	enviarForma('<?=base_url()?>','register'); 		    			    	
			    }
		});
	
	
		function enviarForma(accion,forma){						
		$.ajax({  
			  type: "POST",  
			  url: accion+"samsung_kpop/register",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {
				  if (response=="1"){					  
					$('#submit').hide();
				    $('#gracias').show();
				    $('#'+forma).hide();
				  }
	    		} 
			}); 
		return false;
		};	 	
		</script>
</div>	

















