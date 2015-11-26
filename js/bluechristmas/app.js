	var pantallaActividad;
	var estado=0;	
	var res;
	var toSecond;
	var toSecondPanel=20;
	var timer1=26;
	var timer2=21;
	var timer3=16;
	var timer4=11;
	var status=0;
	var tiempoPanel;
	var minutos=8;	
	var toMinute=1;
	var total=0;
	var opcionPanel=0;
	var respuestas=[];
	var contador=0;
	var contaforError=0;
	var totalrespuestas=0;	
	var posicionOportunidad=0;
	var categoriaAnterior=0;
	
	function verificarGame(accion,participante){
		$(".espera").show();	
			$.ajax({  
				  type: "GET",  
				  url: accion+controladorApp+"/verificarParticipante/"+participante,  
				  data: $('#datosOpciones').serialize(),
				  success: function( response ) {
					  if ( response == "F" ){	
						  if (modoDev == false){
							$("#fbid").val(participante);
							$("#nombre").val(usuarioFB.first_name);
							$("#apellido").val(usuarioFB.last_name);
							$("#mail").val(usuarioFB.email);
						  }else{
							  $("#fbid").val(participante);
						  }
						    
						  	
						  	$(".view-registro").fadeIn();
							
							$(".intro-texto").fadeOut();						
							$(".espera").hide();
							$(".logo-evento").hide();
							$(".view-ranking").hide();
						  	$(".view-instruciones").hide();
					  }else{						  
						  $(".container").load(accion+controladorApp+"/ingresoActividad/"+dis,{'user': participante});
						  $(".espera").hide();
					  }
				}
			});		  
	};
					
	function enviarForma(forma){	
		$.ajax({  
			  type: "POST",  
			  url: accion+controladorApp+"/register",  
			  data: $('#'+forma).serialize(),
			  success: function( respuesta2 ) {				  
				    $('.container').load(accion+controladorApp+"/ingresoActividad/"+dis, { 'user': idParticipante } );
	    		} 
			}); 
		return false;
		};		
		
		function animaPanel(){
			if(opcionPanel != 0)
				$(".panel-"+opcionPanel).removeClass("activeSombra");
			
			opcionPanel = solicitarCategoria();
				toSecondPanel=toSecondPanel-1;
				if(toMinute<=0){
					toMinute=2;		
				}				
				if(toSecondPanel<0){
					toSecondPanel=20;		
				}
							
				$(".panel-"+opcionPanel).addClass("activeSombra");
				if(toSecondPanel==0){
					finanimaPanel(opcionPanel);
				}else{
					tiempoPanel=setTimeout("animaPanel()",100);
				}			
		};		
		
		function solicitarCategoria(){
			return Math.floor((Math.random() * 6) + 1);
		};
		
		function finanimaPanel(posicion){			
			clearInterval(tiempoPanel);
			if (categoriaAnterior != posicion){
				categoriaAnterior = posicion;
				posicionOportunidad = posicion;
			
			$(".obtener-categoria").fadeIn();			 
			$(".posicion-"+posicionOportunidad).show();
			$(".posicion-"+posicionOportunidad).addClass("tada");
			$(".btn-empezar").removeClass("hvr-pulse-grow");
			$(".btn-empezar").hide();
			setTimeout(function(){				
				$('#carusel-preguntas').load(accion+controladorApp+"/getOpcion", {"data": posicionOportunidad, "parte": parte} );
				$('#carusel-preguntas').fadeIn();
				$('#carusel-preguntas').addClass("zoomInUp");
			}, 1500);
			
			setTimeout(function(){
				$(".obtener-categoria").fadeOut();
				$(".posicion-"+posicion).hide();
				$(".posicion-"+posicion).removeClass("tada");
				limpiarClass("#carusel-preguntas","zoomInUp");
				$(".btn-empezar").addClass("hvr-pulse-grow");
			}, 1800);
			}else{
				var nuevalor= solicitarCategoria();
				finanimaPanel(nuevalor);
			}
		};
		
		function limpiarAciertos(){
			for(var x=1; x<=4; x++){
				$(".acierto-"+x).removeClass("acierto-activo");
			}
		};
		function actualizarAciertos(){
			for(var x=1; x<=totalrespuestas; x++){
				$(".acierto-"+x).addClass("acierto-activo");
			}
		}
		
		
		function limpiarClass(elem,clase){
			$(elem).removeClass(clase);
		}

		var desplegartiempo;
		
	    function countDown(){	    	
			toSecond=toSecond-1;
			if(toMinute<=0){
				toMinute=2;		
			}
			
			if(toSecond<0){
				toSecond=11;		
			}
			if (toSecond <10)
				desplegartiempo= "0"+toSecond;
			else
				desplegartiempo = toSecond;
			$('.contenedor-tiempo').html(desplegartiempo);
			if(toSecond==0){
				fintimer();
			}else{
				tiempo=setTimeout("countDown()",1000);
			}		
		};
		
		function fintimer(){
			clearInterval(tiempo);
			if (parte == 1) 
				toSecond = timer1;
			else if (parte == 2) 
				toSecond = timer2;
			else if (parte == 3) 
				toSecond = timer3;
			else if (parte == 4) 
				toSecond = timer4;
			
			finalizoTiempo();
		};
		
		function reiniciarTimer(){
			clearInterval(tiempo);
			toSecond=11;
			countDown();
		}
		
		function finalizoTiempo(){
			viewFinal(".mensaje-termino-tiempo");	
		}
		
		function viewFinal(view){
			$("#carusel-preguntas").removeClass("zoomInUp");
			$("#carusel-preguntas").addClass("zoomOutDown");
			setTimeout(function(){ 
				$(".intro-preguntas").hide(); 
				$(".view-resultado").show();
				$(".view-resultado").addClass("bounceIn");
				$(view).show();
				$("#carusel-preguntas").removeClass("zoomOutDown");
			}, 600);
	
			setTimeout(function(){
				$(".view-resultado").removeClass("bounceIn");
			}, 1200);
		};
		
	
	
	
		









