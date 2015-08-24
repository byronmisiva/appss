<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<div style="position:absolute;width:810px;height:870px;left:0px;top:0px;">
		<div style="position:absolute;left:125px;top:254px;">
			<img src="<?=$img_fondo?>" />		
		</div>
				
	<div id="cargaForma" style="position:absolute;left:250px;top:460px;width:400px;height:330px;">		
			<div id="forma" style="position:absolute;left:0px;top:45px;font-family: Helvetica;font-size: 14px;color:#000000;">
				<div style="position:absolute;left:20px;top:0px;width:230px;height: 100%;">
					<form id="formaRegistros" name="formaRegistros"  method="POST" action="<?=base_url().'movi_eliminatorias/vista_registro/'?>">									
						<div style="float:left;width:100%;height:30px;margin-top:2px;">
							<input type="text" id="completo" name="completo" readonly="readonly" class="input" value="<?=$user->name?>"  class="input" />
						</div>				
								
						<div style="float:left;width:100%;height:30px;margin-top:13px;">
							<input type="text" id="cedula" name="cedula" value="<?=$cedula?>" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" class="input" />
						</div>		
						
						<div style="float:left;width:100%;height:30px;margin-top:17px;">
							<input type="text" id="mail" name="mail" value="<?=$user->email?>" readonly="readonly" class="input" />							
						</div>
											
						<div style="float:left;width:100%;height:30px;margin-top:17px;">
							<input type="text" id="ciudad" name="ciudad" value="<?=$ciudad ?>" class="input" onclick="limpiar(this.id);"  onblur="checkData(this.id);" class="input" />
						</div>	
										
						<div style="float:left;width:100%;height:30px;margin-top:17px;">
							<input type="text" id="telefono" name="telefono" value="<?=$telefono ?>" maxlength="10" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" class="input" />
						</div>				
										
						<div style="float:left;width:50%;height:30px;margin-top:30px;margin-left:200px;">
							 <input type="submit" id="enviar" value="" style="cursor:pointer;background-image:url('<?=$enviar2?>');background-repeat: no-repeat;background-color:transparent;border:none;width:150px;height:31px;"/>
						</div>
					<input type="hidden" id="nombre" name="nombre"  value="<?=$user->first_name?>"/>
					<input type="hidden" id="apellido" name="apellido" value="<?=$user->last_name?>" />
					<input type="hidden" id="fbid" name="fbid" value="<?=$user->id?>" />
					<input type="hidden" id="id_page" name="id_page" value="<?=$pageid?>" />
						
						<div id="errores" style="float:left;width:100%;height:20px;"></div>
					</form>
				</div>
			</div>
		</div>
</div>

<script type="text/javascript">	
	checkData('ciudad');
	checkData('cedula');
	checkData('telefono');	
	var rules = [ 
				   { name: 'completo', display: 'completo', rules: 'required'},
	               { name: 'nombre', display: 'nombre', rules: 'required'},
	               { name: 'apellido', display: 'apellido', rules: 'required'},
	              
	               { name: 'telefono', display: 'telefono', rules: 'required|numeric|max_length[10]'},
	               { name: 'cedula', display: 'cedula', rules: 'required|numeric|max_length[15]|callback_cedula'},
	               { name: 'ciudad', display: 'ciudad', rules: "required|callback_ciudad"},	              
	               { name: 'mail', display: 'mail', rules: 'required|valid_email|callback_mail'}
	            ];   
	var validator = new FormValidator('formaRegistros',rules, function(errors, event) {				
		 if (errors.length > 0) {			
		        var errorString = '';		        
		        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {		        		        		        	
			        $('#'+errors[i].id).css({"color":"#35570E"});
		        }		        
		    }else{
		    	$('#enviar').hide();	
		    	$.ajax({  
					  type: "POST",  
					  url:"<?=base_url().'samsung_futbol_time/vista_registro/'?>",  
					  data: $('#formaRegistros').serialize(),
					  success: function( response ) {						
						  if (response="1")
						  	$( "#content" ).load("<?=base_url().'samsung_futbol_time/liker'?>", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) });				 
					  }
					});     
			 }  
	});

	validator.registerCallback('ciudad', function(value) {		
	    if (value=="Ej: Quito")
		    $('#ciudad').css({"color":"#35570E"});
	});

	validator.registerCallback('cedula', function(value) {		
	    if (value=="Ej: 1720254478")
		    $('#cedula').css({"color":"#35570E"});
	});

	validator.registerCallback('mail', function(value) {		
	    if (value=="Ej: nombre@dominio.com")
		    $('#mail').css({"color":"#35570E"});
	});

	function enviarForma(forma){
		
		return false;
};	