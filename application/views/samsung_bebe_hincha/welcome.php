<!DOCTYPE html>
<html>	
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
		<style type="text/css">
		.cabinet{
			cursor: pointer;
			margin-left:0px;
		    width: 50px;
		    height: 50px;
		    border:1px solid red;
		    /*background: url(<?=base_url()?>imagenes/bebe_hincha/app/btn-mas.png) 0 0 no-repeat;*/
		    display: block;
		    overflow: hidden;
		}
		
		 .file{	
		    position: relative;
		    cursor: pointer;
		    height: 20px;
		    width: 100px;
		    border:1px solid red;
		    background:#ffffff;
		    opacity: 0;
		    -moz-opacity: 0;
		    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
		}
		
		.sombra{	
			background-color:#000000;
			opacity:0.6;	
			-ms-filter:"progidXImageTransform.Microsoft.Alpha(Opacity=50)";
			filter: alpha(opacity=50);
		}	
		</style>

	</head>
<body style="margin: 0px; padding: 0px;" >	
    	<div id="fb-root"></div>
    	<div id="fondo" style="position: relative; width: 810px;left:0px;top:0px;height:800px;overflow:hidden;background-image:url('<?=$fondo?>'); ;background-repeat: no-repeat;" >
    		<div  style="position: absolute;" id='content'></div>
    	</div>
    	<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px; text-align:justify; margin-top: 10px;'>
			<strong>T&eacute;rminos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div>	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>  		
		<script src="<?=base_url().'js/bebe/app.js'?>"></script>
		<script type="text/javascript" src="<?=base_url()?>js/general/libraryFace.js?<?=rand(1000, 99999)?>"></script>						
		<script type="text/javascript">
			window.fbAsyncInit = function() {	
				FB.init({
					appId : '<?=$appId?>',
					status : true,
					cookie : false,
					xfbml : false,
					oauth : true
				});
				FB.Canvas.setSize({ width: 810, height:980 });	
	
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
			var accion="<?=base_url()?>";	
								
		</script>
  </body>
</html>
