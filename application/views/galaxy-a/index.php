<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Generación Galaxy A :: Samsung</title>
	<link href="<?php echo base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet" />	
	<link href="<?php echo base_url()?>css/galaxy-a/jquery.fullPage.css" rel="stylesheet" type="text/css"  />	
	<link href="<?php echo base_url()?>css/galaxy-a/app.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/samsung_regular_if/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>fonts/samsung_bold_if/stylesheet.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>css/galaxy-a/style.css?frefresh=<?php echo rand(0,1000)?>" type="text/css" rel="stylesheet">   
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/galaxy-a/cropper/cropper-master.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/galaxy-a/cropper/main.css">	    
	<script src="<?php echo base_url()?>js/galaxy-a/app.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" charset="utf-8"></script>
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  	<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>js/galaxy-a/jquery.fullPage.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/galaxy-a/jquery-scrollto.js" type="text/javascript"></script>	
	
	<script type="text/javascript">
	var usuarioFB;
	var idParticipante=0;
	var modoDev=false;
	if (modoDev == true)
		idParticipante=1005762036104636; 
	var birthday="03/19/1970";		
	var accion="<?php echo base_url()?>";
	var controladorApp="<?php echo $data['controlador'];?>";	
	function onLogin(response) {	  
			    FB.api('/me', function(respuesta) {
			    	usuarioFB = respuesta;			    	
			    	if (modoDev == true)
						idParticipante="1005762036104636";
			    	else
			    		idParticipante=respuesta.id;			    				    	
			    });
			};	
	
		$(document).ready(function() {
			$('#fullpage').fullpage({				
				anchors: ['home', 'registro', 'cierre'],
				autoScrolling: false
			});
		});		
	</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60190053-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="fb-root"> </div> 
<div class="contenedor">
		<ul id="menu" style="display:none;position: fixed;top:0;width: 100%;height:35px;z-index: 1000; ">
			<li data-menuanchor="home" class="active" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#uno">intro</a></li>
			<li data-menuanchor="registro" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#dos" >registro</a></li>
			<li data-menuanchor="cierre" class="tercero" style="float:left;margin-left:10px;margin-right: 10px;"><a href="#ter">mensaje</a></li>
		</ul>
				
<div id="fullpage">
	<!-- PANTALLA 01 -->
	<div class="section " id="section0">		
				<article>
					<div class="logo-ingreso"></div>
															
					<div class="bntap btn-entrar"></div>
				</article>
				<div  class="franja-actividad">
					<div class="franja-izq"></div>
					<div class="franja-der">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/logo_Samsung.png" style="float: right;margin-right: 15px;"/>
					</div>
				</div>
	</div>
	<div class="section" id="section2" style="display: none;">		
			<article>
					<div class="logo-peque"></div>
					<div class="franja-titular">
						REGISTRO
					</div>
					<div class="registro registro-label" >
						<form id="register" name="register" method="post" role="form" class="form-horizontal formulario" >
							<div class="form-group">		
								<div class="form-control inputTexto" >
									<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="" />				
								</div>
							</div>
							<div class="form-group">		
								<div class="form-control inputTexto" style="margin-top: 8px;">
									<input type="text" id="apellido" name="apellido" placeholder="Apellido" value="" />				
								</div>
							</div>							
							<div class="form-group">			
								<div class="form-control inputTexto" style="margin-top: 8px;">			
									<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="" />
								</div>
							</div>
							
							<div class="form-group" >			
								<div class="form-control inputTexto" style="margin-top: 8px;">					
									<input type="text" id="mail" name="mail" placeholder="E-mail" value="" />
								</div>
							</div>
							
							<div class="form-group " >			
								<div class="form-control inputTexto" style="margin-top: 8px;">
									<input type="text" id="telefono" name="telefono" placeholder="Teléfono" value="" maxlength="10" />
								</div>
							</div>
																					
							<div class="form-group " >			
								<div class="form-control inputTexto" style="margin-top: 8px;">
									<input type="text" id="cedula" name="cedula" placeholder="Cédula" value="" maxlength="10" />
								</div>
							</div>
							
							<div class="form-group " >			
								<div class="form-control inputTexto" style="margin-top: 8px;">									
									<input id="fnacimiento" name="fnacimiento" onblur="if (this.value == ''){this.value = 'Fecha Nacimiento'}" onfocus="if (this.value == 'Fecha Nacimiento') {this.value = '';}" value="Fecha Nacimiento" type="text" >
								</div>
							</div>
											
							<input type="hidden" name="user" id="user" value="">
							<input type="hidden" name="fbid" id="fbid" value="">
							
							
							<!-- <input type="hidden" name="fnacimiento" id="fnacimiento" value=""> -->
							<div class="form-group" style="margin-top: 10px;">
								<input id="submit" name="submit" type="submit" value="" class="btn btn-sumbit" />
							</div>
						</form>
						</div>
				</article>	
				<div  class="franja-actividad">
					<div class="franja-izq"></div>
					<div class="franja-der">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/logo_Samsung.png" style="float: right;margin-right: 15px;"/>
					</div>
							
				</div>
				
	</div>
	<div class="section" id="section3" style="display: none;">			
				<article>
					<div class="logo-ingreso"></div>
					<p class="texto-normal">
						¡Ups!<br>
						Parece que tu edad no entra en el rango de la Generación A.<br>
						¡Agradecemos tu entusiamo y no te pierdas las proximas 
						actividades que tenemos par ti!
					</p>															
					<div class="bntap btn-cerrar" ></div>
				</article>	
				<div  class="franja-actividad">
					<div class="franja-izq"></div>
					<div class="franja-der">
						<img src="<?php echo base_url()?>imagenes/galaxy-a/01/logo_Samsung.png" style="float: right;margin-right: 15px;"/>
					</div>							
			</div>				
	</div>	
</div>
</div>
	<div id="condiciones">
		 <strong style="color:#000;;">
		 	<?php echo $data['condiciones'];?>
		 </strong><br/>		 	
	</div>	
	<div class="espera">
		<div class="cargando"></div>		
	</div>
	<script type="text/javascript" src="<?php echo base_url('js/general/validate.js')?>"></script>
	<script src="<?php echo base_url()?>js/bootstrap.min.js" type="text/javascript"></script>


<script type="text/javascript" charset="utf-8">
	window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo $data['idApp'] ?>,
      xfbml      : true,
      version    : 'v2.2'
    });

    FB.getLoginStatus(function(response) {		 
		  if (response.status == 'connected') {
		    onLogin(response);
		  } else {		    
		    FB.login(function(response) {
		      onLogin(response);
		    }, {scope: 'user_birthday, email, publish_actions'});
		  }
		});    
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/es_LA/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
	
	var rules = [ 
				   { name: 'nombre', display: 'nombre', rules: 'required'},
				   { name: 'apellido', display: 'apellido', rules: 'required'},
	               { name: 'ciudad', display: 'ciudad', rules: 'required'},
	               { name: 'cedula', display: 'cedula', rules: 'required'},
	               { name: 'telefono', display: 'telefono', rules: 'required'},	               
	               { name: 'mail', display: 'mail', rules: 'required|valid_email'},
	               { name: 'fnacimiento', display: 'fnacimiento', rules: 'required|callback_fnacimiento'}	               	               
	            ];    
	
	var validator = new FormValidator('register',rules, function(errors, event) {		
		 if (errors.length > 0) {
		        var errorString = '';		        
		        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
		        	$('#'+errors[i].id).val("");		        	
			        $('#'+errors[i].id).css({"color":"#42332a"});
			        errorString+=errors[i].id+"<br>";
		        }; 
		        alert("REGISTROS NO COMPLETADOS");				
		    }else{
		    	enviarForma('register'); 		    			    	
			    }
		});	

	validator.registerCallback('fnacimiento', function(value) {				
		res = value.split("/");		
		
		if(parseInt(res[2])<1984 && parseInt(res[2])>1996){			
			$(".registro").hide();
			$(".registro").html("");
			$("#section3").css("display","inline-table");
			movimiento("section3");
		}else
			return true;
		
	});	

	  $(function() {
		    $( "#fnacimiento" ).datepicker({ 
			    changeYear: true,
			    changeMonth: true,
			    yearRange: "1970:2010",
			    dateFormat: "dd/mm/yy" });
		  });

	var dis ="<?php  echo $data['dispositivo'];?>";		
	</script>  
<script src="<?php echo base_url()?>js/galaxy-a/complemento.js?frefresh=<?php echo rand(0,1000)?>" type="text/javascript" ></script>
</body>
</html>
























