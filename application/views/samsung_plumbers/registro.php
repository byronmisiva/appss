<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<style>
.formulario{ 	
    height: 400px;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}


.fondo{
	background-image: url('<?=$registro?>');	
	background-repeat: no-repeat;
    height: 364px;
    left: 140px;
    position: absolute;
    top: 150px;
    width: 549px;
}

.nombre{
 	left: 155px;
    position: inherit;
    top: 82px;
}

.apellido{
 	left: 155px;
    position: inherit;
    top: 118px;
}

.cedula{
	left: 155px;
    position: inherit;
    top: 151px;
}

.telefono{
	left: 155px;
    position: absolute;
    top: 258px;
}

.mail{
left: 155px;
    position: absolute;
    top: 188px;
}
.ciudad{
	left: 155px;
    position: absolute;
    top: 220px;
}

.pos-btn{
	left: 430px;
    position: inherit;
    top: 290px;
}

.btn-enviar{
	background-color: transparent; 
	border: none; cursor: pointer; 
	width: 163px; height:52px; 
	background-image: url('<?=$img_path?>bot_enviar_on.png?frefresh=321354'); 
	background-repeat: no-repeat;
}

input {
				background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
			    border: medium none;
			    color: #0F4396;			    
			    font-size: 14px;
			    font-weight: bold;
			    height: 25px;
			    padding-left: 5px;
			    width: 210px !important;
			    font-family: Asap;
			    font-weight:400;
			    font-style: normal; 
			}

</style>

<div class="fondo">
	<form id="forma_registro" class="formulario">
		<div class="nombre">
			<input  type="text" name="nombre" id="nombre" value="<?=$user->first_name?>" readonly="readonly">			
		</div>
		<div class="apellido">
			<input  type="text" name="apellido" id="apellido" value="<?=$user->last_name?>" readonly="readonly">			
		</div>					 
		<div class="cedula">
			<input type="text" name="cedula" id="cedula" maxlength="10" >			
		</div>		 
		<div class="mail">
			<input type="text" name="mail" id="mail" value="<?=$user->email?>" readonly="readonly">			
		</div>
		<div class="ciudad">
			<input type="text" name="ciudad" id="ciudad">								
		</div>
		<div class="telefono">
			<input type="text" name="telefono" id="telefono" maxlength="10">			
		</div>	
		<input type="hidden" name="fbid" id= "fbid"  value="<?=$user->id?>">	
		<div class="pos-btn">
			<input class="btn-enviar" type="submit" name="submit" id="submit" value=" ">								
		</div>								
	</form>
</div>

<script type="text/javascript">	
	var rules = [ 
				 { name: 'nombre', display: 'nombre', rules: 'required'},
	             { name: 'ciudad', display: 'ciudad', rules: 'required'},	               
	             { name: 'cedula', display: 'cedula', rules: 'required|numeric|max_length[10]'},	               	               
	             { name: 'telefono', display: 'telefono', rules: 'required|min_length[7]'},	               
	             { name: 'mail', display: 'mail', rules: 'required|valid_email'}	               
	          ];    
	
	var validator = new FormValidator('forma_registro',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';
		        alert("Verifica que la información ingresada sea la correcta.");  
		    }else
		    	enviarForma('<?=base_url()?>','forma_registro'); 	    			    	
			    
		});
	
		function enviarForma(accion,forma){
		$.ajax({  
			  type: "POST",  
			  url: accion+"samsung_plumbers/vista_registro",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {
				 				  
				  $( '#content' ).load( "<?=base_url()?>samsung_plumbers/liker", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) }  );
	  		} 
			}); 
		return false;
		};	 



</script> 

