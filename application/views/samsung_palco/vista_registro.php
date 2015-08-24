<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script src="//www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load("prototype", "1.7.0.0");
		  google.load("scriptaculous", "1.8.3");
		</script>	
		<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/general/validacion.js"></script>
		<style type="text/css">
			input {
				background: transparent;
				color: white;
				border: none;
				padding-left: 5px;
				height: 25px;
				font-size: 14px;
			}
		</style>
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
		<div id='fondo' style="position: relative; width: 810px; height: 804px; overflow: hidden; background-image: url('<?=$fondo?>'); background-repeat: no-repeat;">
			<div style="position: absolute; width: 430px; height: 150px; left: 302px; top: 295px; background-repeat: no-repeat;">	
				<form id="palco_registro" name="palco_registro" action="<?=base_url()?>samsung_palco/vista_registro" method="post">
					<div style="position: absolute; top: 22px;">
						<input  type="text" name="completo" id="completo" value="<?=$user['fbdatos']['completo']?>" readonly="readonly">			
					</div>					 
					<div style="position: absolute; top: 52px; left: 210px;">
						<input style="color: #777777;" type="text" name="cedula" id="cedula" maxlength="10" value="C&eacute;dula" onfocus="clear_input(this,'C&eacute;dula')" onblur="fill_input(this,'C&eacute;dula')" onkeypress="return onlyNumber(event);" >			
					</div>
					<div style="position: absolute; top: 22px; left: 210px;">
						<input style="color: #777777;" type="text" name="telefono" id="telefono" maxlength="10" value="Tel&eacute;fono"  onfocus="clear_input(this,'Tel&eacute;fono')" onblur="fill_input(this,'Tel&eacute;fono')" onkeypress="return onlyNumber(event);">			
					</div>	
					<div style="position: absolute; top: 52px;">
						<input style="color: #777777;" type="text" name="ciudad" id="ciudad" value="Ciudad" onfocus="clear_input(this,'Ciudad')" onblur="fill_input(this,'Ciudad')">								
					</div>			
					<div style="position: absolute; top: 82px;">
						<input type="text" name="mail" id="mail" value="<?=$user['fbdatos']['mail']?>" readonly="readonly">			
					</div>	
					
					<div style="position: absolute; top: 84px; left: 210px;">
						<input style="background-color: transparent; border: none; cursor: pointer; width: 204px; height: 23px; background-image: url('<?=$img_path?>boton_enviar_registro.jpg');" type="submit" name="submit" id="submit" value=" ">								
					</div>								
				</form>
			</div>	
			<div id="bloqueo" style="position: absolute; width: 810px; height: 200px; top: 820px; left: 0px; background-repeat: no-repeat; display: none; cursor: pointer;"></div>	
			<div id="shadow" style="position: absolute; width: 810px; height: 805px; top: 0px; left: 0px; background-repeat: no-repeat; background-color: white; opacity: 0.7; filter:alpha(opacity=70); display: none;"></div>	
		</div>
		<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px; text-align:justify; margin-top: 10px;'>
			<strong>Términos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div>	

		<script type="text/javascript">
			var rules = [ 
			              { name: 'telefono', display: 'required', rules: 'required|numeric|min_length[10]'}, 
			              { name: 'cedula', display: 'required', rules: 'required|numeric|min_length[10]'},
			              { name: 'ciudad', display: 'required', rules: 'required'},
			              { name: 'completo', display: 'required', rules: 'required'},			              
			              { name: 'mail', display: 'required', rules: 'required'}
			            ];
			var validator = new FormValidator('palco_registro',rules, function(errors, event) {
				
				for (var i = 0 , rulesLength = rules.length; i < rulesLength; i++) {		
			        $(rules[i].name).setStyle( { backgroundColor: 'transparent', color: 'white' } );
			    }
			    if ( errors.length > 0 ) {        
			        for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
			            $(errors[i].id).setStyle( { color: 'red' } );
			        }
			    }
			    else{
			    	$('palco_registro').submit();    	
			    }   
			});
		</script> 
	</body>
</html>