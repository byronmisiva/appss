<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<title>Coca Cola FM </title>
	<link href="<?php echo base_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/cocaradio/app.css" type="text/css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
	var accion="<?php echo base_url()?>";
	var controladorApp="<?php echo $data['controlador'];?>";	
	
	/*function onLogin(response) {
		if (response.status == 'connected') {							  
			    FB.api('/me', function(respuesta) {
			    	usuarioFB = respuesta;
			    });
		}
	};	*/
	</script>	
	<style>	
		body{
			background: #D41E1A;
		}	
		
		.container{
		padding-top: 20px;
		}
	</style>
</head>
<body>
<!-- Ad Tags for Prueba Responsive  -->
<!-- Base size of ad: 760x800 -->
<!-- Placements: 1 -->

<!-- Placement: Prueba Responsive  #1 -->
<!-- Placement ID: 59b8c6fe-ea8f-47c4-945b-20ac82ef62b1 -->
<!-- Placement Size: 760x800 -->
<!-- Ad Server: NONE; Mixins: true -->
	<div id="fb-root"> </div> 	
	<div class="container">	
		
		
	</div>
	
	<script>
    (function() {
        var guid = "59b8c6fe-ea8f-47c4-945b-20ac82ef62b1", o = window, r = "", m, s = "http:", e = encodeURIComponent, x = 0, f = document.createElement("script");
        o.FLITE=o.FLITE || {};
        o.FLITE.config = o.FLITE.config || {};
        o.FLITE.config[guid] = o.FLITE.config[guid] || {};
        o.FLITE.config[guid].cb = Math.random();
        o.FLITE.config[guid].ts = (+ new Date());
        try{ r = (top===self && top.location) ? top.location.href : document.referrer || (top.location && top.location.href) || "";}catch(er){x=1}
        try{ s = o.location && o.location.protocol === "https:"? o.location.protocol : s;}catch(er){x+=2}
        try{ m = r.match(new RegExp("[A-Za-z]+:[/][/][A-Za-z0-9.-]+")); } catch(er) {x+=4}
        f.src = [s,"//r.flite.com/syndication/uscript.js?i=",e(guid),"&v=3&dep=true","&x=us",x,"&cb=",o.FLITE.config[guid].cb,"&d=",e((m && m[0]) || r), "&tz=", (new Date()).getTimezoneOffset()].join("");
        document.write(f.outerHTML);
        })();
</script>
<noscript>
    <a style="text-decoration:none;display:block;border:0;" href="//r.flite.com/syndication/backuplink/i/59b8c6fe-ea8f-47c4-945b-20ac82ef62b1?ct=" target="_blank">
        <img border="0" src="//r.flite.com/syndication/backupimage/i/59b8c6fe-ea8f-47c4-945b-20ac82ef62b1?at="/>
    </a>
</noscript>	
<script src="<?php echo base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
	/*function statusChangeCallback(response) {
	    if (response.status === 'connected') {      
	    	onLogin();
	    } 
	  };*/
  
	  /*function checkLoginState() {
	    FB.getLoginStatus(function(response) {
	      statusChangeCallback(response);
	    });
	  };*/

	
	/*window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo $data['idApp'] ?>,
      xfbml      : true,
      version    : 'v2.3'
    });*/

    /*FB.getLoginStatus(function(response) {		 
		  if (response.status == 'connected') {
		    onLogin(response);
		  } else {		    
		    FB.login(function(response) {
		      onLogin(response);
		    }, {scope: ''});
		  }
		});*/    
/*};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/es_LA/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));*/
  
  			
</script>  

</body>
</html>

























