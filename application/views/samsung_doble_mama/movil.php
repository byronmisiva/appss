<!DOCTYPE html>
<html>
<head>
    <title>Mamá Doblemente Única</title>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>	
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
	
	<link href="<?=base_url('css/samsung_mama_doble/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<script src="<?=base_url()?>js/ajax.js?fbrefresh=<?=rand(0, 99999)?>"></script>	
	
	<link rel="stylesheet" href="<?=base_url()?>fonts/samsung_regular_if/specimen_stylesheet.css" type="text/css" charset="utf-8" />
		<style type="text/css">	
			body{
				background-color:#ffffff;
				color:#024F9F;
				font-size: 24px;
			}			
		</style>
	<script>
		var accion ="<?=base_url();?>";
		function open_vista(dir,contenedor,editor){
			
			if(dir==''){
				$('#pages').html("");
			}else{
				if(screen.width>600)
					dir=dir+"/10";
				else	
					dir=dir+"/2";				
				$('#pages').load(dir);
			}
		};
		
		function cargarContenido(cont,dir){
			if (dir!="participa"){
				$("#content-participa").hide();
				$("#"+cont).load(accion+dir);				
				$("#"+cont).fadeOut('slow',function(){
					$("#"+cont).fadeIn('slow');
				});
				$('.login-caja').hide();
			}else{
				$("#"+cont).fadeOut('slow',function(){
					$('.menu1').show();	
					$('.menu2').show();	
					$('.menu3').show();	
					$('.menu4').show();	
					$("#content-participa").fadeIn('slow');							
					$('.contenedor-mobile').slideUp();
					estado=0;
					
				});													
			}
		};

		function check(response){		
			if(screen.width>600){					
				$.ajax({
					type: "GET",
					url:  accion+'samsung_doble_mama/check/',
					data: {"response": response},
					success: function(data) {					
						var jsonObj = eval('(' + data + ')');
						$('#'+jsonObj.contenedor).html(jsonObj.cuerpo);					
					}
				});
			}else{				
				$.ajax({
					type: "GET",
					url:  accion+'samsung_doble_mama/check2/',
					data: {"response": response},
					success: function(data) {					
						var jsonObj = eval('(' + data + ')');
						$('#'+jsonObj.contenedor).html(jsonObj.cuerpo);					
					}
				});
			}
			};

			var dataFB;
	</script>		
</head>
<body>
	<div id="fb-root"></div>
	<script type="text/javascript">
		window.fbAsyncInit = function() {
		    FB.init({
		     // appId   : '1415396945350182',
			 appId   : '595644553876654',		      
		      channelUrl : '<?=base_url()?>', 
		      status  : true, // check login status
		      cookie  : true, // enable cookies to allow the server to access the session
		      xfbml   : true // parse XFBML
		    });
		
		    FB.getLoginStatus(function(response) {			    
		        if (response.status == 'connected') {		        	
		            FB.api("/me", function (response) {
			            check(response);	            
			            dataFB=response;	
		            });
		        }else if (response.status == 'not_authorized')		        	
			            check(response);		        	
		        else
		        	check(response);		        
		    });
		};		

		(function() {
			var e = document.createElement('script');
			e.src = document.location.protocol + '//connect.facebook.net/es_LA/all.js';
			e.async = true;
			document.getElementById('fb-root').appendChild(e);
			}());

		function verificarConect(){
			window.location = accion+'samsung_doble_mama/movil';
		}  ;
	</script>
	<div id="contenedor container" >	  
		<div id="content" style="position:absolute;width:100%;height:100%;left:0;top:0;"></div> 
		<div class="login-caja" >				
			 <div class="fb-login-button" data-show-faces="true" 
			 data-width="200" 
			 data-max-rows="1" 
			 registration-url="http://www.facebook.com/dialog/oauth/?client_id=595644553876654&redirect_uri=<?=urlencode(base_url().'samsung_doble_mama/movil/')?>&scope=email,publish_actions" 
			 scope="email,publish_actions" 
			 on-login="parent.verificarConect();">
					Iniciar sesión
			</div>
	   	 </div> 	
					
		<div class="redes">
		   <div class="like-face">			   
				<div class="fb-like" data-href="https://www.facebook.com/SamsungEcuador" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
			</div>
		</div>
	</div>	
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/fonts/samsung_regular_if/easytabs.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=base_url()?>js/samsung_mama_doble/app.js?refresh=46546546" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>
</body>

</html>

                
