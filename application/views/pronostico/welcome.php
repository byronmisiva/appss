<!DOCTYPE html>
<html>	
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/partido/app.css?fb_refresh=<?=rand ( 1 , 1000 )?>" />
	<script>

	function compartir(accion,id){	
		var obj = {  
		         method: 'feed',
		         link: 'http://apps.facebook.com/pronostico_galaxy',
		         picture: 'https://appss.misiva.com.ec/imagenes/samsung_pronostico/75x75.jpg',
                 name: 'Pronóstico Galaxy ',
                 caption: 'Acabo de llenar mi Pronóstico Galaxy para el partido Barcelona Vs. Nacional de Uruguay.',
                 description: 'Tu también puedes ganar un Galaxy ACE y entradas al partido.',                
                 ref: ''
	            };

		  function callback(response) {
			  if (response!= undefined){
		  			$.ajax({				  				  
		  			  //type: "GET",  
		  			  url: accion+"pronostico/registrarAmigos/"+id
		  			  //dataType:'json',
		  			  //data: {"data": JSON.stringify(response.to)}			  		
		  			  });
				 }
			  }
          FB.ui(obj, callback);
   	  };	   

		/*	
		var id_amigos= [];	
		$.ajax({  
			  type: "POST",  
			  url: accion+"pronostico/verificarAmigo/"+id,		  
			  success: function( respuesta ) {
				  ids=$.parseJSON(respuesta);
					$.each( ids, function( key, value ) {
						id_amigos[key]=value.id_amigo;
			  		});					  			  
					id_amigos;		
					var obj = {
							  method: 'apprequests',
							  title: 'Samsung Pronóstico Galaxy',
							  message: 'Estoy participando .',
							  exclude_ids:id_amigos
							  };

				     function callback(response) {
				  		if (response!= undefined){
				  			$.ajax({				  				  
				  			  type: "GET",  
				  			  url: accion+"pronostico/registrarAmigos/"+id,
				  			  dataType:'json',
				  			  data: {"data": JSON.stringify(response.to)}			  		
				  			  });
						 }						  		
					 }	
				  	 FB.ui(obj, callback);
			  		}
			});
		};*/
	</script>
	</head>
	<body style="margin: 0px; padding: 0px;" >	
    	<div id="fb-root"></div>
    	<div id="fondo" style="position: relative; width: 810px;left:0px;top:0px;height:758px;" >
    		<div  style="position: absolute;" id='content'>
    		
    		</div>
    	</div> 
    	<div id="condiciones" class="condiciones">
			<strong>Términos y Condiciones</strong><br/>
			<?=$condiciones;?>
		</div>   	
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    	
		<script type="text/javascript" src="<?=base_url()?>js/library_facebook.js?<?=rand(1000, 99999)?>"></script>		
		<script type="text/javascript">
			window.fbAsyncInit = function() {	
				FB.init({
					appId : '<?=$appId?>',
					status : true,
					cookie : false,
					xfbml : false,
					oauth : true
				});
				FB.Canvas.setSize({ width: 810, height:850 });	
	
				$(document).ready( function() {	
					var tabLibrary;
				
					LibraryFacebook.init({
						appId					 : '<?=$appId?>',
						signedRequest			 : '<?=$signedRequest?>',
						base                     : '<?=$base?>',
						controler			     : '<?=$controler?>',
						namespace   	   	     : '<?=$namespace?>',
						permission				 : '<?=$permission?>',
						debug                    : '<?=$debug?>',
						tabLiker                 : '<?=$tabLiker?>',
						tabNoLiker               : '<?=$tabNoLiker?>',
						doesNtCare				 : '<?=$doesNtCare?>',
						content					 : '<?=$content?>',	
						isPageTab				 : '<?=$isPageTab?>'			
					});					
					tabLibrary = LibraryFacebook.newInstance();
				});
			};
	
			(function() {
				var e = document.createElement('script');
				e.async = true;
				e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());
		</script>
  </body>
</html>
