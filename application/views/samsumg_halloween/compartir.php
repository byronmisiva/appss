<?php  
	if ( (int)$compartido%5 == 0 ) 
 		$compartido="5";
 	else
	 $compartido=5-(int)$compartido%5; 
 	?>
 <link href="//fonts.googleapis.com/css?family=Kalam:300,400,700" rel="stylesheet" type="text/css">
 <style>
 
 #puntaje{
   font-family: Kalam;
    font-size: 22px;
    font-style: italic;
    font-weight: bold;
    height: 35px;
    left: 477px;
    position: absolute;
    text-align: right;
    top: 340px;
    color: #031F5A;
 }
 
 #contador{
 font-family: Kalam;
 font-size: 22px;font-style: italic;font-weight: bold;height: 35px;left: 409px; position: absolute;
    top: 374px;font-family:Kalam;width: 19px;
    color: #031F5A;
 }
 </style>	
<div class="fondoInvitar">
	<div class="textoCompartir">	
		<span id ="contador" > <?=$compartido?> </span>
		<span id ="puntaje" > <?=$puntos?> </span>
	</div>
	<div class="btn-compartir" onclick="compartirInvitado('<?=$id_user?>');"></div>
</div>

<script type="text/javascript">
	/*function compartirInvitado(id){	
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
	};*/
	
	
 function compartirInvitado(id){	
	var obj = {
	  method:'apprequests',
	  title: '¡Descubre la velocidad del Samsung GALAXY S5 LTE!',
	  message: 'Ingresa aquí y participa por un GALAXY Note 8.0”. Pon a prueba la velocidad del Samsung GALAXY S5 LTE, consigue la mayor cantidad de puntos y forma parte del sorteo. '
  };
	function callback(response) {
	if (response != undefined){
			$.ajax({				  				  
			  type: "POST",  
			  url: accion+"pronostico/registrarInvitados/"+id,			  
			  data: {"data": JSON.stringify(response.to)},
			  complete: function(valor){			  
				  var nuevo =valor.responseText;
				  var n=nuevo.split("-");
				  if (n[0]=="C"){
					  $('#content').load(accion + "pronostico/agradecimiento", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });						
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

/*
 * No te pierdas ni un solo detalle de todo lo que pasa en el fútbol de Ecuador y los más destacados acontecimientos a nivel internacional.
 */

//compartirInvitado('<?=$id_user?>');

</script>
















