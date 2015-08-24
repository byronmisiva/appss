<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}
		</style>
	</head>
	<body>
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
	<div id='fondo' style='position: relative; width: 810px; height: 805px; overflow: hidden; background-image:url(<?=$fondo;?>); background-repeat: no-repeat;'></div>
	<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px; text-align:justify; margin-top: 10px;'>
		<strong>Términos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
	</div>
	</body>
</html>