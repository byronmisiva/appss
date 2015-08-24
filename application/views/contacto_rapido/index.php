<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<title>Contacto Rápido </title>
	<link href="<?php echo base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/cocaradio/app.css" type="text/css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
    <script src="<?php echo base_url()?>js/compra_rapido/jquery.carouFredSel.js"></script>
    
	<script type="text/javascript">
	var accion="<?php echo base_url()?>";
	var controladorApp="<?php echo $data['controlador'];?>";
	function onLogin(response) {	  
		
	};	
	</script>
	
	<style>
	  body{
		 //*background: #D41E1A;*/
		}
		
		.contenedor-principal{
		position: relative;
		width: 800px;
		margin: 10px auto;
		}
		
		.logo{
			margin:0 0 15px;
			width: 100px;
			height: 41px;
		}
		
		.container{
			padding-top: 20px;
		}
		
		.text-informacion{
			margin:10px auto;
			text-align: left;			 
		}
		
		
#pagination {
    text-align: center;
    margin-top:15px; 
    
}
#pagination a {
    background-color:#009FAD;
    width: 15px;
    height: 15px;
    margin: 0 5px 0 0;
    display: inline-block;
    border-radius:8px;
}
#pagination a.selected {
    background-position: -25px -300px;
    cursor: default;
    background-color: #014C51;
}
#pagination a span {
    display: none;
}
.clearfix {
    float: none;
    clear: both;
}

#carousel img {
margin: auto;
}
		
		.text-informacion{
		font-family: Helvetica;
		}
	
	</style>

</head>
<body>
	<div id="fb-root"> </div> 	
	<div class="contenedor-principal">
	<div class="logo" onclick="window.open('http://www.yeticycles.com/')">
		<img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/logo_yeti.png"/>
	</div>
	<div style="margin: auto;width: 700px;">
		<div id="carousel">
		    <img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/imagen-bici1.jpg" width="700" />
		    <img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/imagen-bici2.jpg" width="700" />
		    <img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/imagen-bici3.jpg" width="700" />
		    <img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/imagen-bici4.jpg" width="700" />
		    <img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/imagen-bici5.jpg" width="700" />
		    <img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/imagen-bici6.jpg" width="700" />
		</div>
		<!--		    <img src="<?php echo base_url()?>imagenes/contacto_rapido/bici/imagen-bici7.jpg" width="700" />-->
		<div class="clearfix"></div>
		<div id="pagination"></div>
	</div>	
		
		
		<div class="text-informacion">
			De venta! Yeti ASR 5C cuadro de carbon<br>
			<div style="margin-left: 15px;">
			- Cuadro de carbón talla XS <br>
			
			- Aro 26<br>
			
			- Suspensiones FOX FLOAT CTD Kashima; recorrido delantero 140 mm recorrido trasero 127 mm<br>
			
			- Shifters SRAM X7<br>
			
			- Descarrilador delantero SRAM X7<br>
			
			- Descarrilador trasero SRAM X9<br>
			
			- Frenos Avid Elixir 5<br>
			
			- Crankset 22/32/44 t SRAM S1000<br>
			
			- Casette 11-36 t SRAM<br>
			</div>
			Contacto: <a href="mailto:belen.chiriboga@gmail.com">belen.chiriboga@gmail.com</a>
		
		</div>
	
	</div>	
	<script src="<?php echo base_url()?>js/bootstrap.min.js" type="text/javascript"></script>    
	
<script type="text/javascript" charset="utf-8">
	window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo $data['idApp'] ?>,
      xfbml      : true,
      version    : 'v2.3'
    });

    FB.getLoginStatus(function(response) {		 
		  if (response.status == 'connected') {
		    onLogin(response);
		  } else {		    
		    FB.login(function(response) {
		      onLogin(response);
		    }, {scope: ''});
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
</script>
<script type="text/javascript">
$(document).ready(function() {    
    $('#carousel').carouFredSel();    
    $('#carousel').carouFredSel({
        items       : 1,
        direction   : "left",
        responsive  : false,
        pagination  : "#pagination",
        scroll : {
            items            : 1,            
            duration        : 500,
            pauseOnHover    : true
        }
    });
});
</script>
</body>
</html>

























