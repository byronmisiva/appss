<style>
#shadow{
	position: absolute; 
	top: 0px; left: 0px; 
	width: 810px; height: 800px; 
	z-index: 1; 
	background-image: url('<?=$img_path?>background.jpg?frefresh=987654');
	background-repeat: no-repeat;
}

#instrucciones{
	background-image: url('<?=$img_path?>popup_instrucciones.png?fb=refresh=13215122');
    background-repeat: no-repeat;
    height: 363px;
    left: 140px;
    position: absolute;
    top: 170px;
    width: 549px;
    z-index: 1;
}

.fondo{
	position: absolute; 
	width: 810px; height: 800px; 
	background-image: url('<?=$img_path?>background2.jpg?fb=refresh=1321564646');
	left:0;top:0; 
	background-repeat: no-repeat;
}

#score{
	 background: none repeat scroll 0 0 #FFFFFF;
    border-radius: 5px;
    color: #0F4396;    
    font-size: 18px;
    height: 35px;
    left: 211px;
    line-height: 35px;
    position: absolute;
    text-align: center;
    text-shadow: 0.1em 0.1em 0.2em #000000;
    top: 100px;
    width: 45px;
    font-family: Asap;
	font-weight:400;
	font-style: normal; 
}

#titulo{
	background: none repeat scroll 0 0 #FFFFFF;
    border-radius: 5px;
    color: #0F4396;
    font-family: Helvetica;
    font-size: 18px;
    height: 35px;
    left: 111px;
    line-height: 35px;
    position: absolute;
    text-align: center;    
    top: 100px;
    width: 90px;
}

#star_game{
	background-image: url('<?=$img_path?>bot_empezarjugar_off.png?frefresh=321321');
    background-repeat: no-repeat;
    cursor: pointer;
    height: 60px;
    left: 350px;
    position: absolute;
    top: 290px;
    width: 170px;
}
#phone_feature{
	position: absolute; 
	width: 226px; height: 100px; 
	left: 52px; top: 290px;
	overflow: hidden;	
}

#fondo-cuadro{
	background-image: url('<?=$img_path?>cuadro.png?frefresh=3213131');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    cursor: pointer;
    height: 498px;
    left: 250px;
    position: absolute;
    top: 140px;
    width: 510px;
}

#fondo-intro{
	background-color: #2B8BCE;
	background-image: url('<?=$img_path?>fondo-intro.jpg?frefresh=7878783131');
    background-repeat: no-repeat;
    left: 0;top: 0;
    position: absolute;
    width: 810px;
    height: 800px;    
}

.btn-jugar{
	background-image: url('<?=$img_path?>btn-juga.png?frefresh=321321');
   
    
    background-repeat: no-repeat;
    cursor: pointer;
    height: 135px;
    left: 150px;
    position: absolute;
    top: 420px;
    width: 139px;
}

.btn-intruccion{
	background-image: url('<?=$img_path?>btn-tuto.png?frefresh=321321');
    background-repeat: no-repeat;
    cursor: pointer;
    height: 60px;
    left: 500px;
    position: absolute;
    top: 418px;
    width: 139px;

}

</style>

<div class="fondo">
	<div id="fondo-intro">
		<div class="btn-jugar"></div>
		<div class="btn-intruccion"></div>
	
	</div>
	<div id="fondo-cuadro" style="display:none;"></div>
	<div id="shadow" style="display:none;" ></div>	
	<div id="instrucciones" style="display:none;">
		<div style="position: absolute; top: 55px; left: 60px; width: 465px; height: 300px; color: white; font-family: Michroma; text-align: justify; font-size: 12px;">				
		</div>	
		<div id="star_game" ></div>	
	</div>

	<div id ="phone_feature" style="display:none;"></div>
	<div id ="titulo" style="display:none;">puntaje</div>
	<div id ="score" style="display:none;"></div>	
	<script src='<?=base_url()?>js/samsung_plumbers/piece.js?fb_refresh=<?rand(0, 1000)?>'></script>
	<script src='<?=base_url()?>js/samsung_plumbers/sprite.js?fb_refresh=<?rand(0, 1000)?>'></script>
	<script src='<?=base_url()?>js/samsung_plumbers/game.js?fb_refresh=<?rand(0, 1000)?>'></script>	
	<script type="text/javascript">
		var checkjs = function(){
			console.debug (alert("sfsd")); 
		}; 
		Plumbers( JSON.parse( '<?=$game?>' ) );						
	</script>
		      		
</div> 