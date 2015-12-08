$(document).ready(function(){	
	$(".btn-acepta").click(function(){		
		verificarGame(accion,idParticipante);
	});
	$(".btn-instruciones").click(function(){
			ejecucionIntrucciones();			
	});			

	$(".btn-compartir").click(function(){		
		var obj = {  
				  method: 'feed',
			      link: 'https://apps.facebook.com/samsung_trineosanta',
			      picture: 'https://appss.misiva.com.ec/imagenes/samsung_flappy_santa/iconos/190X190.png',
			      name: '¡Conduce El Trineo de Santa! ',
			      caption: '¡Conduce El Trineo de Santa! ',
			      description:'Ingresa aquí y ayuda a Santa a repartir regalos a '+
			    	          'través de las chimeneas de la ciudad. ¡Demuestra tus habilidades y participa por unos audífonos Samsung Level Over!'
			     };
			
			     function callback(response) {
			    	 if (response != undefined){
				  			$.ajax({				  				  
				  			  type: "GET",  
				  			  url: accion+controladorApp+"/sumarCompartida/"+idParticipante,
				  			  success: function(valor) {
					  				$(".fin-actividad").fadeOut(function(){
					  					$( ".cierre-actividad").fadeIn();
					  				});
				  				}
				  			  });			  			
						 }
			     }
			     FB.ui(obj, callback);	
	});
	
	$(".btn-invitar").click(function(){
		$.ajax({  
			  type: "POST",  
			  url: accion+controladorApp+"/verificarAmigo/"+idParticipante,		  
			  success: function( respuesta ) {
				ids=$.parseJSON(respuesta);			
				var obj = {
					method:'apprequests',
					title: '¡Conduce El Trineo de Santa!',
					message:'He ayudado a Santa a repartir regalos y quiero que tú también lo intentes.',
					exclude_ids:respuesta
				  };
					function callback(response) {						
						if (response!= undefined){
				  			$.ajax({				  				  
				  			  type: "GET",  
				  			  url: accion+controladorApp+"/registrarAmigos/"+idParticipante,
				  			  dataType:'json',
				  			  data: {"data": JSON.stringify(response.to)},
				  			  success: function(valor) {
				  				
				  				
				  				}
				  			  });
				  			$(".fin-actividad").fadeOut(function(){
			  					$( ".cierre-actividad").fadeIn();
			  				});
						 }						
					}	
					 FB.ui(obj, callback);				 
			  }
		}); 
			 
	});
	
	$(".btn-jugar").click(function(){
			$(".fin-actividad").fadeOut(function(){
				$( ".actividad").fadeIn();
				$( ".actividad").load(accion+controladorApp+"/game",function() {main();} );
				
			});		
	});
	
	$(".btn-ranking").click(function(){
		$( ".actividad-ranking").load(accion+controladorApp+"/getRanking/"+idParticipante);		
		$(".contendor-actividad").fadeOut(function(){
			$( ".actividad-ranking").fadeIn();
		});		
	});
	
	$(".btn-cerrar").click(function(){
		/*$(window).attr('location', 'https://www.facebook.com/samsungmobilecuador');*/		
		if ( screen.width < 600){
			$(window).attr('location', 'https://www.facebook.com/samsungmobilecuador');
		}else{
			$('#content').load(accion+controladorApp+"/liker/",{ 'user': JSON.stringify(LibraryFacebook.getUserFbData()) });
		}
	});
		
		
		
});














