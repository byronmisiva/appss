<?php  
	if ( (int)$compartidos%5 == 0 ) 
 		$compartido="5";
 	else
	 $compartido=5-(int)$compartidos%5; 
 	?>
<div class="fondoInvitar">
	<div class="textoCompartir">
    Invita a <span id ="contador" style="font-weight: bold;"> <?=$compartido?> </span>
	amigos para que ellos tambi&eacute;n conozc&aacute;n cu&aacute;l es su personalidad S5.
	</div>
	<div class="btn-compartir" onclick="compartir('<?=$id_user?>');"></div>
</div>
<script>
function compartir(id){	
	var obj = {
	  method:'apprequests',
	  title: 'Descubre tu personalidad S5',
	  message: 'Responde las preguntas y conoce cuál es tu personalidad S5.'
  };
	function callback(response) {
	if (response != undefined){
			$.ajax({				  				  
			  type: "POST",  
			  url: accion+"samsung_lanzamiento/registrarInvitados/"+id,			  
			  data: {"data": JSON.stringify(response.to)},
			  complete: function(valor){			  
				  var nuevo =valor.responseText
				  var n=nuevo.split("-");
				  if (n[0]=="C"){
					  $('#content').load(accion + "samsung_lanzamiento/agradecimiento", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
						
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
};	
</script>
