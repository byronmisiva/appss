<div class="fondoRegistro" >
	<form id ="register" method="post" role="form" class="form-horizontal">	
			<div class="contenedor-tabla">
				<table >
					<tr>
						<td class="labelregistro" colspan="2">Nombre:</td>						
					</tr>
					<tr>
						<td colspan="2" class="fondo-input">
							<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="<?php echo $data['user']->name;?>" class="input" />
						</td>
					</tr>
					<tr>
						<td class="labelregistro" colspan="2">Ciudad:</td>						
					</tr>
					<tr>
						<td colspan="2" class="fondo-input">
						<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="<?php echo (isset( $data['user']->location )) ? $data['user']->location->name : '';?>"  class="input" />
						</td>
					</tr>
					<tr>
						<td class="labelregistro" colspan="2">E-mail:</td>
					</tr>
					<tr>
						<td colspan="2" class="fondo-input">
							<input type="text" id="mail" name="mail" class="input"   placeholder="E-mail" value="<?php echo $data['user']->email?>"  />
						</td>
					</tr>					
					<tr>
						<td class="labelregistro" >Cédula:</td><td class="labelregistro">Teléfono:</td>
					</tr>					
					<tr>
						<td class="fondo-input">
						    <input type="text"  id="cedula"  style="width:95%;background-size:100% 36px;" name="cedula" placeholder="Cédula" value="<?php echo $data['user']->cedula;?>" class="input" />
												
						</td>
						<td class="fondo-input">
							<input type="text" id="telefono"  style="width: 100%;background-size:100% 36px;" name="telefono" class="input" placeholder="Teléfono" value="<?php echo $data['user']->telefono?>"  />
							
						</td>
					</tr>				
				</table>
				<input type="hidden" name="user" id="user" value='<?php echo json_encode($data['user'])?>'>
				<input type="hidden" name="fb_page" id="fb_page" value='<?php echo json_encode($data['fb_page'])?>'>
				
				<div >
					<input id="submit" name="submit" type="submit" value=""  class="btn-sumbit" />
				</div>
				<!-- onclick="$('#submit').hide();" -->
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
	 <script type="text/javascript">	
	var rules = [ 
				   { name: 'nombre', display: 'nombre', rules: 'required'},
	               { name: 'ciudad', display: 'ciudad', rules: 'required'},	               
	               { name: 'cedula', display: 'cedula', rules: 'required|numeric|max_length[10]'},	               	               
	               { name: 'telefono', display: 'telefono', rules: 'required|min_length[7]'},	               
	               { name: 'mail', display: 'mail', rules: 'required|valid_email'}	               
	            ];    
	
	var validator = new FormValidator('register',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';
		        alert("Verifica que la información ingresada sea la correcta.");  
		    }else
		    	enviarForma('<?=base_url()?>','register'); 	    			    	
			    
		});
	
		function enviarForma(accion,forma){						
		$.ajax({  
			  type: "POST",  
			  url: accion+"samsung_lanzamiento/register",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {				  
					  $('#content').load(accion+"samsung_lanzamiento/initGame/"+response);
	    		} 
			}); 
		return false;
		};	 	
		</script>
</div>	

















