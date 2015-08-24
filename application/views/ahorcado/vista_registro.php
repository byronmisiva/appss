<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<div style="position:absolute;width:810px;height:870px;left:0px;top:0px;">
		<div style="position:absolute;left:0;top:0;">
			<img src="<?=$img_fondo?>" />		
		</div>				
	<div id="cargaForma" style="position:absolute;left:160px;top:213px;width:500px;height:330px;">
			<div id="forma" style="position:absolute;left:0;top:45px;font-size: 16px;">
				<div style="position:absolute;left:0;top:0;width:230px;height: 100%;">
					<form id="formaRegistros" name="formaRegistros"  method="POST" action="<?=base_url().'movi_eliminatorias/vista_registro/'?>">									
						<div style="float:left;width:100%;height:30px;margin-top:2px;margin-left:30px;padding-left:20px;">
							<input type="text" id="completo" name="completo" readonly="readonly" class="input" value="<?=$user->name?>"    />
						</div>		
						<div style="float:left;width:100%;height:30px;margin-top:17px;margin-left:30px;padding-left:20px;">
							<input type="text" id="ciudad" name="ciudad" value="<?=$ciudad ?>" class="input" onclick="limpiar(this.id);"  onblur="checkData(this.id);"   />						</div>	
						<div style="float:left;width:100%;height:30px;margin-top:20px;margin-left:30px;padding-left:20px;">
							<input type="text" id="mail" name="mail" value="<?=$user->email?>" readonly="readonly" class="input" />							
						</div>			
						<div style="float:left;width:100%;height:30px;margin-top:19px;margin-left:30px;padding-left:20px;">
							<input type="text" id="telefono" name="telefono" value="<?=$telefono ?>" maxlength="10" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" class="input" />							
						</div>		
						<div style="float:left;width:100%;height:30px;margin-top:21px;margin-left:30px;padding-left:20px;">
							<input type="text" id="cedula" name="cedula" value="<?=$cedula?>" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" class="input" />
						</div>		
						
						<div style="position:absolute;width:70%;height:75px;margin-top:275px;margin-left:410px;cursor:pointer;">
							 <input type="submit" id="envio" value="" style="background-image:url('<?=$boton1?>');"  />
						</div>
						
					<input type="hidden" id="nombre" name="nombre"  value="<?=$user->first_name?>"/>
					<input type="hidden" id="apellido" name="apellido" value="<?=$user->last_name?>" />
					<input type="hidden" id="fbid" name="fbid" value="<?=$user->id?>" />
					<input type="hidden" id="id_page" name="id_page" value="<?=$pageid?>" />					
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
			        $('#'+errors[i].id).css("color","#000000");
			        alert("Ingresa todos los campos");
		        }		        
		    }else{
		    	$('#envio').hide();	
		    	$.ajax({  
					  type: "POST",  
					  url:"<?=base_url().'samsung_ahorcado/vista_registro/'?>",
					  data: $('#formaRegistros').serialize(),
					  success: function( response ) {					  					
						  if (response=="1"){
							  function callback( response ) {								   
								}
								        
/*								  var obj = {  
								      method: '/me/feed',
								      link: 'https://apps.facebook.com/samsung_ahorcado',
								      picture: 'https://appss.misiva.com.ec/imagenes/ahorcado/75x75.jpg',
								      name: 'El Ahorcado con CHATO',
								      caption: 'Gana automáticamente una increíble Galaxy Tab2 de 7 pulgadas.',
								      description:  LibraryFacebook.getUserFbData().name +'está jugando El Ahorcado con CHATO.',                
								      ref: ''
								    };*/

								  FB.api('/me/feed', 'post', 
									{ message:'Estoy jugando El Ahorcado con CHATO para poder ganarme una increíble Galaxy Tab2 de 7”', 
									  link:'https://apps.facebook.com/samsung_ahorcado', 
									  picture:"https://appss.misiva.com.ec/imagenes/ahorcado/75x75.jpg",
									  name: 'El Ahorcado con CHATO', 
									  description: LibraryFacebook.getUserFbData().name +' '+' está jugando El Ahorcado con CHATO.' },
									  function(data) {});								  								    
								    /*FB.ui( obj, callback );*/							  
						  	$( "#content" ).load("<?=base_url().'samsung_ahorcado/vista_completo'?>", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) });
						  }
						  
					  }
					});     
			 }  
	});

	validator.registerCallback('ciudad', function(value) {		
	    if (value=="Ej: Quito")
		    $('#ciudad').css({"color":"#000000"});
	});

	validator.registerCallback('cedula', function(value) {		
	    if (value=="Ej: 1720254478")
		    $('#cedula').css({"color":"#000000"});
	});

	validator.registerCallback('mail', function(value) {		
	    if (value=="Ej: nombre@dominio.com")
		    $('#mail').css({"color":"#000000"});
	});
</script>
	