var img;
var imagenCortada;
var imagenFinal;
var amigosCompartir;
var imagenCarnet;	
var puntaje=0;

var viewRespuesta=[
	"mensaje-normal",
	"mensaje-pasa-nivel",
	"mensaje-incorrecto",
	"mensaje-fin-oportunidades",
	"mensaje-termino-tiempo"
	];

$(document).ready(function(){
	$(".btn-empezar").click(function(){
		$(".btn-empezar").removeClass("hvr-pulse-grow");
		$(".btn-empezar").hide();
		animaPanel();
	});
	
	$(".btn-panel").click(function(){
		$(".intro-panel").addClass("zoomOut");		
		setTimeout(function(){
				if(dis == "movil"){
					$(".peril-espacio").hide();
					$(".contenedor-aciertos").show();
					$(".contenedor-nivel").show();
					$("#logo-dinamico").addClass("reposicion-logo");
				}
			
			$(".intro-panel").hide();
			$(".seccion-panel").show();
			$(".seccion-panel").addClass("zoomInUp");
		}, 600);
		setTimeout(function(){
			$(".seccion-panel").removeClass("zoomInUp");
		}, 1200);
	});
		
		
	$(".btn-volver").click(function(){
		$(".nivel").html(parte);
		if(totalrespuestas == 0){
		limpiarAciertos();
		}
		
		$(".view-resultado").removeClass("bounceIn");
		$(".view-resultado").addClass("zoomOut");
		$(".obtener-categoria").hide();
		
		$(".mensaje-normal").hide();
		$(".mensaje-pasa-nivel").hide();
		$(".mensaje-incorrecto").hide();
		$(".mensaje-fin-oportunidades").hide();
		$(".mensaje-termino-tiempo").hide();
		
		setTimeout(function(){ 
			$(".view-resultado").hide();
			$("#logo-dinamico").removeClass("logo-evento");
			
			$("#logo-dinamico").addClass("logo-evento-registro");
			$(".seccion-panel").show();
			$(".seccion-panel").addClass("zoomInUp");
			$(".btn-empezar").show();
			$(".view-resultado").removeClass("zoomOut");
		}, 600);
		
		setTimeout(function(){
			$(".seccion-panel").removeClass("zoomInUp");
		}, 1200);
		
		
		$(".panel-"+posicionOportunidad).removeClass("activeSombra");
		$(".posicion-"+posicionOportunidad).removeClass("tada");
	});
	
	$(".btn-continuar-test").click(function(){			
		$(".intro-preguntas").hide();	
		$(".intro-preguntas").addClass("bounceOut");
		$(".seccion-preguntas").show();
		$(".seccion-preguntas").addClass("bounceIn");
		$.post(accion+controladorApp+"/contadorActividades", {
    		participante: idParticipante }
    	);
		countDown();
	});
	
	/*$(".respuesta").click(function(){
		if ($(this).attr("pos")!="1"){
			$('.carousel-control.right').trigger('click');
			respuestas.push($(this).attr("ref"));
		}else{
			respuestas.push($(this).attr("ref"));
			
		}
		
		contador++;
		
		var totalrespuestas=0;		
		if(contador==2){
			for(var x=0; x<respuestas.length;x++){
				if(respuestas[x]==1)
					totalrespuestas++;
			}
			
			if (totalrespuestas == 2){
				$(".seccion-preguntas").hide();				
				$(".seccion-correcto").show();								
				$.ajax({  
					  type: "GET",  
					  url: accion+controladorApp+"/contadorAciertos/"+idParticipante,					  
					  success: function( response ) {						
					}
				});	
				
				$.post(accion+controladorApp+"/contadorAciertos", {
		    		participante: idParticipante }
		    	);
				clearInterval(tiempo);
			}else{				
				$(".errados").html(2-totalrespuestas+"/5");
				$(".seccion-preguntas").hide();				
				$(".seccion-incorrecto").show();				
				$.post(accion+controladorApp+"/contadorErrados", {
		    		participante: idParticipante }
		    	);
				clearInterval(tiempo);
			}
		}
	});*/
	
	$(".fondo-respuesta").click(function(){
		reiniciarTimer();
		respuestas.push($(this).attr("ref"));
		status++;
		$("#opcion-"+contador).addClass("fadeOutLeft");
		$("#opcion-"+contador).removeClass("active");
		contador++;
		if(contador<5){
			$("#opcion-"+contador).addClass("active");
			$("#opcion-"+contador).addClass("zoomIn");
			
		}
		var totalrespuestas=0;		
		if(contador==5){
			for(var x=0; x<respuestas.length;x++){
				if(respuestas[x]==1)
					totalrespuestas++;
			}
			if (totalrespuestas == 5){
				$(".seccion-preguntas").hide();				
				$(".seccion-correcto").show();
				$(".seccion-correcto").addClass("zoomIn");
								
				$.ajax({  
					  type: "GET",  
					  url: accion+controladorApp+"/contadorAciertos/"+idParticipante,					  
					  success: function( response ) {						
					}
				});	
				
				$.post(accion+controladorApp+"/contadorAciertos", {
		    		participante: idParticipante }
		    	);
				clearInterval(tiempo);
			}else{
				
				$(".errados").html(5-totalrespuestas+"/5");
				$(".seccion-preguntas").hide();				
				$(".seccion-incorrecto").show();
				$(".seccion-incorrecto").addClass("flipInY");
				$.post(accion+controladorApp+"/contadorErrados", {
		    		participante: idParticipante }
		    	);
				clearInterval(tiempo);
			}
		}
	});
			
	$(".btn-compartir-app").click(function(){
		FB.ui({
			  method: 'feed',
			  picture: "https://appss.misiva.com.ec/imagenes/entradas_trivia/iconos/190X190.jpg",
			  link: 'https://apps.facebook.com/entradas_juanes',
			  caption: 'No pierdas la oportunidad de ir #AJuanesConSamsung',
			  description:'Participa en la trivia y demuestra que eres un verdadero fan de Juanes, para que puedas verlo en vivo'
			}, function(response){
				if (response != undefined){
		  			$.ajax({				  				  
		  			  type: "GET",  
		  			  url: accion+controladorApp+"/sumarCompartida/"+idParticipante,
		  			  success: function(valor) {						  				
		  				}
		  			  });			  			
				 }				
			});
	});
	
	$(".ico-face").click(function(){
		$.ajax({  
			  type: "POST",  
			  url: accion+controladorApp+"/verificarAmigo/"+idParticipante,		  
			  success: function( respuesta ) {
				ids=$.parseJSON(respuesta);			
				var obj = {
					method:'apprequests',
					title: '¡Juega Challenge-ON!',
					message:'Pon a prueba tus conocimientos sobre películas, música, series, cómics, deportes o ciencia; y gana un Smart TV.',
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
						 }						
					}	
					 FB.ui(obj, callback);			 
			  }
		}); 			 
	});
	
	$(".ico-twitter").click(function(){
		var url = "https://goo.gl/FxY2sJ";
		var text = "¡Juega Challenge-ON! Pon a prueba tus conocimientos sobre películas, música, series, cómics, deportes o ciencia, y gana un Smart TV.";			
		window.open("https://twitter.com/share?url=" + encodeURIComponent(url) + "&text=" + encodeURIComponent(text), this.target, 'width=500,height=500');
		$.ajax({				  				  
			  type: "GET",  
			  url: accion+controladorApp+"/invitarTwitter/"+idParticipante,
			  success: function(valor) {}
		 });		
	});
	
	$(".btn-salir").click(function(){
		location.href="https://www.facebook.com/SamsungEcuador";
	});
	
	
		
});
















