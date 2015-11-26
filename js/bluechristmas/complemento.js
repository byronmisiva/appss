$(document).ready(function(){	
			$(".btn-jugar").click(function(){
				verificarGame(accion,idParticipante);
			});
									
			$(".btn-registro").click(function(){
				$(".btn-sumbit").click();
			});
			
			$(".btn-instrucion").click(function(){
				$(".intro-texto").hide();
				$(".view-instruciones").show();
				$(".view-instruciones").addClass("zoomInDown");
				$(".logo-evento").addClass("minimizar");
				
				setTimeout(function(){
					$(".view-instruciones").removeClass("zoomInDown");
				}, 1200);
			});
			
			$(".btn-ranking").click(function(){
				$(".intro-texto").hide();
				$(".view-ranking").show();
				$(".view-ranking").addClass("zoomInDown");
				$(".logo-evento").addClass("minimizar");
				setTimeout(function(){
					$(".view-ranking").removeClass("zoomInDown");
					$(".contenedor-ranking").load(accion+controladorApp+"/viewRanking");
					
				}, 1200);
			});
			
			
			$(".play").click(function(){
				$(".play").hide();
				$(".stop").show();
			});
			
			$(".stop").click(function(){
				$(".play").show();
				$(".stop").hide();
			});
			 
});