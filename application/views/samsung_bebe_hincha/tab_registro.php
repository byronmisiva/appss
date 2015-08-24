<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<div style="position:absolute;width:100%;height:100%;border:1px solid red;">
	<img src="<?=$img_fondo?>"/>
	<div id="forma" style="position:absolute;width:249px;height:143px;left:120px;top:272px;border:1px solid green;">
		<form id="formaRegistros" name="formaRegistros" action="<?=base_url()?>movi_musical/vista_registro" method="post">									
			<div style="float:left;width:100%;height:20px;margin-top:0px;">				
				<input type="text" id="completo" name="completo" class="input" value="<?=$user->name?>"  readonly="readonly"/>
			</div>						
			<div style="float:left;width:100%;height:20px;margin-top:10px;">
				<input type="text" id="mail" name="mail" value="<?=$user->email?>" readonly="readonly" class="input" />
			</div>											
			<div style="float:left;width:100%;height:20px;margin-top:10px;">
				<input type="text" id="ciudad" name="ciudad" value="<?=$ciudad ?>" class="input" onclick="limpiar(this.id);"  onblur="checkData(this.id);" />
			</div>		
						
			<div style="float:left;width:100%;height:20px;margin-top:10px;">
				<input type="text" id="telefono" name="telefono" value="<?=$telefono ?>" maxlength="10" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" />
			</div>
									
			<div style="float:left;width:100%;height:20px;margin-top:10px;">
				<input type="text" id="cedula" name="cedula" value="<?=$cedula?>" class="input" onclick="limpiar(this.id);" onblur="checkData(this.id);" />
				
			</div>				
										
			<div style="position:absolute;width:80px;height:56px;top:0px;left:460px;border:1px solid red;">
				<input type="submit"  value="" style="cursor:pointer;background-image: url('<?=$enviar?>');background-repeat: no-repeat;background-color:transparent;border:none;width:67px;height:31px;"/>
			</div>
			<input type="hidden" id="nombre" name="nombre"  value="<?=$user->first_name?>"  />
			<input type="hidden" id="apellido" name="apellido" value="<?=$user->last_name?>" />
			<input type="hidden" id="fbid" name="fbid" value="<?=$user->id?>" />
			<input type="hidden" id="id_page" name="id_page" value="<?=$pageid?>" />
						
			<div id="errores" style="float:left;width:100%;height:20px;"></div>
		</form>
	</div>
	
</div>

<script type="text/javascript">
var col_error="#5FBA41";
var con_natural="#000000";
function mostrarPop(cam){
	if (cam==1)
		$('#pop').show();
	else
		$('#pop').hide();
};

	var rules = [ 
				   { name: 'completo', display: 'completo', rules: 'required|callback_completo'},
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
		        	$('#'+errors[i].id).val("*");
			        $('#'+errors[i].id).css({"color":"#5FBA41"});
		        }
		    }else{
		   		enviarForma('formaRegistros');  
			 }  
	});

	validator.registerCallback('ciudad', function(value) {		
	    if (value=="Ej: Quito")
		    $('#city').css({"color":col_error});
	});

	validator.registerCallback('completo', function(value) {		
	    if (value=="Ej: José Perez")
		    $('#name').css({"color":col_error});
	});

	validator.registerCallback('cedula', function(value) {		
	    if (value=="Ej: 1720254478")
		    $('#cedula').css({"color":col_error});
	});

	validator.registerCallback('mail', function(value) {		
	    if (value=="Ej: nombre@dominio.com")
		    $('#mail').css({"color":col_error});
	});

	function enviarForma(forma){
		$.ajax({  
			  type: "POST",  
			  url: url2+"samsung_bebe_hincha/tab_registro",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {
				  	$( '#content' ).load( url2+"samsung_bebe_hincha/liker", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) });				 
			  }
			}); 
		return false;
};	

function limpiar(id){	
	var nombre="";
	switch(id){		
		case 'ciudad':
			  nombre="Ej: Quito";
			  break;
			  
		case 'telefono':			   
			  nombre="Ej: 0993000547";
			  break;	  
		case 'completo':
			  nombre="Ej: José Perez";
			  break;	  
		case 'mail':
			  nombre="Ej: nombre@dominio.com";
			  break;	  
		case 'cedula':
			  nombre="Ej: 1720254478";
			  break;	  
	}
	
	if ($("#"+id).val()==nombre){
		$("#"+id).val("");
		$("#"+id).css({color:con_natural})
	}
};

function checkData(id){
	var nombre="";
	switch(id){		
		case 'ciudad':
			  nombre="Ej: Quito";
			  break;
		case 'telefono':
			  nombre="Ej: 0993000547";
			  break;	  
		case 'completo':
			  nombre="Ej: José Perez";
			  break;	  
		case 'mail':
			  nombre="Ej: nombre@dominio.com";
			  break;	  
		case 'cedula':
			  nombre="Ej: 1720254478";
			  break;	  
	}
		
	if( $("#"+id).val()=="" || $("#"+id).val()==nombre || $("#"+id).val()==""){
		$("#"+id).val(nombre);
		$("#"+id).css({color:"#676867"})
	}
};	


	checkData('telefono');	
	checkData('completo');
	checkData('cedula');
	checkData('ciudad');
	checkData('mail');
	
	</script>