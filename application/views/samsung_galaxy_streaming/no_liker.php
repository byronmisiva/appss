<script type="text/javascript">
function Reloj() {
	var tiempo = new Date();
	var dia = tiempo.getDate();
	var hora = tiempo.getHours();
	var minuto = tiempo.getMinutes();
	var segundo = tiempo.getSeconds();
	
	if(dia == 5){	
		if (hora >= 21)
			$(".boton-ingreso").show();
		
	}
}
</script>
 <div class="contenedor-video-desactivo " style="display:block; ">
 <div class="boton-ingreso"></div>
 		
</div> 
<div class="contenedor-video-activo" style="display:none;">	
	<div class="texto">		
	</div>
	<div class="video ">
			<object width="100%" height="100%" id="_fms" name="_fms" data="//player.netromedia.com/flowplayer.commercial-3.2.18.swf" type="application/x-shockwave-flash">
	             <param name="movie" value="//player.netromedia.com/flowplayer.commercial-3.2.18.swf" />
	             <param name="allowfullscreen" value="true" />
	             <param name="allowscriptaccess" value="always" />
	             <param name="flashvars" value='config={"key":"#@e334c866df3eabb2176","clip":{"autoPlay":true,"live":true,"scaling":"","url":"ecuavisalive","baseUrl":"rtmp://ecuavisa.netromedia.net/ecuavisalive","provider":"netromedia","metaData":false},"canvas":{"background":"#000000","backgroundGradient":"none"},"plugins":{"content":{"url":"flowplayer.content-3.2.8.swf","bottom":25,"left":0,"height":40,"width":400,"backgroundColor":"transparent","backgroundGradient":"none","border":0,"textDecoration":"outline","style":{"body":{"fontSize":16,"fontFamily":"Arial","textAlign":"center","color":"#ffffff"}}},"controls":{"autoHide":true,"fullscreen":true,"src":"flowplayer.controls-3.2.16.swf"},"netromedia":{"url":"flowplayer.rtmp-3.2.3.swf","netConnectionUrl":"rtmp://ecuavisa.netromedia.net/ecuavisalive"}},"playlist":[{"autoPlay":true,"live":true,"scaling":"","url":"rtmp://ecuavisa.netromedia.net/ecuavisalive/ecuavisalive","baseUrl":"rtmp://ecuavisa.netromedia.net/ecuavisalive","provider":"netromedia","metaData":false}]}' />
             </object>
	</div>
</div>	
<script type="text/javascript">
$(document).ready(function(){
	$(".boton-ingreso").click(function(){		
		$(".contenedor-video-desactivo").fadeOut(function(){
			$(".contenedor-video-activo").fadeIn();
		});		
	});	
});

	Reloj();
</script>
