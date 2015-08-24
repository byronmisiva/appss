<!DOCTYPE html>
<html>
<head>
	<title>El trineo de Santa | Samsung</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    		
	
	<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">	
	<link href="<?php echo base_url('css/samsung_flappy_santa/fuente/stylesheet.css')?>" rel="stylesheet">
	
	<link href="<?php echo base_url('css/samsung_flappy_santa/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">		
    <link href="<?php echo base_url('css/samsung_flappy_santa/appsinfacebook.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	

	<script>
	var dataFB;
	var accion="<?php echo base_url()?>";
	var developer = false;	
	var idParticipante;
	var controladorApp="samsung_futbol_time";

	if (developer==true){
		idParticipante="963803436967163";
	}
		function check(response){
			$.ajax({
				type: "GET",
				url:  accion+'samsung_futbol_time/check/',
				data: {"response": response},
				success: function(data) {					
					var jsonObj = eval('(' + data + ')');
						if(jsonObj.contenedor=="contenedor-total"){
							$('#contenedor-redes').hide();
						}						
					$('#'+jsonObj.contenedor).html(jsonObj.cuerpo);					
				}
			});			
	}
	</script>	
</head>
<body>
	<div id="fb-root"></div>
	<div id="contenedor" class="container" >
		<div class="row">
		 <div id="content" >
				 <div class="contendor-actividad">	
						<div class="luces"></div>
						<div class="logo"></div>		
						<div class="contenedor-informacion">
							<div class="texto-intro animated">
								Ingresa y ayuda a Santa a repartir regalos en esta Navidad. 
								Demuestra tus habilidades y podrás ganarte un PREMIO.
							</div>
							<div id= "contenedor-compartir" >
								<div class="contenedor-sesionFB" id="contenedor-redes" >					
								<div class="login-caja">
									<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
									<div id="status" style="color:#ce272a;"></div>											
								</div>					
							<div class="like-face" >
								<!-- <div class="fb-like" data-href="https://www.facebook.com/MovistarECU"
									data-width="450" data-layout="button_count" data-show-faces="false"
									data-send="false"></div> -->
							</div>
						</div>	 
						</div>	
						</div>				
				</div>	
		 	</div>
		  </div>
		  	
		</div>			
		
<script>  	
function statusChangeCallback(response) {	     
	    if (response.status === 'connected') {      
	      testAPI();
	    } else if (response.status === 'not_authorized') {      
	      document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
	    } else {     
	      document.getElementById('status').innerHTML = 'Ingresar a Facebook.';
	    }
	  }
	  
		  function checkLoginState() {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }

		  window.fbAsyncInit = function() {
		  FB.init({
		    appId      : '461172347302442',		    
		    cookie     : true,                      
		    xfbml      : true,  
		    version    : 'v2.1'
		  });
			  
			  FB.getLoginStatus(function(response) {
			    statusChangeCallback(response);		    
			  });
			
		  };	
		  
		  (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));
			
		  
		  function testAPI() {     
		    FB.api('/me', function(response) {		    
		    	 check(response);	          
		    	 dataFB=response;		    	 
		    	 idParticipante=dataFB.id;
		      document.getElementById('status').innerHTML ='Gracias por estar con nosotros, ' + response.name + '!';		      
		    });	    
		  }
</script>	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/general/validate.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/samsung_flappy_santa/appsinfacebook.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url()?>js/samsung_flappy_santa/animateSprite.min.js" type="text/javascript" charset="utf-8"></script>
<script  type = "text/javascript"  src = "<?=base_url()?>js/samsung_flappy_santa/phaser2.min.js" ></script>     
 <script>
	var dispositivo = screen.width;
	var altoScreen;

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

	if (dispositivo < 600){
		altoScreen= screen.height;
		$("body").css({
			"width": dispositivo+"px",
			"height": altoScreen+"px",
			});

		$(".container").css({
			"width": dispositivo+"px",
			"height": altoScreen+"px",
			});
	}
		
</script>

<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57874214-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>





















