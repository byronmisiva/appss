<script type="text/javascript" src="<?php echo base_url()?>js/general/validate.js"></script>
<div class="fondoRegistro" >
<div class="titulo-opcion">Registro</div>
	<div class="fondoCuadrado">
		<div class="texto-registro"></div>	
	</div>
	<form id ="register_user" method="post" class="form-horizontal"  >		
		<div class="contenedor-tabla">
		<div class="fila" style="margin-top: 0;">		
			<div class="campo">
				<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="<?php echo $data['user']->first_name;?>" class="fondo-input" />
			</div>
		</div>
		<div class="fila">		
			<div class="campo">
				<input type="text" id="apellido"	name="apellido" placeholder="Apellido" value="<?php echo $data['user']->last_name;?>" class="fondo-input" />
			</div>
		</div>
		<div class="fila">
			<div class="campo">					
				<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="<?php echo (isset( $data['user']->location )) ? $data['user']->location->name : '';?>"  class="fondo-input" />
			</div>
		</div>
		<div class="fila">
			<div class="campo">					
				<input type="text" id="mail" name="mail" class="fondo-input" placeholder="E-mail" value="<?php echo $data['user']->email?>"  />
			</div>
		</div>
		<div class="fila">
			<div class="campo">					
				<input type="text" id="telefono" name="telefono" class="fondo-input" placeholder="Teléfono" value="<?php echo $data['user']->telefono?>" maxlength="10" />
			</div>
		</div>	
		<div class="fila">
			<div class="campo">					
				<input type="text"  id="cedula" name="cedula" placeholder="Cédula" value="<?php echo $data['user']->cedula;?>" class="fondo-input" maxlength="10" />
			</div>
		</div>				
		<input type="hidden" name="user" id="user" value='<?php echo json_encode($data['user'])?>' />
		<input type="hidden" name="fb_page" id="fb_page" value='<?php echo json_encode($data['fb_page'])?>' />				
		<div class="fila">
			<input id="submit" name="submit" type="submit" value=""  class="btn-sumbit" />
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
				   { name: 'apellido', display: 'apellido', rules: 'required'},
	               { name: 'ciudad', display: 'ciudad', rules: 'required'},	               
	               { name: 'cedula', display: 'cedula', rules: 'required|numeric|max_length[10]'},	               	               
	               { name: 'telefono', display: 'telefono', rules: 'required|min_length[7]|numeric'},	               
	               { name: 'mail', display: 'mail', rules: 'required|valid_email'}	               
	            ];    
	
	var validator = new FormValidator('register_user',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';
		        alert("Verifica que la información ingresada sea la correcta.");  
		    }else{
		    	$('#submit').hide();
		    	enviarForma('<?php echo base_url()?>','register_user');
		    } 	    
		});
	
		function enviarForma(dir,forma){
		$.ajax({  
			  type: "POST",  
			  url: dir+"samsung_unete_galeria/register",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {				  
					  $('#content').load(dir+"samsung_unete_galeria/initGame/"+response);
	    		} 
			}); 
		return false;
		};	 	
		</script>
	

















