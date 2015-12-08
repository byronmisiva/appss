	var pantallaActividad;
	var estado=0;	
	function verificarGame(accion,participante){
		$.ajax({  
			  type: "GET",  
			  url: accion+controladorApp+"/verificarParticipante/"+participante,  
			  data: $('#datosOpciones').serialize(),
			  success: function( response ) {
				  if ( response=="F" )
					  $('#content').load(accion + controladorApp+"/register", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()) } );
				  else					
				  	actividad();			  				
			}
		});
	};
	
	function finalizarJuego(mejorPuntaje){
		$(".actividad").html("");
		$.ajax({				  				  
			  type: "POST",  
			  url: accion+controladorApp+"/insertarPuntaje/"+idParticipante,
			  dataType:'json',
			  data: {"data": mejorPuntaje},
			  success: function(valor) {
				}
			  });
		
		$(".actividad").fadeOut( "slow", function(){
			$( ".fin-actividad").fadeIn();	
			
		});			
	};
	
	function actividad(pantalla){
		$(".contendor-actividad").fadeOut( "slow", function(){
			$( ".actividad").fadeIn( "slow" );
			//,function() {main();}
			$( ".actividad").load(accion+controladorApp+"/game" );
			
		});	
		if(pantalla=="0"){
			$("#Reto-"+pantalla).fadeIn();
			$('.contenedorMensaje').addClass('bounceInUp');
		}
		
	};
	
	function registrosActivos(){
		$("#registros").show();
		$('.fondo-registros').addClass('bounceInUp');
	};
	
	function ejecucionIntrucciones(){
		$(".texto-instrucciones").show();
		$('.texto-intro').addClass('bounceOutLeft');			
		$('.texto-instrucciones').addClass('bounceInRight');
		$('.btn-instruciones').fadeOut();
		$( ".btn-acepta" ).animate({
			marginLeft: "+=90"
		  }, 400,function(){
			  $( ".btn-ranking" ).animate({
					marginRight: "+=50"
				  }, 400);
		  } );		
	}
		
	/******FUNCIONES COMPARTIR******************/
	function compartir(){
		var obj = {  
		  method: 'feed',
	      link: 'https://apps.facebook.com/samsung_trineosanta',
	      picture: 'https://appss.misiva.com.ec/imagenes/samsung_halloween/iconos/190X190.jpg',
	      name: '¡Participa en esta app!',
	      caption: '¡Participa en esta app!',
	      description: 'Mi punta fue'+totalPuntos+'!'
	     };
	
	     function callback(response) {	    	 
	    		 /*if (response !== undefined){    			
	    		 $('#Reto-'+pantallaActividad).hide();	    		    		 
	    		 /*if(pantallaActividad=="0"){
	    			
	    		}    		 
	    	 }    	*/ 
	     }
	     FB.ui(obj, callback);	
	};
	
	function enviarForma(forma){						
		$.ajax({  
			  type: "POST",  
			  url: accion+controladorApp+"/register",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {
				  if (response=="1"){					  
					$('#submit').hide();
				    $('#content').load(accion+controladorApp+"/ingresoActividad/1",{ 'user': JSON.stringify(LibraryFacebook.getUserFbData()) });
				  }
	    		} 
			}); 
		return false;
		};	 
	
	
	function generarLuces(){
		$(".luces").animateSprite({
		    fps: 9,
		    animations: {
		        iniciarLuces: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]
		    },
		    loop: true,
		    complete: function(){
		    }
		});
		
		$(".luces").animateSprite('play', 'iniciarLuces');
	};
	
	
	
	
		









