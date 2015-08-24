<div class="fondoRegistro" >
	<div class="logo-intro mini50"></div>
	<form id ="register" method="post" role="form" class="form-horizontal">
	<div class="texto superior-Registro">
		Crea tu credencial llenando el siguiente formulario con tus datos
	</div>	
	<div class="contenedor-tabla">
	<div class="fila">
		<div class="texto label">Nombre:</div>
		<div class="campo">
			<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="<?php echo $data['user']->name;?>" class="fondo-input" />
		</div>
	</div>
	<div class="fila">			
		<div class="texto label">Ciudad:</div>
		<div class="campo">					
			<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" 
						value="<?php echo (isset( $data['user']->location )) ? $data['user']->location->name : '';?>"  class="fondo-input" />
		</div>
	</div>
	<div class="fila">			
		<div class="texto label">E-mail:</div>
		<div class="campo">					
			<input type="text" id="mail" name="mail" class="fondo-input"  
					placeholder="E-mail" value="<?php echo $data['user']->email?>"  />
		</div>
	</div>
	<div class="fila">			
		<div class="texto label">Cédula:</div>
		<div class="campo">					
			<input type="text"  id="cedula" name="cedula" placeholder="Cédula" value="<?php echo $data['user']->cedula;?>" class="fondo-input" />
		</div>
	</div>
	<div class="fila">			
		<div class="texto label">Teléfono:</div>
		<div class="campo">					
			<input type="text" id="telefono" name="telefono" class="fondo-input" placeholder="Teléfono" value="<?php echo $data['user']->telefono?>"  />
		</div>
	</div>
				
		<input type="hidden" name="user" id="user" value='<?php echo json_encode($data['user'])?>'>
		<input type="hidden" name="fb_page" id="fb_page" value='<?php echo json_encode($data['fb_page'])?>'>
				
		<div class="fila">
			<input id="submit" name="submit" type="submit" value="Continuar"  class="btn-sumbit" />
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
		        console.log(rules[i].name);  
		    }else
		    	enviarForma('<?=base_url()?>','register'); 	    			    	
			    
		});
	
		function enviarForma(accion,forma){						
		$.ajax({  
			  type: "POST",  
			  url: accion+"samsung_penales/register",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {				  
					  $('#content').load(accion+"samsung_penales/initGame/"+response);
	    		} 
			}); 
		return false;
		};	 	
		</script>
</div>	
















