<style>
#alerta{
	display:none;
}
</style>

<div class="fondo-registro" style="left: 0;top: 0;">
	<div class="registro" >
		<form id="register" name="register" method="post" role="form" class="form-horizontal formulario" >
			<div class="form-group">		
				<div class="form-control inputTexto" style="margin-top: 40px;">
					<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="<?php echo $data['user']->first_name;?>" />				
				</div>
			</div>
			<div class="form-group">		
				<div class="form-control inputTexto" style="margin-top: 5px;">
					<input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $data['user']->last_name;?>" />				
				</div>
			</div>
			<div class="form-group">			
				<div class="form-control inputTexto" style="margin-top: 6px;">			
					<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="<?php echo (isset( $data['user']->location )) ? $data['user']->location->name : '';?>" />
				</div>
			</div>
			
			<div class="form-group " style="margin-top: 20px;">			
				<div class="form-control inputTexto" >					
				<!--<input type="text" id="mail" name="mail" placeholder="E-mail" value="<?php echo $data['user']->email?>" />-->
				<input type="text" id="mail" name="mail" placeholder="E-mail" value="" />
				</div>
			</div>
			
			<div class="form-group " style="margin-top:20px;">			
				<div class="form-control inputTexto">
					<input type="text" id="telefono" name="telefono" 
					       placeholder="Teléfono" value="<?php echo $data['user']->telefono?>" maxlength="10" />
				</div>
			</div>
							
			
			<div class="form-group " style="margin-top: 19px;">			
				<div class="form-control inputTexto" >
					<input type="text" id="cedula" name="cedula" placeholder="Cédula" value="<?php echo $data['user']->cedula?>" maxlength="10" />
				</div>
			</div>

			<input type="hidden" name="user" id="user" value='<?php echo json_encode($data['user'])?>'>
			<input type="hidden" name="fb_page" id="fb_page" value='<?php echo json_encode($data['fb_page'])?>'>
			<div class="form-group" style="margin-top: -10px;">
				<input id="submit" name="submit" type="submit" value="" class="btn-sumbit" />
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
	<!-- bloque alerta registro -->
	  <div class="contenedorPop" id="alerta">
	  	<div class="sombra"></div>
	  	<div class="contenedorMensaje fondo-registros animated ">
		  	<table class="contenidoTabla2" >
		       <tr>
			       <td  class="tituloInstrucion">
			   			ALERTA
			       </td>		       
		       </tr>      
		       
		       <tr>
			       <td style="text-align: center;">
			      	Aún te faltan datos por agregar. <BR>¡No olvides llenarlos para que empiece tu aventura!
	       			</td>
		       </tr>
		       <tr>
			       <td >
			       <div style="text-align: center;padding-top: 10px;">Campo requerido:</div>
			       <div id="campos" style="text-align: center;"></div>
			      	
	       			</td>
		       </tr>   
		       <tr>
			       <td>
			       	<button type="button" class="cerrarInstrucciones" onclick="$('#alerta').hide();$('.fondo-registros').removeClass('bounceInUp');"></button>
			       </td>
			    </tr> 
			</table>	  	
	  	</div>
	  </div>
	 <script type="text/javascript">		
	var rules = [ 
				   { name: 'nombre', display: 'Nombre', rules: 'required'},
				   { name: 'apellido', display: 'Apellido', rules: 'required'},
	               { name: 'ciudad', display: 'Ciudad', rules: 'required'},
	               { name: 'cedula', display: 'Cédula', rules: 'required|numeric'},
	               { name: 'telefono', display: 'Teléfono', rules: 'required|min_length[7]|numeric'},
	               { name: 'mail', display: 'mail', rules: 'required|valid_email'}	               	               
	            ];    
	
	var validator = new FormValidator('register',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';	        
		        
		        //alert("Verifica que la información ingresada sea la correcta.")
		        
		        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
		        	$('#'+errors[i].id).val("");		        	
			        $('#'+errors[i].id).css({"color":"#42332a"});
			        errorString+=errors[i].message+"<br>"
		        };  
		        $('#campos').html(errorString);
		        $("#alerta").show();
				$('.fondo-registros').addClass('bounceInUp');
		    }else{
		    	enviarForma('register'); 		    			    	
			    }
		});

	
	
		function enviarForma(forma){						
		$.ajax({  
			  type: "POST",  
			  url: "<?php echo base_url('samsung_penales/register')?>",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {
				  if (response=="1"){					  
					$('#submit').hide();
				    $('#content').load("<?php echo base_url('samsung_penales/ingresoActividad/1')?>",{ 'user': JSON.stringify(LibraryFacebook.getUserFbData()) });
				  }
	    		} 
			}); 
		return false;
		};	 


		

		

		
		</script>
</div>	

	
<!-- https://www.facebook.com/dialog/pagetab?app_id=274414319389630&redirect_uri=https://www.facebook.com -->
















