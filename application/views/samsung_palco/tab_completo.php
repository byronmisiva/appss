<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
	</head>
	<body style="margin: 0px; padding: 0px;">
		<div id="fb-root"></div>
		<script type="text/javascript">
		      window.fbAsyncInit = function() {
		        FB.init({
			        appId   : '<?=$api_id;?>',
		          	status  : true, // check login status
		          	cookie  : true, // enable cookies to allow the server to access the session
		          	xfbml   : true // parse XFBML
		      	});	
		        FB.Canvas.setSize({ width: 810, height: 900 });	
		      };
		      (function() {
		    	    var e = document.createElement('script');
		    	    e.src = document.location.protocol + '//connect.facebook.net/es_LA/all.js';
		    	    e.async = true;
		    	    document.getElementById('fb-root').appendChild(e);
		   		}());			      
		</script>
		<div id='fondo' style="position: relative; width: 810px; height: 804px; overflow: hidden; background-repeat: no-repeat; background-image: url('<?=$fondo?>'); background-repeat: no-repeat;">		
			<!-- <div id="amigo_1" class="amigo" style="position: absolute; width: 57px; height: 65px; top: 383px; left: 134px; cursor: pointer;" >
				<div id="foto_1" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[1] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[1];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div style="position: absolute; width: 58px; height: 58px; top: 383px; left: 134px; background-color: black; opacity: 0.85; filter:alpha(opacity=85);" ></div>
			
			<div id="amigo_2" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 365px; left: 262px;" >			
				<div id="foto_2" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[2] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[2];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div style="position: absolute; width: 58px; height: 58px; top: 365px; left: 262px; background-color: black; opacity: 0.85; filter:alpha(opacity=85);" ></div>
			
			<div id="amigo_3" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 347px; left: 362px;" >
				<div id="foto_3" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[3] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[3];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div style="position: absolute; width: 59px; height: 58px; top: 347px; left: 362px; background-color: black; opacity: 0.85; filter:alpha(opacity=85);" ></div>
			
			<div id="amigo_4" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 363px; left: 457px;" >
				<div id="foto_4" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[4] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[4];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div style="position: absolute; width: 59px; height: 59px; top: 363px; left: 457px; background-color: black; opacity: 0.85; filter:alpha(opacity=85);"></div>
			
			<div id="amigo_5" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 341px; left: 551px;" >
				<div id="foto_5" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[5] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[5];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div style="position: absolute; width: 59px; height: 59px; top: 341px; left: 551px; background-color: black; opacity: 0.85; filter:alpha(opacity=85);" ></div>
			
			<div id="amigo_6" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 294px; left: 653px;" >
				<div id="foto_6" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;" >
					<?if( $amigos[6] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[6];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div style="position: absolute; width: 59px; height: 58px; top: 294px; left: 653px; background-color: black; opacity: 0.85; filter:alpha(opacity=85);" ></div>
			 -->
		</div>
		<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px; text-align:justify; margin-top: 10px;'>
			<strong>Términos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div>
	</body>
</html>