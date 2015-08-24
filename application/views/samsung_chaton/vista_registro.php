<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<div style="position:absolute;width:810px;height:870px;left:0px;top:0px;">
		<div style="position:absolute;left:0px;top:0px;">
			<img src="<?=$img_fondo?>" />		
		</div>				
	<div id="cargaForma" style="position:absolute;left:360px;top:270px;width:400px;height:330px;">		
			<div id="forma" style="position:absolute;left:0px;top:45px;font-family: Helvetica;font-size: 14px;color:#ffffff;">
				<div style="position:absolute;left:10px;top:0px;width:230px;height: 100%;">
					<form id="formaRegistros" name="formaRegistros"  method="POST" action="<?=base_url().'movi_eliminatorias/vista_registro/'?>">									
						<div style="float:left;width:100%;height:30px;margin-top:7px;">
							<input type="text" id="nombre" name="nombre" readonly="readonly" class="input" value="<?=$user->first_name?>"  class="input" />
						</div>
						
						<div style="float:left;width:100%;height:30px;margin-top:28px;">
							<input type="text" id="apellido" name="apellido" readonly="readonly" class="input" value="<?=$user->last_name?>"  class="input" />
						</div>				
								
						<div style="float:left;width:100%;height:30px;margin-top:25px;">
							<input type="text" id="ciudad" name="ciudad" value="<?=$ciudad ?>" class="input" onclick="limpiar(this.id);"  onblur="checkData(this.id);" class="input" />
						</div>		
						
						<div style="float:left;width:100%;height:30px;margin-top:25px;">
							<input type="text" id="mail" name="mail" value="<?=$user->email?>" readonly="readonly" class="input" />							
													
						</div>
											
						<div style="float:left;width:100%;height:30px;margin-top:25px;">							
							<input type="text" id="telefono" name="telefono" value="<?=$telefono ?>" maxlength="10" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" class="input" />							
						</div>	
										
						<div style="float:left;width:100%;height:30px;margin-top:25px;">
							<input type="text" id="cedula" name="cedula" value="<?=$cedula?>" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" class="input" />
						</div>				
										
						<div style="float:left;width:50%;height:30px;margin-top:80px;margin-left:-450px;">
							 <input type="submit" id="enviar" value="" style="cursor:pointer;background-image:url('<?=$enviar1?>');background-repeat: no-repeat;background-color:transparent;border:none;width:208px;height:110px;"/>
						</div>
						
						<div style="float:left;width:100%;height:30px;margin-left:4px;margin-top:14px;">
							<input id="demo_box_1" class="css-checkbox" type="checkbox" checked="checked" />
						</div>
					<input type="hidden" id="completo" name="completo"  value="<?=$user->name?>"/>
					
					<input type="hidden" id="fbid" name="fbid" value="<?=$user->id?>" />
					<input type="hidden" id="id_page" name="id_page" value="<?=$pageid?>" />
						
						<div id="errores" style="float:left;width:100%;height:20px;"></div>
					</form>
				</div>
			</div>
		</div>
</div>

<script type="text/javascript">		
	var rules = [ 
				   { name: 'completo', display: 'completo', rules: 'required'},
	               { name: 'nombre', display: 'nombre', rules: 'required'},
	               { name: 'apellido', display: 'apellido', rules: 'required'},	              
	               { name: 'telefono', display: 'telefono', rules: 'required|numeric|min_length[10]'},
	               { name: 'cedula', display: 'cedula', rules: 'required|numeric|max_length[15]|callback_cedula'},
	               { name: 'ciudad', display: 'ciudad', rules: "required|callback_ciudad"},
	               { name: 'demo_box_1', display: 'demo_box_1', rules: "required"},	               
	               { name: 'mail', display: 'mail', rules: 'required|valid_email|callback_mail'}
	            ];   
	var validator = new FormValidator('formaRegistros',rules, function(errors, event) {				
		 if (errors.length > 0) {			
		        var errorString = '';		        
		        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {		        		        		        	
			        $('#'+errors[i].id).css({"color":"#FF6400"});
			        alert("Ingresa todos los campos y acepta los términos y condiciones");
		        }		        
		    }else{
		    	$('#enviar').hide();	
		    	$.ajax({  
					  type: "POST",  
					  url:"<?=base_url().'samsung_chaton/vista_registro/'?>",  
					  data: $('#formaRegistros').serialize(),
					  success: function( response ) {						
						  if (response="1")
						  	$( "#content" ).load("<?=base_url().'samsung_chaton/liker'?>", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) });				 
					  }
					});    
			 }  
	});

	validator.registerCallback('ciudad', function(value) {		
	    if (value=="Ej: Quito")
		    $('#ciudad').css({"color":"#FF6400"});
	});

	validator.registerCallback('cedula', function(value) {		
	    if (value=="Ej: 1720254478")
		    $('#cedula').css({"color":"#FF6400"});
	});

	validator.registerCallback('mail', function(value) {		
	    if (value=="Ej: nombre@dominio.com")
		    $('#mail').css({"color":"#FF6400"});
	});

	checkData('ciudad');
	checkData('cedula');
	checkData('telefono');	