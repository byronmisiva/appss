<!DOCTYPE html>
<html>	
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
		<link href='//fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>		
		<script type="text/javascript" src="<?=base_url()?>js/laberinto/mazesmith.js?fbrefresh=<?=$cache?>"></script>
		<script type="text/javascript" src="<?=base_url()?>js/laberinto/mazesmith_themes.js?fbrefresh=<?=$cache?>"></script>	
		<script>
			var accion ="<?=base_url()?>";

			function guardarDatos(tiempo,movimiento){
				var user=$('#id_user').val();
				var valor1=tiempo;
				var valor2=movimiento;				
				var dataString = 'tiempo='+ valor1 + '&movimiento=' + valor2 + '&user=' + user ;
				
				$.ajax({
					  type: "POST",
					  data: dataString,
					  url: accion+"samsung_laberinto/guardar_datos/",					  
					  success: function( response ) {			  
						  if (response="1"){
							$('#mazesmith').hide();
						  	$( "#content" ).load(accion+'samsung_laberinto/liker', { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) });
						  }				 
					  }
					});	
			} 
			
		</script>		
		<style type="text/css">   
		 	a:hover { 
		 	text-decoration:underline; }   
		 	
		 	#title {     
		 	font-size:18px;     
		 	font-weight:bold;     
		 	font-family:Arial,Sans;   }  
		 	 
		 	#title2 {     
		 	font-size:13px;     
		 	cursor:crosshair;     
		 	font-family:Arial,Sans;   }
		 	   
		 	.big-button {     
		 	border: 1px solid black;     
		 	width: 200px;     
		 	background: #EEE;     
		 	margin-left: auto;     
		 	margin-right: auto;     
		 	cursor: crosshair;     
		 	font-size: 13px;   }  
		 	 
		 	.small-button {     
		 	border: 1px solid black;     
		 	width: 120px;     
		 	background: #EEE;     
		 	margin-left: auto;     
		 	margin-right: auto;     
		 	cursor: crosshair;     
		 	font-size: 13px;   }  
		 	 
		 	.extra {     cursor:crosshair;   }   
		 	
		 	.help {     
		 	font-size:12px;     
		 	cursor:crosshair;   } 
 
		
		.submit{
			background-repeat: no-repeat;
			background-color:transparent;
			border:none;
			width:111px;height:40px;
			cursor:pointer;
		}
		
			.input{
				background-color: transparent;
				border:none;
				width:320px;
				height:24px;
				line-height:24px;				
				font-family: 'Average Sans', sans-serif;
				font-size: 14pt;
				color:#ffffff;
				font-weight: bold;
			}
		
			.combo{
				background-color: transparent;
				border:none;
				width:155px;
				height:28px ;
				font-family: 'Average Sans', sans-serif;
				font-size: 12pt;
				color:#4C1407;
			}
			.areas{
				background-color: transparent;
				border:none;
				width:45px;
				height:39px ;
				text-align: center;				
			}
			
			.campos{
				background-color: transparent;
				border:none;
				width:30px;
				height:29px;
				line-height:33px;				
				font-family: 'Average Sans', sans-serif;
				font-size: 20pt;
				color:#4C1407;
			}
			
			.sombra{	
				background-color:#ffffff;
				opacity:0.7;	
				-ms-filter:"progidXImageTransform.Microsoft.Alpha(Opacity=70)";
				filter: alpha(opacity=70);
				}	
				
			.primero{
				font-family:Aldrich,Helvetica,sans serif ;
				font-weight:bold;
				font-size:19px;
				color:#01ebff;		
			}
			
			.pts1{
				font-family:Aldrich, Helvetica, sans serif ;
				font-weight:bold;
				font-size:19px;
				color:#01ebff;
				text-align:right;
			}
			
			.normal{
				font-family:Aldrich, Helvetica, sans serif ;
				font-weight:bold;
				font-size:16px;
				color:#ffffff;
			}	
			
			.pts2{
				font-family:Aldrich, Helvetica, sans serif;
				font-weight:bold;
				font-size:16px;
				color:#cff2fb;
				text-align:right;
			}
			
		</style>
	</head>
<body style="margin: 0px; padding: 0px;" >	
    	<div id="fb-root"></div>
    	<div id="fondo" style="position: relative; width: 810px;left:0px;top:0px;height:886px;overflow:hidden;" >
    		<div  style="position: absolute;" id='content'></div>
    	</div>
    	<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px;text-align:justify; margin-top: 10px;'>
			<strong>T&eacute;rminos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div>
		<div id="mazesmith" style="position: absolute;left:145px ;top:416px;width:530px;height:295px;display:none;">
			<div style="position:absolute;left:20px;top:20px;width:100px;height:70px ;">
				<div id="contador" style="font-size:35px;text-align:center;width:100%;font-family: Arial;line-height:70px;height: 70px;color:#ffffff;"></div>			
			</div>
			
			<div style="position:absolute;left:20px;top:150px;width:100px;height:70px;">
				<div id="tiempo" style="font-size:35px;text-align:center;width:100%;font-family: Arial;line-height:70px;height: 70px;color:#ffffff;"></div>
			</div>
		</div>  		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>		
		<script type="text/javascript" src="<?=base_url()?>js/laberinto/app.js?fbrefresh=<?=$cache?>"></script>
		<script type="text/javascript" src="<?=base_url()?>js/general/library_facebook.js?fbrefresh=<?=$cache?>"></script>						
		<script type="text/javascript">
			window.fbAsyncInit = function() {	
				FB.init({
					appId : '<?=$appId?>',
					status : true,
					cookie : false,
					xfbml : false,
					oauth : true
				});
				FB.Canvas.setSize({ width: 810, height:1000 });	
	
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
						isPageTab				 : '<?=$isPageTab?>',
						data					 : '<?=$data?>'
															
					});					
					tabLibrary = LibraryFacebook.newInstance();
				});
			};
	
			(function() {
				var e = document.createElement('script');
				e.async = true;
				e.src = document.location.protocol + '//connect.facebook.net/es_ES/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());
				
								
		</script>
  </body>
</html>
