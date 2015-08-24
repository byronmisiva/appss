<!DOCTYPE html>
<html>
<head>
	<title>Trineo de Santa :: Samsung</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
	<link href="<?=base_url('css/samsung_flappy_santa/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/samsung_flappy_santa/fuente/stylesheet.css')?>" rel="stylesheet">
	<link href="<?=base_url('css/samsung_flappy_santa/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<script src="<?=base_url()?>js/samsung_flappy_santa/app.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
	
	 
	<style type="text/css">	
			body{
				background-color:#ffffff;
				color:#024F9F;
				font-size: 24px;
			}			
		</style>
		<script>
			var totalPuntos=0;
			var accion="<?php echo base_url()?>";
			var controladorApp="samsung_futbol_time";
		</script>		
		
	</script>
</head>
<body>
	<div id="fb-root"></div>
	<div id="content" class="container" style="overflow: hidden;position:absolute;left:0;top:0;height: 750px;width:810px;"></div>
	<div id="condiciones">
		 <strong style="color:#000;;">
		 <?=$condiciones;?>
		 </strong><br/>
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="<?=base_url('js/general/library_facebook.js?refresh=19898797915')?>"></script>
	<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>
	<script src="<?=base_url()?>js/samsung_flappy_santa/animateSprite.min.js" type="text/javascript" charset="utf-8"></script>
	<script  type = "text/javascript"  src = "<?=base_url()?>js/samsung_flappy_santa/phaser2.min.js" ></script>	
	<script type="text/javascript" charset="utf-8">
		window.fbAsyncInit = function() {	
			FB.init({
				appId : '<?=$appId?>',
				status : true,
				cookie : false,
				xfbml : false,
				oauth : true
			});
			FB.Canvas.setSize({ width: 810, height: 850 });	

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
					data     				 : '<?=$data?>'			
				});					
				tabLibrary = LibraryFacebook.newInstance();
			});
		};

		(function() {
			var e = document.createElement('script');
			e.async = true;
			e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
			document.getElementById('fb-root').appendChild(e);
		}());		
	</script>
</body>
</html>


