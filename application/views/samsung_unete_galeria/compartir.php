<?php  
	if ( (int)$compartidos%5 == 0 ) 
 		$compartido="5";
 	else
	 $compartido=5-(int)$compartidos%5; 
 	?>
<div class="fondoInvitar">
	<div class="textoCompartir">
		<div style="font-size:21px ;">Comparte para participar.</div>
		Para activar tu registro debes invitar a <span id ="contador" style="font-weight: bold;"> <?=$compartido?> </span> amigos y así, 
		formarás parte del sorteo de una <span style="font-weight: bold;">refrigeradora o una lavadora </span>Samsung.
	</div>
	<div class="btn-compartir" onclick="compartir('<?=$id_user?>');"></div>
</div>

<script type="text/javascript">
	function compartir(id){	
		var obj = {
		  method:'apprequests',
		  title: 'Mamá doblemente única',
		  message: 'Participa por una refrigeradora o una lavadora Samsung y dale el regalo perfecto a mamá. Sube una foto de tu mamá y cuéntanos, en dos palabras, por qué ella es única.'
	  };
		function callback(response) {
		if (response != undefined){
		}
		}
		FB.ui(obj, callback);
	};
/*
 function compartir(id){	
	var obj = {
	  method:'apprequests',
	  title: 'Mamá doblemente única',
	  message: 'Participa por una refrigeradora o una lavadora Samsung y dale el regalo perfecto a mamá. Sube una foto de tu mamá y cuéntanos, en dos palabras, por qué ella es única.'
  };
	function callback(response) {
	if (response != undefined){
			$.ajax({				  				  
			  type: "POST",  
			  url: accion+"samsung_doble_mama/registrarInvitados/"+id,			  
			  data: {"data": JSON.stringify(response.to)},
			  complete: function(valor){			  
				  var nuevo =valor.responseText;
				  var n=nuevo.split("-");
				  if (n[0]=="C"){
					  $('#content').load(accion + "samsung_doble_mama/agradecimiento", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });						
					 }
				  else{
					  var valContador=5-n[1];
					  $('#contador').html("");
					  $('#contador').html(valContador);					  }	
			  }
		 	  });	  					  			
		}			  		
	}	
 FB.ui(obj, callback);
};	*/

</script>