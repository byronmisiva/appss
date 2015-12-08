	var pantallaActividad;
	var estado=0;	
	function verificarGame(accion,participante){
		$.ajax({  
			  type: "GET",  
			  url: accion+controladorApp+"/verificarParticipante/"+participante,  
			  data: $('#datosOpciones').serialize(),
			  success: function( response ) {
				  if ( response=="F" )
					  $('#content').load(accion + controladorApp+"/register", { 'user': JSON.stringify(dataFB) } );
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
		
		if (dispositivo < 600){
			$( ".btn-acepta" ).animate({
				marginTop: "+=30"
			  }, 400);
			
		}else{
			$( ".btn-acepta" ).animate({
				marginLeft: "+=90"
			  }, 400,function(){
				  $( ".btn-ranking" ).animate({
						marginRight: "+=50"
					  }, 400);
			  } );
			
		}		
	};
	
	function enviarForma(forma){						
		$.ajax({  
			  type: "POST",  
			  url: accion+controladorApp+"/register",  
			  data: $('#'+forma).serialize(),
			  success: function( response ) {
				  if (response=="1"){					  
					$('#submit').hide();
				    $('#content').load(accion+controladorApp+"/ingresoActividad/1",{ 'user': JSON.stringify(dataFB) });
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
	}
		

	
	
	
	
		









