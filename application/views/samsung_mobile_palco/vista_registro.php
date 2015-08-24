
<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<style type="text/css">
		input {
			margin: 0;
			padding: 0;
			border: none;
			height: 35px;			
			padding-left: 10px;
			width: 200px;
			background-color: transparent;
			color: white;
			line-height: 35px;
		}
		</style>
<form id="palco_mobile_registro" name="palco_mobile_registro" action="<?=base_url()?>welcome/vista_registro" method="post">
	<div style='position: absolute; width: 787px; height: 399px; overflow: hidden; background-image: url("<?=$palco?>"); background-repeat: no-repeat; top: 300px; left: 10px;'>
		<div style="position: absolute; top: 105px; left: 280px;">
			<input  type="text" name="completo" id="completo" value="<?=$user->name?>" readonly="readonly">			
		</div>		
		<div style="position: absolute; top: 158px; left: 280px;">
			<input style="color: #777777;" type="text" name="ciudad" id="ciudad">								
		</div>	
		<div style="position: absolute; top: 207px; left: 280px;">
			<input type="text" name="mail" id="mail" value="<?=$user->email?>" readonly="readonly">			
		</div>	
		<div style="position: absolute; top: 260px; left: 280px;">
			<input style="color: #777777;" type="text" name="telefono" id="telefono" maxlength="10">			
		</div>	 
		<div style="position: absolute; top: 311px; left: 280px;">
			<input style="color: #777777;" type="text" name="cedula" id="cedula" maxlength="10" >			
		</div>		
	</div>
	<div style='position: absolute; width: 169px; height: 85px; overflow: hidden; top: 750px; left: 320px;'>
		<input style="background-color: transparent; border: none; cursor: pointer; width: 169px; height: 85px; background-image: url('<?=$info?>');" type="submit" name="submit" id="submit" value=" ">
	</div>
	<input  type="hidden" name="id" id="id" value="<?=$user_db->id?>" >
	<input  type="hidden" name="fb_page" id="fb_page" value="<?=$fb_page->page->id?>" >
	<input  type="hidden" name="fbid" id="fbid" value="<?=$user->id?>" >	
</form>
<div style='position: absolute; width: 92px; height: 227px; overflow: hidden; background-image: url("<?=$celu?>"); background-repeat: no-repeat; top: 740px; left: 620px;'></div>
<script type='text/javascript'>
	$(document).ready(function () {
		var rules = [ 
		              { name: 'telefono', display: 'required', rules: 'required|numeric|min_length[10]'}, 
		              { name: 'cedula', display: 'required', rules: 'required|numeric|min_length[10]'},
		              { name: 'ciudad', display: 'required', rules: 'required'},
		              { name: 'completo', display: 'required', rules: 'required'},			              
		              { name: 'mail', display: 'required', rules: 'required'}
		            ];
		
		var validator = new FormValidator('palco_mobile_registro',rules, function(errors, event) {					
			for (var i = 0 , rulesLength = rules.length; i < rulesLength; i++) {		
		        $('#'+rules[i].name).css( { 'background-color': 'transparent', 'color': 'white' } );
		    }
		    if ( errors.length > 0 ) {        
		        for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
		            $('#'+errors[i].id).css( { 'color': 'red' } );
		        }
		    }
		    else{		    	    	
		    	$.ajax({					
		    		type: "POST",
		    		url: "<?=base_url()?>welcome/vista_registro",
		    		data: $('#palco_mobile_registro').serialize(),
		    		success: function( response ) {			    					
			    		$( '#content' ).load( "<?=base_url()?>welcome/liker", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) }  );		
		    		}
				});	
		    }  
		});		
	});
</script>
