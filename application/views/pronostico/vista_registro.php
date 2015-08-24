<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/partido/app.css?fb_refresh=<?=rand ( 1 , 100 )?>" />
<div id="content" style="position:absolute;width:810px;height:758px;left:0px;top:0px;overflow: hidden;margin: 0px; padding: 0px;" onmousemove="$('#alerta').hide();">
	<img src="<?=$img_fondo?>" />	
		<div style='position:absolute;left:0px;top:0px;width:100%;height:100%;left:0px;top:0px;'>
			<img src="<?=$img_registro?>" />
			<div style="position:absolute;left:0px;top:0px;width:284px;height:327px;left:352px;top:260px;">
				<form id="registro_datos" name="registro_datos" action="<?=base_url()?>pronostico/vista_registro" method="post">
					<table>
						<tr>
							<td>
								<input type="text" value="<?=$user->first_name?>" id="first_name" name="nombre" readonly="readonly"/>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" value="<?=$user->last_name?>" id="last_name" name="apellido" readonly="readonly"/>
							</td>
						</tr>
						<tr>
							<td><input type="text" value="Cédula" id="Cedula" name="cedula" maxlength="10" onfocus="limpiar(this.id);" onclick="limpiar(this.id);" onblur="checkData(this.id);" onkeyup="verificarDato(this.id);"/></td>
						</tr>
						<tr>						
							<td>
								<input type="text" value="<?=$user->email?>" id="email" name="mail" readonly="readonly" />
							</td>
						</tr>
						<tr>
							<td><input type="text" value="Ciudad" id="Ciudad" name="ciudad" onfocus="limpiar(this.id);" onclick="limpiar(this.id);" onblur="checkData(this.id);" /></td>
						</tr>
						<tr>
							<td><input type="text" value="Teléfono" id="Telefono" name="telefono" maxlength="10" onfocus="limpiar(this.id);" onclick="limpiar(this.id);" onblur="checkData(this.id);" onkeyup="verificarDato(this.id);"/></td>
						</tr>
					</table>
					<input  type="hidden" name="id" id="id" value="<?php if(isset($user_db->id))echo $user_db->id ?>" >
					<input  type="hidden" name="fb_page" id="fb_page" value="<?=$fb_page->page->id?>" >
					<input  type="hidden" name="fbid" id="fbid" value="<?=$user->id?>" >	
			 </form>
		</div>				
		<div style="position:absolute;left:420px;top:475px;cursor:pointer;width:200px;height:120px;" 
			 onmouseout="$('#des').hide();$('#act').show();" onmouseover="$('#des').show();$('#act').hide();"
			 onclick="validar('registro_datos');">
				<div id='act' style="float:left;cursor:pointer;" >
					<img src="<?=$img_path.'botsin.png'?>" />
				</div>
				<div id='des'style="float:left;display:none;cursor:pointer;"  >
					<img src="<?=$img_path.'botcon.png'?>" />
				</div>	
		</div>	
	</div>
	
		<div id ="alerta" style="position: fixed;left:0px;top:42%;width:100%;height:70px;display:none;">
			<div style="margin:0% auto;width:576px;">
				<img src="<?=$img_path.'asegurate.png'?>" />
			</div>
		</div>
</div>
	
<script type='text/javascript'>
	function verificarDato(id) {		
		 if (isNaN($('#'+id).val()))
		 	$('#'+id).val(id);
	}
	
	
	function limpiar(id){		
		$("#"+id).val("");	
	}
	
	function checkData(id){
		if( $("#"+id).val()=="")
			$("#"+id).val(id);
	}


	function validar(forma){
		var check=0;				
		var error_color='#2F4E99';
		if($("#Cedula").val() == "" || $("#Cedula").val() == "Cedula" ||  $("#Cedula").val() == "Cédula" ){
        	$("#Cedula").css('color',error_color);
            check++;         
        }		
		 if( $("#Ciudad").val() == "" || $("#Ciudad").val() == "Ciudad"){
	        	$("#Ciudad").css('color',error_color);
	            check++;	     
	       }
		 if( $("#Telefono").val() == "" || $("#Telefono").val() == "Telefono" ||  $("#Telefono").val() == "Teléfono" ){
	        	$("#Telefono").css('color',error_color);
	            check++;
	       } 
	        
		if (check==0){			
			$.ajax({  
				  type: "POST",  
				  url: "<?=base_url().'pronostico/vista_registro'?>",  
				  data: $('#'+forma).serialize(),
				  success: function( response ) {			    					
					  $( '#content' ).load( "<?=base_url()?>pronostico/liker", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) }  );		
		    		} 
				}); 
			return false;
			}
		else{
			$('#alerta').show();
			}
		}
	

</script>
