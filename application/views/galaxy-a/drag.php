<!DOCTYPE html>
<html>
<head>
  <title>jQuery-cropbox</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1"/>  
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.min.css">
  <style>
  #drag-me {
	  width: 343px;
	  height: 343px;
	  margin: 0;	  
	  color: white;
	  border-radius: 0;
	  padding: 0%;	  
	  -webkit-transform: translate(0px, 0px);
	          transform: translate(0px, 0px);
	}
	
	#drag-me::before {
	  content: "#" attr(id);
	  color: #000;
	}
  .contenedor{
	  width: 343px;
	  height: 343px;
	  border:1px solid blue;
  	  position: relative;
  	  margin: 10px auto;
  	  background-color: #000;
  }
  .controles{
  margin: 20px auto;
  width: 300px;
  height:45px;
  }
  
  .mas-zoom{
  	float: none;
  	width: 50px;
  	height: 35px;
  	text-align: center;
  }
  
  .menos-zoom{
  	float: none;
  	width: 50px;
  	height: 35px;
  	text-align: center;
  }
  
  </style>
    
       
  <script type="text/javascript">
  	var urlImagenCreada;    
  </script>
</head>
<body>
	<div class="contenedor">
		<div id="drag-me" class="draggable">
		  <img src="<?php echo base_url()?>galaxy-a/objetos/1.png" style="width:100%;"/>
		</div>
	</div>
	<div class="controles">
		<div class="mas-zoom">mas</div>
		<div class="menos-zoom">menos</div>
	</div>
	<div class="posicion">
		<div id="xPos"></div>
		<div id="yPos"></div>
		<div id="ancho"></div>	
	</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>		
<script type="text/javascript" src="<?php echo base_url()?>js/galaxy-a/interact-1.2.3.min.js"></script>

<script type="text/javascript" >
$(document).ready(function(){
	$(".mas-zoom").click(function(){
		var width= parseInt($("#drag-me").css("width"));
			if(width < 500){			
				var resultado=width+(width*(0.1));		
				$("#drag-me").css("width",resultado+"px");
				$("#drag-me").css("height",resultado+"px");
				$("#ancho").html( parseInt($("#drag-me").css("width")) );
			}		
		});

	$(".menos-zoom").click(function(){
		var width= parseInt($("#drag-me").css("width"));
		var x= parseInt($("#drag-me").css("width"));
		if(width > 100){			
			var resultado=width-(width*(0.1));		
			$("#drag-me").css("width",resultado+"px");
			$("#drag-me").css("height",resultado+"px");
			$("#ancho").html( parseInt($("#drag-me").css("width")) );
		}				
		});
	
	//target elements with the "draggable" class
	interact('.draggable')
	.draggable({
	 // enable inertial throwing
	 inertia: true,
	 // keep the element within the area of it's parent
	 restrict: {
	   restriction: "parent",
	   endOnly: true,
	   elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
	 },
	
	 // call this function on every dragmove event
	 onmove: function (event) {
	   var target = event.target,
	       // keep the dragged position in the data-x/data-y attributes
	       x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
	       y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;
	   $("#xPos").html(x);
	   $("#yPos").html(y);
	
	   // translate the element
	   target.style.webkitTransform =
	   target.style.transform =
	     'translate(' + x + 'px, ' + y + 'px)';
	
	   // update the posiion attributes
	   target.setAttribute('data-x', x);
	   target.setAttribute('data-y', y);
	   
	 },
	 // call this function on every dragend event
	 onend: function (event) {   
	 }
	});




		

});
</script>  
</body>

